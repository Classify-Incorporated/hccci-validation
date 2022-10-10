<?php

namespace App\Http\Livewire\Document;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\DocumentType;
use \App\Http\Requests\DocumentTypeRequest;

class View extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $department_name;
    public function render()
    {
        $document = DocumentType::select('*')
        ->orderBy('id')->paginate(10);
        return view('livewire.document.view',compact('document'));
    }

    public function submit(){
        dd('test');
        // DocumentType::create($request->validated());
    }
}
