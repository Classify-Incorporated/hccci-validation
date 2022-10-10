<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Document;
use Livewire\WithPagination;
class View extends Component
{
    use WithPagination;
    public $search;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $search = '%'.$this->search.'%';
        $data = Document::select('*')->where([
            ['id','like',$search]
        ])->orderBy('id')->paginate(10);
        return view('livewire.dashboard.view',compact('data'));
    }
}
