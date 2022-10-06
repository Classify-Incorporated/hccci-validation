<?php

namespace App\Http\Livewire\Log\Activity;

use Livewire\Component;
use Spatie\Activitylog\Models\Activity;

class Show extends Component
{
    public $data;

    public function mount(Activity $activity)
    {
        $this->data = $activity;
    }

    public function render()
    {
        return view('livewire.log.activity.show', [
            'title' => 'Log Details'
        ])->layout('layouts.app');
    }
}
