<?php

namespace App\Services;

use App\Models\User;
use App\Notifications\FormCreated;

class NotificationService
{

    public static function notifyAdministrator($link, $form_document_series, $message) 
    {
        $user = 'System';

        if(auth()->user()) {
            $user = auth()->user()->fullName();
        }
        
        $detail = [
            'user'                      => $user,
            'message'                   => $message,
            'link'                      => $link,
            'form_document_series'      => $form_document_series,
        ];

        $users = User::whereHas("roles", function($q){ $q->where("name", "administrator"); })->get();

        foreach($users as $user)
        {
            $user->notify(new FormCreated($detail));
        }

        return;
    }
}