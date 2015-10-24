<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SubirPerroPerdidoRequest extends Request
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
            'colonia' => ['required','min:3'],
            'estado' => 'required',
            'perdido_el' => ['required','date'],
            'nombre' => 'required',
            'raza' => 'required',
            'fotos' => 'required'
        ];
    }
}
