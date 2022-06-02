<?php

namespace App\Http\Requests\V1\Enterprises;

use Illuminate\Foundation\Http\FormRequest;

class StoreEnterpriseRequest extends FormRequest
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
            'address' => ['required', 'max:500'],
            'calification' => ['required', 'max:10'],
            'country' => ['required', 'max:30'],
            'imgUrl' => ['required'],
            'name' => ['required', 'max:20'],
            'ranking' => ['required', 'max:10'],
            'timeClose' => ['required'],
            'timeOpen' => ['required'],
        ];
    }
    public function attributes()
    {
        return [
            'adress' => 'Direccion',
            'calification' => 'Calificacion',
            'country' => 'Pais',
            'imgUrl' => 'URL de imagen',
            'name' => 'Nombre',
            'ranking' => 'Ranking',
            'timeClose' => 'Hora de cierre',
            'timeOpen' => 'Hora de apertura',
        ];
    }
}
