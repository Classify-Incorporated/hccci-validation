<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Document;
class View extends Component
{
    public function render()
    {
        $data = Document::select('*')->orderBy('id')->paginate(10);
        // dd($data);
        return view('livewire.dashboard.view',compact('data'));
    }
}
