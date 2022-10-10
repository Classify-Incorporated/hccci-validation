<div>
    <div class="container-xl">
        <!-- Page title -->
        <div class="text-center" wire:offline>
            You are now offline.
        </div>
        <div class="page-header d-print-none">
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
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-12">
                    <div class="card">
                        <fieldset class="form-fieldset">
                            <div class="mb-3">
                                <label class="form-label required">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" autocomplete="off"
                                    wire:model="name">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-info" type="submit" wire:click="save">Save</button>
                            </div>
                        </fieldset>
                        <div class="table-responsive">
                            
                            <table class="table table-vcenter card-table table-striped">
                                <div class="p-3">
                                    <label class="form-label">Icon input</label>
                                    <div class="input-icon mb-3">
                                      <input type="search" wire:model="search" class="form-control" placeholder="Search…">
                                      <span class="input-icon-addon">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="10" cy="10" r="7"></circle><line x1="21" y1="21" x2="15" y2="15"></line></svg>
                                      </span>
                                    </div>
                                </div>
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th class="w-1"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($documents as $document)
                                        <tr>
                                            <td>{!! $document->name !!}</td>
                                            <td>
                                                <div x-data="{ open: false }">
                                                    <div x-show="!open">
                                                        <a href="javascript:void();" @click.prevent="open = ! open">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-trash-x"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                </path>
                                                                <path d="M4 7h16"></path>
                                                                <path
                                                                    d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                                </path>
                                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3">
                                                                </path>
                                                                <path d="M10 12l4 4m0 -4l-4 4"></path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <div x-show="open">
                                                        <a href="javascript:void();"
                                                            wire:click.prevent="delete({{ $document->id }})"
                                                            @click.prevent="open = ! open">
                                                            Confirm
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4">
                                            <div class="container-xl d-flex flex-column justify-content-center">
                                                <div class="empty">
                                                    <div class="empty-img"><img
                                                            src="{{ asset('asset/images/Tasks.svg') }}" height="128"
                                                            alt="">
                                                    </div>
                                                    <p class="empty-subtitle text-muted">
                                                        Let's start adding your document type.
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>

                            @empty(!$documents)
                                <div class="d-flex mt-4">
                                    <ul class="pagination ms-auto">
                                        <li class="page-item {{ $documents->onFirstPage() ? 'disabled' : '' }}">
                                            <a class="page-link" href="{{ $documents->previousPageUrl() }}">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round">
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
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <polyline points="9 6 15 12 9 18" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            @endempty
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>