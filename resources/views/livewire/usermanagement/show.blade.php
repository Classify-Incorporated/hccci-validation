<div>
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Profile
                    </h2>
                </div>

                @if (session()->has('new_password'))
                    <div class="alert alert-success" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)">
                        {{ session('new_password') }}
                    </div>
                @endif
                @if (session()->has('success'))
                    <div class="alert alert-success" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <span class="d-none d-sm-inline">
                            <div  x-data="{ open: false }">
                                <div x-show="!open" >
                                    <a class="btn btn-warning" @click="open = ! open">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 icon-tabler-a-b-2" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M16 21h3c.81 0 1.48 -.67 1.48 -1.48l.02 -.02c0 -.82 -.69 -1.5 -1.5 -1.5h-3v3z">
                                            </path>
                                            <path d="M16 15h2.5c.84 -.01 1.5 .66 1.5 1.5s-.66 1.5 -1.5 1.5h-2.5v-3z"></path>
                                            <path d="M4 9v-4c0 -1.036 .895 -2 2 -2s2 .964 2 2v4"></path>
                                            <path d="M2.99 11.98a9 9 0 0 0 9 9m9 -9a9 9 0 0 0 -9 -9"></path>
                                            <path d="M8 7h-4"></path>
                                        </svg>
                                        Reset password
                                    </a>
                                </div>
                                <div x-show="open" >
                                    <button class="btn btn-warning" type="button" x-show="open" wire:click="reset_password()">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 icon-tabler-alert-triangle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 9v2m0 4v.01"></path>
                                            <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75"></path>
                                        </svg>
                                        Confirm reset password
                                    </button>
                                </div>
                            </div>
                          </span>
                        <div class="btn-list btn-primary flex-nowrap">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle align-text-top" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Actions
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" style="">
                                    <a class="dropdown-item" href="{{ route('user.disable-account', $data) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler me-2 icon-tabler-circle-off" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M20.042 16.045a9 9 0 0 0 -12.087 -12.087m-2.318 1.677a9 9 0 1 0 12.725 12.73">
                                            </path>
                                            <path d="M3 3l18 18"></path>
                                        </svg>
                                        {{ ($data->status) ? "Enable account" : 'Disable account' }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('user.role', $data) }}">
                                    {{-- <a class="dropdown-item" href="#"> --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 icon-tabler-a-b-2" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M16 21h3c.81 0 1.48 -.67 1.48 -1.48l.02 -.02c0 -.82 -.69 -1.5 -1.5 -1.5h-3v3z">
                                            </path>
                                            <path d="M16 15h2.5c.84 -.01 1.5 .66 1.5 1.5s-.66 1.5 -1.5 1.5h-2.5v-3z"></path>
                                            <path d="M4 9v-4c0 -1.036 .895 -2 2 -2s2 .964 2 2v4"></path>
                                            <path d="M2.99 11.98a9 9 0 0 0 9 9m9 -9a9 9 0 0 0 -9 -9"></path>
                                            <path d="M8 7h-4"></path>
                                        </svg>
                                        Change role
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">

                <div class="col-md-6 col-lg-4">
                    <div class="row row-cards">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">Basic info</div>
                                    <div class="mb-2">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/book -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 icon-tabler-user"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                        </svg>
                                        Full Name: <strong>{{ $data->fullName() }}</strong>
                                    </div>
                                    <div class="mb-2">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/clock -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <circle cx="12" cy="12" r="9" />
                                            <polyline points="12 7 12 12 15 15" />
                                        </svg>
                                        Commissioned: <strong>{{ $data->created_at->format('F d, Y') }}</strong>
                                    </div>
                                    <div class="card-title">User info</div>
                                    <div class="mb-2">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/book -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 icon-tabler-at"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="12" cy="12" r="4"></circle>
                                            <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28"></path>
                                        </svg>
                                        Email: <strong>{{ $data->email }}</strong>
                                    </div>
                                    <div class="mb-2">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/book -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 icon-tabler-shield-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M9 12l2 2l4 -4"></path>
                                            <path d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3"></path>
                                         </svg>
                                        Email Verified: <strong>{{ $data->email_verified_at?->diffForHumans() ?? 'Unverified' }}</strong>
                                    </div>
                                    <div class="mb-2">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                        </svg>
                                        Last password update: <strong>{{ $data->last_password_change_at?->diffForHumans() ?? '' }}</strong>
                                    </div>
                                    <div class="mb-2">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/book -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 icon-tabler-alert-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="12" cy="12" r="9"></circle>
                                            <line x1="12" y1="8" x2="12" y2="12"></line>
                                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                        </svg>
                                        Account Status: <strong>{{ ($data->status) ? 'Suspended' : 'Active' }}</strong>
                                    </div>

                                    {{-- <div class="card-title">Last Login</div>
                                    <dl class="row">
                                        <dt class="col-5">Date:</dt>
                                        <dd class="col-7">2020-01-05 16:42:29 UTC</dd>
                                        <dt class="col-5">Location:</dt>
                                        <dd class="col-7"><span class="flag flag-country-ph"></span>
                                            Philippines</dd>
                                        <dt class="col-5">IP Address:</dt>
                                        <dd class="col-7">46.113.11.3</dd>
                                        <dt class="col-5">Operating system:</dt>
                                        <dd class="col-7">Windows 10 64-bit</dd>
                                        <dt class="col-5">Browser:</dt>
                                        <dd class="col-7">Chrome</dd>
                                    </dl> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Roles</div>
                            <dl class="row">
                                @foreach ($data->getRoleNames() as $role)
                                    <dd class="col-7">{{ ucwords($role) }}</dd>
                                @endforeach
                            </dl>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-12 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Permissions</div>
                            <dl class="row">
                                @foreach ($data->getAllPermissions() as $permission)
                                    <dd class="col-7">{{ ucwords($permission->name) }}</dd>
                                @endforeach
                            </dl>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
