<?php

namespace Database\Seeders;

use App\Models\DeliveryMan;
use App\Models\Client;
use App\Models\Order;
use App\Models\User;



use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run()
    {
        Order::factory(100)->create();
    }
}
