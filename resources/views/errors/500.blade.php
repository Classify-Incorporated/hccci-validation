<x-tabler-guest-layout :code="500">
    <div class="container-tight py-4">
        <div class="empty">
            <div class="empty-header">
                <img src="{{ asset('asset/images/errors/500.svg') }}" height="300"
                    alt=""></div>
            <p class="empty-title">Internal Server Error</p>
            <p class="empty-subtitle text-muted">
                The server has been deserted for a while. Please be patient or try again later.
            </p>
        </div>
    </div>
</x-tabler-guest-layout>
