    <style>
        .custome-input {
            border: unset;
            border-bottom: 2px dashed #dddddd;
        }
        input,textarea,select{
            width: 100%;
        }


    </style>
    <div class="row mb-4">

        <div class="col-md-5 mb-4">
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
                <label for="name" class="form-label">Name And Surnames </label><br>
                <input type="text" name="name" id="name" class="form-control-lg"
                    value="{{ isset($client->name) ? $client->name : old('name') }}" placeholder="Client's Name"
                    required>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="date_of_birth" class="form-label">Date of Birth</label><br>
                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control-lg"
                    value="{{ isset($client->date_of_birth) ? $client->date_of_birth : old('date_of_birth') }}"
                    placeholder="Date of Birth (optional)">
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="direction" class="form-label">Direction</label><br>
                <input type="text" name="direction" id="direction" class="form-control-lg"
                    value="{{ isset($client->direction) ? $client->direction : old('direction') }}" placeholder=""
                    >
            </div>
        </div>


        <div class="col-md-6">
            <div class="mb-3">
                <label for="city" class="form-label">City</label><br>
                <input type="text" name="city" id="city" class="form-control-lg"
                    value="{{ isset($client->city) ? $client->city : old('city') }}" placeholder="City (optional)">
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-3">
                <label for="state" class="form-label">State</label><br>
                <input type="text" name="state" id="state" class="form-control-lg"
                    value="{{ isset($client->state) ? $client->state : old('state') }}" placeholder="State (optional)">
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-3">
                <label for="zip_code" class="form-label">Zip Code</label><br>
                <input type="text" name="zip_code" id="zip_code" class="form-control-lg"
                    value="{{ isset($client->zip_code) ? $client->zip_code : old('zip_code') }}"
                    placeholder="Zip Code (optional)">
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-3">
                <label for="country" class="form-label">Country</label><br>
                <input type="text" name="country" id="country" class="form-control-lg"
                    value="{{ isset($client->country) ? $client->country : old('country') }}"
                    placeholder="Country (optional)">
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-3">
                <label for="phone" class="form-label">Cell Phone</label><br>
                <input type="text" name="phone" id="phone" class="form-control-lg"
                    value="{{ isset($client->phone) ? $client->phone : old('phone') }}"
                    placeholder="Phone Number (optional)">
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label><br>
                <input type="email" name="email" id="email" class="form-control-lg"
                    value="{{ isset($client->email) ? $client->email : old('email') }}" placeholder="Email Address"
                    required>
            </div>
        </div>

        <div class="col-md-4">
            <span>Last Update:</span>
            <input type="text" name="last_update" class="form-control-lg" value="{{isset($client) ? $client->last_update : old('last_update') }}">
        </div>
        <div class="col-md-4">
            <span>Hearing Date:</span>
            <input type="date" name="hearing_date" class="form-control-lg" value="{{isset($client) ? $client->hearing_date : old('hearing_date') }}">
        </div>
        <div class="col-md-4">
            <span>Hearing Time:</span>
            <input type="time" name="hearing_time" class="form-control-lg" value="{{isset($client) ? $client->hearing_time : old('hearing_time') }}">
        </div>

        <div class="col-md-4">
            <div class="mb-3">
                <label for="address" class="form-label">Address</label><br>
                <input type="text" name="address" id="address" class="form-control-lg"
                    value="{{ isset($client->address) ? $client->address : old('address') }}"
                    placeholder="Address (optional)">
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="maritalstatus">Marital Status</label><br> <br>

                <div class="form-check form-check-inline">
                    <input
                        class="form-check-input"
                        id="inlineRadio2"
                        type="radio"
                        name="marrital_status"
                        value="Single"
                        {{isset($client) && $client->marrital_status === 'Single' ? 'checked' : '' }}
                    />
                    <label class="form-check-label" for="inlineRadio2">Single</label><br>
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
                    <label class="form-check-label" for="inlineRadio1">Married</label><br>
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
                    <label class="form-check-label" for="inlineRadio3">Divorced</label><br>
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
                    <label class="form-check-label" for="inlineRadio4">Separated</label><br>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="mb-3">
                <label for="maritalstatus">Gender</label><br> <br>

                <div class="form-check form-check-inline">
                    <input
                        class="form-check-input"
                        id="inlineRadioMale"
                        type="radio"
                        name="gender"
                        value="male"
                        {{isset($client) && $client->gender === 'male' ? 'checked' : '' }}
                    />
                    <label class="form-check-label" for="inlineRadioMale">Male</label><br>
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
                    <label class="form-check-label" for="inlineRadioFemale">Female</label><br>
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
                    <label class="form-check-label" for="inlineRadioOther">Other</label><br>
                </div>
            </div>
        </div>



        <div class="col-md-2 mt-4">
            @if (power())
            <div class="form-check form-check-inline">
                <label class="form-check-label" for="is_secrate">Is Secrate</label>
                <input
                    class="form-check-input"
                    id="inlineRadioOther"
                    type="checkbox"
                    name="is_secrate"
                    value="1"
                    {{isset($client) && $client->is_secrate === 1 ? 'checked' : '' }}
                />

            </div>
            @endif

        </div>



        <div class="col-md-4">
            <div class="mb-3">
                <label for="case_type" class="form-label">Case Type</label><br>
                <select name="case_type" id="case_type" class="form-control-lg">
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

        <div class="col-md-4">
            <div class="mb-3">
                <label for="case_type" class="form-label">Alien Number</label><br>
                <input type="text" name="alien_number" class="form-control-lg" placeholder="Enter Client Alien Number">
                </select>
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-3">
                <label for="case_number" class="form-label">Case Number</label><br>
                <input type="text" name="case_number" id="case_number" class="form-control-lg"
                    value="{{ isset($client->case_number) ? $client->case_number : old('case_number') }}"
                    placeholder="Case Number (optional)">
            </div>
        </div>



        <div class="col-md-12">
            <div class="mb-3">
                <label for="case_details" class="form-label">Brief description of the legal problem / type of case:
                </label><br>
                <textarea name="case_details" id="case_details" class="form-control-lg" rows="4"
                    placeholder="Provide full case details (optional)">{{ isset($client->case_details) ? $client->case_details : old('case_details') }}</textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-3">
                <label for="short_details" class="form-label">Short description </label><br>
                <textarea name="short_details" id="short_details" class="form-control-lg" rows="2"
                    placeholder="Short description of the case (optional)">{{ isset($client->short_details) ? $client->short_details : old('short_details') }}</textarea>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="nationality" class="form-label">Nationality</label><br>
                <input type="text" name="nationality" id="nationality" class="form-control-lg"
                    value="{{ isset($client->nationality) ? $client->nationality : old('nationality') }}"
                    placeholder="Nationality (optional)">
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="passport_number" class="form-label">Passport Number</label><br>
                <input type="text" name="passport_number" id="passport_number" class="form-control-lg"
                    value="{{ isset($client->passport_number) ? $client->passport_number : old('passport_number') }}"
                    placeholder="Passport Number (optional)">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="status" class="form-label">Status</label><br>
                <select name="status" id="status" class="form-select" required>
                    <option value="1" {{ isset($client->status) && $client->status == 1 ? 'selected' : '' }}>
                        Active</option>
                    <option value="0" {{ isset($client->status) && $client->status == 0 ? 'selected' : '' }}>
                        Inactive</option>
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <label for="image" class="form-label">Image</label><br>
            <input type="file" name="image" id="image" class="form-control-lg">
        </div>

        <div class="d-flex justify-content-end" style="position: fixed; right: 74px; bottom: 30px;z-index: 99999;">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
