<div>
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Users
                    </h2>
                    <div class="text-muted mt-1 {{ empty($users) ? 'd-none' : '' }}">{{ $users->count() }} of
                        {{ $users->total() }}
                        people</div>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="d-flex">
                        <input type="search" wire:model="search"
                            class="form-control d-inline-block w-9 me-3 {{ empty($users) ? 'd-none' : '' }}"
                            placeholder="Search user…" />
                        @can('create user')
                            <a href="{{ route('user.create') }}" class="btn btn-primary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <line x1="12" y1="5" x2="12" y2="19" />
                                    <line x1="5" y1="12" x2="19" y2="12" />
                                </svg>
                                New user
                            </a>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">

            <div class="row row-cards">
                @forelse ($users as $user)
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body p-4 text-center">
                                <span class="avatar avatar-xl mb-3 avatar-rounded"
                                    style="background-image: url({{ $user->avatarUrl() }})"></span>
                                {{-- <span class="avatar avatar-xl mb-3 avatar-rounded">{{ $user->name }}</span> --}}
                                <h3 class="m-0 mb-1"><a href="#">{{ $user->fullName() }}</a></h3>
                                <div class="text-muted">{{ ($user->status) ? 'Disabled' : 'Active' }}</div>
                                <div class="mt-3">
                                    @if (!empty($user->getRoleNames()))
                                        @foreach ($user->getRoleNames() as $role)
                                            <span class="badge bg-purple-lt">{{ ucwords($role) }}</span>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            @can('view user')
                                <div class="d-flex">
                                    <a href="{{ route('user.show', $user) }}" class="card-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon me-2 text-muted icon-tabler-edit" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                            <path
                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                            </path>
                                            <path d="M16 5l3 3"></path>
                                        </svg>
                                        Profile
                                    </a>
                                    <a href="{{ route('users.activty', $user) }}" class="card-btn">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/phone -->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon me-2 text-muted icon-tabler-article" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <rect x="3" y="4" width="18" height="16"
                                                rx="2">
                                            </rect>
                                            <path d="M7 8h10"></path>
                                            <path d="M7 12h10"></path>
                                            <path d="M7 16h10"></path>
                                        </svg>
                                        Activity
                                    </a>
                                </div>
                            @endcan
                        </div>
                    </div>
                @empty
                    <div class="container-xl d-flex flex-column justify-content-center">
                        <div class="empty">
                            <div class="empty-img"><img
                                    src="{{ asset('asset/custom/static/illustrations/undraw_work_together_h63l.svg') }}"
                                    height="128" alt="">
                            </div>
                            <p class="empty-title">No results found</p>
                            @can('create user')
                                <p class="empty-subtitle text-muted">
                                    It looks like you don't have any user. Let's create your first user
                                </p>
                                <div class="empty-action">
                                    <a href="{{ route('user.create') }}" class="btn btn-primary">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <line x1="12" y1="5" x2="12" y2="19" />
                                            <line x1="5" y1="12" x2="19" y2="12" />
                                        </svg>
                                        Add your first user
                                    </a>
                                </div>
                            @endcan
                        </div>
                    </div>
                @endforelse
            </div>

        @empty(!$users)
            <div class="d-flex mt-4">
                <ul class="pagination ms-auto">
                    <li class="page-item {{ $users->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $users->previousPageUrl() }}">
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

                    <li class="page-item {{ $users->hasMorePages() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $users->nextPageUrl() }}">
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
