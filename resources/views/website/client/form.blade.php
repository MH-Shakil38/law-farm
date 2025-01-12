<style>
    .ftco-navbar-light {
        top: unset;
    }

    nav#ftco-navbar {
        background: #222831 !important;
        color: #2c2f3a !important;
    }

    .ftco-navbar-light.scrolled .nav-link {

        color: #fff !important;
    }

    @media (min-width: 1024px) {
        .reg-div {
            margin-top: 40px !important;
        }
    }
</style>
<div class="formbold-main-wrapper">

    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="formbold-form-wrapper">
        <div class="card">
            <div class="card-body p-4 reg-div" style="border: 1px solid #eac15a;background:#0e2c2d">
                <form action="{{ route('tmp.client.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row justify-content-center mb-2 pb-3">
                                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                                    <span class="subheading">Law Office of Pema Lhamu Bhutia</span>
                                    <h2 class="mb-4">Clients Entry Form</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6  col-sm-12 col-lg-6">
                            <div class="formbold-mb-5">
                                <label for="name" class="formbold-form-label text-uppercase"> First Name </label>
                                <input type="text" name="first_name" id="first_name" placeholder="First Name"
                                    class="formbold-form-input" />
                            </div>
                        </div>
                        <div class="col-md-6  col-sm-12 col-lg-6">
                            <div class="formbold-mb-5">
                                <label for="name" class="formbold-form-label text-uppercase"> Last Name </label>
                                <input type="text" name="last_name" id="name" placeholder="Last Name"
                                    class="formbold-form-input" />
                            </div>
                        </div>
                        <div class="col-md-6  col-sm-12 col-lg-6">
                            <div class="formbold-mb-5">
                                <label for="name" class="formbold-form-label"> Email </label>
                                <input type="email" name="email" id="name" placeholder="example@gmail.com"
                                    class="formbold-form-input" />
                            </div>
                        </div>
                        <div class="col-md-6  col-sm-12 col-lg-6">
                            <div class="formbold-mb-5">
                                <label for="name" class="formbold-form-label text-uppercase"> Phone </label>
                                <input type="text" name="phone" id="name" placeholder="phone number"
                                    class="formbold-form-input" />
                            </div>
                        </div>
                        <div class="col-md-6  col-sm-12 col-lg-6">
                            <div class="formbold-mb-5">
                                <label for="name" class="formbold-form-label"> Alien Number </label>
                                <input type="text" name="alien_number" id="name" placeholder="Alien Number"
                                    class="formbold-form-input" />
                            </div>
                        </div>

                        <div class="col-md-6  col-sm-12 col-lg-6">
                            <div class="formbold-mb-5">
                                <label for="name" class="formbold-form-label"> Maritial Status </label>
                                <select name="marritial_status" id="" required>
                                    <option disabled selected>Select Maritial Status</option>
                                    <option {{ old('marritial_status') == 'Single' ? 'selected' : ''}}  value="Single">Single</option>
                                    <option {{ old('marritial_status') == 'Married' ? 'selected' : ''}}  value="Married">Married</option>
                                    <option {{ old('marritial_status') == 'Divorced' ? 'selected' : ''}}  value="Divorced">Divorced</option>
                                    <option {{ old('marritial_status') == 'Separated' ? 'selected' : ''}}  value="Separated">Separated</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6  col-sm-12 col-lg-6">
                            <div class="formbold-mb-5">
                                <label for="name" class="formbold-form-label"> Gender </label>
                                <select name="gender" id="" required>
                                    <option disabled selected>Select Gender</option>
                                    <option  {{ old('gender') == 'male' ? 'selected' : ''}} value="male">Male</option>
                                    <option {{ old('gender') == 'female' ? 'selected' : ''}} value="female">Female</option>
                                    <option {{ old('gender') == 'other' ? 'selected' : ''}} value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6  col-sm-12 col-lg-6">
                            <div class="formbold-mb-5">
                                <label for="name" class="formbold-form-label"> <b> Date Of Birth</b> </label>
                                <input type="date" name="date_of_birth" id="name" placeholder="DOB" value="{{ old('date_of_birth') }}"
                                    class="formbold-form-input" />
                            </div>
                        </div>



                        <div class="col-md-6  col-sm-12 col-lg-6">
                            <div class="formbold-mb-5">
                                <label for="case" class="formbold-form-label"> Case Type </label>
                                <select name="case_type" class="formbold-form-input">

                                    @forelse ($case_types as $data)
                                        <option {{ old('case_type') == $data->id ? 'selected' : ''}} value="{{ $data->id }}">{{ $data->name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6  col-sm-12 col-lg-6">
                            <div class="formbold-mb-5">
                                <label for="name" class="formbold-form-label"> Reference By </label>
                                <input type="text" name="ref_by" id="name" placeholder="Referance Name" value="{{ old('ref_by') }}"
                                    class="formbold-form-input" />
                            </div>
                        </div>


                        <div class="col-md-6  col-sm-12 col-lg-6">
                            <div class="formbold-mb-5">
                                <label for="name" class="formbold-form-label"> Upload Image </label>
                                <input type="file" name="image" id="name" placeholder=""
                                    class="formbold-form-input" />
                            </div>
                        </div>


                        <div class="col-md-12  col-sm-12 col-lg-12">
                            <div class="formbold-mb-5">
                                <label for="name" class="formbold-form-label"> Case Details </label>
                                <textarea name="case_details" class="" id="" cols="30" rows="5">{{ old('case_details') }}</textarea>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="formbold-form-label formbold-form-label-2">
                                Address Details
                            </label>
                        </div>

                        <div class="col-md-12  col-sm-12 col-lg-12">
                            <div class="formbold-mb-5">
                                <input type="text" name="address" id="address" value="{{ old('address') }}" placeholder="Address"
                                    class="formbold-form-input" />
                            </div>
                        </div>

                        <div class="col-md-4  col-sm-4 col-lg-4">
                            <div class="formbold-mb-5">
                                <input type="text" name="city" id="city" value="{{ old('city') }}" placeholder="City Name"
                                    class="formbold-form-input" />
                            </div>
                        </div>

                        <div class="col-md-4  col-sm-4 col-lg-4">
                            <div class="formbold-mb-5">
                                <input type="text" name="state" value="{{ old('state') }}" id="state" placeholder="State State"
                                    class="formbold-form-input" />
                            </div>
                        </div>

                        <div class="col-md-4  col-sm-4 col-lg-4">
                            <div class="formbold-mb-5">
                                <input type="text" name="zip_code" value="{{ old('zip_code') }}" id="zip_code" placeholder="Zip Code"
                                    class="formbold-form-input" />
                            </div>
                        </div>
                    </div>

                    <div class="float-end">
                        <p><button class="btn btn-primary form-control">Submit Form</button></p>
                    </div>
                </form>
            </div>
        </div>


    </div>
</div>
<style>
    .formbold-main-wrapper {
        background: #2c2f3a !important;
    }

    .formbold-mb-5 {
        margin-bottom: 20px;
    }

    .formbold-main-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 48px;
    }

    .formbold-form-wrapper {
        margin: 0 auto;
        max-width: 800px;
        width: 100%;
        /* background: white; */
    }

    .formbold-form-label {
        display: block;
        font-weight: 500;
        font-size: 16px;
        /* color: #07074d; */
        margin-bottom: 12px;
    }

    .formbold-form-label-2 {
        font-weight: 600;
        font-size: 20px;
        margin-bottom: 20px;
    }


    .formbold-form-input,
    textarea {
        width: 100%;
        padding: 10px 24px;
        /* border-radius: 6px; */
        border: 1px solid #e0e0e0;
        background: white;
        font-weight: 500;
        font-size: 16px;
        color: #6b7280;
        outline: none;
        resize: none;
    }

    select {
        width: 100%;
        padding: 12px 24px;
        /* border-radius: 6px; */
        border: 1px solid #e0e0e0;
        background: white;
        font-weight: 500;
        font-size: 16px;
        color: #6b7280;
        outline: none;
        resize: none;
    }

    .formbold-form-input:focus {
        border-color: #6a64f1;
        box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }

    .formbold-btn {
        text-align: center;
        font-size: 16px;
        /* border-radius: 6px; */
        padding: 14px 32px;
        border: none;
        font-weight: 600;
        background-color: #6a64f1;
        /* color: white; */
        width: 100%;
        cursor: pointer;
    }

    .formbold-btn:hover {
        box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }

    .formbold--mx-3 {
        margin-left: -12px;
        margin-right: -12px;
    }

    .formbold-px-3 {
        padding-left: 12px;
        padding-right: 12px;
    }

    .flex {
        display: flex;
    }

    .flex-wrap {
        flex-wrap: wrap;
    }

    .w-full {
        width: 100%;
    }

    @media (min-width: 540px) {
        .sm\:w-half {
            width: 50%;
        }
    }
</style>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session('success'))
    <script>
        Swal.fire({
            title: 'Success!',
            text: '{{ session('success') }}.',
            icon: 'success',
            timer: 5000, // Auto-close after 2 seconds
            showConfirmButton: false,
            confirmButtonText: 'OK'
        });
    </script>
@endif
@if ($errors->any())
    <script>
        let errorMessages = `
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        `;

        Swal.fire({
            title: 'Please Try Again',
            html: errorMessages,
            icon: 'error',
            confirmButtonText: 'OK'
        });
    </script>
@endif
