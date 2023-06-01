<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductFormRequest extends FormRequest
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
            'id' => [
                'required',
                'integer',
                'min:6',
                'max:80'
            ],
            'name' => [
                'unique:products,name',
                'string',
                'min:6',
                'max:80'
            ],
            'price' => [
                'numeric',
            ],
            'category_id' => [
                'integer',
            ],
        ];
    }
}
