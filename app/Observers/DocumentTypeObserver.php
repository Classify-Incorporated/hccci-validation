<?php

namespace App\Observers;

use App\Models\DocumentType;

class DocumentTypeObserver
{
    public $afterCommit = true;
    
    public function created(DocumentType $documentType)
    {
        activity()
        ->performedOn($documentType)
        ->causedBy(auth()->user())
        ->event('Created')
        ->withProperties([
            'http_method'            => 'POST',
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log('Document type' . $documentType->name .' has been created successfully');
    }

    public function deleted(DocumentType $documentType)
    {
        activity()
        ->performedOn($documentType)
        ->causedBy(auth()->user())
        ->event('Deleted')
        ->withProperties([
            'http_method'            => 'POST',
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log('Document type' . $documentType->name .' has been deleted');
    }
}
