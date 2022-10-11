<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Document;
use App\Models\DocumentType;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function create()
    {
        $department_lists = Department::select('department_name')->get();
        $document_types = DocumentType::select('name')->get();

        return view('document.create', compact('department_lists', 'document_types'));
    }

    public function store(Request $request)
    {

        $count_document_produce = Document::where('department', $request->department)->count();
        $get_department_code = Department::where('department_name', $request->department)->select('department_code')->first();

        // Generate Document Series 
        $control_number = $count_document_produce+1;
        $department_code = $get_department_code->department_code;
        $revision_number = 0;
        $series_number = date('Y');
        
        $document_series_no = $control_number . $department_code . $revision_number .$series_number;

        // Check if document series no produce is existing or not
        dd($document_series_no);

    }
}
