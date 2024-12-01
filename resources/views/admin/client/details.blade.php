@extends('admin.layouts.app')
@section('content')
    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card"
            style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);"></div>

        <div class="card-body position-relative"
            style="background-image:url({{ asset('/') }}/assets/img/icons/spot-illustrations/corner-4.png);">
            <div class="content ">

                {{-- personal details --}}
                @include('admin.client.include.personal-details')


                {{-- <div class="row g-0">
                    <div class="col-lg-8 pe-lg-2">
                        @include('admin.client.include.case-details')

                        @include('admin.client.include.hearing')

                        @include('admin.client.include.files')

                    </div>
                    <div class="col-lg-4 ps-lg-2">
                        <div class="sticky-sidebar">
                            @include('admin.client.include.case-info')

                            @include('admin.client.include.client-info')


                        </div>
                    </div>
                </div> --}}


            </div>
        </div>
        <link href="{{ asset('/') }}vendors/flatpickr/flatpickr.min.css" rel="stylesheet" />
        <script src="{{ asset('/') }}vendors/flatpickr/flatpickr.min.js"></script>
    @endsection
