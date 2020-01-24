<?php

use Illuminate\Database\Seeder;

class StaffsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staffs')->insert([
            'name'=>' Don',
            'firstname'=>'Sean',
            'houseAdress'=>'rue A',
            'postalCode'=>'69100',
            'phone'=>'065321845',
            'salary'=>'3000',
            
            
        ]);

        DB::table('staffs')->insert([
            'name'=>' Don',
            'firstname'=>'Paul',
            'houseAdress'=>'rue A',
            'postalCode'=>'69100',
            'phone'=>'065568845',
            'salary'=>'3000',
            
        ]);

        DB::table('staffs')->insert([
            'name'=>' Don',
            'firstname'=>'Hélene',
            'houseAdress'=>'rue A',
            'postalCode'=>'69100',
            'phone'=>'065967845',
            'salary'=>'3000',
           
            
        ]);

        DB::table('staffs')->insert([
            'name'=>' Don',
            'firstname'=>'Stéphane',
            'houseAdress'=>'rue A',
            'postalCode'=>'69100',
            'phone'=>'065322175',
            'salary'=>'3000',
            
            
        ]);

        DB::table('staffs')->insert([
            'name'=>' Easter',
            'firstname'=>'Cloé',
            'houseAdress'=>'rue A',
            'postalCode'=>'69100',
            'phone'=>'065327935',
            'salary'=>'3000',
            
            
        ]);

        DB::table('staffs')->insert([
            'name'=>' Easter ',
            'firstname'=>'Jeanne',
            'houseAdress'=>'rue A',
            'postalCode'=>'69100',
            'phone'=>'065358465',
            'salary'=>'3000',
            
            
        ]);



    }
}
