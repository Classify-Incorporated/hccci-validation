<div>
    <div class="container-xl">
        <!-- Page title -->
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
                                                <span class="avatar">{{ $data->name[0] }}</span>
                                            </div>
                                            <div class="col">
                                                <div class="text-truncate">
                                                    <a href="{{ route('activity.details', $activity) }}" class="text-muted">
                                                        <strong>{{ $activity->description }}</strong>
                                                    </a>
                                                </div>
                                                <div class="text-muted">{{ $activity->created_at->diffForHumans() }}</div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="container-xl d-flex flex-column justify-content-center">
                                        <div class="empty">
                                            <div class="empty-img"><img
                                                    src="{{ asset('asset/custom/static/illustrations/undraw_posting_photo_v65l.svg') }}" height="128"
                                                    alt="">
                                            </div>
                                            <p class="empty-title">Hmm.. there's no activity to report yet.</p>
                                            <p class="empty-subtitle text-muted">
                                                {{ $data->fullName() }} did not make any action.
                                            </p>
                                        </div>
                                    </div>
                                @endforelse
                            </div>

                            @empty(!$log)
                                <div class="d-flex mt-4">
                                    <ul class="pagination ms-auto">
                                        <li class="page-item {{ $log->onFirstPage() ? 'disabled' : '' }}">
                                            <a class="page-link" href="{{ $log->previousPageUrl() }}">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <polyline points="15 6 9 12 15 18" />
                                                </svg>
                                                prev
                                            </a>
                                        </li>

                                        <li class="page-item {{ $log->hasMorePages() ? '' : 'disabled' }}">
                                            <a class="page-link" href="{{ $log->nextPageUrl() }}">
                                                next
                                                <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <polyline points="9 6 15 12 9 18" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            @endempty
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
