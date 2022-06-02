<?php

namespace App\Http\Resources\V1\Products;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' =>  $this->id,
            'name' =>  $this->name,
            'price' =>  $this->price,
            'description' =>  $this->description,
            'img_url' =>  $this->img_url,
            'like_counter' =>  $this->like_counter,
        ];
    }
}
