<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
            ],
            'description' => [
                'required',
                'string',
            ],
            'price' => [
                'required',
                'numeric',
            ],
            'quantity' => [
                'required',
                'numeric',
            ],
            'image' => [
                'required',
                'image',
                'dimensions:min_width=300,min_height=300',
                'mimes:jpg,jpeg,png',
            ],
        ];
    }
}
