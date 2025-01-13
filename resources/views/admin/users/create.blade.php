@extends('admin.layouts.app')
@section('content')
<style>
    .create-card{
        max-width: 800px;
        margin: 0 auto;
        height: 100%;
    }
    input,select{
        width: 100%;

    }
</style>
    <div class="card mb-3 create-card">
        <div class="bg-holder d-none d-lg-block bg-card"
            style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);"></div><!--/.bg-holder-->

        <div class="card-body position-relative">
            <h5><a href="#">{{ $type ?? 'Users' }}</a></h5>
            <hr>
            @if (isset($user))
                <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                @else
                    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
            @endif
            @csrf
            <div class="row">

                <div class="mb-3 col-md-6">
                    <label class="form-label" for="exampleFormControlInput1">  Name <span class="text-danger">*</span>
                    </label> <br>
                    <input name="name" type="text" value="{{ isset($user) ? $user->name : old('name') }}"
                        class="form-control-lg" id="exampleFormControlInput1" placeholder="John Doe" />
                    @error('name')
                        <span class="text-warning">{{ $message }}</span>
                    @enderror
                </div>


                <div class="mb-3 col-md-6">
                    <label class="form-label" for="exampleFormControlInput1">Email<span class="text-danger">*</span>
                    </label> <br>
                    <input name="email" type="email" value="{{ isset($user) ? $user->email : old('email') }}"
                        class="form-control-lg" id="exampleFormControlInput1" placeholder="johndoe@gmail.com" />
                    @error('email')
                        <span class="text-warning">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label" for="exampleFormControlInput1">Phone<span class="text-danger">*</span>
                    </label> <br>
                    <input name="phone" type="text" value="{{ isset($user) ? $user->phone : old('phone') }}"
                        class="form-control-lg" id="exampleFormControlInput1" placeholder="123456789" />
                    @error('phone')
                        <span class="text-warning">{{ $message }}</span>
                    @enderror
                </div>



                {{-- <div class="mb-3 col-md-2">
                    <label class="form-label" for="exampleFormControlInput1">Is Active</label> <br>
                    <select name="isActive" class="form-control-lg" id="">
                        <option value="1" {{ isset($user) && $user->isActive == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ isset($user) && $user->isActive == 0 ? 'selected' : '' }}>InActive
                        </option>
                    </select>
                </div>
                @if ($type == 'Lawyer')
                    <input type="hidden" name="user_type" value="3">
                    <div class="mb-3 col-md-6">
                        <label for="lawyer_type">Lawyer Type</label> <br>
                        <select name="lawyer_type" class="form-select" id="">
                            <option selected>Select Lawyer Type</option>
                            @forelse ($lawyerTypes as $info)
                                <option value="{{ $info->id }}" {{ isset($user) && $user->lawyer_type == $info->id ? 'selected' : '' }}>{{ $info->name }}</option>
                            @empty

                            @endforelse
                        </select>
                    </div>
                @else
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="exampleFormControlInput1">User Type</label> <br>
                        <select name="user_type" class="form-control-lg" id="">
                            <option selected disabled>Select User Type</option>
                            <option value="1" {{ isset($user) && $user->user_type == 1 ? 'selected' : '' }}>Admin</option>
                            <option value="2" {{ isset($user) && $user->user_type == 2 ? 'selected' : '' }}>Employee </option>
                        </select>
                    </div>
                @endif --}}


                <div class="mb-3 col-md-3">
                    <label class="form-label" for="exampleFormControlInput1">Picture</label> <br>
                    <input name="image" type="file" class="form-control-lg" id="exampleFormControlInput1" />
                </div>

                {{-- <div class="mb-3 col-md-3">
                    <label class="form-label" for="exampleFormControlInput1">Document's (Pdf/Image)</label> <br>
                    <input name="file" type="file" class="form-control-lg" id="exampleFormControlInput1" />
                </div> --}}

                <div class="mb-3 col-md-6">
                    <label class="form-label" for="exampleFormControlInput1">Password <span
                            class="text-danger">*</span></label> <br>
                    <input name="password" type="text" class="form-control-lg" id="exampleFormControlInput1" />
                    @error('password')
                        <span class="text-warning">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label" for="exampleFormControlInput1">Password Confirmation <span
                            class="text-danger">*</span></label> <br>
                    <input name="password_confirmation" type="text" class="form-control-lg"
                        id="exampleFormControlInput1" />
                    @error('password_confirmation')
                        <span class="text-warning">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label class="form-label" for="exampleFormControlInput1">Primary Ip
                            <span class="text-danger">*</span></label> <br>
                        <input name="ip" type="text" class="form-control-lg"
                            value="{{ isset($user) ? $user->ip : old('ip') }}" id="exampleFormControlInput1" />
                        @error('ip')
                            <span class="text-warning">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label class="form-label" for="exampleFormControlInput1">Secondary Ip
                            <span class="text-danger">*</span></label> <br>
                        <input name="ip1" type="text" class="form-control-lg"
                            value="{{ isset($user) ? $user->ip1 : old('ip1') }}" id="exampleFormControlInput1" />
                        @error('ip')
                            <span class="text-warning">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 col-md-12">
                    <button class="btn btn-primary float-end">Submit</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    @include('alert.toster')
@endsection
