<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'avatar'=>"{{ asset('/css/style.css') }}",
            'role'=>'Gérant',
            'name'=>'Sean',
            'email'=>'sd@gmail.com',
            'password'=>bcrypt('chefone'),
            
        ]);

        DB::table('users')->insert([
            'avatar'=>"{{ asset('/css/style.css') }}",
            'role'=>'Gérant',
            'name'=>'Paul',
            'email'=>'pd@gmail.com',
            'password'=>bcrypt('cheftwo'),
            
        ]);
        DB::table('users')->insert([
            'avatar'=>"{{ asset('/css/style.css') }}",
            'role'=>'Equipe Accueil',
            'name'=>'Hélene',
            'email'=>'hd@gmail.com',
            'password'=>bcrypt('staffone'),
            
        ]);

        DB::table('users')->insert([
            'avatar'=>"{{ asset('/css/style.css') }}",
            'role'=>'Equipe Accueil',
            'name'=>'Stéphane',
            'email'=>'std@gmail.com',
            'password'=>bcrypt('stafftwo'),
            
        ]);

        DB::table('users')->insert([
            'avatar'=>"{{ asset('/css/style.css') }}",
            'role'=>'Equipe Ménage',
            'name'=>'Cloé',
            'email'=>'ce@gmail.com',
            'password'=>bcrypt('staffthree'),
            
        ]);

        DB::table('users')->insert([
            'avatar'=>"{{ asset('/css/style.css') }}",
            'role'=>'Equipe Ménage',
            'name'=>'Jeanne',
            'email'=>'je@gmail.com',
            'password'=>bcrypt('staffour'),
            
        ]);

        DB::table('users')->insert([
            'avatar'=>"{{ asset('/css/style.css') }}",
            'role'=>'Client',
            'name'=>'Myo',
            'email'=>'mt@gmail.com',
            'password'=>bcrypt('bonjour'),
            
        ]);

        DB::table('users')->insert([
            'avatar'=>"{{ asset('/css/style.css') }}",
            'role'=>'Client',
            'name'=>'Charlie',
            'email'=>'cs@gmail.com',
            'password'=>bcrypt('bonjour'),
            
        ]);

        DB::table('users')->insert([
            'avatar'=>"{{ asset('/css/style.css') }}",
            'role'=>'Client',
            'name'=>'Mercy',
            'email'=>'mth@gmail.com',
            'password'=>bcrypt('bonjour'),
            
        ]);

        DB::table('users')->insert([
            'avatar'=>"{{ asset('/css/style.css') }}",
            'role'=>'Client',
            'name'=>'Archibald',
            'email'=>'as@gmail.com',
            'password'=>bcrypt('bonjour'),
            
        ]);









        
    }
}
