<div>
    <div class="container-xl">
        <!-- Page title -->
        <div class="text-center" wire:offline>
            You are now offline.
        </div>
        <div class="page-header d-print-none">
            <x-account-risk-reminder/>   
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Overview
                    </div>
                    <h2 class="page-title">
                        <span class="status-indicator status-green status-indicator-animated">
                            <span class="status-indicator-circle"></span>
                            <span class="status-indicator-circle"></span>
                            <span class="status-indicator-circle"></span>
                        </span>
                        {{ $document->document_series_no }}
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="hr-text">Document Details</div>

                            <div class="form-group mb-1 row">
                                <label class="col-2 col-form-label">State</label>
                                
                                <div class="col">
                                    <div class="form-control-plaintext">{{ ($document->status) ? 'Active' : 'In-active' }}</div>
                                </div>
                            </div>

                            <div class="form-group mb-1 row">
                                <label class="col-2 col-form-label">Date </label>
                                
                                <div class="col">
                                    <div class="form-control-plaintext">{{ $document->created_at->format('F d, Y') }}</div>
                                </div>
                            </div>

                            <div class="form-group mb-1 row">
                                <label class="col-2 col-form-label">Department</label>
                                
                                <div class="col">
                                    <div class="form-control-plaintext">{{ $document->department }}</div>
                                </div>
                            </div>

                            <div class="form-group mb-1 row">
                                <label class="col-2 col-form-label">Document Type</label>
                                
                                <div class="col">
                                    <div class="form-control-plaintext">{{ $document->document_type }}</div>
                                </div>
                            </div>

                            <div class="hr-text">Document Route</div>

                            <div class="form-group row">
                                <label class="col-2 col-form-label">Source</label>
                                <div class="col">
                                    <div class="form-control-plaintext">{{ $document->from }}</div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-2 col-form-label">Destination</label>
                                <div class="col">
                                    <div class="form-control-plaintext">{{ $document->to }}</div>
                                </div>
                            </div>

                            <div class="hr-text">SIGNATORY AUTHORITY</div>

                            <div class="form-group mb-1 row">
                                <label class="col-2 col-form-label">Prepared by</label>
                                <div class="col">
                                    <div class="form-control-plaintext">{{ $document->prepared_by }}</div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-2 col-form-label">Approved by</label>
                                <div class="col">
                                    <div class="form-control-plaintext">{{ $document->approved_by }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>