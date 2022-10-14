<x-tabler-layout>
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        User role
                    </h2>
                    <small class="text-muted">Changing user role might have serious effect on application security. Proceed with caution.</small>

                </div>
                {{-- <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                      <span class="d-none d-sm-inline">
                        <a href="{{ route('user.permission', $user) }}" class="btn btn-outline-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 icon-tabler-alert-triangle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 9v2m0 4v.01"></path>
                                <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75"></path>
                             </svg>
                          Override Permission
                        </a>
                      </span>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('user.role.update', $user) }}" method="post">
                                @csrf
                                @method('PUT')

                                    <div class="form-group row">
                                        <label class="col-3 col-form-label pt-0">Roles</label>
                                        
                                        <div class="col">
                                            <div>
                                                @foreach ($roles as $role)
                                                    <label class="form-check">
                                                        {{-- type="checkbox" {{ (in_array($role->name, $data->roles->pluck('name')->toArray())) ? 'checked' : '' }} --}}
                                                        <input 
                                                        value="{{ strtolower($role->name) }}"
                                                        name="role"
                                                        class="form-check-input" 
                                                        type="checkbox"
                                                        {{ (in_array($role->name, $user->roles->pluck('name')->toArray())) ? 'checked' : '' }}
                                                        >
                                                        <span class="form-check-label">{{ ucwords($role->name) }}</span>
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-footer" x-data="{ open: false }">
    
                                    <div x-show="!open">
                                        <a href="javascript:void();" class="btn btn-outline-success w-100" @click="open = ! open">
                                            Apply
                                        </a>
                                    </div>
                                    <div x-show="open" class="text-center">

                                        <h1>Heads Up!</h1>

                                        <small>Are you sure you want to make this changes?</small>

                                        <button type="submit" class="btn btn-outline-danger w-100 mt-3">
                                            Confirm
                                        </button>

                                        <a href="{{ route('user.show', $user) }}" class="btn btn-success w-100 mt-3">
                                            Cancel
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-tabler-layout>