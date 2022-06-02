<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // User::factory(10)->create();
        $this->call([
            ClientSeeder::class, //50
            DeliverySeeder::class, //50
            OrderSeeder::class, //100
            EnterpriseSeeder::class, //20
            CategorySeeder::class, //16
            EnterpriseCategoriesSeeder::class,
            ProductSeeder::class,
            OrderDetailsSeeder::class,
            FavoriteSeeder::class
        ]);
    }
}
