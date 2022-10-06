<div>
    <div class="container-tight py-4">
        @if(session()->has('verify_failed'))
            <div class="empty">
                <div class="empty-header">
                    <img src="{{ asset('asset/images/verify/failed.svg') }}" height="300"
                        alt=""></div>
                <p class="empty-title">Sorry, we couldn't confirm your id</p>
                
                <div class="empty-action">
                    <a href="javascript:location.reload();" class="btn btn-primary">
                        <!-- Download SVG icon from http://tabler-icons.io/i/arrow-left -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-refresh-dot" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4"></path>
                            <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4"></path>
                            <circle cx="12" cy="12" r="1"></circle>
                        </svg>
                        Try again
                    </a>
                </div>
                <p class="empty-subtitle text-muted mt-5">
                    Do you need any help? <a href="#" class="text-info">We can help</a>
                </p>
            </div>
        @endif

        @if(!session()->has('verify_failed'))
            <div class="text-center mb-4">
            <a href="." class="navbar-brand navbar-brand-autodark"><img src="{{ asset('asset/images/gfi_logo.svg') }}" height="56" alt=""></a>
            </div>
            <div class="card card-md">
            <div class="card-body text-center">
                <div class="mb-4">
                <p class="text-muted">To help keep gensan feedmill inc prevent malicious document alternation, we need you to provide your employee id.</p>
                <p>Verification only takes a few minutes</p>
                </div>
                <div>
                    <div class="d-flex justify-content-center" wire:loading.remove>
                        <div id="qr-reader" style="width: 300px"></div>
                    </div>
                    {{-- <div>
                        <lord-icon
                            src="{{ asset('asset/images/lord-icon/identity.json') }}"
                            trigger="loop"
                            style="width:250px;height:250px">
                        </lord-icon>
                        <p>Hold on! We are just checking your existence.</p>
                    </div> --}}
                </div>
            </div>
            </div>
        @endif
    </div>

    @section('script')
        <script src="{{ asset('asset/js/html5-qrscan.js') }}"></script>
        <script>
            function docReady(fn) {
                // see if DOM is already available
                if (document.readyState === "complete" || document.readyState === "interactive") {
                    // call on next available tick
                    setTimeout(fn, 1);
                } else {
                    document.addEventListener("DOMContentLoaded", fn);
                }
            } 
            
            docReady(function() {
                var lastResult, countResults = 0;
                
                var html5QrcodeScanner = new Html5QrcodeScanner(
                    "qr-reader", { fps: 10, qrbox: 250 });
                
                function onScanSuccess(decodedText, decodedResult) {
                    if (decodedText !== lastResult) {
                        ++countResults;
                        lastResult = decodedText;
                        console.log(`Scan result = ${decodedText}`, decodedResult);
                        Livewire.emit('getQRResult', `${decodedText}`);

                        // Optional: To close the QR code scannign after the result is found
                        html5QrcodeScanner.clear();
                    }
                }
                
                html5QrcodeScanner.render(onScanSuccess);
            });
        </script>
    @endsection
</div>
