{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

<x-tabler-guest-layout>
    <div class="container-tight py-4">
        <div class="text-center mb-4">
            <a href="." class="navbar-brand navbar-brand-autodark"><img
                    src="{{ asset('asset/images/logo_transparent.png') }}" height="46" alt=""></a>
        </div>
        <div class="col-md-12">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="text-center text-danger" :errors="$errors" />
                        <h3 class="card-title">Forgot Password</h3>
                        <p class="card-subtitle">Forgot your password? No problem. Just let us know your email address
                            and
                            we will email you a password reset link that will allow you to choose a new one.</p>
                        <div class="input-icon">
                            <input type="text" name="email" value="{{ old('email') }}" class="form-control"
                                placeholder="Email" autocomplete="off" required autofocus>
                            <span class="input-icon-addon">
                                <!-- Download SVG icon from http://tabler-icons.io/i/files -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler-at" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="4"></circle>
                                    <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row align-items-center">
                            <div class="col"></a></div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">
                                    Email Password Reset Link
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-tabler-guest-layout>
