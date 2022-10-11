<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Document;
use Livewire\Component;

class Table extends Component
{
    public $search = '';

    public function render()
    {
        $document = Document::paginate(8);

        return view('livewire.dashboard.table',[
            'title'         => 'Documents',
            'documents'     =>  $document
        ])->layout('layouts.app');
    }
}
