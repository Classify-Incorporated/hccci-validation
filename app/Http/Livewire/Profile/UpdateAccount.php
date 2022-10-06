<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Validation\Rule;
use Livewire\Component;

class UpdateAccount extends Component
{

    public $first_name, $last_name, $email;
    public $isDisable = true;

    public function mount()
    {
        $this->first_name = auth()->user()->first_name;
        $this->last_name = auth()->user()->last_name;
        $this->email = auth()->user()->email;
    }

    public function render()
    {
        return view('livewire.profile.update-account');
    }

    public function updated($propertyName)
    {
        $this->isDisable = false;
        $this->validateOnly($propertyName);
    }

    public function rules()
    {
        return [
            'first_name'    => 'required',
            'last_name'     => 'required',
            'email'         => ['required', 'string', 'email', 'max:50', Rule::unique('users')->ignore(auth()->user()->id)],
        ];
    }

    public function save()
    {
        $this->validate();

        auth()->user()->update([
            'first_name'    => $this->first_name,
            'last_name'     => $this->last_name,
            'email'         => $this->email
        ]);

        $this->isDisable = true;

        session()->flash('success', 'Profile updated successfully!');
    }
}
