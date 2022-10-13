<div>
    <div x-data="{show: true}"
    x-show="show"
    x-init="@this.on('saved', () => { show = false;})">

        <div class="container-xl">
            <!-- Page title -->
            <div class="page-header d-print-none">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Create User
                        </h2>
                        <span class="form-hint">Password are system generated</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group mb-3 row">
                                    <label class="col-3 col-form-label required">Name (First, Last)</label>
                                    
                                    <div class="col">
                                        <div class="row g-2">
                                            <div class="col-6">
                                                <input type="text"
                                                    class="form-control @error('first_name') is-invalid @enderror"
                                                    wire:model="first_name" value="{{ old('first_name') }}"
                                                    aria-describedby="nameHelp" placeholder="Juan"
                                                    autocomplete="off" required>
                                                @error('first_name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-6">
                                                <input type="text"
                                                    class="form-control @error('last_name') is-invalid @enderror"
                                                    wire:model="last_name" value="{{ old('last_name') }}"
                                                    aria-describedby="nameHelp" placeholder="Dela Cruz"
                                                    autocomplete="off" required>
                                                @error('last_name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <label class="col-3 col-form-label required">Username</label>
                                    <div class="col">
                                        <input type="text"
                                            class="form-control @error('username') is-invalid @enderror"
                                            wire:model="username" value="{{ old('username') }}"
                                            aria-describedby="usernameHelp" placeholder="Username" autocomplete="off"
                                            required>
                                        @error('username')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <label class="col-3 col-form-label required">Email address</label>
                                    <div class="col">
                                        <input type="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            wire:model="email" value="{{ old('email') }}"
                                            aria-describedby="emailHelp" placeholder="Email" autocomplete="off"
                                            required>
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-3 col-form-label pt-0 required">Roles</label>

                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-check mb-2">
                                                <input class="form-check-input @error('roles') is-invalid @enderror"
                                                    wire:model="roles" value="administrator" type="checkbox">
                                                <span class="form-check-label">
                                                    Administrator
                                                </span>
                                                <span class="form-check-description">
                                                    Has all the rights to make changes in the entire application
                                                    including roles and permissions.
                                                </span>
                                            </label>
                                            <label class="form-check mb-2">
                                                <input class="form-check-input @error('roles') is-invalid @enderror"
                                                    wire:model="roles" value="clerk" type="checkbox">
                                                <span class="form-check-label">
                                                    Clerk
                                                </span>
                                                <span class="form-check-description">
                                                    Has the right to create document, generate qr, view document, deactivate document
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-3 col-form-label pt-0">Require setup</label>

                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox"
                                                    wire:model="require_setup">
                                                <span class="form-check-label">
                                                    User must change password at next logon
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-footer">
                                    <button type="submit" wire:click="store" class="btn btn-primary"
                                        wire:loading.attr="disabled">Create</button>
                                </div>
                                <div wire:loading.delay wire:target="store">
                                    <span class="col-form-label text-center">Processing Request</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (session()->has('message'))
        <div class="page-body">
            <div class="container-xl">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>