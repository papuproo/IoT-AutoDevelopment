<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    //Determina si el usuario que realiza la peticion, esta autorizado para hacerlo
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    //Son las reglas de validacion
    public function rules()
    {
        return [
            //En esta parte, vamos a declarar las reglas de validacion para poder agregar o editar un registro
            
                'title' => 'required',
                'description' => 'required',
            
        ];
    }
}
