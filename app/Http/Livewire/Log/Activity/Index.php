<?php

namespace App\Http\Livewire\Log\Activity;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Spatie\Activitylog\Models\Activity;

class Index extends Component
{
    public $search = '';
    public $filter_event = '';

    protected $queryString = ['search'];

    public function render()
    {
        if(DB::connection()->getDriverName() == 'pgsql'){
            $data = Activity::where('event', 'ilike', '%'.$this->search.'%')->orderBy('id', 'desc')->paginate(15);
        } else {
            $data = Activity::where('event', 'like', '%'.$this->search.'%')->orderBy('id', 'desc')->paginate(15);
        }

        return view('livewire.log.activity.index', [
            'data' => $data
        ]);
    }
}
