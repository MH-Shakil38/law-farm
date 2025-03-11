@extends('frontend.layouts.app')

@section('content')
    <section class="top-position1 pt-0">
        <div class="page-title-section bg-img cover-background secondary-overlay" data-overlay-dark="8"
            data-background="{{ asset('v1') }}/img/bg-3.jpg"
            style="background-image: url({{ asset('v1') }}/img/bg-3.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <h1>{{ $service->name }}</h1>
                            <div class="heading-seprator"></div>
                            <p class="text-white fs-4 mb-0 letter-spacing-2">Receive legal guidance from our trusted &
                                experienced business attorneys.”</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="{{ url('/') }}">{{ $service->parent->name }}</a></li>
                            <li><a href="#!">{{ $service->name }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <section class="pt-100 pb-100">
                <div class="container">
                    {!! @$service->details !!}
                </div>
            </section>
        </div>

    </section>

@endsection
