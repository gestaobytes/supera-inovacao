<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehiclemodelRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            
			'name' => 'required|max:80',
			'brand' => 'max:60',
			'version' => 'required|max:20',
             
        ];
    }

    public function messages()
    {
        return [
            
			'name.required' => 'NOME nao foi selecionado.',
			'name.max' => 'NOME deve ter no maximo :max caracteres.',
			'brand.max' => 'MARCA deve ter no maximo :max caracteres.',
			'version.required' => 'VERSAO nao foi selecionado.',
			'version.max' => 'VERSAO deve ter no maximo :max caracteres.',
             
        ];
    }
}
