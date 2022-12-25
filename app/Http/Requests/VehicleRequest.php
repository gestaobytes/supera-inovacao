<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            
			'vehiclemodel_id' => 'required|numeric',
			'plaque' => 'required|max:8|unique:vehicles,plaque,'.$this->id,
			'color' => 'required|max:2',
			'manufacturing' => 'required|numeric',
			'yearmodel' => 'required|numeric',
			'chassi' => 'max:100|unique:vehicles,chassi,'.$this->id,
             
        ];
    }

    public function messages()
    {
        return [
            
			'vehiclemodel_id.required' => 'MODELOS DE VEICULOS nao foi preenchido/selecionado.',
			'vehiclemodel_id.numeric' => 'MODELOS DE VEICULOS deve ser numerico.',
			'plaque.required' => 'PLACA nao foi selecionado.',
			'plaque.max' => 'PLACA deve ter no maximo :max caracteres.',
			'plaque.unique' => ' Ja existe PLACA com esse valor.',
			'color.required' => 'COR nao foi selecionado.',
			'color.max' => 'COR deve ter no maximo :max caracteres.',
			'manufacturing.required' => 'FABRICAçAO nao foi selecionado.',
			'manufacturing.numeric' => 'FABRICAçAO deve ser numerico.',
			'yearmodel.required' => 'ANO/MODELO nao foi selecionado.',
			'yearmodel.numeric' => 'ANO/MODELO deve ser numerico.',
			'chassi.max' => 'CHASSI deve ter no maximo :max caracteres.',
			'chassi.unique' => ' Ja existe CHASSI com esse valor.',
             
        ];
    }
}
