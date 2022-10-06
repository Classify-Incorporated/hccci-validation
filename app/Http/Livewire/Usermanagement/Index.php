<?php

namespace App\Http\Livewire\Usermanagement;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    use WithPagination;

    public $search = '';
    protected $queryString = ['search'];

    public function render()
    {
        $users = User::where('first_name', 'like', '%'.$this->search.'%')->where('last_name', 'like', '%'.$this->search.'%')->whereKeyNot(auth()->user()->id)->paginate(8);

        return view('livewire.usermanagement.index', [
            'users' => $users
        ])->layout('layouts.app');
    }
}
