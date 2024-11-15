@extends('admin.layouts.app')
@section('content')
    <div class="card mb-3" style="height: 100%">
        <div class="bg-holder d-none d-lg-block bg-card"
            style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);"></div><!--/.bg-holder-->

        <div class="card-body position-relative">
            <h5><a href="{{ route('users.index') }}">Employee</a></h5>
            <hr>
            <form>
                <div class="row mb-3"><label class="col-sm-2 col-form-label" for="inputEmail3">New Password</label>
                    <div class="col-sm-10"><input class="form-control" id="inputEmail3" type="email" /></div>
                </div>
                <div class="row mb-3"><label class="col-sm-2 col-form-label" for="inputPassword3">Password Confirm</label>
                    <div class="col-sm-10"><input class="form-control" id="inputPassword3" name="password_" type="password" /></div>
                </div>

                <div class="row mb-3"><label class="col-sm-2 col-form-label" for="inputPassword3"></label>
                    <div class="col-sm-10">
                        <button class="btn btn-primary" type="submit">Chagne Password</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    @include('alert.toster')
@endsection
