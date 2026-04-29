<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Document;
use App\Models\DocumentType;
use App\Services\DocumentService;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class DocumentController extends Controller
{
    public function create()
    {
        $department_lists = cache()->remember('department_list', 60*60*24, function() {
            return Department::select('department_name')->get();
        });

        $document_types = cache()->remember('document_types_list', 60*60*24, function() {
            return DocumentType::select('name')->get();
        });

        // --- NEW LOGIC START ---
        // Calculate the next sequence number for the view
        $latestDoc = Document::whereYear('created_at', date('Y'))->orderBy('id', 'desc')->first();
        $nextSequence = $latestDoc ? ((int)substr($latestDoc->document_series_no, 0, 3) + 1) : 1;
        $nextSequenceFormatted = sprintf("%03d", $nextSequence);
        // --- NEW LOGIC END ---

        return view('document.create', compact('department_lists', 'document_types', 'nextSequenceFormatted'));
    }

    public function store(Request $request)
    {
        // 1. Validation (Highly Recommended)
        $request->validate([
            'department'  => 'required',
            'revision_no' => 'required|numeric',
        ]);

        // 2. Generate series using the updated Service (only pass 2 arguments)
        $seriesNo = DocumentService::generate_document_series($request->department, $request->revision_no);

        // 3. Create the document
        $document = Document::create([
            'user_id'               => auth()->id(),
            'document_series_no'    => $seriesNo, // Use the generated series
            'department'            => $request->department,
            'document_type'         => $request->document_type,
            'document_dated'        => $request->month . ' ' . $request->day . ' ' . $request->year,
            'to'                    => $request->to,
            'from'                  => $request->from,
            'prepared_by'           => $request->prepared_by,
            'approved_by'           => $request->approved_by
        ]);

        // 4. FIX: Activity Log (This prevents the 'Array offset on null' error)
        activity()
            ->performedOn($document)
            ->causedBy(auth()->user()) 
            ->log("Document {$seriesNo} has been created successfully");

        // 5. Generate QR
        QrCode::format('png')->size(250)->generate(config('app.url').'/verify/key='.$seriesNo, '../public/'.$seriesNo.'.png');

        // 6. Media collection
        $document->addMedia($seriesNo.'.png', 'local')->toMediaCollection('qrcode');

        return redirect()->route('dashboard')->with('success', 'Document created successfully!');
    }
}