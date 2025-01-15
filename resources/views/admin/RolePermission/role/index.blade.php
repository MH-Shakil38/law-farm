@extends('admin.layouts.app')
@section('content')
    <div class="row">

        @if (count($errors) > 0)
            <div class="alert alert-danger">

                <strong>Whoops!</strong> There were some problems with your input.<br><br>

                <ul>

                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>

            </div>
        @endif



        <div class="col-md-12">
            <div class="card p-4">
                <div class="card-header text-center">
                    <ul class="nav nav-pills text-center" id="pill-myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="pill-home-tab" data-bs-toggle="tab"
                                href="#role-new" role="tab" aria-controls="role-new" aria-selected="true">New</a></li>
                        @forelse ($roles as $role)
                            <li class="nav-item"><a class="nav-link" id="pill-home-tab" data-bs-toggle="tab"
                                    href="#role{{ $role->id }}" role="tab" aria-controls="role{{ $role->id }}"
                                    aria-selected="true">{{ $role->name }}</a></li>
                        @empty
                            No roles available
                        @endforelse
                    </ul>

                </div>
                <div class="row">

                    <div class="col-lg-12 margin-tb">

                        <div class="pull-left">

                            {{-- <ul class="nav nav-pills" id="pill-myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="pill-home-tab" data-bs-toggle="tab"
                                        href="#pill-tab-home" role="tab" aria-controls="pill-tab-home"
                                        aria-selected="true">Home</a></li>
                                <li class="nav-item"><a class="nav-link" id="pill-profile-tab" data-bs-toggle="tab"
                                        href="#pill-tab-profile" role="tab" aria-controls="pill-tab-profile"
                                        aria-selected="false">Profile</a></li>
                                <li class="nav-item"><a class="nav-link" id="pill-contact-tab" data-bs-toggle="tab"
                                        href="#pill-tab-contact" role="tab" aria-controls="pill-tab-contact"
                                        aria-selected="false">Contact</a></li>
                            </ul> --}}
                            <div class="tab-content border p-3 mt-3" id="pill-myTabContent">
                                @forelse ($roles as $role)
                                    <div class="tab-pane fade" id="role{{ $role->id }}" role="tabpanel"
                                        aria-labelledby="home-tab">

                                        <form action="{{ route('roles.update',$role->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="card">
                                                    <div class="form-group">
                                                        <strong>Name:</strong> <br>
                                                        <input type="text" name="name" value="{{ $role->name }}" class="form-control-lg w-100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 mt-4">

                                                <div class="form-group">

                                                    <strong>Permission:</strong>

                                                    <br />
                                                    <div class="row">


                                                        @foreach ($permissions as $prefix => $item)
                                                            <div class="col-md-4 mt-2">
                                                                <div class="card border">
                                                                    <div class="card-header border-bottom">
                                                                        <h4>{{ ucfirst($prefix) }}</h4>
                                                                        <!-- Select All Checkbox -->

                                                                    </div>
                                                                    <div class="card-body">
                                                                        @foreach ($item as $value)
                                                                            <label>
                                                                                <input type="checkbox"
                                                                                class="child-checkbox"
                                                                                name="permissions[]"
                                                                                {{ in_array($value->id, $role->permissions->pluck('id')->toArray()) ? 'checked' : '' }}
                                                                                value="{{ $value->id }}">
                                                                                {{ $value->name }}
                                                                            </label>
                                                                            <br />
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach



                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                                                <button type="submit" class="btn btn-primary"
                                                    style="position: fixed; bottom: 30px;right: 30px;">Submit</button>

                                            </div>

                                        </div>

                                    </form>
                                    </div>
                                @empty
                                @endforelse
                                <div class="tab-pane fade active show" id="role-new" role="tabpanel"
                                    aria-labelledby="profile-tab">
                                    {!! Form::open(['route' => 'roles.store', 'method' => 'POST']) !!}

                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="card">
                                                <div class="form-group">
                                                    <strong>Name:</strong> <br>
                                                    <input type="text" name="name" value="" class="form-control-lg w-100">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 mt-4">

                                            <div class="form-group">

                                                <strong>Permission:</strong>

                                                <br />
                                                <div class="row">


                                                    @foreach ($permissions as $prefix => $item)
                                                        <div class="col-md-4 mt-2">
                                                            <div class="card border">
                                                                <div class="card-header border-bottom">
                                                                    <h4>{{ ucfirst($prefix) }}</h4>
                                                                    <!-- Select All Checkbox -->
                                                                    <label>
                                                                        <input type="checkbox" class="select-all"
                                                                            data-prefix="{{ $prefix }}" />
                                                                        Select All
                                                                    </label>
                                                                </div>
                                                                <div class="card-body">
                                                                    @foreach ($item as $value)
                                                                        <label>
                                                                            {{ Form::checkbox('permissions[]', $value->id, false, ['class' => 'name permission', 'data-prefix' => $prefix]) }}
                                                                            {{ $value->name }}
                                                                        </label>
                                                                        <br />
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                    <!-- JavaScript to handle select all -->
                                                    <script>
                                                        // Handle Select All functionality for each prefix
                                                        document.querySelectorAll('.select-all').forEach(function(selectAllCheckbox) {
                                                            selectAllCheckbox.addEventListener('change', function() {
                                                                const prefix = this.getAttribute('data-prefix');
                                                                const checkboxes = document.querySelectorAll(`input[data-prefix="${prefix}"].permission`);

                                                                checkboxes.forEach(function(checkbox) {
                                                                    checkbox.checked = selectAllCheckbox.checked;
                                                                });
                                                            });
                                                        });
                                                    </script>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                                            <button type="submit" class="btn btn-primary"
                                                style="position: fixed; bottom: 30px;right: 30px;">Submit</button>

                                        </div>

                                    </div>

                                    {!! Form::close() !!}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endsection
