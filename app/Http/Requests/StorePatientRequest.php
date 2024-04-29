<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePatientRequest extends FormRequest
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
        return [
            'Full_Name' => 'required|string',
            'photo' => 'nullable',
            'email' => 'required|email|unique:patients,email',
            'password' => 'required|string',
            'phoneNumber' => 'required|string',
            'gender' => 'required|in:male,female',
            'date_of_birth' => 'required|date',
        ];
    }
}
