<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfantRequest extends FormRequest
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
            // 'temperature' => 'required',
            // 'humidity' => 'required',
            // 'heart_Rate' => 'required',
            'color_sensor' => 'required|in:Jaundice,Not_jaundice',
        ];
    }
}
