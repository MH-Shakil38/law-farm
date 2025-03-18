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
                            <p class="text-white fs-4 mb-0 letter-spacing-2">"Receive legal guidance from our trusted &
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
                            <li><a href="{{  url('/') }}">{{ @$service->parent->name }}</a></li>
                            <li><a href="#!">{{ $service->name }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <section class="pt-100 pb-100">
                        <div class="container">
                            {!! @$service->details !!}
                        </div>
                    </section>
                </div>

                <div class="col-md-4"  style="background: #092245">
                        <div class="ps-xl-1-9 p-2" >
                            <h3 class="footer-title p-2">Our Services</h3>
                            <ul class="footer-list-style1">
                                @forelse (service_menu() as $data)
                                @php
                                    $child = $data->child->count() > 0 ? true : false;
                                @endphp
                                <li>
                                    <a href="{{ route('service.details',$data->id) }}" class="{{ $data->id == $service->id ? 'active-color' :'' }}">
                                        {{ $data->name }} {{ $child ? `<span class="toggle-icon"></span>` : '' }}
                                    </a>
                                    @if ($child)
                                    <ul id="{{ $data->name }}" class="submenu collapse show">
                                        @forelse ($data->child as $info)
                                        <li><a class="{{ $info->id == $service->id ?'active-color' : '' }}" href="{{ route('service.details',$info->id) }}">{{ $info->name }}</a></li>
                                        @empty
                                        @endforelse
                                    </ul>
                                    @endif

                                </li>
                                @empty
                                @endforelse
                            </ul>
                    </div>



                </div>
            </div>

        </div>

    </section>

    <style>
        .active-color{
            color: #eac213 !important;
        }
    </style>

@endsection
