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
                    {{-- Dashboard --}}
                </h2>
            </div>
        </div>
    </div>
</div>

<div class="container-xl">
    <div class="page-body">
        <div class="row row-cards">
            <div class="card">
                <div class="col-md-3 ms-auto p-2">
                    <div class="input-icon">
                        <span class="input-icon-addon">
                            <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="10" cy="10" r="7"></circle>
                                <line x1="21" y1="21" x2="15" y2="15"></line>
                            </svg>
                        </span>
                        <input wire:model="search" type="search" class="form-control" placeholder="Search ...">
                    </div>
                </div>
                <div class="row row-cards">
                    <div class="col-lg-7">
                        {{-- @if ($data->count()) --}}
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-vcenter card-table">
                                            <thead>
                                                <tr>
                                                    <th>Department Name</th>
                                                    <th>Department Code</th>
                                                    <th class="w-1"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @foreach ($data as $item)
                                                    <tr>
                                                        <td>{{ $item->department }}</td>
                                                        <td class="text-muted">
                                                            {{ $item->department_code }}
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                wire:click="openDeleteModal({{ $item->id }})">Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach --}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center ms-auto">
                                    {{-- {{ $data->links() }} --}}
                                </div>
                            </div>
                        {{-- @else --}}
                            <div class="card">
                                <div class="empty">
                                    <div class="empty-img"><img
                                            src='{{ asset('assets/images/svg-icons/undraw_printing_invoices_5r4r.svg') }}'
                                            alt="" height="128">
                                    </div>
                                    <p class="empty-title">No results found</p>
                                    <p class="empty-subtitle text-muted">
                                        Try adjusting your search or filter to find what you're looking for.
                                    </p>
                                </div>
                            </div>
                        {{-- @endif --}}
                    </div>
            
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Add Department</h3>
                                <form wire:submit.prevent="create">
                                    <div class="form-group mb-3 ">
                                        <label class="form-label required">Department name</label>
                                        <div>
                                            <input type="text" class="form-control" aria-describedby="emailHelp"
                                                placeholder="Enter department name" name="department"
                                                wire:model.debounce.800ms="department">
                                            @error('department')
                                                <small class="form-hint bg-red-lt">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {{-- <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Add Document Type</h3>
              </div>
              <div class="card-body">
                <form method="POST" action='{{ route('document.type.store') }}'>
                    @csrf
                  <div class="form-group mb-3 ">
                    <label class="form-label required">Document Type</label>
                    <div >
                      <input type="text" class="form-control" name="department_name">
                    @error('department_name')
                        <small class="form-hint bg-red-lt">{{ $message }}</small>
                    @enderror
                    </div>
                  </div>
                  <div class="form-footer">
                    <button type="submit" class="btn btn-primary">Add</button>
                  </div>
                </form>
              </div>
            </div>
          </div>


          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Document Types</h3>
              </div>
              <div class="card-body">
                <div class="col-md-5 ms-auto p-2">
                    <div class="input-icon">
                        <span class="input-icon-addon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="10" cy="10" r="7"></circle>
                                <line x1="21" y1="21" x2="15" y2="15"></line>
                            </svg>
                        </span>
                        <input wire:model="search" type="search" class="form-control" placeholder="Document...">
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-vcenter table-mobile-md card-table">
                        <thead>
                            <tr>
                                <th>Document Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($document as $documents)
                            <tr>
                                <td data-label="Name">
                                    <div class="d-flex py-1 align-items-center">
                                        <div class="flex-fill">
                                            <div class="font-weight-medium">{{$documents->department_name}}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                      <div class="dropdown">
                                        <button class="btn dropdown-toggle align-text-top"
                                            data-bs-toggle="dropdown">
                                            Actions
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <line x1="4" y1="7" x2="20" y2="7"></line>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                 </svg> Delete
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>

        </div> --}}
    </div>
</div>