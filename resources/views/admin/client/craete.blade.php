@extends('admin.layouts.app')

@section('content')
    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card"
            style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);"></div>
        <div class="card-body position-relative">
            <div class="card-header">
                <div class="row flex-between-center">
                    <div class="col-4 col-sm-auto d-flex align-items-center pe-0">
                        <h5 class="fs-9 mb-0 text-nowrap py-2 py-xl-0">Add Client</h5>
                    </div>

                    <div class="col-8 col-sm-auto text-end ps-2">
                        <a href="{{ route('clients.index') }}" class="btn btn-falcon-default btn-sm" type="button">
                            <svg class="svg-inline--fa fa-arrow-left fa-w-14" data-fa-transform="shrink-3 down-2"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M413.7 233.4l-184.6-184c-9.4-9.4-24.6-9.4-34 0l-184.6 184c-9.4 9.4-9.4 24.6 0 34l34 34c9.4 9.4 24.6 9.4 34 0l114.6-114.5V376c0 13.3 10.7 24 24 24h96c13.3 0 24-10.7 24-24V217.3l114.6 114.5c9.4 9.4 24.6 9.4 34 0l34-34c9.4-9.4 9.4-24.6 0-34z">
                                </path>
                            </svg>
                            <span class="d-none d-sm-inline-block ms-1">Back</span>
                        </a>
                    </div>
                </div>
            </div>
            @if ($errors->any())
                <ul>
                    <div class="alert alert-danger border-0 d-flex align-items-center" role="alert">
                        @foreach ($errors->all() as $error)
                            <div class="bg-danger me-3 icon-item">

                                <span class="fas fa-times-circle text-white fs-6"></span>
                            </div>
                            <p class="mb-0 flex-1">{{ $error }}!</p><button class="btn-close" type="button"
                                data-bs-dismiss="alert" aria-label="Close"></button>
                        @endforeach

                    </div>
                </ul>
            @endif
            <div class="card-body">
                <form action="{{ route('clients.store') }}" method="POST" class="dropzone dropzone-multiple p-0"
                    id="my-awesome-dropzone" data-dropzone="data-dropzone" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Client's First Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Email Address" required>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control"
                                    placeholder="Phone Number (optional)">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" name="address" id="address" class="form-control"
                                    placeholder="Address (optional)">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="city" class="form-label">City</label>
                                <input type="text" name="city" id="city" class="form-control"
                                    placeholder="City (optional)">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="state" class="form-label">State</label>
                                <input type="text" name="state" id="state" class="form-control"
                                    placeholder="State (optional)">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="postal_code" class="form-label">Postal Code</label>
                                <input type="text" name="postal_code" id="postal_code" class="form-control"
                                    placeholder="Postal Code (optional)">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" name="country" id="country" class="form-control"
                                    placeholder="Country (optional)">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="case_type" class="form-label">Case Type</label>
                                <select name="case_type" id="" class="form-control">
                                    <option disabled selected>Select Case Type</option>
                                    @forelse ($caseTypes as $info)
                                        <option value="{{ $info->id }}">{{ $info->name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="case_number" class="form-label">Case Number</label>
                                <input type="text" name="case_number" id="case_number" class="form-control"
                                    placeholder="Case Number (optional)">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="case_details" class="form-label">Case Details</label>
                                <textarea name="case_details" id="case_details" class="form-control" rows="4"
                                    placeholder="Provide full case details (optional)"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="short_details" class="form-label">Short Details</label>
                                <textarea name="short_details" id="short_details" class="form-control" rows="4"
                                    placeholder="Short description of the case (optional)"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="date_of_birth" class="form-label">Date of Birth</label>
                                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control"
                                    placeholder="Date of Birth (optional)">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nationality" class="form-label">Nationality</label>
                                <input type="text" name="nationality" id="nationality" class="form-control"
                                    placeholder="Nationality (optional)">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="passport_number" class="form-label">Passport Number</label>
                                <input type="text" name="passport_number" id="passport_number" class="form-control"
                                    placeholder="Passport Number (optional)">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" id="status" class="form-select" required>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="nationality" class="form-label">Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                        

                    </div>


                    <div class="d-flex justify-content-end" style="position: fixed;
    right: 74px;
    bottom: 30px;">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <link href="{{ asset('/') }}vendors/dropzone/dropzone.css" rel="stylesheet" />
    <script src="{{ asset('/') }}vendors/dropzone/dropzone-min.js"></script>
@endsection
