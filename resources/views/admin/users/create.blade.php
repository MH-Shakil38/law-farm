@extends('admin.layouts.app')
@section('content')
    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card"
            style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);"></div><!--/.bg-holder-->
        <div class="card-body position-relative">
            <div class="row">
                {{-- main content start --}}
                <div class="col-12">
                    <h3>Create Emaployee</h3>
                </div>
                <div class="mb-3"><label class="form-label" for="exampleFormControlInput1">Email address</label><input
                        class="form-control" id="exampleFormControlInput1" type="email" placeholder="name@example.com" />
                </div>
                <div class="mb-3"><label class="form-label" for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                {{-- main content end --}}
            </div>
        </div>
    </div>
@endsection
