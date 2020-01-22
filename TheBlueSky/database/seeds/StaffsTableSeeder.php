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
        DB::table('staff')->insert([
            'name'=>' Don',
            'firstname'=>'Sean',
            'adress'=>'rue A',
            'postalCode'=>'69100',
            'phone'=>'065321845',
            'salary'=>'3000',
            'email'=>'sd@gmail.com',
            'password'=>'chefone',
            'role_id'=>'1',
        ]);

        DB::table('staff')->insert([
            'name'=>' Don',
            'firstname'=>'Paul',
            'adress'=>'rue A',
            'postalCode'=>'69100',
            'phone'=>'065568845',
            'salary'=>'3000',
            'email'=>'pd@gmail.com',
            'password'=>'cheftwo',
            'role_id'=>'1',
        ]);

        DB::table('staff')->insert([
            'name'=>' Don',
            'firstname'=>'Hélene',
            'adress'=>'rue A',
            'postalCode'=>'69100',
            'phone'=>'065967845',
            'salary'=>'3000',
            'email'=>'hd@gmail.com',
            'password'=>'staffone',
            'role_id'=>'2',
        ]);

        DB::table('staff')->insert([
            'name'=>' Don',
            'firstname'=>'Stéphane',
            'adress'=>'rue A',
            'postalCode'=>'69100',
            'phone'=>'065322175',
            'salary'=>'3000',
            'email'=>'std@gmail.com',
            'password'=>'stafftwo',
            'role_id'=>'2',
        ]);

        DB::table('staff')->insert([
            'name'=>' Easter',
            'firstname'=>'Cloé',
            'adress'=>'rue A',
            'postalCode'=>'69100',
            'phone'=>'065327935',
            'salary'=>'3000',
            'email'=>'ce@gmail.com',
            'password'=>'staffthree',
            'role_id'=>'3',
        ]);

        DB::table('staff')->insert([
            'name'=>' Easter ',
            'firstname'=>'Jeanne',
            'adress'=>'rue A',
            'postalCode'=>'69100',
            'phone'=>'065358465',
            'salary'=>'3000',
            'email'=>'je@gmail.com',
            'password'=>'staffour',
            'role_id'=>'3',
        ]);



    }
}
