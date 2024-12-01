<?php

namespace App\Http\Requests\client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // Assuming you're passing the client ID via the route as {client}
        $client = $this->route('client');
        // dd(request()->all());
        return [
            // 'name' => 'required|string|max:255', // Client's  Name
            // 'email' => 'required|email|unique:clients,email,'.$client->id, // Email Address
            // 'phone' => 'required|string|max:25', // Phone Number
            // 'phone2' => 'nullable|string|max:25', // Phone Number
            // 'address' => 'nullable|string|max:255', // Address
            // 'city' => 'nullable|string|max:100', // City
            // 'state' => 'nullable|string|max:100', // State
            // 'postal_code' => 'nullable|string|max:20', // Postal Code
            // 'country' => 'nullable|string|max:100', // Country
            // 'case_type' => 'nullable|integer|exists:case_types,id', // Case Type (assuming a case_types table)
            // 'case_number' => "nullable|string|unique:clients,case_number,".$client->id, // Case Number
            // 'case_details' => 'nullable|string', // Case Details
            // 'short_details' => 'nullable|string', // Short Details
            // 'date_of_birth' => 'nullable|date|before:today', // Date of Birth
            // 'nationality' => 'nullable|string|max:100', // Nationality
            // 'passport_number' => 'nullable|string|max:50', // Passport Number
            // 'status' => 'required|in:0,1', // Status
            // 'image' => 'nullable|image',
            // 'ref_by' => 'nullable',
            // 'gender' => 'nullable',
            // 'hearing_date' => 'nullable',
            // 'hearing_time' => 'nullable',
            // 'lawyer_id' => 'nullable',
        ];
    }
}
