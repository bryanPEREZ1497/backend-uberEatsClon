<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Client;
use App\Models\DeliveryMan;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    public function run()
    {
        // $users =  User::get();
        for ($user_id = 2; $user_id <= 101; $user_id++) {
            Client::factory()->create([
                'user_id' => $user_id
            ]);
        }
    }
}
