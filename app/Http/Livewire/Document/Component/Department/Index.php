<?php

namespace App\Http\Livewire\Document\Component\Department;

use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $department_name;
    public $department_code;
    public $search = '';

    public $model = "App\Models\Department";

    public function render()
    {
        $departments = $this->model::where('department_name', 'ilike', '%'.$this->search.'%')->paginate(8);

        return view('livewire.document.component.department.index', [
            'title'         => 'Departments',
            'departments'   =>  $departments
        ])->layout('layouts.app');
    }

    public function rules()
    {
        return [
            'department_name'          => 'required',
            'department_code'          => 'required',
        ];
    }

    public function delete($id)
    {
        $this->model::find($id)->delete();
    }

    public function save()
    {
        $this->validate();
        $this->model::create($this->validate());
        $this->reset(); // Reset all properties
    }
}
