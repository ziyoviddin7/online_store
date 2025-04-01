<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
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
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20|regex:/^\+?[0-9\s\-\(\)]{7,20}$/',
            'postal_code' => 'required|string|max:20',
            'country' => 'required|string|max:100',
            'region_city' => 'required|string|max:255',
            'address' => 'nullable|string|max:500',
        ];
    }
    public function messages(): array
    {
        return [
            'phone.regex' => 'Incorrect phone format. Example: +7 912 3456789',
        ];
    }
}
