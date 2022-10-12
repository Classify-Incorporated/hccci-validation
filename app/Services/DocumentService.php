<?php

namespace App\Services;
use App\Models\Department;
use App\Models\Document;

class DocumentService
{
    
    public static function generate_document_series($department, $series_no, $revision_no) 
    {

        $count_document_produce = $series_no;
        $get_department_code = Department::where('department_name', $department)->select('department_code')->first();

        // Generate Document Series 
        $control_number = sprintf("%03d", $count_document_produce + 1);
        $department_code = $get_department_code->department_code;
        $series_number = date('Y');

        $document_series = $control_number . $department_code . $revision_no .$series_number;

        return $document_series;
    }

    // Old Method
    // public static function generate_document_series($department, $series_no, $revision_no) 
    // {
    //     $revision_number = -1;

    //     do {

    //         $count_document_produce = $series_no
    //         $get_department_code = Department::where('department_name', $department)->select('department_code')->first();

    //         // Generate Document Series 
    //         $control_number = sprintf("%03d", $count_document_produce + 1);
    //         $department_code = $get_department_code->department_code;
    //         $revision_number++;
    //         $series_number = date('Y');

    //         $document_series = $control_number . $department_code . $revision_number .$series_number;

    //     } while (self::validate_document_series($document_series));

    //     return $document_series;
    // }

    // public static function validate_document_series($document_series)
    // {
    //     $data = Document::where('document_series_no', $document_series)->first();

    //     return ($data) ? true : false;
    // }
}
