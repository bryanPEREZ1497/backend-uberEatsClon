<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Enterprise;
use Illuminate\Database\Seeder;

class EnterpriseCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $enterprises = Enterprise::get();
        $categories = Category::get();

        foreach ($enterprises as $enterprise) {
            $enterprise->categories()->attach(
                //A cada empresa le asigno entre 1 a 4 categorias
                $categories->random(rand(1, 4))->pluck('id')->toArray()
            );
        }
    }
}
