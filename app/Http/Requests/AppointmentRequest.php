<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
{

    protected function prepareForValidation()
    {
        // Convert the 'date' input from 'DD-MM-YYYY' format to 'YYYY-MM-DD' format
        $this->merge([
            'date' => \DateTime::createFromFormat('d-m-Y', $this->date)->format('Y-m-d'),
            'time' => \DateTime::createFromFormat('h:i A', $this->time)->format('H:i'), // Convert to 24-hour format
        ]);
    }


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

            'doctor_id' => 'required|exists:doctors,id',
            'patient_id' => 'required|exists:patients,id',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
        ];
    }
}
