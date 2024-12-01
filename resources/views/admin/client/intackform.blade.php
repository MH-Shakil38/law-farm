    <style>
        .custome-input {
            border: unset;
            border-bottom: 2px dashed #dddddd;
        }


    </style>
    <div class="row mb-4">
        <div class="col-md-6">
            {{-- <span>Date:</span> --}}
            {{-- <input type="date" name="date" class="custome-input" value=""> --}}
        </div>
        <div class="col-md-12">
            <span>Referred by:</span>
            <input type="text" name="ref_by" class="custome-input" value="{{isset($client) ? $client->ref_by : old('ref_by') }}">
        </div>
    </div>

{{--
    <div class="row mb-4">
        <div class="col-md-12 text-end">
            <span>A #:</span>
            <input type="text" name="ref_by" class="custome-input" value="">
        </div>
    </div> --}}




    <!-- Name and Email -->
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="name" class="form-label">Names and surnames </label>
                <input type="text" name="name" id="name" class="form-control"
                    value="{{ isset($client->name) ? $client->name : old('name') }}" placeholder="Client's First Name"
                    required>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="date_of_birth" class="form-label">Date of Birth</label>
                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control"
                    value="{{ isset($client->date_of_birth) ? $client->date_of_birth : old('date_of_birth') }}"
                    placeholder="Date of Birth (optional)">
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="direction" class="form-label">Direction</label>
                <input type="text" name="direction" id="direction" class="form-control"
                    value="{{ isset($client->direction) ? $client->direction : old('direction') }}" placeholder=""
                    required>
            </div>
        </div>


        <div class="col-md-6">
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" name="city" id="city" class="form-control"
                    value="{{ isset($client->city) ? $client->city : old('city') }}" placeholder="City (optional)">
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-3">
                <label for="state" class="form-label">State</label>
                <input type="text" name="state" id="state" class="form-control"
                    value="{{ isset($client->state) ? $client->state : old('state') }}" placeholder="State (optional)">
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-3">
                <label for="zip_code" class="form-label">Zip Code</label>
                <input type="text" name="zip_code" id="zip_code" class="form-control"
                    value="{{ isset($client->zip_code) ? $client->zip_code : old('zip_code') }}"
                    placeholder="Zip Code (optional)">
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <input type="text" name="country" id="country" class="form-control"
                    value="{{ isset($client->country) ? $client->country : old('country') }}"
                    placeholder="Country (optional)">
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-3">
                <label for="phone" class="form-label">Cell Phone</label>
                <input type="text" name="phone" id="phone" class="form-control"
                    value="{{ isset($client->phone) ? $client->phone : old('phone') }}"
                    placeholder="Phone Number (optional)">
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control"
                    value="{{ isset($client->email) ? $client->email : old('email') }}" placeholder="Email Address"
                    required>
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" id="address" class="form-control"
                    value="{{ isset($client->address) ? $client->address : old('address') }}"
                    placeholder="Address (optional)">
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="maritalstatus">Marital Status</label> <br>

                <div class="form-check form-check-inline">
                    <input
                        class="form-check-input"
                        id="inlineRadio2"
                        type="radio"
                        name="marrital_status"
                        value="Single"
                        {{isset($client) && $client->marrital_status === 'Single' ? 'checked' : '' }}
                    />
                    <label class="form-check-label" for="inlineRadio2">Single</label>
                </div>

                <div class="form-check form-check-inline">
                    <input
                        class="form-check-input"
                        id="inlineRadio1"
                        type="radio"
                        name="marrital_status"
                        value="Married"
                        {{isset($client) && $client->marrital_status === 'Married' ? 'checked' : '' }}
                    />
                    <label class="form-check-label" for="inlineRadio1">Married</label>
                </div>

                <div class="form-check form-check-inline">
                    <input
                        class="form-check-input"
                        id="inlineRadio3"
                        type="radio"
                        name="marrital_status"
                        value="Divorced"
                        {{isset($client) && $client->marrital_status === 'Divorced' ? 'checked' : '' }}
                    />
                    <label class="form-check-label" for="inlineRadio3">Divorced</label>
                </div>

                <div class="form-check form-check-inline">
                    <input
                        class="form-check-input"
                        id="inlineRadio4"
                        type="radio"
                        name="marrital_status"
                        value="Separated"
                        {{isset($client) && $client->marrital_status === 'Separated' ? 'checked' : '' }}
                    />
                    <label class="form-check-label" for="inlineRadio4">Separated</label>
                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="mb-3">
                <label for="maritalstatus">Gender</label> <br>

                <div class="form-check form-check-inline">
                    <input
                        class="form-check-input"
                        id="inlineRadioMale"
                        type="radio"
                        name="gender"
                        value="male"
                        {{isset($client) && $client->gender === 'male' ? 'checked' : '' }}
                    />
                    <label class="form-check-label" for="inlineRadioMale">Male</label>
                </div>

                <div class="form-check form-check-inline">
                    <input
                        class="form-check-input"
                        id="inlineRadioFemale"
                        type="radio"
                        name="gender"
                        value="female"
                        {{isset($client) && $client->gender === 'female' ? 'checked' : '' }}
                    />
                    <label class="form-check-label" for="inlineRadioFemale">Female</label>
                </div>

                <div class="form-check form-check-inline">
                    <input
                        class="form-check-input"
                        id="inlineRadioOther"
                        type="radio"
                        name="gender"
                        value="other"
                        {{isset($client) && $client->gender === 'other' ? 'checked' : '' }}
                    />
                    <label class="form-check-label" for="inlineRadioOther">Other</label>
                </div>
            </div>
        </div>



        <div class="col-md-6">
            <div class="mb-3">
                <label for="case_type" class="form-label">Case Type</label>
                <select name="case_type" id="case_type" class="form-control">
                    <option disabled {{ isset($client->case_type) ? '' : 'selected' }}>Select Case Type</option>
                    @forelse ($caseTypes as $info)
                        <option value="{{ $info->id }}"
                            {{ isset($client->case_type) && $client->case_type == $info->id ? 'selected' : '' }}>
                            {{ $info->name }}
                        </option>
                    @empty
                        <option disabled>No Case Types Available</option>
                    @endforelse
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="case_number" class="form-label">Case Number</label>
                <input type="text" name="case_number" id="case_number" class="form-control"
                    value="{{ isset($client->case_number) ? $client->case_number : old('case_number') }}"
                    placeholder="Case Number (optional)">
            </div>
        </div>

        <div class="col-md-12">
            <div class="mb-3">
                <label for="case_details" class="form-label">Brief description of the legal problem / type of case:
                </label>
                <textarea name="case_details" id="case_details" class="form-control" rows="4"
                    placeholder="Provide full case details (optional)">{{ isset($client->case_details) ? $client->case_details : old('case_details') }}</textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-3">
                <label for="short_details" class="form-label">Short description </label>
                <textarea name="short_details" id="short_details" class="form-control" rows="2"
                    placeholder="Short description of the case (optional)">{{ isset($client->short_details) ? $client->short_details : old('short_details') }}</textarea>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="nationality" class="form-label">Nationality</label>
                <input type="text" name="nationality" id="nationality" class="form-control"
                    value="{{ isset($client->nationality) ? $client->nationality : old('nationality') }}"
                    placeholder="Nationality (optional)">
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="passport_number" class="form-label">Passport Number</label>
                <input type="text" name="passport_number" id="passport_number" class="form-control"
                    value="{{ isset($client->passport_number) ? $client->passport_number : old('passport_number') }}"
                    placeholder="Passport Number (optional)">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-select" required>
                    <option value="1" {{ isset($client->status) && $client->status == 1 ? 'selected' : '' }}>
                        Active</option>
                    <option value="0" {{ isset($client->status) && $client->status == 0 ? 'selected' : '' }}>
                        Inactive</option>
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <div class="d-flex justify-content-end" style="position: fixed; right: 74px; bottom: 30px;z-index: 99999;">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
