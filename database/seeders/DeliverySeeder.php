<?php

namespace Database\Seeders;

use App\Models\Delivery;
use App\Models\DeliveryMan;
use App\Models\User;
// use App\Models\DeliveryMan;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeliverySeeder extends Seeder
{
    public function run()
    {
        for ($user_id = 102; $user_id <= 151; $user_id++) {
            Delivery::factory()->create([
                'user_id' => $user_id
            ]);
        }
    }
}
