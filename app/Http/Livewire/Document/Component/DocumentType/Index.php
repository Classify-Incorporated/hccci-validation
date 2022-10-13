<?php

namespace App\Http\Livewire\Document\Component\DocumentType;

use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $name;
    public $search = '';

    public $model = "App\Models\DocumentType";

    protected $listeners = ['refreshComponent' => '$refresh'];

    public function render()
    {
        $document = $this->model::where('name', 'ilike', '%'.$this->search.'%')->paginate(8);

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
        $this->emit('refreshComponent');
    }
}
