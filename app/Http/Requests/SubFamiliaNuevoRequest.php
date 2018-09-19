<?php

namespace DoorSystem\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubFamiliaNuevoRequest extends FormRequest
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
            'nombre_sub_familia' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nombre_sub_familia.required' => 'El campo está vacío'
        ];
    }
}
