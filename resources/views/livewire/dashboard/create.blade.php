
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Document Form</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action='{{ route('document.store') }}'>
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label">Control Number:</label>
                                        <input type="text" class="form-control"
                                            name="control_number">
                                            @error('control_number')
                                                <small class="form-hint bg-red-lt">{{ $message }}</small>
                                            @enderror
                                    </div>
                                    <div class="col">
                                        <label class="form-label">Department Code:</label>
                                        <input type="text" class="form-control"
                                        name="department_code">
                                        @error('department_code')
                                            <small class="form-hint bg-red-lt">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label class="form-label">Revision Number:</label>
                                        <input type="text" class="form-control"
                                        name="revision_number">
                                        @error('revision_number')
                                            <small class="form-hint bg-red-lt">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label">Series Number:</label>
                                        <input type="text" class="form-control"
                                            name="series_number">
                                            @error('series_number')
                                                <small class="form-hint bg-red-lt">{{ $message }}</small>
                                            @enderror
                                    </div>
                                    <div class="col">
                                        <label class="form-label">Number Pages:</label>
                                        <input type="number" class="form-control"
                                        name="number_pages">
                                        @error('number_pages')
                                            <small class="form-hint bg-red-lt">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label class="form-label">Number Copies:</label>
                                        <input type="number" class="form-control"
                                        name="number_copies">
                                        @error('number_copies')
                                            <small class="form-hint bg-red-lt">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                            <label class="form-label">Document Type:</label>
                                            <select type="text" class="form-select" placeholder="Select a date" name="document_type">
                                                @foreach ($document as $documents)
                                                    <option value="{{ $documents->department_name }}">{{ $documents->department_name }}
                                                    </option>
                                                @endforeach
                                              </select>
                                    </div>
                                    <div class="col">
                                        <label class="form-label">Document Dated:</label>
                                        <input type="date" class="form-control"
                                        name="document_dated">
                                        @error('document_dated')
                                            <small class="form-hint bg-red-lt">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label">Prepared By:</label>
                                        <input type="text" class="form-control"
                                            name="prepared_by">
                                            @error('prepared_by')
                                                <small class="form-hint bg-red-lt">{{ $message }}</small>
                                            @enderror
                                    </div>
                                    <div class="col">
                                        <label class="form-label">Approved By:</label>
                                        <input type="text" class="form-control"
                                        name="approved_by">
                                        @error('approved_by')
                                            <small class="form-hint bg-red-lt">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label class="form-label">To:</label>
                                        <input type="text" class="form-control"
                                        name="to">
                                        @error('to')
                                            <small class="form-hint bg-red-lt">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label">From:</label>
                                        <input type="text" class="form-control"
                                            name="from">
                                            @error('from')
                                                <small class="form-hint bg-red-lt">{{ $message }}</small>
                                            @enderror
                                    </div>

                                    <div class="col">
                                        <label class="form-label">Department:</label>
                                        <select type="text" class="form-select" name="department">
                                            @foreach ($result as $results)
                                                <option value="{{ $results->name }}">{{ $results->name }}
                                                </option>
                                            @endforeach
                                          </select>
                                    </div>
                                    {{-- <div class="col">
                                        <label class="form-label">Status:</label>
                                        <input type="text" class="form-control"
                                        name="status">
                                    </div> --}}

                                    <div class="col">
                                        <label class="form-label">Status:</label>
                                        <select type="text" class="form-select" name="status">
                                            <option value="Active">Active</option>
                                            <option value="Deactivated">Deactivated</option>
                                          </select>
                                    </div>
                                </div>
                                
                                <div class="form-footer">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
