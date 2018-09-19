<?php

namespace DoorSystem\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FamiliaNuevoRequest extends FormRequest
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
            'nombre_familia' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nombre_familia.required' => 'El campo está vacio'
        ];
    }
}
