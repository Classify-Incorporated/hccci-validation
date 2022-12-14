<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiDocumentDetails;
use App\Models\Document;
use App\Services\DocumentService;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ApiDocumentDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Document::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApiDocumentDetails $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = '2';
        $validated['document_series_no'] = DocumentService::generate_document_series($validated['department'], $validated['series_no'], $validated['revision_no']);
        $validated['document_dated'] = $validated['month'] . ' ' . $validated['day'] . ' ' . $validated['year'];

        $document = Document::create($validated);

        QrCode::format('png')->size(250)->generate(config('app.url').'/verify/key='.$document->document_series_no, '../public/'.$document->document_series_no.'.png');

        $document->addMedia($document->document_series_no.'.png', 'local')->toMediaCollection('qrcode');

        return response()->json([
            'success'   => true,
            'message'   => 'Document submitted successfully.'
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
