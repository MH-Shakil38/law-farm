@extends('frontend.layouts.app')

@section('content')
        <!-- BANNER
        ================================================== -->
        @include('frontend.home.section.slider')

        <!-- ABOUTUS
        ================================================== -->
        @include('frontend.home.section.aboutus')

        <!-- SERVICE
        ================================================== -->
        @include('frontend.home.section.service')
        <!-- COUNTER
        ================================================== -->
        @include('frontend.home.section.counter')


        <!-- TEAM
        ================================================== -->
        @include('frontend.home.section.team')

        <!-- TESTIMONIAL
        ================================================== -->
        @include('frontend.home.section.testimonial')

        <!-- PORTFOLIO
        ================================================== -->
        {{-- @include('frontend.home.section.portfolio') --}}

         <!-- PROCESS
        ================================================== -->
        {{-- @include('frontend.home.section.process') --}}

        <!-- EXTRA
        ================================================== -->
        @include('frontend.home.section.extra')

        <!-- BLOG
        ================================================== -->
        {{-- @include('frontend.home.section.blog') --}}
@endsection
