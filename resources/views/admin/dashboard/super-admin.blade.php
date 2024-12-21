<div class="row g-3 mb-3">


    <div class="col-md-3 col-xxl-3">
        <div class="card h-md-100">
            <div class="card-header pb-0">
                <h6 class="mb-0 mt-2">Total Client</h6>
            </div>
            <div class="card-body d-flex flex-column justify-content-end">
                <div class="row justify-content-between">
                    <div class="col-auto align-self-end">
                        <div class="fs-5 fw-normal font-sans-serif text-700 lh-1 mb-1">
                            {{ clients()->count() }}</div>

                    </div>
                    <div class="col-auto">
                        <img src="{{ asset('clients-thumbnail.png') }}" width="80" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-xxl-3">
        <div class="card h-md-100">
            <div class="card-header pb-0">
                <h6 class="mb-0 mt-2">Today Client</h6>
            </div>
            <div class="card-body d-flex flex-column justify-content-end">
                <div class="row justify-content-between">
                    <div class="col-auto align-self-end">
                        <div class="fs-5 fw-normal font-sans-serif text-700 lh-1 mb-1">
                            {{ $todayClient->count() }}</div>

                    </div>
                    <div class="col-auto">
                        <img src="{{ asset('client.png') }}" width="100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-xxl-3">
        <div class="card h-md-100">
            <div class="card-header pb-0">
                <h6 class="mb-0 mt-2">Today Case</h6>
            </div>
            <div class="card-body d-flex flex-column justify-content-end">
                <div class="row justify-content-between">
                    <div class="col-auto align-self-end">
                        <div class="fs-5 fw-normal font-sans-serif text-700 lh-1 mb-1">
                            {{ $todayCase->count() }}</div>

                    </div>
                    <div class="col-auto ps-0 mt-n4">
                        <img src="{{ asset('today-case.png') }}" alt="" width="100">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-xxl-3">
        <div class="card h-md-100">
            <div class="card-header pb-0">
                <h6 class="mb-0 mt-2">Tomorrow Case</h6>
            </div>
            <div class="card-body d-flex flex-column justify-content-end">
                <div class="row justify-content-between">
                    <div class="col-auto align-self-end">
                        <div class="fs-5 fw-normal font-sans-serif text-700 lh-1 mb-1">
                            {{ $tomorrowCase->count() }}</div>

                    </div>
                    <div class="col-auto ">
                        <img src="{{ asset('today-case.png') }}" width="100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.client.include.clients')
