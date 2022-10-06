<?php

namespace App\Http\Livewire\Usermanagement;

use App\Models\User;
use Livewire\Component;

class DisableAccount extends Component
{
    public $data;

    public function mount(User $data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('livewire.usermanagement.disable-account')->layout('layouts.app');
    }

    public function proceed()
    {
        $this->data->update([
            'status'    => ($this->data->status) ? false : true
        ]);

        activity()
        ->causedBy(auth()->user())
        ->event('Account Disabled')
        ->withProperties([
            'http_method'            => 'POST',
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log($this->data->name.' account has been disabled.');

        return redirect()->route('user.show', $this->data);
    }

    public function cancel()
    {
        activity()
        ->causedBy(auth()->user())
        ->event('Attempt Disable Account')
        ->withProperties([
            'http_method'            => 'POST',
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log($this->data->name.' account disable failed.');

        return redirect()->route('user.show', $this->data);
    }
}
