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
                        <span class="status-indicator status-{{ ($document->status) ? 'green' : 'danger' }} status-indicator-animated">
                            <span class="status-indicator-circle"></span>
                            <span class="status-indicator-circle"></span>
                            <span class="status-indicator-circle"></span>
                        </span>
                        {{ $document->document_series_no }}
                    </h2>
                </div>
                <!-- Page title actions -->
                
                @if($document->status)
                    <div class="col-12 col-md-auto ms-auto d-print-none">
                        <div class="btn-list">
                            <span class="d-none d-sm-inline">
                                <input type="search"
                                    class="form-control d-inline-block w-9 me-3 {{ empty($documents) ? 'd-none' : '' }}"
                                    wire:model="search" placeholder="Search document series..." />
                            </span>
                            <span class="d-none d-sm-inline">
                                @can('deactive document')
                                    <button type="submit" class="btn btn-warning" onclick="confirm('Are you sure you want to deactive this document? This cannot be undone.') || event.stopImmediatePropagation()"
                                    wire:click="deactivate({{ $document->id }})">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-triangle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 9v2m0 4v.01"></path>
                                            <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75"></path>
                                        </svg>
                                        Deactivated
                                    </button>
                                @endcan
                            </span>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="form-group mb-1 row">
                                <label class="col-2 col-form-label">Clerk</label>
                                
                                <div class="col">
                                    <div class="form-control-plaintext">{{ $document->user->fullName() }}</div>
                                </div>
                            </div>

                            <div class="form-group mb-1 row">
                                <label class="col-2 col-form-label">Created</label>
                                
                                <div class="col">
                                    <div class="form-control-plaintext">{{ $document->created_at->diffForHumans() }}</div>
                                </div>
                            </div>

                            <div class="form-group mb-1 row">
                                <label class="col-2 col-form-label">Status</label>
                                
                                <div class="col">
                                    <div class="form-control-plaintext">{{ ($document->status) ? 'Active' : 'Deactivate' }}</div>
                                </div>
                            </div>

                            <div class="hr-text">Document Details</div>

                            <div class="form-group mb-1 row">
                                <label class="col-2 col-form-label">Date </label>
                                
                                <div class="col">
                                    <div class="form-control-plaintext">{{ $document->document_dated ?? '-' }}</div>
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

                            <div class="form-group row">
                                <label class="col-2 col-form-label">From</label>
                                <div class="col">
                                    <div class="form-control-plaintext">{{ $document->from }}</div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-2 col-form-label">To</label>
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