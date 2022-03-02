<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       \App\Models\Product::create([

      'productname' =>('Angry Duck'),
        'price' =>('22.99'),
        'new' => (false),
        'sale' => (false),
        'color' =>('yellow'),
        'stock' => ('100'),
        'details' => ('Yellow plush duckling'),
        'created_at' => now()->format('Y-m-d H:i:s'),


       ]);
    }
}



           