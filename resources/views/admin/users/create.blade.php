@extends('admin.layouts.app')
@section('content')
    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card"
            style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);"></div><!--/.bg-holder-->
        <div class="card-body position-relative">
            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    {{-- main content start --}}
                    <div class="col-12">
                        <h3>Create Emaployee</h3>
                    </div>
                    {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="exampleFormControlInput1">Name <span class="text-danger">*</span>
                        </label>
                        <input name="name" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="John Doe" />
                        @error('name')
                            <span class="text-warning">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="exampleFormControlInput1">Email<span class="text-danger">*</span>
                        </label>
                        <input name="email" type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="johndoe@gmail.com" />
                        @error('email')
                            <span class="text-warning">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="exampleFormControlInput1">Phone<span class="text-danger">*</span>
                        </label>
                        <input name="phone" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="123456789" />
                    </div>

                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="exampleFormControlInput1">Password <span class="text-danger">*</span></label>
                        <input name="password" type="text" class="form-control" id="exampleFormControlInput1" />
                        @error('password')
                            <span class="text-warning">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="exampleFormControlInput1">Password Confirmation <span class="text-danger">*</span></label>
                        <input name="password_confirmation" type="text" class="form-control" id="exampleFormControlInput1" />
                        @error('password_confirmation')
                            <span class="text-warning">{{ $message }}</span>
                        @enderror
                    </div>




                    <div class="mb-3 col-md-2">
                        <label class="form-label" for="exampleFormControlInput1">Is Active</label>
                        <select name="isActive" class="form-control" id="">
                            <option value="1">Active</option>
                            <option value="0">InActive</option>
                        </select>
                    </div>

                    <div class="mb-3 col-md-2">
                        <label class="form-label" for="exampleFormControlInput1">Role Id</label>
                        <select name="isActive" class="form-control" id="">
                            <option value="1">Admin</option>
                            <option value="2">Employee</option>
                        </select>
                    </div>

                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="exampleFormControlInput1">Picture</label>
                        <input name="image" type="file" class="form-control" id="exampleFormControlInput1" />
                    </div>

                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="exampleFormControlInput1">Document's (Pdf/Image)</label>
                        <input name="file" type="file" class="form-control" id="exampleFormControlInput1" />
                    </div>


                    <div class="mb-3"><label class="form-label" for="exampleFormControlTextarea1">Address</label>
                        <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    {{-- main content end --}}
                    <div class="mb-3 col-md-2">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
