<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUpdateRequest extends FormRequest
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
            'FIO'       => 'nullable|string',
            'company'   => 'nullable|string|max:255',
            'phone'     => 'nullable|integer|numeric',
            'email'     => 'nullable|string|email:rfc,dns',
            'birthDate' => 'nullable|string|date',
            'img'       => 'nullable|image',
        ];
    }
}
