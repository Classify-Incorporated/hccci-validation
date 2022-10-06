<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class AppNotifications extends Component
{
    public $notifications;

    public function getListeners()
    {
        return $this->listeners + [
            'updateNotification'  => 'get_notification'
        ];
    }

    public function mount()
    {
        $this->get_notification();
    }

    public function render()
    {
        return view('livewire.app-notifications');
    }

    public function get_notification()
    {
        $this->notifications = auth()->user()->unreadNotifications->take(4);
    }

    public function mark_read($id)
    {
        auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
        $this->emit('updateNotification');
    }

    public function mark_all_as_read()
    {
        auth()->user()->unreadNotifications->markAsRead();
        $this->emit('updateNotification');
    }
}
