@extends('admin.layouts.app')
@section('content')
    <div class="card mb-3">
        <div class="row g-0">

            <div class="col-lg-12 pe-lg-2 mb-3">
                <div class="card h-lg-100 overflow-hidden">

                    <div class="card-body p-0">


                        @forelse (activeuser() as $info)
                            <div class=" card row g-0 align-items-center py-2 position-relative border-bottom border-200">
                                <div class="col-12">
                                    <div class="card font-sans-serif">
                                        <div class="card-body d-flex gap-3 flex-column flex-sm-row align-items-center">
                                            <div class="avatar avatar-2xl {{ check_activities($info) }}" style="height: 6.5rem; width: 6.5rem;">
                                            <img class="rounded-3 "  src="{{ asset($info->image) }}"  onerror="this.src='{{ asset('thumbnail.png') }}';" alt="" width="112">
                                        </div>
                                            <table class="table table-borderless fs-10 fw-medium mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="p-1" style="width: 35%;">Last Online:</td>
                                                        <td class="p-1 text-600">{{ \Carbon\Carbon::parse($info->last_activity)->format('d M, h:m A') }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="p-1" style="width: 35%;">Login:</td>
                                                        <td class="p-1 text-600">{{ \Carbon\Carbon::parse($info->last_logedin)->format('d M, h:m A') }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="p-1" style="width: 35%;">Email:</td>
                                                        <td class="p-1"><a class="text-600 text-decoration-none"
                                                                href="mailto:goodguy@nicemail.com">{{ $info->email }} </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="p-1" style="width: 35%;">Mobile No:</td>
                                                        <td class="p-1"><a class="text-600 text-decoration-none"
                                                                href="tel:+01234567890 ">{{ $info->phone }} </a><span
                                                                class="badge rounded-pill badge-subtle-primary d-none d-md-inline-block ms-2">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="dropdown btn-reveal-trigger position-absolute top-0 end-0 m-3"><button
                                                    class="btn btn-link btn-reveal text-600 btn-sm dropdown-toggle dropdown-caret-none"
                                                    type="button" id="studentInfoDropdown" data-bs-toggle="dropdown" data-boundary="viewport"
                                                    aria-haspopup="true" aria-expanded="false"><svg
                                                        class="svg-inline--fa fa-ellipsis-h fa-w-16 fs-11" aria-hidden="true" focusable="false"
                                                        data-prefix="fas" data-icon="ellipsis-h" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                                        </path>
                                                    </svg><!-- <span class="fas fa-ellipsis-h fs-11"></span> Font Awesome fontawesome.com --></button>
                                                <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="studentInfoDropdown">
                                                    <a class="dropdown-item" href="#!">View Profile</a><a class="dropdown-item"
                                                        href="#!">Activities</a>
                                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                                        href="#!">Logout</a>
                                                </div>
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
