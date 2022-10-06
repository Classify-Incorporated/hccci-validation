<x-tabler-layout>
    <div class="container-xl">
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="page-header mb-3">
                <div class="row align-items-center mw-100">
                    <div class="col">
                        <div class="mb-1">
                            <ol class="breadcrumb" aria-label="breadcrumbs">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">Profile</a>
                                </li>
                            </ol>
                        </div>
                        <h2 class="page-title">
                            <span class="text-truncate">Profile</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row" x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'account' }" id="tab_wrapper">
                <div class="col-12 col-md-4 px-4">
                    <div class="list-group list-group-transparent mb-3 ml-3">
                        <a class="list-group-item list-group-item-action d-flex align-items-center active"
                            :class="{ 'active': tab === 'account' }" @click.prevent="tab = 'account'; window.location.hash = 'account'" href="#">
                            Account
                            <small class="text-muted ms-auto">2</small>
                        </a>
                        <a class="list-group-item list-group-item-action d-flex align-items-center"
                            :class="{ 'active': tab === 'security' }" @click.prevent="tab = 'security'; window.location.hash = 'security'" href="#">
                            Change Password
                            <small class="text-muted ms-auto">2</small>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" x-show="tab === 'account'">
                                <div class="card-header">
                                    <h3 class="card-title">Account</h3>
                                </div>
                                <div class="card-body">
                                    <livewire:profile.update-account />
                                </div>
                            </div>
                            <div class="card" x-show="tab === 'security'">
                                <div class="card-header">
                                    <h3 class="card-title">Security</h3>
                                </div>
                                <div class="card-body">
                                    <livewire:profile.change-password />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-tabler-layout>
