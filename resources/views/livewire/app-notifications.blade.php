<div>
    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
        <div class="card" style="width: 18rem;">
            <div class="card-header">
                <h3 class="card-title">Notifications</h3>
                @if($notifications->count() != 0)
                    <div class="card-actions">
                        <a href="#" class="btn btn-link text-dark" wire:click.prevent="mark_all_as_read">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-checkup-list" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path>
                                <rect x="9" y="3" width="6" height="4" rx="2"></rect>
                                <path d="M9 14h.01"></path>
                                <path d="M9 17h.01"></path>
                                <path d="M12 16l1 1l3 -3"></path>
                            </svg>
                        </a>
                    </div>
                @endif
            </div>
            <div class="list-group list-group-flush list-group-hoverable">
                @forelse ($notifications as $notification)
                    <div class="list-group-item">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="status-dot status-dot-animated bg-green d-block"></span>
                            </div>
                            <div class="col text-truncate">
                                <a href="{{ route('notification.index') }}" class="text-body d-block">{{ $notification->data['user'] }}</a>
                                <div class="d-block text-muted text-truncate mt-n1">
                                    {{ $notification->data['message'] }}
                                </div>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="list-group-item-actions" wire:click="mark_read('{{ $notification->id }}')">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted icon-tabler-message-share" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M20 11v3a3 3 0 0 1 -3 3h-9l-4 4v-13a3 3 0 0 1 3 -3h7"></path>
                                        <path d="M17 4h4v4"></path>
                                        <path d="M16 9l5 -5"></path>
                                     </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="list-group-item">
                        <div class="row align-items-center">
                            <div class="col text-truncate">
                                <img src="{{ asset('asset/images/notification.png') }}" alt="" srcset="">
                                <h3 class="text-body d-block text-center"><strong>No notifications yet</strong></h3>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
