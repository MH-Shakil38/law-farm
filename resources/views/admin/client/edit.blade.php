@extends('admin.layouts.app')

@section('content')
    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card"
            style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);"></div>
        <div class="card-body position-relative">
            <div class="card-header">
                <div class="row flex-between-center">
                    <div class="col-4 col-sm-auto d-flex align-items-center pe-0">
                        <h5 class="fs-9 mb-0 text-nowrap py-2 py-xl-0">Add Client</h5>
                    </div>

                    <div class="col-8 col-sm-auto text-end ps-2">
                        <a href="{{ route('clients.index') }}" class="btn btn-falcon-default btn-sm" type="button">
                            <svg class="svg-inline--fa fa-arrow-left fa-w-14" data-fa-transform="shrink-3 down-2"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M413.7 233.4l-184.6-184c-9.4-9.4-24.6-9.4-34 0l-184.6 184c-9.4 9.4-9.4 24.6 0 34l34 34c9.4 9.4 24.6 9.4 34 0l114.6-114.5V376c0 13.3 10.7 24 24 24h96c13.3 0 24-10.7 24-24V217.3l114.6 114.5c9.4 9.4 24.6 9.4 34 0l34-34c9.4-9.4 9.4-24.6 0-34z">
                                </path>
                            </svg>
                            <span class="d-none d-sm-inline-block ms-1">Back</span>
                        </a>
                    </div>
                </div>
            </div>
            @if ($errors->any())
                <ul>
                    <div class="alert alert-danger border-0 d-flex align-items-center" role="alert">
                        @foreach ($errors->all() as $error)
                            <div class="bg-danger me-3 icon-item">

                                <span class="fas fa-times-circle text-white fs-6"></span>
                            </div>
                            <p class="mb-0 flex-1">{{ $error }}!</p><button class="btn-close" type="button"
                                data-bs-dismiss="alert" aria-label="Close"></button>
                        @endforeach

                    </div>
                </ul>
            @endif
            <div class="card-body">
                <form action="{{ route('clients.update',$client->id) }}" method="POST" class="dropzone dropzone-multiple p-0"
                    id="my-awesome-dropzone" data-dropzone="data-dropzone" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('admin.client.intackform')
                </form>
            </div>
        </div>
    </div>

    <link href="{{ asset('/') }}vendors/dropzone/dropzone.css" rel="stylesheet" />
    <script src="{{ asset('/') }}vendors/dropzone/dropzone-min.js"></script>
@endsection
