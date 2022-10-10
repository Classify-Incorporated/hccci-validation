
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
                    </div>
                    <h2 class="page-title">
                        Create Document
                    </h2>
                </div>
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('dashboard') }}" class="btn btn-primary">
                            Back
                        </a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <div class="container-xl">
        <div class="page-body">
            <div class="row row-cards">
                <div class="col-12">
                    <form class="card" method="POST" action='{{ route('document.store') }}'>
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title">Document Form</h4>
                        </div>      
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="row">
                                        <div class="col-md-6 col-xl-12">
                                            <div class="mb-3">
                                                <label class="form-label">Department</label>
                                                <div class="form-floating">
                                                    <select class="form-select" id="floatingSelect"
                                                        aria-label="Floating label select example"
                                                        name="department">
                                                        <option selected value="">Open this select menu</option>
                                                        @foreach ($result as $results)
                                                            <option value="{{ $results->name }}">{{ $results->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <label for="floatingSelect">Select Department</label>
                                                </div>
                                                @error('department')
                                                    <small class="form-hint bg-red-lt">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Department Code</label>
                                                <input type="text" class="form-control" placeholder="Input Department Code"
                                                name="department_code">
                                                @error('department_code')
                                                    <small class="form-hint bg-red-lt">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Control Number</label>
                                                <input type="text" class="form-control" name="control_number" placeholder="Input Control Number">
                                                @error('control_number')
                                                    <small class="form-hint bg-red-lt">{{ $message }}</small>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label class="form-label">Revision Number</label>
                                                <input type="number" class="form-control" name="revision_number" placeholder="Input Revision Number">
                                                @error('revision_number')
                                                    <small class="form-hint bg-red-lt">{{ $message }}</small>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label class="form-label">Series Number</label>
                                                <input type="number" class="form-control" name="series_number"
                                                    placeholder="Input series number">
                                                @error('series_number')
                                                    <small class="form-hint bg-red-lt">{{ $message }}</small>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label class="form-label">Number of Pages</label>
                                                <input type="number" class="form-control" name="number_pages"
                                                    placeholder="Input number of pages">
                                                @error('number_pages')
                                                    <small class="form-hint bg-red-lt">{{ $message }}</small>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label class="form-label">Number of Copies</label>
                                                <input type="number" class="form-control" name="number_copies"
                                                    placeholder="Input number of copies">
                                                @error('number_copies')
                                                    <small class="form-hint bg-red-lt">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-xl-6">
                                    <div class="row">
                                        <div class="col-md-6 col-xl-12">
                                            <div class="mb-3">
                                                <label class="form-label">Document Type</label>
                                                <div class="form-floating">
                                                    <select class="form-select" id="floatingSelect"
                                                        aria-label="Floating label select example"
                                                        name="document_type">
                                                        <option value="">Open this select menu</option>
                                                        @foreach ($document as $documents)
                                                            <option value="{{ $documents->department_name }}">{{ $documents->department_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <label for="floatingSelect">Select Document</label>
                                                </div>
                                                @error('document_type')
                                                    <small class="form-hint bg-red-lt">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Document Dated</label>
                                                <input type="date" class="form-control" placeholder="Input Document Dated"
                                                name="document_dated">
                                                @error('document_dated')
                                                    <small class="form-hint bg-red-lt">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Prepared By</label>
                                                <input type="text" class="form-control" placeholder="Input Prepared By"
                                                name="prepared_by">
                                                @error('prepared_by')
                                                    <small class="form-hint bg-red-lt">{{ $message }}</small>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label class="form-label">Approved By</label>
                                                <input type="text" class="form-control" name="approved_by"
                                                    placeholder="Input approved by">
                                                @error('approved_by')
                                                    <small class="form-hint bg-red-lt">{{ $message }}</small>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label class="form-label">To</label>
                                                <input type="text" class="form-control" name="to"
                                                    placeholder="Input to">
                                                @error('to')
                                                    <small class="form-hint bg-red-lt">{{ $message }}</small>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label class="form-label">From</label>
                                                <input type="text" class="form-control" name="from"
                                                    placeholder="Input from">
                                                @error('from')
                                                    <small class="form-hint bg-red-lt">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Status</label>
                                                <div class="form-floating">
                                                    <select class="form-select" id="floatingSelect"
                                                        aria-label="Floating label select example"
                                                        name="status">
                                                        <option value="">Open this select menu</option>
                                                        <option value="Active">Active</option>
                                                        <option value="Deactivated">Deactivated</option>
                                                    </select>
                                                    <label for="floatingSelect">Select Status</label>
                                                </div>
                                                @error('status')
                                                    <small class="form-hint bg-red-lt">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="card-footer text-end">
                            <div class="d-flex">
                                <button type="submit" class="btn btn-primary ms-auto">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
