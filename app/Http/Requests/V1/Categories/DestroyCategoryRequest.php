<?php

namespace App\Http\Requests\V1\Categories;

use Illuminate\Foundation\Http\FormRequest;

class DestroyCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'ids' => ['required']
        ];
    }
    public function attributes()
    {
        return [
            'ids' => 'ID`s de categoría'
        ];
    }
}
