<x-tabler-guest-layout bgwhite="bg-white">

    @if ($authentic)
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-md-6">
                    <div class="border-0">
                        <img src="{{ asset('asset/images/verify/verify.svg') }}" alt="" srcset=""
                            width="90%">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center pt-5 border-0">
                        <div>
                            <h1>{{ $data->document_series_no ?? '' }}</h1>
                            <p>is authentic document</p>
                            <div class="col-md-12 markdown mb-5">
                                <h4>Date of Issue</h4>
                                <p>{{ $data->created_at->format('F d, Y') }}</p>
                                <h4>Type</h4>
                                <p>Letter</p>
                                <h4>Designation</h4>
                                <p>Safety and Security</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($authentic == false)
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-md-6">
                    <div class="border-0">
                        <img src="{{ asset('asset/images/verify/In_thought.svg') }}" alt="" srcset=""
                            width="90%">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center pt-5 border-0">
                        <div>
                            <h1>{{ $id }}</h1>
                            <p>cannot be verified</p>

                            <div class="col-md-12 markdown mt-5 mb-5">
                                <div>
                                    <p>The document id above does not exist on our record or it has been deleted.</p>
                                    <p class="mb-5">If you believe this was a mistake please contact us so we can
                                        investigate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

</x-tabler-guest-layout>
