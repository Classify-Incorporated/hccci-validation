<?php

namespace App\Observers;

use App\Models\Department;

class DepartmentObserver
{
    public $afterCommit = true;
    
    public function created(Department $department)
    {
        activity()
        ->performedOn($department)
        ->causedBy(auth()->user())
        ->event('Created')
        ->withProperties([
            'http_method'            => 'POST',
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log('Department ' . $department->name .' has been created successfully');
    }

    public function deleted(Department $department)
    {
        activity()
        ->performedOn($department)
        ->causedBy(auth()->user())
        ->event('Deleted')
        ->withProperties([
            'http_method'            => 'POST',
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log('Department ' . $department->name .' has been deleted');
    }
}
