@extends('admin.layouts.app')

@section('content')
    @include('admin.client.include.clients',['today'=>false])
@endsection
