<div>
    <input type="search" class="form-control d-inline-block w-9 me-3"
                                wire:model="search" placeholder="Search event" />
    <table class="table table-vcenter card-table">
        <thead>
            <tr>
                <th>Date and Time</th>
                <th>Event</th>
                <th>Activity</th>
                <th>By</th>
                <th class="w-1"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $data)
                <tr>
                    <td>{{ $data->created_at->format('M d, Y h:m A') }}</td>
                    <td class="text-muted">{{ ucwords($data->event) }}</td>
                    <td class="text-muted">{{ $data->description }}</td>
                    <td class="text-muted">{{ $data->causer?->name }}</td>
                    <td>
                        <a href="{{ route('activity.details', $data) }}">Details</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Insufficient Data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
