<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Password;

class NewPasswordRequest extends FormRequest
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
            'token'    => 'required',
            'email'    => 'required|string|email',
            'password' => ['required', 'confirmed', Rules\Password::defaults()]
        ];
    }

    public function messages()
    {
        return [
            'token.required'     => 'O token é obrigatório!',

            'email.required'     => 'O email é obrigatório!',
            'email.string'       => 'Insira um email válido!',
            'email.email'        => 'Insira um email válido!',

            'password.required'  => 'A senha é obrigatória!',
            'password.confirmed' => 'Email não confirmado!'
        ];
    }
}