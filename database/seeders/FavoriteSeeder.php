<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = Client::get();
        $products = Product::get();

        foreach ($clients as $client) {
            $client->products()->attach(
                //por cada cliente le asigno entre 1 a 15 productos(favoritos)
                $products->random(rand(1, 15))->pluck('id')->toArray()
            );
        }
    }
}
