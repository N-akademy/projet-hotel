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
            'email'=>'sd@gmail.com',
            'password'=>bcrypt('chefone'),
            
        ]);

        DB::table('staffs')->insert([
            'name'=>' Don',
            'firstname'=>'Paul',
            'houseAdress'=>'rue A',
            'postalCode'=>'69100',
            'phone'=>'065568845',
            'salary'=>'3000',
            'email'=>'pd@gmail.com',
            'password'=>bcrypt('cheftwo'),
            
        ]);

        DB::table('staffs')->insert([
            'name'=>' Don',
            'firstname'=>'Hélene',
            'houseAdress'=>'rue A',
            'postalCode'=>'69100',
            'phone'=>'065967845',
            'salary'=>'3000',
            'email'=>'hd@gmail.com',
            'password'=>bcrypt('staffone'),
            
        ]);

        DB::table('staffs')->insert([
            'name'=>' Don',
            'firstname'=>'Stéphane',
            'houseAdress'=>'rue A',
            'postalCode'=>'69100',
            'phone'=>'065322175',
            'salary'=>'3000',
            'email'=>'std@gmail.com',
            'password'=>bcrypt('stafftwo'),
            
        ]);

        DB::table('staffs')->insert([
            'name'=>' Easter',
            'firstname'=>'Cloé',
            'houseAdress'=>'rue A',
            'postalCode'=>'69100',
            'phone'=>'065327935',
            'salary'=>'3000',
            'email'=>'ce@gmail.com',
            'password'=>bcrypt('staffthree'),
            
        ]);

        DB::table('staffs')->insert([
            'name'=>' Easter ',
            'firstname'=>'Jeanne',
            'houseAdress'=>'rue A',
            'postalCode'=>'69100',
            'phone'=>'065358465',
            'salary'=>'3000',
            'email'=>'je@gmail.com',
            'password'=>bcrypt('staffour'),
            
        ]);



    }
}
