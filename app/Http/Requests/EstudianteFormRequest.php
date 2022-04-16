<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstudianteFormRequest extends FormRequest
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
            'documento_identidad' => 'required',
            'nombre_est' => 'required', 
            'apellido_est' => 'required', 
            'fecha_nac' => 'required', 
            'genero' => 'required',
            'eps' => 'required',  
            'direccion' => 'required', 
            'grado_inscrito' => 'required', 
            'nombre_padre' => 'required', 
            'cedula_padre' => 'required', 
            'telefono_padre' => 'required',
            'nombre_madre' => 'required', 
            'cedula_madre' => 'required', 
            'telefono_madre' => 'required',
        ];
    }
}
