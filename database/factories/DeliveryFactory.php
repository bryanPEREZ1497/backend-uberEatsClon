<?php

namespace Database\Factories;

use App\Models\Delivery;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeliveryFactory extends Factory
{
    protected $model = Delivery::class;

    public function definition()
    {
        return [
            'calification' => $this->faker->numerify('calificacion ###'),
            'description' => $this->faker->sentence($nbWords = 6),
            'placa' => $this->faker->userName(),
            'vehicle' => $this->faker->randomElement(['moto', 'automovil']),
        ];
    }
}
