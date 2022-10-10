<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Document;
use Livewire\WithPagination;
class View extends Component
{
    use WithPagination;
    public $search;
    public function render()
    {
        $search = '%'.$this->search.'%';
        $data = Document::select('*')->where([
            ['document_type','like',$search]
        ])->orderBy('id')->paginate(6);
        return view('livewire.dashboard.view',compact('data'));
    }
}
