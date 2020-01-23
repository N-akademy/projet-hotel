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
        DB::table('clients')->insert([
            'name'=>' Takabashi',
            'firstname'=>'Myo',
            'houseAdress'=>'rue A',
            'postalCode'=>'69100',
            'phone'=>'065321845',
            'email'=>'mt@gmail.com',
            'password'=>'bonjour',
            
        ]);

        DB::table('clients')->insert([
            'name'=>' Sommeil',
            'firstname'=>'Charlie',
            'houseAdress'=>'rue b',
            'postalCode'=>'95000',
            'phone'=>'065321845',
            'email'=>'cs@gmail.com',
            'password'=>'bonjour',
            
        ]);

        DB::table('clients')->insert([
            'name'=>' Thompson',
            'firstname'=>'Mercy',
            'houseAdress'=>'rue c',
            'postalCode'=>'13005',
            'phone'=>'065321845',
            'email'=>'g@gmail.com',
            'password'=>'bonjour',
            
        ]);

        DB::table('clients')->insert([
            'name'=>'Skye ',
            'firstname'=>'Achibald',
            'houseAdress'=>'rue d',
            'postalCode'=>'31600',
            'phone'=>'065321845',
            'email'=>'a@gmail.com',
            'password'=>'bonjour',
            
        ]);
    }
}
