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

        return view('document.create', compact('department_lists', 'document_types'));
    }

    public function store(Request $request)
    {
        $document = Document::create([
            'document_series_no'    => DocumentService::generate_document_series($request->department),
            'department'            => $request->department,
            'document_type'         => $request->document_type,
            'document_dated'        => $request->date,
            'to'                    => $request->to_person,
            'from'                  => $request->from_person,
            'prepared_by'           => $request->prepared_by,
            'approved_by'           => $request->approved_by
        ]);

        // Save to public folder
        // QrCode::format('png')->merge('\public\asset\images\icon.png')->size(250)->generate(config('app.url').'/verify/key='.$document->document_series_no, '../public/'.$document->document_series_no.'.png');
        QrCode::format('png')->size(250)->generate(config('app.url').'/verify/key='.$document->document_series_no, '../public/'.$document->document_series_no.'.png');

        // Move the save qr code image to storage disk 
        $document->addMedia($document->document_series_no.'.png', 'local')->toMediaCollection('qrcode');

        return redirect()->route('dashboard');
    }
}
