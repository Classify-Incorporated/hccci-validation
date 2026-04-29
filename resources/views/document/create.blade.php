<x-tabler-layout>

    @section('style')
        <link href="{{ asset('asset/custom/dist/css/tabler-vendors.min.css') }}" rel="stylesheet"/>
        <style>
            /* Ensure uniform spacing for all form groups */
            .form-group { margin-bottom: 1.5rem; }
        </style>
    @endsection

    <div class="container-xl">
        <div class="page-header d-print-none">
            <x-account-risk-reminder/>   
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">Overview</div>
                    <h2 class="page-title">Create Document</h2>
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
                            <form action="{{ route('document.store') }}" method="POST">
                                @csrf

                                <div class="form-group row">
                                    <label class="col-2 col-form-label required">Series Number</label>
                                    <div class="col">
                                        <input type="number" name="series_no" class="form-control" 
                                            placeholder="Enter number (e.g., 001)" 
                                            value="{{ old('series_no') }}" required>
                                        @error('series_no')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label required">Revision Number</label>
                                    <div class="col">
                                        <input type="number" name="revision_no" class="form-control" required placeholder="e.g. 01">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label required">Date</label>
                                    <div class="col">
                                        <div class="row g-2">
                                            <div class="col-5">
                                                <select name="month" class="form-select"><option value="">Month</option>@foreach(['January','February','March','April','May','June','July','August','September','October','November','December'] as $m)<option value="{{$m}}">{{$m}}</option>@endforeach</select>
                                            </div>
                                            <div class="col-3">
                                                <select name="day" class="form-select"><option value="">Day</option>@for($i=1; $i<=31; $i++)<option value="{{$i}}">{{$i}}</option>@endfor</select>
                                            </div>
                                            <div class="col-4">
                                                <input type="text" class="form-control" name="year" placeholder="Year">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label required">Department</label>
                                    <div class="col">
                                        <select class="form-select" id="select-department" name="department" required>
                                            <option value="">Select a department</option>
                                            @foreach ($department_lists as $department)
                                                <option value="{{ $department->department_name }}">{{ $department->department_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label required">Document Type</label>
                                    <div class="col">
                                        <select class="form-select" id="select-document-type" name="document_type" required>
                                            <option value="">Select a document type</option>
                                            @foreach ($document_types as $type)
                                                <option value="{{ $type->name }}">{{ $type->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label required">From</label>
                                    <div class="col"><input type="text" name="from" class="form-control" required placeholder="-"></div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label required">To</label>
                                    <div class="col"><input type="text" name="to" class="form-control" required placeholder="-"></div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label required">Prepared by</label>
                                    <div class="col"><input type="text" name="prepared_by" class="form-control" required placeholder="Enter name"></div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label required">Approved by</label>
                                    <div class="col"><input type="text" name="approved_by" class="form-control" required placeholder="Enter name"></div>
                                </div>

                                <div class="form-footer">
                                    <button type="submit" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" class="btn btn-primary">Create Document</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('script')
    <script src="{{ asset('asset/custom/dist/libs/tom-select/dist/js/tom-select.base.min.js') }}" defer></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Re-initialized TomSelect logic
            ['select-department', 'select-document-type'].forEach(id => {
                new TomSelect(document.getElementById(id), {
                    copyClassesToDropdown: false,
                    dropdownClass: 'dropdown-menu ts-dropdown',
                    optionClass:'dropdown-item',
                });
            });
        });
    </script>
    @endsection
</x-tabler-layout>