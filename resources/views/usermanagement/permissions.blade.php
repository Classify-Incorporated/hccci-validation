<x-tabler-layout>
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        User permissions
                    </h2>
                    <small class="text-muted">You are about to override permission for {{ $user->fullName() }}. Proceed with caution.</small>

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
                            <form action="{{ route('user.permission.update', $user) }}" method="post">
                                @csrf
                                @method('PUT')

                                    <div class="form-group row">
                                        <label class="col-3 col-form-label pt-0">Roles</label>
                                        
                                        <div class="col">
                                            <div>
                                                @foreach ($permissions as $permission)
                                                    <label class="form-check">
                                                        <input 
                                                        value="{{ $permission->name }}"
                                                        name="role[]"
                                                        class="form-check-input" 
                                                        type="checkbox"
                                                        {{ (in_array($permission->name, $user->getAllPermissions()->pluck('name')->toArray())) ? 'checked' : '' }}
                                                        >
                                                        <span class="form-check-label">{{ ucwords($permission->name) }}</span>
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