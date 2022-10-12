<?php

namespace App\Observers;

use App\Models\Document;

class DocumentObserver
{
    public $afterCommit = true;
    
    public function created(Document $document)
    {
        activity()
        ->performedOn($document)
        ->causedBy(auth()->user())
        ->event('Created')
        ->withProperties([
            'http_method'            => 'POST',
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log('Document ' . $document->document_series_no .' has been created successfully');
    }

    public function deleted(Document $document)
    {
        activity()
        ->performedOn($document)
        ->causedBy(auth()->user())
        ->event('Deleted')
        ->withProperties([
            'http_method'            => 'POST',
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log('Document ' . $document->document_series_no .' has been deleted');
    }

    public function deactivateForm(Document $document)
    {
        activity()
        ->performedOn($document)
        ->causedBy(auth()->user())
        ->event('Deactivate')
        ->withProperties([
            'http_method'            => 'POST',
            'Check_url'              => url()->current(),
            'User Agent'             => $_SERVER['HTTP_USER_AGENT']
            ])
        ->log('Document ' . $document->document_series_no .' has been deactivated');
    }
}
