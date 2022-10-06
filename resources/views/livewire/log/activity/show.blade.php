<div>
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        {{ $title }}
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-body">
                    <h4>
                        Checked URL
                    </h4>
                    <div>
                        <pre><code>{{ $data->properties['http_method'] ?? 'GET' }} <a class="text-reset" target="_blank" href="javascript:void();   ">{{ $data->properties['Check_url'] ?? '-' }}</a></code></pre>
                    </div>
                    <h4>Log Body</h4>
                    <div>
                        <pre>User Agent&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="text-reset" target="_blank" href="https://api.apicagent.com/?ua={{ $data->properties['User Agent'] ?? '-' }}">{{ $data->properties['User Agent'] ?? '-' }}</a><br>Event&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $data->event ?? '-' }}<br>Description&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $data->description }}<br>Form Affected&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $data->subject_type ?? '-' }}<br>Form ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $data->subject_id ?? '-' }}<br>Performed by&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $data->causer->name ?? '-' }}<br>Document series no&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $data->properties['document_series_number'] ?? '-' }}<br>Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $data->created_at }}</pre>
                    </div>
                    <h4>Response Headers</h4>
                    <div>
                        <pre>HTTP/1.1 200 Connection established</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
