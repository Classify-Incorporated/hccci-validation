<?php

namespace App\Services;

use App\Models\Department;
use App\Models\Document;

class DocumentService
{
    /**
     * Generates series: [3-digit-seq][DeptCode][2-digit-rev][Year]
     */
    public static function generate_document_series($department_name, $revision_no) 
    {
        $department = Department::where('department_name', $department_name)->first();
        $dept_code = $department ? $department->department_code : 'UNK';

        // Get the latest document of this year to calculate the next sequence
        $latest = Document::whereYear('created_at', date('Y'))->orderBy('id', 'desc')->first();
        $nextSequence = $latest ? ((int)substr($latest->document_series_no, 0, 3) + 1) : 1;

        $control_number = sprintf("%03d", $nextSequence);
        $revision = sprintf("%02d", (int)$revision_no);
        $year = date('Y');

        return $control_number . $dept_code . $revision . $year;
    }
}