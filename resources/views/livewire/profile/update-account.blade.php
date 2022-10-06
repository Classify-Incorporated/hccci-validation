<div>
    <div class="form-group mb-3 row">
        <label class="col-3 col-form-label required">Full name (First, Last)</label>
        <div class="col">
            <div class="row g-2">
                <div class="col-6">
                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" wire:model="first_name"
                        placeholder="Enter first name">
                        @error('first_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                </div>
                <div class="col-6">
                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" wire:model="last_name"
                        placeholder="Enter last name">
                    @error('last_name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
              </div>
        </div>
    </div>
    <div class="form-group mb-3 row">
        <label class="col-3 col-form-label required">Email address</label>
        <div class="col">
            <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model="email"
                placeholder="Enter email">
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="form-footer">
        <button type="submit" class="btn btn-primary" wire:click="save" {{ ($isDisable) ? 'disabled' : '' }}>Update</button>
        @if (session()->has('success'))
            <small class="text-dark"> {{ session('success') }}</small>
        @endif
    </div>
</div>
