@extends('admin.layouts.app')
@section('content')
    @if (auth()->user()->user_type == 1)
    @include('admin.dashboard.super-admin')
    @elseif (auth()->user()->user_type == 2)
    @include('admin.dashboard.admin')
    @elseif (auth()->user()->user_type == 3)
    @include('admin.dashboard.lawyer')
    @endif
@endsection
