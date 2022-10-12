<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Document;
use Livewire\Component;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class Table extends Component
{
    public $search = '';

    public function render()
    {
        $document = Document::where('document_series_no', 'ilike', '%'.$this->search.'%')->paginate(8);

        return view('livewire.dashboard.table',[
            'title'         => 'Documents',
            'documents'     =>  $document
        ])->layout('layouts.app');
    }

    public function generate_qr(Document $data)
    {
        return response()->download($data->getFirstMedia('qrcode')->getPath());
    }
}
