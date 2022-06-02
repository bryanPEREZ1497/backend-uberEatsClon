<?php

namespace App\Http\Requests\V1\Orders;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'calification' => ['required', 'max:20'],
            'deliveryCost' => ['required'],
            'deliveryDate' => ['required'],
            'state' => ['required'],
            'paymentMethod' => ['required'],
            'waitTime' => ['required'],
            'totalPrice' => ['required']
        ];
    }
    public function attributes()
    {
        return [
            'calification' => 'Calificación',
            'deliveryCost' => 'Costo de la entrega',
            'deliveryDate' => 'Fecha de entrega',
            'state' => 'Estado',
            'paymentMethod' => 'Método de pago',
            'waitTime' => 'Tiempo de espera',
            'totalPrice' => 'Precio total',
        ];
    }
}
