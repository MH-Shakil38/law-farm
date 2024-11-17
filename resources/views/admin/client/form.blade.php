
    <!-- Name and Email -->
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control"
                    value="{{ isset($client->name) ? $client->name : old('name') }}"
                    placeholder="Client's First Name" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control"
                    value="{{ isset($client->email) ? $client->email : old('email') }}"
                    placeholder="Email Address" required>
            </div>
        </div>
    </div>

    <!-- Phone and Address -->
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control"
                    value="{{ isset($client->phone) ? $client->phone : old('phone') }}"
                    placeholder="Phone Number (optional)">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" id="address" class="form-control"
                    value="{{ isset($client->address) ? $client->address : old('address') }}"
                    placeholder="Address (optional)">
            </div>
        </div>
    </div>

    <!-- City and State -->
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" name="city" id="city" class="form-control"
                    value="{{ isset($client->city) ? $client->city : old('city') }}"
                    placeholder="City (optional)">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="state" class="form-label">State</label>
                <input type="text" name="state" id="state" class="form-control"
                    value="{{ isset($client->state) ? $client->state : old('state') }}"
                    placeholder="State (optional)">
            </div>
        </div>
    </div>

    <!-- Postal Code and Country -->
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="postal_code" class="form-label">Postal Code</label>
                <input type="text" name="postal_code" id="postal_code" class="form-control"
                    value="{{ isset($client->postal_code) ? $client->postal_code : old('postal_code') }}"
                    placeholder="Postal Code (optional)">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <input type="text" name="country" id="country" class="form-control"
                    value="{{ isset($client->country) ? $client->country : old('country') }}"
                    placeholder="Country (optional)">
            </div>
        </div>
    </div>

    <!-- Case Type and Case Number -->
    <div class="row">
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
    </div>

    <!-- Case Details and Short Details -->
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="case_details" class="form-label">Case Details</label>
                <textarea name="case_details" id="case_details" class="form-control" rows="4"
                    placeholder="Provide full case details (optional)">{{ isset($client->case_details) ? $client->case_details : old('case_details') }}</textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="short_details" class="form-label">Short Details</label>
                <textarea name="short_details" id="short_details" class="form-control" rows="4"
                    placeholder="Short description of the case (optional)">{{ isset($client->short_details) ? $client->short_details : old('short_details') }}</textarea>
            </div>
        </div>
    </div>

    <!-- Date of Birth and Nationality -->
    <div class="row">
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
                <label for="nationality" class="form-label">Nationality</label>
                <input type="text" name="nationality" id="nationality" class="form-control"
                    value="{{ isset($client->nationality) ? $client->nationality : old('nationality') }}"
                    placeholder="Nationality (optional)">
            </div>
        </div>
    </div>

    <!-- Passport Number and Status -->
    <div class="row">
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
                    <option value="1" {{ isset($client->status) && $client->status == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ isset($client->status) && $client->status == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Image -->
    <div class="row">
        <div class="col-md-6">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
    </div>

    <!-- Submit Button -->
    <div class="d-flex justify-content-end" style="position: fixed; right: 74px; bottom: 30px;z-index: 99999;">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
