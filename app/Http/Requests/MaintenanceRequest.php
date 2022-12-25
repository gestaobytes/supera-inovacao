<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaintenanceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            
			'vehicle_id' => 'numeric',
			'user_id' => 'required|numeric',
			'km' => 'required|numeric',
			'dateservice' => 'required|date',
			'values' => 'required|numeric',
			'observations' => 'max:255',
             
        ];
    }

    public function messages()
    {
        return [
            
			'vehicle_id.required' => 'VEICULOS nao foi preenchido/selecionado.',
			'vehicle_id.numeric' => 'VEICULOS deve ser numerico.',
			'user_id.required' => 'USUARIOS nao foi preenchido/selecionado.',
			'user_id.numeric' => 'USUARIOS deve ser numerico.',
			'km.required' => 'KM nao foi selecionado.',
			'km.numeric' => 'KM deve ser numerico.',
			'dateservice.required' => 'SERVICO DE DATA nao foi selecionado.',
			'dateservice.date_format' => 'SERVICO DE DATA deve ser no padrao Y-m-d.',
			'values.required' => 'VALORES nao foi selecionado.',
			'values.numeric' => 'VALORES deve ser numerico.',
			'observations.max' => 'OBSERVAçOES deve ter no maximo :max caracteres.',
             
        ];
    }
}
