<div class="row g-3 mb-3">
    <div class="col-md-6 col-xxl-3">
        <div class="card h-md-100 ecommerce-card-min-width">
            <div class="card-header pb-0">
                <h6 class="mb-0 mt-2 d-flex align-items-center">Total Client<span class="ms-1 text-400"
                        data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Calculated according to last week's sales"><span class="far fa-question-circle"
                            data-fa-transform="shrink-1"></span></span></h6>
            </div>
            <div class="card-body d-flex flex-column justify-content-end">
                <div class="row">
                    <div class="col">
                        <p class="font-sans-serif lh-1 mb-1 fs-5">{{ clients()->count() }}</p><span
                            class="badge badge-subtle-success rounded-pill fs-11"></span>
                    </div>
                    <div class="col-auto ">
                        <img src="{{ asset('clients-thumbnail.png') }}" width="100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xxl-3">
        <div class="card h-md-100">
            <div class="card-header pb-0">
                <h6 class="mb-0 mt-2">Today Client</h6>
            </div>
            <div class="card-body d-flex flex-column justify-content-end">
                <div class="row justify-content-between">
                    <div class="col-auto align-self-end">
                        <div class="fs-5 fw-normal font-sans-serif text-700 lh-1 mb-1">
                            {{ $todayClient->count() }}</div>
                        <span class="badge rounded-pill fs-11 bg-200 text-primary"><span
                                class="fas fa-caret-up me-1"></span>13.6%</span>
                    </div>
                    <div class="col-auto ">
                        <img src="{{ asset('client.png') }}" width="100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xxl-3">
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

    <div class="col-md-6 col-xxl-3">
        <div class="card h-md-100">
            <div class="card-header pb-0">
                <h6 class="mb-0 mt-2">Tomorrow Case</h6>
            </div>
            <div class="card-body d-flex flex-column justify-content-end">
                <div class="row justify-content-between">
                    <div class="col-auto align-self-end">
                        <div class="fs-5 fw-normal font-sans-serif text-700 lh-1 mb-1">
                            {{ $tomorrowCase->count() }}</div>
                        <span class="badge rounded-pill fs-11 bg-200 text-primary"><span
                                class="fas fa-caret-up me-1"></span>13.6%</span>
                    </div>
                    <div class="col-auto ">
                        <img src="{{ asset('today-case.png') }}" width="100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row g-0">
    <div class="col-lg-6 pe-lg-2 mb-3">
        <div class="card h-lg-100 overflow-hidden">
            <div class="card-header bg-body-tertiary">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="mb-0">Active User</h6>
                    </div>

                </div>
            </div>
            <hr>
            <div class="card-body p-0">
                <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                    <div class="col ps-x1 py-1 position-static">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center position-relative ">

                            </div>
                        </div>
                    </div>
                    <div class="col py-1">
                        <div class="row flex-end-center g-0">



                                <div class="col-5 pe-x1 ps-2">
                                    <div class="fs-10 fw-semi-bold">
                                        <span class="" style="font-size: 13px">Login</span>
                                    </div>
                                </div>

                                <div class="col-6 pe-x1 ps-2">
                                    <div class="fs-10 fw-semi-bold">
                                        <span class="" style="font-size: 13px">Last Activities
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                @forelse ($onlineUsers as $info)
                    <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                        <div class="col ps-x1 py-1 position-static">
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center position-relative ">
                                    <div
                                        class="avatar avatar-2xl {{ check_activities($info) }}">
                                        <img class="rounded-circle"
                                            src="{{ asset($info->image) }}"
                                            onerror="this.src='{{ asset('thumbnail.png') }}';"
                                            alt="">
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                                href="#">{{ $info->name }}</a></h6>
                                        <p class="text-500 fs-11 mb-0">{{$info->user_type == 1 ? 'Admin' :( $info->user_type == 2 ? 'Employee' : 'Lawyer') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col py-1">
                            <div class="row flex-end-center g-0">

                                    <div class="col-5 pe-x1 ps-2">
                                        <div class="fs-10 fw-semi-bold">
                                            <span class="" style="font-size: 9px">{{ \Carbon\Carbon::parse($info->last_logedin)->format('d M, h:m A') }}
                                        </div>
                                    </div>

                                    <div class="col-6 pe-x1 ps-2">
                                        <div class="fs-10 fw-semi-bold">
                                            <span class="" style="font-size: 9px">{{$info->last_activity ? \Carbon\Carbon::parse($info->last_activity)->format('d M, h:m A') : 'NULL' }}</span>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>

    <div class="col-lg-6 pe-lg-2 mb-3">
        <div class="card h-lg-100 overflow-hidden">
          <div class="card-header bg-body-tertiary">
            <div class="row align-items-center">
              <div class="col">
                <h6 class="mb-0">Tomorrow Case</h6>
              </div>
              <div class="col-auto text-center pe-x1">
                {{-- <select class="form-select form-select-sm">
                  <option>Working Time</option>
                  <option>Estimated Time</option>
                  <option>Billable Time</option>
                </select> --}}
            </div>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="card-body p-0">
                <div class="border-bottom row g-0 align-items-center py-2 position-relative border-bottom border-200">
                    <div class="col ps-x1 py-1 position-static">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center position-relative ">

                            </div>
                        </div>
                    </div>
                    <div class="col py-1">
                        <div class="row flex-end-center g-0">



                                <div class="col-6 pe-x1 ps-2">
                                    <div class="fs-10 fw-semi-bold">
                                        <span class="" style="font-size: 13px">Case Number</span>
                                    </div>
                                </div>

                                <div class="col-6 pe-x1 ps-2">
                                    <div class="fs-10 fw-semi-bold">
                                        <span class="" style="font-size: 13px">Time
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                @forelse ($tomorrowCase as $info)
                    <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                        <div class="col ps-x1 py-1 position-static">
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center position-relative ">
                                    <div
                                        class="avatar avatar-2xl">
                                        <img class="rounded-circle"
                                            src="{{ asset($info->image) }}"
                                            onerror="this.src='{{ asset('thumbnail.png') }}';"
                                            alt="">
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                                href="{{ route('clients.show',$info->id) }}">{{ $info->name }}</a></h6>
                                        <p class="text-500 fs-11 mb-0"> <b>Handle By: </b>{{$info->lawyer->name}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col py-1">
                            <div class="row flex-end-center g-0">
                                <div class="col-6 pe-x1 ps-2">
                                    <div class="fs-10 fw-semi-bold">
                                        <span class="" style="font-size: 11px">{{ $info->case_number }}</span>
                                    </div>
                                </div>
                                    <div class="col-6 pe-x1 ps-2">
                                        <div class="fs-10 fw-semi-bold">
                                            <span class="" style="font-size: 11px">{{ \Carbon\Carbon::parse($info->hearing_time)->format('d M, h:m A') }}
                                        </div>
                                    </div>


                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
          </div>
        </div>
      </div>

</div>
