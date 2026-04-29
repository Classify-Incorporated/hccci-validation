<?php

namespace App\Services;

use App\Models\Document;

class DocumentService
{
    public static function generate_document_series($department_name, $manual_series_no, $revision_no) 
    {
        // 1. Get Department Code
        $department = \App\Models\Department::where('department_name', $department_name)->first();
        $dept_code = $department ? $department->department_code : 'UNK';

        // 2. Format inputs
        $sequence = sprintf("%03d", (int)$manual_series_no);
        $revision = sprintf("%02d", (int)$revision_no);
        $year = date('Y');

        $document_series = $sequence . $dept_code . $revision . $year;

        // 3. Validation: Check if this specific series number exists for THIS department
        $exists = Document::where('document_series_no', $document_series)->exists();

        if ($exists) {
            throw new \Exception("The series number '{$manual_series_no}' is already taken for the {$department_name} department.");
        }

        return $document_series;
    }
}