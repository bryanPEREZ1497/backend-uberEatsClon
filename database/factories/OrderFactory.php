<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Delivery;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {

        $clients = Client::get();
        $deliveries = Delivery::get();

        return [
            'client_id' => $this->faker->randomElement($clients),
            'delivery_id' => $this->faker->randomElement($deliveries),
            'calification' => $this->faker->numerify('calificacion ###'),
            'delivery_cost' => $this->faker->randomFloat(),
            'delivery_date' => $this->faker->dateTimeThisCentury($max = 'now', $timezone = null),
            'state' => $this->faker->randomElement(['pendiente', 'aceptado', 'viaje', 'entregado']),
            'payment_method' => $this->faker->randomElement(['efectivo', 'tarjeta', 'cupon']),
            'wait_time' => $this->faker->time($format = 'H:i:s', $max = 'now'),
            'total_price' => $this->faker->randomFloat(),
        ];
    }
}
