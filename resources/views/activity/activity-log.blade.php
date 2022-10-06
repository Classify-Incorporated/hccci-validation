<x-tabler-layout>
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Log
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">

                <a href="{{ url('server/system-log') }}" target="_blank" class="btn btn-green">System Log</a>
                
                <div class="col-lg-8">
                    <div class="card">
                        <div class="table-responsive">
                            <livewire:log.activity.index/>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <livewire:log.activity.event/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-tabler-layout>
