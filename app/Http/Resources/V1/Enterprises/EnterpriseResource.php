<?php

namespace App\Http\Resources\V1\Enterprises;

use Illuminate\Http\Resources\Json\JsonResource;

class EnterpriseResource extends JsonResource
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
            'id' => $this->id,
            'address' => $this->address,
            'calification' => $this->calification,
            'country' => $this->country,
            'img_url' => $this->img_url,
            'name' => $this->name,
            'ranking' => $this->ranking,
            'time_close' => $this->time_close,
            'time_open' => $this->time_open,
        ];
    }
}
