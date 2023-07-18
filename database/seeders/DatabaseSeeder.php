<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //arreglo de las categorias
        $categories = ["Fruits and vegetables", "Meat and fish", "Beverages"];

        //insertar las categorias
        foreach($categories as $category){
            DB::table("categories")->insert([
                "name" => $category 
            ]);
        }
        //factory de los items
        Item::factory(18)->create();
    }
}
