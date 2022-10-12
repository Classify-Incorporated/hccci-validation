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
                        {{ $title }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <span class="d-none d-sm-inline">
                            <input type="search"
                                class="form-control d-inline-block w-9 me-3 {{ empty($documents) ? 'd-none' : '' }}"
                                wire:model="search" placeholder="Search document series..." />
                        </span>
                        <span class="d-none d-sm-inline">
                            @can('create document')
                                <a href="{{ route('document.create') }}" class="btn btn-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler-playlist-add" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M19 8h-14"></path>
                                        <path d="M5 12h9"></path>
                                        <path d="M11 16h-6"></path>
                                        <path d="M15 16h6"></path>
                                        <path d="M18 13v6"></path>
                                    </svg>
                                    New
                                </a>
                            @endcan
                    
                            {{-- <div class="btn-group">
                                <a href="#" class="btn btn-white btn-icon" aria-label="Button">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/bold -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud-upload" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-1"></path>
                                    <polyline points="9 15 12 12 15 15"></polyline>
                                    <line x1="12" y1="12" x2="12" y2="21"></line>
                                 </svg>
                                </a>
                                <a href="#" class="btn btn-white btn-icon" aria-label="Button">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/italic -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud-download" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4"></path>
                                    <line x1="12" y1="13" x2="12" y2="22"></line>
                                    <polyline points="9 19 12 22 15 19"></polyline>
                                 </svg>
                                </a>
                            </div> --}}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">

            <div class="col-12">
                <div class="row row-cards">

                    <div class="card">
                        <div class="card-body mb-4">
                            @if (!empty($documents))
                                <div id="table-default" class="table-responsive" style="min-height: 350px">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Document Series No</th>
                                                <th>Department</th>
                                                <th>Document Type</th>
                                                <th>Prepared by</th>
                                                <th>Approved by</th>
                                                <th class="w-1"></th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-tbody">
                                            @forelse($documents as $data)
                                                <tr>
                                                    <a href="google.com">
                                                        <td>@if($data->isNotActive())<span class="badge bg-danger me-1"></span>@endif
                                                            {{ $data->document_series_no }}</td>
                                                        <td>{{ $data->department }}</td>
                                                        <td>{{ $data->document_type }}</td>
                                                        <td>{{ $data->prepared_by }}</td>
                                                        <td>{{ $data->approved_by }}</td>
                                                        <td>
                                                            <div class="btn-list btn-ghost-primary flex-nowrap">
                                                                <div class="dropdown">
                                                                    <button class="btn dropdown-toggle align-text-top"
                                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                                        Actions
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-end"
                                                                        style="">
                                                                        
                                                                        @can('view document')
                                                                            <a class="dropdown-item"
                                                                                href="{{ route('document.show', $data) }}">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    class="icon me-2 icon-tabler icon-tabler-file-description"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" stroke-width="2"
                                                                                    stroke="currentColor" fill="none"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round">
                                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                                        fill="none"></path>
                                                                                    <path d="M14 3v4a1 1 0 0 0 1 1h4">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z">
                                                                                    </path>
                                                                                    <path d="M9 17h6"></path>
                                                                                    <path d="M9 13h6"></path>
                                                                                </svg>
                                                                                Details
                                                                            </a>
                                                                        @endcan
                                                                    
                                                                        @can('generate qr')
                                                                            <button class="dropdown-item" type="button"
                                                                                wire:click="generate_qr({{ $data }})">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 icon-tabler-qrcode" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                                    <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                                                                                    <line x1="7" y1="17" x2="7" y2="17.01"></line>
                                                                                    <rect x="14" y="4" width="6" height="6" rx="1"></rect>
                                                                                    <line x1="7" y1="7" x2="7" y2="7.01"></line>
                                                                                    <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                                                                                    <line x1="17" y1="7" x2="17" y2="7.01"></line>
                                                                                    <line x1="14" y1="14" x2="17" y2="14"></line>
                                                                                    <line x1="20" y1="14" x2="20" y2="14.01"></line>
                                                                                    <line x1="14" y1="14" x2="14" y2="17"></line>
                                                                                    <line x1="14" y1="20" x2="17" y2="20"></line>
                                                                                    <line x1="17" y1="17" x2="20" y2="17"></line>
                                                                                    <line x1="20" y1="17" x2="20" y2="20"></line>
                                                                                </svg>
                                                                                Generate QR
                                                                            </button>
                                                                        @endcan
                                                                    
                                                                        {{-- <button class="dropdown-item" type="button"
                                                                            wire:click="delete({{ $data->id }})">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                class="icon me-2 icon-tabler icon-tabler-file-x"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" stroke-width="2"
                                                                                stroke="currentColor" fill="none"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path stroke="none" d="M0 0h24v24H0z"
                                                                                    fill="none"></path>
                                                                                <path d="M14 3v4a1 1 0 0 0 1 1h4">
                                                                                </path>
                                                                                <path
                                                                                    d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z">
                                                                                </path>
                                                                                <path d="M10 12l4 4m0 -4l-4 4"></path>
                                                                            </svg>
                                                                            Delete
                                                                        </button> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </a>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6">
                                                        <div class="container-xl d-flex flex-column justify-content-center">
                                                            <div class="empty">
                                                                <div class="empty-img"><img
                                                                        src="{{ asset('asset/custom/static/illustrations/undraw_posting_photo_v65l.svg') }}" height="128"
                                                                        alt="">
                                                                </div>
                                                                <p class="empty-title">No results found</p>

                                                                <p class="empty-subtitle text-muted">
                                                                    Try adjusting your search or filter to find what
                                                                    you're
                                                                    looking for.
                                                                </p>
                                                                <div class="empty-action">
                                                                    <a href="{{ route('document.create') }}" class="btn btn-primary">
                                                                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                            <line x1="12" y1="5" x2="12" y2="19" />
                                                                            <line x1="5" y1="12" x2="19" y2="12" />
                                                                        </svg>
                                                                        Create
                                                                    </a>
                                                                </div>
                                                               
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            @endif

                            @if (empty($documents))
                                <div class="container-xl d-flex flex-column justify-content-center">
                                    <div class="empty">
                                        <div class="empty-img"><img
                                                src="{{ asset('asset/custom/static/illustrations/undraw_posting_photo_v65l.svg') }}"
                                                height="128" alt="">
                                        </div>
                                        <p class="empty-title">Insufficient Data</p>
                                        <p class="empty-subtitle text-muted">
                                            It looks like you don't have any record yet. Let's create your first
                                            document record
                                        </p>
                                        <div class="empty-action">
                                            <a href="{{ route('document.create') }}" class="btn btn-primary">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <line x1="12" y1="5" x2="12"
                                                        y2="19" />
                                                    <line x1="5" y1="12" x2="19"
                                                        y2="12" />
                                                </svg>
                                                Add document record
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                @if (!empty($documents))
                    <div class="d-flex mt-4">
                        <ul class="pagination ms-auto">
                            <li class="page-item {{ $documents->onFirstPage() ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $documents->previousPageUrl() }}">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <polyline points="15 6 9 12 15 18" />
                                    </svg>
                                    prev
                                </a>
                            </li>

                            <li class="page-item {{ $documents->hasMorePages() ? '' : 'disabled' }}">
                                <a class="page-link" href="{{ $documents->nextPageUrl() }}">
                                    next
                                    <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <polyline points="9 6 15 12 9 18" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>