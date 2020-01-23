<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        'name'=>'Gérant', 
        ]);
        
        DB::table('roles')->insert([
            'name'=>'EquipeAccueil', 
        ]);

        DB::table('roles')->insert([
            'name'=>'EquipeMénage', 
        ]);

        DB::table('roles')->insert([
            'name'=>'Client', 
        ]);

    }
}
