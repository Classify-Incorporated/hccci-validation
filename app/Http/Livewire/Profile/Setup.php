<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Livewire\Component;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class Setup extends Component
{
    public $password;

    /**
     * use rules method rather than properties to read out Password object
     */

    public function rules()
    {
        return [
            'password'         => ['required', Password::defaults()],
        ];
    }

    public function render()
    {
        return view('livewire.profile.setup')->layout('layouts.tabler.guest');
    }

    public function resetInputFields()
    {
        $this->password = '';
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();

        if(Hash::check($this->password, auth()->user()->password)) {
            return $this->addError('password', 'Your new password cannot be same as old password');
        }

        auth()->user()->update([
            'password'                  => Hash::make($this->password),
            'last_password_change_at'   => now()
        ]);

        return redirect()->route('dashboard');
    }
    
    public function skip_setup()
    {
        activity()->withoutLogs(function () {
            $user = auth()->user()->increment('setup_skip');
            return redirect('dashboard');
        });
    }
}
