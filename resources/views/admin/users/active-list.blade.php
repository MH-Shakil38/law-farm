@extends('admin.layouts.app')
@section('content')
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-lg-12 pe-lg-2 mb-3">
                <div class="card h-lg-100 overflow-hidden">

                    <div class="card-body p-0">

                        <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200" style="background: #e5e5e5">
                            <div class="col ps-x1 py-1 position-static">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center position-relative ">

                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                                    href="#" style="font-size:20px">Active List</a></h6>
                                            <p class="text-500 fs-11 mb-0"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col py-1">
                                <div class="row flex-end-center g-0">

                                        <div class="col-5 pe-x1 ps-2">
                                            <div class="fs-10 fw-semi-bold">
                                                <span class="" style="font-size: 20px">Login
                                            </div>
                                        </div>

                                        <div class="col-6 pe-x1 ps-2">
                                            <div class="fs-10 fw-semi-bold">
                                                <span class="" style="font-size: 20px">Last Active</span>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        @forelse (activeuser() as $info)
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
                                                <p class="text-500 fs-11 mb-0">{{$info->user_type == 1 ? 'Super Admin' :( $info->user_type == 2 ? 'Admin' : 'Lawyer') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col py-1">
                                    <div class="row flex-end-center g-0">

                                            <div class="col-5 pe-x1 ps-2">
                                                <div class="fs-10 fw-semi-bold">
                                                    <span class="" style="font-size: 15px">{{ \Carbon\Carbon::parse($info->last_logedin)->format('d M, h:m A') }}
                                                </div>
                                            </div>

                                            <div class="col-6 pe-x1 ps-2">
                                                <div class="fs-10 fw-semi-bold">
                                                    <span class="" style="font-size: 15px">{{$info->last_activity ? \Carbon\Carbon::parse($info->last_activity)->format('d M, h:m:s A') : 'NULL' }}</span>
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
@endsection
