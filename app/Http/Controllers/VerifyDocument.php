<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form\Memorandum;
use App\Models\Form\ReturnSlip\ReturnSlip;
use App\Models\Form\ServiceCall;
use App\Models\Form\WithdrawalSlip\Wsdm;
use App\Models\Form\WithdrawalSlip\Wsfa;
use App\Models\Form\WithdrawalSlip\Wsfg;
use App\Models\Form\WithdrawalSlip\Wsma;
use App\Models\Form\WithdrawalSlip\Wsmi;
use App\Models\Form\WithdrawalSlip\Wsmro;
use App\Services\DocumentService;
use Exception;
use Illuminate\Support\Str;

class VerifyDocument extends Controller
{
    public function verify_document($document_series_no)
    {
        //Check Document Series Number

        try {
            $splice = Str::of($document_series_no)->explode('-');
            $unique = Str::lower($splice[1]);

            $authentic = true;
            $button_enable = true;

            switch ($unique) {
                case "mi":
                    $data = Wsmi::DocumentSeries($document_series_no)->select('document_series_no', 'status', 'created_at')->first();
                    
                    if(!$data) {
                        return abort(500);
                    }

                    $allow_entries = DocumentService::approval_allow_entries($data->document_series_no);

                    return view('verify.index', compact('data', 'authentic', 'button_enable', 'allow_entries'));
                case "mro":
                    $data = Wsmro::DocumentSeries($document_series_no)->select('document_series_no', 'status', 'created_at')->first();

                    if(!$data) {
                        return abort(500);
                    }

                    $allow_entries = DocumentService::approval_allow_entries($data->document_series_no);

                    return view('verify.index', compact('data', 'authentic', 'button_enable', 'allow_entries'));
                case "dm":
                    $data = Wsdm::DocumentSeries($document_series_no)->select('document_series_no', 'status', 'created_at')->first();

                    if(!$data) {
                        return abort(500);
                    }

                    $allow_entries = DocumentService::approval_allow_entries($data->document_series_no);

                    return view('verify.index', compact('data', 'authentic', 'button_enable', 'allow_entries'));
                case "fg":
                    $data = Wsfg::DocumentSeries($document_series_no)->select('document_series_no', 'status', 'created_at')->first();

                    if(!$data) {
                        return abort(500);
                    }

                    $allow_entries = DocumentService::approval_allow_entries($data->document_series_no);

                    return view('verify.index', compact('data', 'authentic', 'button_enable', 'allow_entries'));
                case "fa":
                    $data = Wsfa::DocumentSeries($document_series_no)->select('document_series_no', 'status', 'created_at')->first();

                    if(!$data) {
                        return abort(500);
                    }

                    $allow_entries = DocumentService::approval_allow_entries($data->document_series_no);

                    return view('verify.index', compact('data', 'authentic', 'button_enable', 'allow_entries'));
                case "ma":
                    $data = Wsma::DocumentSeries($document_series_no)->select('document_series_no', 'status', 'created_at')->first();

                    if(!$data) {
                        return abort(500);
                    }

                    $allow_entries = DocumentService::approval_allow_entries($data->document_series_no);

                    return view('verify.index', compact('data', 'authentic', 'button_enable', 'allow_entries'));
                case "sc":
                    $data = ServiceCall::DocumentSeries($document_series_no)->select('document_series_no', 'status', 'created_at')->first();

                    if(!$data) {
                        return abort(500);
                    }

                    $allow_entries = false;
                    $button_enable = false;

                    return view('verify.index', compact('data', 'authentic', 'button_enable', 'allow_entries'));
                case "mr":
                    $data = Memorandum::DocumentSeries($document_series_no)->select('document_series_no', 'status', 'created_at')->first();

                    if(!$data) {
                        return abort(500);
                    }

                    $allow_entries = false;
                    $button_enable = false;

                    return view('verify.index', compact('data', 'authentic', 'button_enable', 'allow_entries'));
                case "rs":
                    $data = ReturnSlip::DocumentSeries($document_series_no)->select('document_series_no', 'created_at')->first();
  
                    if(!$data) {
                        return abort(500);
                    }

                    $allow_entries = false;
                    $button_enable = false;
                    
                    return view('verify.index', compact('data', 'authentic', 'button_enable', 'allow_entries'));
                default:
                
                    $authentic = false;
                    return view('verify.index', compact('data', 'authentic'));
            }

        } catch (Exception $exception) {

            $authentic = false;
            return view('verify.index', compact('document_series_no', 'authentic'));
        }
    }
}
