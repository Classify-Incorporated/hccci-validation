<?php

namespace App\Services;
use App\Models\Department;
use App\Models\Document;

class DocumentService
{
    
    public static function generate_document_series($department) 
    {
        $revision_number = -1;

        do {

            $count_document_produce = Document::where('department', $department)->count();
            $get_department_code = Department::where('department_name', $department)->select('department_code')->first();

            // Generate Document Series 
            $control_number = sprintf("%03d", $count_document_produce + 1);
            $department_code = $get_department_code->department_code;
            $revision_number++;
            $series_number = date('Y');

            $document_series = $control_number . $department_code . $revision_number .$series_number;

        } while (self::validate_document_series($document_series));

        return $document_series;
    }

    public static function validate_document_series($document_series)
    {
        $data = Document::where('document_series_no', $document_series)->first();

        return ($data) ? true : false;
    }
}
