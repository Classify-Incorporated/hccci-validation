<?php

namespace App\Http\Livewire\Usermanagement;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Activitylog\Models\Activity as ModelsActivity;

class Activity extends Component
{
    use WithPagination;

    public $data;

    public $model = "Spatie\Activitylog\Models\Activity";

    public function mount(User $data)
    {
        $this->data = $data;
    }

    public function render()
    {
        $log = $this->model::where('causer_id', $this->data->id)->orderBy('id', 'desc')->paginate(10);

        return view('livewire.usermanagement.activity', [
            'log' => $log
        ])->layout('layouts.app');
    }
}
