<?php

namespace App\Http\Livewire\Verify\Employee;

use App\Models\Employee;
use Livewire\Component;

class Index extends Component
{
    public $employee_id, $document_series_no;

    protected $listeners = ['getQRResult'];

    public function mount($data) 
    {   
        $this->document_series_no = $data;
    }

    public function getQRResult($data)
    {
        // sleep(10);

        $employee = Employee::where('employee_id', $data)->first();

        if(!$employee) {
            session()->flash('verify_failed', 'Verification Failed');
            return redirect()->back();
        }
        
        return redirect()->route('approval.document.create', [$employee, $this->document_series_no]);
    }

    public function render()
    {
        return view('livewire.verify.employee.index')->layout('layouts.tabler.guest', [
            "bgwhite"   => 'bg-white'
        ]);
    }
}
