<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client')->insert([
            'name'=>' Takabashi',
            'firstname'=>'Myo',
            'adress'=>'rue A',
            'postalCode'=>'69100',
            'phone'=>'065321845',
            'email'=>'n@gmail.com',
            'password'=>'bonjour',
            'role_id'=>'4',
        ]);

        DB::table('client')->insert([
            'name'=>' Sommeil',
            'firstname'=>'Charlie',
            'adress'=>'rue b',
            'postalCode'=>'95000',
            'phone'=>'065321845',
            'email'=>'v@gmail.com',
            'password'=>'bonjour',
            'role_id'=>'4',
        ]);

        DB::table('client')->insert([
            'name'=>' Thompson',
            'firstname'=>'Mercy',
            'adress'=>'rue c',
            'postalCode'=>'13005',
            'phone'=>'065321845',
            'email'=>'g@gmail.com',
            'password'=>'bonjour',
            'role_id'=>'4',
        ]);

        DB::table('client')->insert([
            'name'=>'Skye ',
            'firstname'=>'Achibald',
            'adress'=>'rue d',
            'postalCode'=>'31600',
            'phone'=>'065321845',
            'email'=>'a@gmail.com',
            'password'=>'bonjour',
            'role_id'=>'4',
        ]);
    }
}
