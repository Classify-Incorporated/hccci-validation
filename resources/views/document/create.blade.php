<x-tabler-layout>

    @section('style')
        <link href="{{ asset('asset/custom/dist/css/tabler-vendors.min.css') }}" rel="stylesheet"/>
    @endsection

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
                        Create Document
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

                            <form action="{{ route('document.store') }}" method="POST">
                                @csrf

                                <div class="form-group row">
                                    <label class="col-2 col-form-label required @error('series_no') text-danger @enderror">Series Number</label>
                                    <div class="col">
                                        <input type="number" name="series_no" class="form-control form-control-flush mt-1" autocomplete="off" placeholder="-">
                                        @error('series_no')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label required @error('revision_no') text-danger @enderror">Revision Number</label>
                                    <div class="col">
                                        <input type="number" name="revision_no" class="form-control form-control-flush mt-1" autocomplete="off" placeholder="-">
                                        @error('revision_no')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                

                                <div class="form-group mb-1 row">
                                    <label class="col-2 col-form-label required @error('date') text-danger @enderror">Date</label>
                                    <div class="col">
                                            <div class="row g-2">
                                              <div class="col-5">
                                                <select name="month" class="form-select">
                                                  <option value="">Month</option>
                                                  <option value="January">January</option>
                                                  <option value="February">February</option>
                                                  <option value="March">March</option>
                                                  <option value="April">April</option>
                                                  <option value="May">May</option>
                                                  <option value="June">June</option>
                                                  <option value="July">July</option>
                                                  <option value="August">August</option>
                                                  <option value="September">September</option>
                                                  <option value="October">October</option>
                                                  <option value="November">November</option>
                                                  <option value="December">December</option>
                                                  <option value="">None</option>
                                                </select>
                                              </div>
                                              <div class="col-3">
                                                <select name="day" class="form-select">
                                                  <option value="">Day</option>
                                                  <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option>
                                                  <option value="4">4</option>
                                                  <option value="5">5</option>
                                                  <option value="6">6</option>
                                                  <option value="7">7</option>
                                                  <option value="8">8</option>
                                                  <option value="9">9</option>
                                                  <option value="10">10</option>
                                                  <option value="11">11</option>
                                                  <option value="12">12</option>
                                                  <option value="13">13</option>
                                                  <option value="14">14</option>
                                                  <option value="15">15</option>
                                                  <option value="16">16</option>
                                                  <option value="17">17</option>
                                                  <option value="18">18</option>
                                                  <option value="19">19</option>
                                                  <option value="20">20</option>
                                                  <option value="21">21</option>
                                                  <option value="22">22</option>
                                                  <option value="23">23</option>
                                                  <option value="24">24</option>
                                                  <option value="25">25</option>
                                                  <option value="26">26</option>
                                                  <option value="27">27</option>
                                                  <option value="28">28</option>
                                                  <option value="29">29</option>
                                                  <option value="30">30</option>
                                                  <option value="31">31</option>
                                                  <option value="">None</option>
                                                </select>
                                              </div>
                                              <div class="col-4">
                                                <input type="text" class="form-control" name="year" placeholder="Input Year">
                                              </div>
                                            </div>
                                    </div>
                                </div>

                                <div class="form-group mb-1 row">
                                    <label class="col-2 col-form-label required @error('department') text-danger @enderror">Department</label>
                                    
                                    <div class="col">
                                        <select type="text" class="form-select" placeholder="Select a department" id="select-department" name="department">
                                            <option value="">Select</option>
                                            @foreach ($department_lists as $department)
                                                <option value="{{ $department->department_name }}">{{ $department->department_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('department')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group mb-1 row">
                                    <label class="col-2 col-form-label required @error('document_type') text-danger @enderror">Type</label>
                                    
                                    <div class="col">
                                        <select type="text" class="form-select" placeholder="Select a document type" id="select-document-type" name="document_type">
                                            <option value="">Select</option>
                                            @foreach ($document_types as $type)
                                                <option value="{{ $type->name }}">{{ $type->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('document_type')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label required @error('from') text-danger @enderror">From</label>
                                    <div class="col">
                                        <input type="text" name="from" class="form-control form-control-flush mt-1" autocomplete="off" placeholder="-">
                                        @error('from')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label required @error('to') text-danger @enderror">To</label>
                                    <div class="col">
                                        <input type="text" name="to" class="form-control form-control-flush mt-1" autocomplete="off" placeholder="-">
                                        @error('to')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group mb-1 row">
                                    <label class="col-2 col-form-label required @error('prepared_by') text-danger @enderror">Prepared by</label>
                                    <div class="col">
                                        <input type="text" class="form-control form-control-flush mt-1" autocomplete="off" placeholder="Enter person name"
                                        name="prepared_by">
                                        @error('prepared_by')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label required @error('approved_by') text-danger @enderror">Approved by</label>
                                    <div class="col">
                                        <input type="text" name="approved_by" class="form-control form-control-flush mt-1" autocomplete="off" placeholder="Enter person name">
                                        @error('approved_by')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-footer">
                                    <button type="submit"
                                        onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                                        class="btn btn-primary">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('script')
      <!-- Libs JS -->
  <script src="{{ asset('asset/custom/dist/libs/nouislider/dist/nouislider.min.js') }}" defer></script>
  <script src="{{ asset('asset/custom/dist/libs/litepicker/dist/litepicker.js') }}" defer></script>
  <script src="{{ asset('asset/custom/dist/libs/tom-select/dist/js/tom-select.base.min.js') }}" defer></script>

  <script src="{{ asset('asset/custom/dist/js/tabler.min.js') }}" defer></script>
  <script src="{{ asset('asset/custom/dist/js/demo.min.js') }}" defer></script>

    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            var el;
            window.TomSelect && (new TomSelect(el = document.getElementById('select-document-type'), {
                copyClassesToDropdown: false,
                dropdownClass: 'dropdown-menu ts-dropdown',
                optionClass:'dropdown-item',
                controlInput: '<input>',
                render:{
                    item: function(data,escape) {
                        if( data.customProperties ){
                            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
                        }
                        return '<div>' + escape(data.text) + '</div>';
                    },
                    option: function(data,escape){
                        if( data.customProperties ){
                            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
                        }
                        return '<div>' + escape(data.text) + '</div>';
                    },
                },
            }));
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            var el;
            window.TomSelect && (new TomSelect(el = document.getElementById('select-department'), {
                copyClassesToDropdown: false,
                dropdownClass: 'dropdown-menu ts-dropdown',
                optionClass:'dropdown-item',
                controlInput: '<input>',
                render:{
                    item: function(data,escape) {
                        if( data.customProperties ){
                            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
                        }
                        return '<div>' + escape(data.text) + '</div>';
                    },
                    option: function(data,escape){
                        if( data.customProperties ){
                            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
                        }
                        return '<div>' + escape(data.text) + '</div>';
                    },
                },
            }));
        });
        // @formatter:on
      </script>
    @endsection
</x-tabler-layout>
