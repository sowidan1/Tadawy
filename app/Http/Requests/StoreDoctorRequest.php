<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDoctorRequest extends FormRequest
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
            'email' => 'required|email|unique:doctors,email',
            'password' => 'required|string',
            'phoneNumber' => 'required|string',
            'specialty' => 'required|string',
            'year_of_experience' => 'required|integer',
            'gender' => 'required|in:male,female',
            'date_of_birth' => 'nullable|date',
            'clinic' => 'required|exists:clinics,id',
        ];
    }
}
