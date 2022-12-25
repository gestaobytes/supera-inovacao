<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [

            'fullname' => 'required|max:120',
            'email' => 'required|max:120|unique:users,email,' . $this->id,
            'password' => 'required|max:120',
            'status' => '',

        ];
    }

    public function messages()
    {
        return [

            'fullname.required' => 'NOME COMPLETO nao foi selecionado.',
            'fullname.max' => 'NOME COMPLETO deve ter no maximo :max caracteres.',
            'email.required' => 'EMAIL nao foi selecionado.',
            'email.max' => 'EMAIL deve ter no maximo :max caracteres.',
            'email.unique' => ' Ja existe EMAIL com esse valor.',
            'password.required' => 'SENHA nao foi selecionado.',
            'password.max' => 'SENHA deve ter no maximo :max caracteres.',
            'status.required' => 'STATUS nao foi selecionado.',

        ];
    }
}
