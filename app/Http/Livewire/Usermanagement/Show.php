<?php

namespace App\Http\Livewire\Usermanagement;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Illuminate\Support\Str;

class Show extends Component
{
    public $data;

    public function mount(User $data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('livewire.usermanagement.show')->layout('layouts.app');
    }

    public function reset_password()
    {
        $generated_password = (app()->isProduction()) ? Str::upper(Str::random(8)) : 'bxtr1605';

        $this->data->update([
            'password'  => Hash::make($generated_password)
        ]);

        return session()->flash('new_password', $this->data->fullName() .' password has been reset. New Password: ' . $generated_password);
    }
}
