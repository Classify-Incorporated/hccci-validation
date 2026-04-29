<div>
    <div class="container-xl">
        <div class="page-header d-print-none">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Activity
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="divide-y">
                                @forelse ($log as $activity)
                                    <div>
                                        <div class="row">
                                            <div class="col-auto">
                                                <span class="avatar" style="
                                                    background-color: #206bc4; 
                                                    color: white; 
                                                    display: inline-flex; 
                                                    align-items: center; 
                                                    justify-content: center; 
                                                    width: 36px; 
                                                    height: 36px; 
                                                    border-radius: 50%; 
                                                    font-weight: bold; 
                                                    text-transform: uppercase;">
                                                    {{-- Use the causer of the activity, fallback to '?' --}}
                                                    {{ $activity->causer ? substr($activity->causer->first_name, 0, 1) . substr($activity->causer->last_name, 0, 1) : '?' }}
                                                </span>
                                            </div>
                                            <div class="col">
                                                <div class="text-truncate">
                                                    <a href="{{ route('activity.details', $activity) }}" class="text-muted">
                                                        <strong>{{ $activity->description ?? 'No description' }}</strong>
                                                    </a>
                                                </div>
                                                <div class="text-muted">
                                                    {{-- FIX: Added null check for created_at --}}
                                                    {{ $activity->created_at ? $activity->created_at->diffForHumans() : 'Date unknown' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="container-xl d-flex flex-column justify-content-center">
                                        <div class="empty">
                                            <div class="empty-img">
                                                <img src="{{ asset('asset/custom/static/illustrations/undraw_posting_photo_v65l.svg') }}" height="128" alt="">
                                            </div>
                                            <p class="empty-title">Hmm.. there's no activity to report yet.</p>
                                            <p class="empty-subtitle text-muted">
                                                {{-- FIX: Added null check for fullName method --}}
                                                {{ $data ? $data->fullName() : 'User' }} did not make any action.
                                            </p>
                                        </div>
                                    </div>
                                @endforelse
                            </div>

                            @if($log && $log->count() > 0)
                                <div class="d-flex mt-4">
                                    <ul class="pagination ms-auto">
                                        <li class="page-item {{ $log->onFirstPage() ? 'disabled' : '' }}">
                                            <a class="page-link" href="{{ $log->previousPageUrl() }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <polyline points="15 6 9 12 15 18" />
                                                </svg>
                                                prev
                                            </a>
                                        </li>
                                        <li class="page-item {{ $log->hasMorePages() ? '' : 'disabled' }}">
                                            <a class="page-link" href="{{ $log->nextPageUrl() }}">
                                                next
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <polyline points="9 6 15 12 9 18" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>