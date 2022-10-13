<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Document;
use Livewire\Component;

class Show extends Component
{
    public $document;

    public function mount(Document $data)
    {
        $this->document = $data;
    }

    public function render()
    {
        return view('document.show')->layout('layouts.app');
    }

    public function deactivate(Document $id) 
    {
        $this->document->deactivate();
        $this->document->refresh();
    }
}
