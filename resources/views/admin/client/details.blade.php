@extends('admin.layouts.app')
@section('content')
    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card"
            style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);"></div>

        <div class="card-body position-relative"
            style="background-image:url({{ asset('/') }}/assets/img/icons/spot-illustrations/corner-4.png);">
            <div class="content ">

                {{-- personal details --}}
                <div class="card mb-3">
                    <div class="card-header position-relative min-vh-25 mb-7">
                        <div class="bg-holder rounded-3 rounded-bottom-0"
                            style="background-image:url(../../assets/img/generic/4.jpg);">
                        </div><!--/.bg-holder-->
                        <div class="avatar avatar-5xl avatar-profile"><img class="rounded-circle img-thumbnail shadow-sm"
                                src="{{ asset($client->image) }}" onerror="this.src='{{ asset('thumbnail.png') }}';"
                                width="200" alt=""></div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8">

                                <h4 class="mb-1"> {{ $client->name }}
                                </h4>
                                <h5 class="text-500">{{ $client->short_details }}</h5>
                                @include('admin.client.include.client-button')
                                @include('admin.client.include.personal-details')
                                <hr>
                                @include('admin.client.include.case-details')
                                @include('admin.client.include.invoice-list')
                                @include('admin.client.include.hearing')
                                @include('admin.client.include.files')

                            </div>
                            <div class="col-md-4 col-sm-12 ps-2 ps-lg-4">
                                @include('admin.client.include.client-info')
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end --}}



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
        <script>
            $(document).ready(function() {
                $('#summernote').summernote({
                    placeholder: 'Enter Case Agrement short details',
                    tabsize: 2,
                    height: 120,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['fullscreen', 'codeview', 'help']]
                    ]
                });
            });

            $(document).ready(function() {
                $('#invoice-summernote').summernote({
                    placeholder: 'Enter Your payment note',
                    tabsize: 2,
                    height: 120,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['fullscreen', 'codeview', 'help']]
                    ]
                });
            });
        </script>

        <link href="{{ asset('/') }}vendors/flatpickr/flatpickr.min.css" rel="stylesheet" />
        <script src="{{ asset('/') }}vendors/flatpickr/flatpickr.min.js"></script>
    @endsection
