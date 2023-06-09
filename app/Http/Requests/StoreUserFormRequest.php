<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserFormRequest extends FormRequest
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
                'unique:users,name',
                'string',
                'min:6',
                'max:80'
            ],
            'email' => [
                'required',
                'unique:users,email',
                'email',
                'min:6',
                'max:80'
            ],
            'password' => [
                'required',
                'min:6',
                'max:50'
            ],
            'password2' => [
                'required',
                'min:6',
                'max:50',
                'same:password'
            ]
        ];
    }
}
