<?php

namespace App\Http\Requests\V1\Products;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'name' => ['required', 'max:500'],
            'price' => ['required'],
            'description' => ['required', 'max:7000'],
            'imgUrl' => ['required', 'max:2000'],
            'likeCounter' => ['required'],
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'nombre',
            'price' => 'precio',
            'description' => 'descripción',
            'imgUrl' => 'url',
            'likeCounter' => 'contador de likes',
        ];
    }
}
