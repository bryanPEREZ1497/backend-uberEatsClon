<?php

namespace App\Http\Resources\V1\Deliveries;

use Illuminate\Http\Resources\Json\JsonResource;

class DeliveryResource extends JsonResource
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
            'calification' => $this->calification,
            'description' => $this->description,
            'placa' => $this->placa,
            'vehicle' => $this->vehicle,
        ];
    }
}
