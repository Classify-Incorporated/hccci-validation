<?php

namespace App\Http\Livewire\Document;

use Livewire\Component;
use App\Models\DocumentType;

class View extends Component
{
    public function render()
    {
        $document = DocumentType::select('*')
        ->orderBy('id')->paginate(10);
        return view('livewire.document.view',compact('document'));
    }
}
