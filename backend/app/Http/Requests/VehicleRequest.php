<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'veiculo'   => 'required|min:5|max:100',
            'marca'     => 'required',
            'ano'       => 'required',
            'descricao' => 'required|max:255',
            'vendido'   => 'required'
        ];
    }
}
