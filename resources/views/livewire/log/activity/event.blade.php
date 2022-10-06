<div>
    <div class="card-body">
        <h3 class="card-title">Top Event</h3>
        <table class="table table-sm table-borderless">
            <thead>
                <tr>
                    <th>Event</th>
                    <th class="text-end">Hits</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $event)
                    <tr>
                        <td>
                            <div class="progressbg">
                                <div class="progress progressbg-progress">
                                    <div class="progress-bar bg-primary-lt" style="width: 82.54%" role="progressbar"
                                        aria-valuenow="82.54" aria-valuemin="0" aria-valuemax="100"
                                        aria-label="82.54% Complete">
                                        <span class="visually-hidden">82.54% Complete</span>
                                    </div>
                                </div>
                                <div class="progressbg-text">{{ $event['event'] }}</div>
                            </div>
                        </td>
                        <td class="w-1 fw-bold text-end">{{ $event['total'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
