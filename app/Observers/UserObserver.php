<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        // activity()
        // ->performedOn($user)
        // ->causedBy(auth()->user())
        // ->event('Created')
        // ->withProperties([
        //     'http_method'            => 'POST',
        //     'Check_url'              => url()->current(),
        //     'User Agent'             => $_SERVER['HTTP_USER_AGENT']
        //     ])
        // ->log('User ' . $user->fullName() .' has been created successfully');
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        activity()
        ->performedOn($user)
        ->causedBy(auth()->user())
        ->event('Updated')
        ->withProperties([
            'http_method'            => 'POST',
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log('User ' . $user->fullName() .' has been updated successfully');
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        activity()
        ->performedOn($user)
        ->causedBy(auth()->user())
        ->event('Created')
        ->withProperties([
            'http_method'            => 'POST',
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log('User ' . $user->fullName() .' has been deleted');
        
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        activity()
        ->performedOn($user)
        ->causedBy(auth()->user())
        ->event('Restored')
        ->withProperties([
            'http_method'            => 'GET',
            'document_series_number' => $user->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
            ->log('User ' . $user->fullName() .' successfuly restored');
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        activity()
        ->performedOn($user)
        ->causedBy(auth()->user())
        ->event('Permanent Deleted')
        ->withProperties([
            'http_method'            => 'POST',
            'document_series_number' => $user->document_series_no,
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log('User ' . $user->fullName() .' permanently deleted');
    }
}
