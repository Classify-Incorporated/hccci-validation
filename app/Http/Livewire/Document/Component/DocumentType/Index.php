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

    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $document = $this->model::where('name', 'ilike', '%'.$this->search.'%')
                                ->paginate(10);

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

        $this->dispatchBrowserEvent('toastr', [
            'type' => 'info',  'message' => "Record Deleted."
        ]);
    }

    public function save()
    {
        $this->validate();
        $this->model::create($this->validate());
        $this->reset(); // Reset all properties

        // session()->flash('success', 'Successfully added.');
        $this->dispatchBrowserEvent('toastr', [
            'type' => 'success',  'message' => 'Successfully added.'
        ]);
    }
}
