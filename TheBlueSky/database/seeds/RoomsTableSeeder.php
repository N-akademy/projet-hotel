<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room')->insert([
            'name'=>'Blue Simple',
            'numberRoom'=>'200',
            'prices'=>'35',
            'type'=>'Petite',
        ]);

        DB::table('room')->insert([
            'name'=>'Blue Double',
            'numberRoom'=>'201',
            'prices'=>'60',
            'type'=>'Moyenne',
        ]);

        DB::table('room')->insert([
            'name'=>'Blue Marmaid',
            'numberRoom'=>'202',
            'prices'=>'90',
            'type'=>'Grande',
        ]);

        DB::table('room')->insert([
            'name'=>'Royal Marmaid',
            'numberRoom'=>'300',
            'prices'=>'120',
            'type'=>'Deluxe',
        ]);
    }
}
