<div>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="form-group mb-3 row">
        <label class="col-3 col-form-label required">Old Password</label>
        <div class="col">
            <input type="password" class="form-control @error('old_password') is-invalid @enderror" autocomplete="off" wire:model="old_password">
            @error('old_password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="form-group mb-3 row">
        <label class="col-3 col-form-label required">New Password</label>
        <div class="col">
            <input type="password" class="form-control @error('new_password') is-invalid @enderror" autocomplete="off" wire:model="new_password">
            @error('new_password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="form-group mb-3 row">
        <label class="col-3 col-form-label required">Confirm Password</label>
        <div class="col">
            <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" autocomplete="off" wire:model="confirm_password">
            @error('confirm_password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="form-footer">
        <button type="submit" class="btn btn-primary" wire:click.prevent="update">Update</button>
    </div>
</div>
