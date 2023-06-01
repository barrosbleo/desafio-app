<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'unique:products,name',
                'string',
                'min:6',
                'max:80'
            ],
            'price' => [
                'required',
                'numeric',
            ],
            'category_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
