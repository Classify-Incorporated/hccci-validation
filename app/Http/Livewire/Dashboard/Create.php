<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use App\Models\DocumentType;

class Create extends Component
{
    public function render()
    {  
        try {

            $document = DocumentType::all();
            $response = Http::get('https://api.classify.com.ph/api/departments',  [
                // 'debug' => TRUE, // remove after test
                'timeout' => 100,
                'decode_content' => false,
                'headers'=>[
                    'Content-Type' => 'application/json'
                ]
            ]);
            $bodyResponse = $response->getBody();
            $result = $bodyResponse->getContents();
            $result = json_decode($result);

            return view('livewire.dashboard.create',compact('result','document'));           
          
        } catch (\Exception $e) {
          dd($e);            
        }
    }
}
