<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg',
            'discount' => 'nullable|integer|min:1|max:100', // Скидка от 1% до 100%
            'discount_start' => 'nullable|date', // Дата начала скидки
            'discount_end' => 'nullable|date|after_or_equal:discount_start', // Дата окончания скидки, должна быть после даты начала
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'required|exists:brands,id',
            'tag_id' => 'required|exists:brands,id', 
        ];
    }
}
