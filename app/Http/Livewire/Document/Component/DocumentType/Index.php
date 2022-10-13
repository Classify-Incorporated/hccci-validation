<?php

namespace App\Http\Livewire\Document\Component\DocumentType;

use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $name;
    public $search = '';

    public $model = "App\Models\DocumentType";

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $document = $this->model::where('name', 'ilike', '%'.$this->search.'%')->get();

        return view('livewire.document.component.document-type.index', [
            'title'         => 'Document Types',
            'documents'     =>  $document
        ])->layout('layouts.app');
    }

    public function rules()
    {
        return [
            'name'          => 'required',
        ];
    }

    public function delete($id)
    {
        $this->model::find($id)->delete();
    }

    public function save()
    {
        $this->validate();
        $this->model::create($this->validate());
        $this->reset(); // Reset all properties

        session()->flash('success', 'Successfully added.');
    }
}
