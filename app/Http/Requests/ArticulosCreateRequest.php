<?php

namespace DoorSystem\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticulosCreateRequest extends FormRequest
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
            'dado' => 'unique:articulos|required',
            'descripcion' => 'required',
            'largo' => 'required',
            'familia_id' => 'required',
            'sub_familia_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'dado.unique' => 'El Número de Dado ya está en uso',
            'descripcion.required' => 'Falta Descripción',
            'dado.required' => 'Falta el número de Dado',
            'largo.required' => 'Falta el Largo',
            'familia_id.required' => 'No se ha seleccionado la Familia',
            'sub_familia_id.required' => 'No se ha seleccionado la SubFamilia'
        ];
    }
}
