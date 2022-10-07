<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\DocumentRequest;
use App\Models\Document;
use DB;

class DocumentController extends Controller
{
    public function store(DocumentRequest $request){
        Document::create($request->validated());
        return to_route('dashboard');
    }
}
