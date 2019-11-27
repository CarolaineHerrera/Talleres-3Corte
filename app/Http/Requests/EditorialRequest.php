<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditorialRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => 'required|min:5|max:255',
            'telefono' => 'required|integer'
        ];
    }

    public function attributes()
    {
        return [
            'nombre' => 'Editorial',
            'telefono' => 'Telefono',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Este campo :attribute es requerido.',
            'max' => 'Este campo :attribute debe tener maximo :max caracteres.',
            'min' =>  'Este campo :attribute debe tener como minimo :min caracteres.',
            'integer' => 'Este campo :attribute debe ser númerico.',
        ];
    }
}
