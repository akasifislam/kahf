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
            'name' => 'required|string|max:255',
            'center_id' => 'required|exists:vaccine_centers,id',
            'nid' => 'required|string|max:20|unique:patients,nid',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255|unique:patients,email',
        ];
    }
}
