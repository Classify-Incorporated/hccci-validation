<div>
    @production
        @if (empty(auth()->user()->last_password_change_at) && auth()->user()->is_required_setup)
            <div class="col-12" x-data="{ open: true }" x-show="open" x-transition:leave.duration.400ms>
                <div class="card card-md">
                    <div class="card-stamp card-stamp-lg">
                        <div class="card-stamp-icon bg-primary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7" />
                                <line x1="10" y1="10" x2="10.01" y2="10" />
                                <line x1="14" y1="10" x2="14.01" y2="10" />
                                <path d="M10 14a3.5 3.5 0 0 0 4 0" />
                            </svg>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <h3 class="h1">{{ __('dashboard.account_risk') }}</h3>
                                <div class="markdown text-muted">
                                    {{ __('dashboard.account_risk_message', ['email' => auth()->user()->email]) }}
                                </div>
                                <div class="mt-3">
                                    <a href="{{ route('profile.setup') }}" class="btn btn-warning" rel="noopener">Finish
                                        setup</a>
                                    <button class="btn btn-link" style="text-decoration: none"
                                        x-on:click="open = ! open">Ignore</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endproduction
</div>
