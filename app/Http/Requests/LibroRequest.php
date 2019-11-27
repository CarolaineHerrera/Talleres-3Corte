<?php

namespace App\Http\Requests;

use App\Rules\PrimerMayuscula;
use Illuminate\Foundation\Http\FormRequest;

class LibroRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'titulo' => ['required','min:5','string', new PrimerMayuscula],
            'descripcion' => 'required|min:3',
            'editorial_id' => 'required|integer',
        ];
    }

    public function attributes()
    {
        return [
            'descripcion' => 'Descripcion',
            'precio' => 'Precio Unitario',
            'proveedor_id' => 'Codigo Proveedor',
            'categoria' => 'Categoria'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El atributo :attribute es requerido.',
            'max' => 'El atributo :attribute debe tener maximo :max caracteres.',
            'min' =>  'El atributo :attribute debe tener como minimo :min caracteres.',
            'integer' => 'El atributo :attribute debe ser númerico.',
            'string' => 'El atributo :attribute debe ser un texto.',
        ];
    }
}
