<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApiDocumentDetails extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "department_code"       => 'required',
            "series_number"         => 'required',
            "number_pages"          => 'required',
            "number_copies"         => 'required',
            "document_type"         => 'required',
            "document_dated"        => 'required',
            "prepared_by"           => 'required',
            "approved_by"           => 'required',
            "to"                    => 'required',
            "from"                  => 'required',
            "department"            => 'required',
            "revision_number"       => 'required',
        ];
    }
}
