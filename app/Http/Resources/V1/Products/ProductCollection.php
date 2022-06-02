<?php

namespace App\Http\Resources\V1\Products;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'msg' => [
                'summary' => 'consulta correcta',
                'detail' => 'la consulta se realizo correctamente',
                'code' => '200'
            ]
        ];
    }
}
