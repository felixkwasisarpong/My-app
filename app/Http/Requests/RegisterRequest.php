<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use JetBrains\PhpStorm\ArrayShape;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'full_name' => ['required', 'string'],
            'date_of_birth' => ['required', 'date', 'before_or_equal:today'],
            'nationality_id' => ['required', 'integer',
                Rule::exists('nationalities', 'id')
            ],
            'phone_number' => ['required','unique:users,phone'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required','min:6','regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'],
            'username' => ['required', 'string', 'unique:users,username', 'alpha_num'],
            'image' => ['nullable', 'file', 'mimes:jpg,jpeg,png', 'max:2048'],
            'description' => ['nullable']
        ];
    }


}
