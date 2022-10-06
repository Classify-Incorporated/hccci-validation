<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class ChangePassword extends Component
{

    public $old_password, $new_password, $confirm_password;

    public function render()
    {
        return view('livewire.profile.change-password');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function rules()
    {
        return [
            'old_password'          => 'required',
            'new_password'          => ['required', Password::defaults()],
            'confirm_password'      => ['required', 'same:new_password'],
        ];
    }

    public function update()
    {
        $this->validate();

        if(!Hash::check($this->old_password, auth()->user()->password)) {
            return $this->addError('old_password', 'Invalid password');
        }
        
        if(Hash::check($this->new_password, auth()->user()->password)) {
            return $this->addError('new_password', 'Your new password cannot be same as old password');
        }

        auth()->user()->update([
            'password'                  => Hash::make($this->new_password),
            'last_password_change_at'   => now()
        ]);

        $this->reset(); // Reset all properties

        auth()->logout();

        session()->flash('success','You must log in to continue.');

        return redirect()->route('login');
    }
}
