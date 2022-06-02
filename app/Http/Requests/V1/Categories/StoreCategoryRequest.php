<?php

namespace App\Http\Requests\V1\Categories;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'max:20'],
            'description' => ['required', 'max:100'],
            'imgUrl' => ['required']
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Nombre de la categoría',
            'description' => 'Descripción',
            'imgUrl' => 'Imagen de la categoría'
        ];
    }
}
