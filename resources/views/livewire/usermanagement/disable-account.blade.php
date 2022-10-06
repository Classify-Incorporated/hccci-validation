<div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="divide-y">
                                <div>
                                    <div class="row">
                                        <div class="col text-center">
                                            <div>
                                                <img src="{{ asset('asset/images/Account Disable Warning.svg') }}" alt="account_disable" height="300px">
                                            </div>
                                            <div class="text-truncate mt-2">
                                                You're about to {{ ($data->status) ? 'enable' : 'suspend' }} user account. Go ahead?
                                            </div>

                                            <div class="mt-3">
                                                <div class="btn-group w-100">
                                                  <button type="button" class="btn btn-outline-warning" wire:click="proceed">Proceed</button>
                                                  <button type="button" class="btn btn-outline-dark" wire:click="cancel">No</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
