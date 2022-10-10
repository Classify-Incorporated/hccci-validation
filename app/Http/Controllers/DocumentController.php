<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\DocumentRequest;
use App\Models\Document;
use Carbon\Carbon;
use DB;

class DocumentController extends Controller
{
    public function store(DocumentRequest $request){

        $control        = $request->control_number;
        $revision       = $request->revision_number;
        $year           = $request->document_dated;
        $formattedYear  = $year = date('Y', strtotime($year));
        $department     = $request->department;
        $explode        = explode(' ',trim($department));
        $acronym = "";
        foreach ($explode as $w) {
            $acronym .= strtoupper($w[0]);
        }
        $code = "{$control}{$acronym}{$revision}{$formattedYear}";
        // Document::create($request->validated());
        $request->validated();
        DB::transaction(function () use ($request,$code){

            $this->storeData = Document::create([
                'document_series_no'        => $code,
                'control_number'            => $request->control_number,
                'department_code'           => $request->department_code,
                'revision_number'           => $request->revision_number,
                'series_number'             => $request->series_number,
                'number_pages'              => $request->number_pages,
                'number_copies'             => $request->number_copies,
                'document_type'             => $request->document_type,
                'document_dated'            => $request->document_dated,
                'prepared_by'               => $request->prepared_by,
                'approved_by'               => $request->approved_by,
                'to'                        => $request->to,
                'from'                      => $request->from,
                'department'                => $request->department,
                'status'                    => $request->status,
            ]);
        }, 1);
        return to_route('dashboard')->with('message','Data added Successfully');
    }
}
