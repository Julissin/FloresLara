<?php

namespace floreriaLara\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFloresRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    /*logica para autorizacion */

    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    /*devolver un array con reglas*/
    public function rules()
    {
        return [
            'nombre' => 'required|max: 10',
            'imagen' => 'required|image',
            'comentarios' => 'required',
            'slug' => 'required'
        ];
    }
}
