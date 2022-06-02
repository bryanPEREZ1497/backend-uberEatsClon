<?php

namespace App\Http\Requests\V1\Deliveries;

use Illuminate\Foundation\Http\FormRequest;

class StoreDeliveryRequest extends FormRequest
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
            'calification' => ['required', 'max:500'],
            'description' => ['required', 'max:100'],
            'placa' => ['required', 'max:50'],
            'vehicle' => ['required', 'max:20']
        ];
    }
    public function attributes()
    {
        return [
            'calification' => 'Calificación',
            'description' => 'Descripción',
            'placa' => 'Placa',
            'vehicle' => 'Vehicle'
        ];
    }
}
