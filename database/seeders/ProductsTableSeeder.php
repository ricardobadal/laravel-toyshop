<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *     */
    public function run()
    {
        //
         DB::table('products')->insert([

          'productname' =>('plush mushroom'),
            'price' =>('22.99'),
            'product_category_id' => ('1'),
            'new' => (false),
            'sale' => (true),
            'file_name'=> ('shroom.png'),
            'color' =>('yellow'),
            'stock' => ('100'),
            'details' => ('plush mushroom'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);


        DB::table('products')->insert([

          'productname' =>('angry Duck'),
            'price' =>('22.99'),
            'product_category_id' => ('1'),
            'new' => (false),
            'sale' => (false),
            'file_name'=> ('chickknife.png'),
            'color' =>('yellow'),
            'stock' => ('100'),
            'details' => ('yellow plush duckling'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);


        DB::table('products')->insert([

          'productname' =>('green dragon'),
            'price' =>('24.99'),
            'product_category_id' => ('1'),
            'new' => (false),
            'sale' => (false),
            'file_name'=> ('greendragon.png'),
            'color' =>('green'),
            'stock' => ('100'),
            'details' => ('green dragon'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);


        DB::table('products')->insert([

          'productname' =>('lion puzzle'),
            'price' =>('23.99'),
            'product_category_id' => ('2'),
            'new' => (false),
            'sale' => (false),
            'file_name'=> ('lionpuzzle.png'),
            'color' =>('tan'),
            'stock' => ('100'),
            'details' => ('lion puzzle'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);


        DB::table('products')->insert([

          'productname' =>('plush cheese'),
            'price' =>('27.99'),
            'product_category_id' => ('1'),
            'new' => (false),
            'sale' => (false),
            'file_name'=> ('cheese.png'),
            'color' =>('yellow'),
            'stock' => ('100'),
            'details' => ('plush cheese'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);


        DB::table('products')->insert([

          'productname' =>('musical toy'),
            'price' =>('21.99'),
            'product_category_id' => ('1'),
            'new' => (false),
            'sale' => (false),
            'file_name'=> ('musicaltoy.png'),
            'color' =>('yellow'),
            'stock' => ('100'),
            'details' => ('musical toy'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);


        DB::table('products')->insert([

          'productname' =>('plush elephant'),
            'price' =>('22.99'),
            'product_category_id' => ('1'),
            'new' => (false),
            'sale' => (false),
            'file_name'=> ('plushelephant.png'),
            'color' =>('grey'),
            'stock' => ('100'),
            'details' => ('plush elephant'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([

          'productname' =>('plush tiger'),
            'price' =>('22.99'),
            'product_category_id' => ('1'),
            'new' => (false),
            'sale' => (false),
            'file_name'=> ('tiger.png'),
            'color' =>('yellow'),
            'stock' => ('100'),
            'details' => ('plush tiger'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([

          'productname' =>('teething keys'),
            'price' =>('22.99'),
            'product_category_id' => ('1'),
            'new' => (false),
            'sale' => (false),
            'file_name'=> ('teethingkeys.png'),
            'color' =>('yellow'),
            'stock' => ('100'),
            'details' => ('teething keys'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);


        DB::table('products')->insert([

          'productname' =>('wooden bear clock'),
            'price' =>('22.99'),
            'product_category_id' => ('1'),
            'new' => (false),
            'sale' => (false),
            'file_name'=> ('woodenbearclock.png'),
            'color' =>('tan'),
            'stock' => ('100'),
            'details' => ('wooden bear clock'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);


        DB::table('products')->insert([

          'productname' =>('sloth blanket'),
            'price' =>('22.99'),
            'product_category_id' => ('1'),
            'new' => (false),
            'sale' => (false),
            'file_name'=> ('slothblanket.png'),
            'color' =>('grey'),
            'stock' => ('100'),
            'details' => ('sloth blanket'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([

          'productname' =>('plush cow'),
            'price' =>('22.99'),
            'product_category_id' => ('1'),
            'new' => (false),
            'sale' => (false),
            'file_name'=> ('plushcow.png'),
            'color' =>('black-and-white'),
            'stock' => ('100'),
            'details' => ('plush cow'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([

          'productname' =>('puzzle mat'),
            'price' =>('27.99'),
            'product_category_id' => ('1'),
            'new' => (false),
            'sale' => (false),
            'file_name'=> ('puzzlemat.png'),
            'color' =>('?'),
            'stock' => ('100'),
            'details' => ('puzzle mat'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);



        DB::table('products')->insert([

          'productname' =>('plush coffee'),
            'price' =>('22.99'),
            'product_category_id' => ('1'),
            'new' => (false),
            'sale' => (false),
            'file_name'=> ('coffee.png'),
            'color' =>('tan'),
            'stock' => ('100'),
            'details' => ('plush coffee'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([

          'productname' =>('plush cauliflower'),
            'price' =>('22.99'),
            'product_category_id' => ('1'),
            'new' => (false),
            'sale' => (false),
            'file_name'=> ('cauliflower.png'),
            'color' =>('green-white'),
            'stock' => ('100'),
            'details' => ('cauliflower'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);


DB::table('products')->insert([

          'productname' =>('grogu backpack'),
            'price' =>('22.99'),
            'product_category_id' => ('1'),
            'new' => (false),
            'sale' => (false),
            'file_name'=> ('grogubackpack.png'),
            'color' =>('green'),
            'stock' => ('100'),
            'details' => ('grogu backpack'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([

          'productname' =>('grogu'),
            'price' =>('22.99'),
            'product_category_id' => ('1'),
            'new' => (false),
            'sale' => (false),
            'file_name'=> ('grogu.png'),
            'color' =>('green'),
            'stock' => ('100'),
            'details' => ('grogu toy'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([

          'productname' =>('plush polarbear'),
            'price' =>('22.99'),
            'product_category_id' => ('1'),
            'new' => (false),
            'sale' => (false),
            'file_name'=> ('polarbear.png'),
            'color' =>('white'),
            'stock' => ('100'),
            'details' => ('Yplush polarbear'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([

          'productname' =>('pooh blanket'),
            'price' =>('22.99'),
            'product_category_id' => ('1'),
            'new' => (false),
            'sale' => (false),
            'file_name'=> ('poohblanket.png'),
            'color' =>('yellow'),
            'stock' => ('100'),
            'details' => ('pooh blanket'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([

          'productname' =>('black plush bat'),
            'price' =>('22.99'),
            'product_category_id' => ('1'),
            'new' => (false),
            'sale' => (false),
            'file_name'=> ('blackbat.png'),
            'color' =>('black'),
            'stock' => ('100'),
            'details' => ('black plush bat'),
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);
      }
}




           