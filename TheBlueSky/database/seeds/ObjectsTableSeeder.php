<?php

use Illuminate\Database\Seeder;

class ObjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('objects')->insert([
            'name'=>'photo de couple', 
            'prices'=>'25',
        ]);

        DB::table('objects')->insert([
            'name'=>'carte postale Oblinion', 
            'prices'=>'5',
        ]);

        DB::table('objects')->insert([
            'name'=>'jacuzzi 1h', 
            'prices'=>'60',
        ]);

        DB::table('objects')->insert([
            'name'=>'barbecue set', 
            'prices'=>'45',
        ]);

        DB::table('objects')->insert([
            'name'=>'coin autour du feu set', 
            'prices'=>'55',
        ]);
    }
}
