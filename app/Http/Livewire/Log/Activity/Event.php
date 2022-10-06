<?php

namespace App\Http\Livewire\Log\Activity;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Spatie\Activitylog\Models\Activity;

class Event extends Component
{
    public function render()
    {
        $data = Activity::select('event', DB::raw('count(*) as total'))
                            ->groupBy('event')
                            ->orderBy('total', 'desc')
                            ->get();
        return view('livewire.log.activity.event',[
            'data'  => $data
        ]);
    }
}
