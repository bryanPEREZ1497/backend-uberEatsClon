<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Seeder;

class OrderDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = Order::get();
        $products = Product::get();

        foreach ($orders as $order) {
            $order->products()->attach(
                //por cada orden le asigno entre 1 a 10 productos
                $products->random(rand(1, 10))->pluck('id')->toArray()
            );
        }
    }
}
