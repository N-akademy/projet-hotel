<?php

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
        DB::table('products')->insert([
            'name'=>'photo de couple', 
            'prices'=>'25',
        ]);

        DB::table('products')->insert([
            'name'=>'carte postale Oblinion', 
            'prices'=>'5',
        ]);

        DB::table('products')->insert([
            'name'=>'jacuzzi 1h', 
            'prices'=>'60',
        ]);

        DB::table('products')->insert([
            'name'=>'barbecue set', 
            'prices'=>'45',
        ]);

        DB::table('products')->insert([
            'name'=>'coin autour du feu set', 
            'prices'=>'55',
        ]);
    }
}
