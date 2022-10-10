<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Exception;

class VerifyDocument extends Controller
{
    public function verify_document($id)
    {
        //Check Document Series Number

        $authentic = true;

        try {

            $data = Document::findOrFail($id);

            
            return view('verify.index', compact('data', 'authentic'));

        } catch (Exception $exception) {

            $authentic = false;
            return view('verify.index', compact('id', 'authentic'));
        }
    }
}
