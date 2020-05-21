<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('director')->insert([
            'firstname' => 'James',
            'lastname' => 'Mangold',            

        ]);

        DB::table('director')->insert([
            'firstname' => 'Clint',
            'lastname' => 'Eastwood',            

        ]);

        DB::table('director')->insert([
            'firstname' => 'Doug',
            'lastname' => 'Liman',   
        ]);

        DB::table('director')->insert([
            'firstname' => 'Alejandro',
            'lastname' => 'Gonzalez',   
        ]);

        DB::table('director')->insert([
            'firstname' => 'Robert',
            'lastname' => 'Luketic',   
        ]);

        DB::table('director')->insert([
            'firstname' => 'Steven',
            'lastname' => 'Spielberg',   
        ]);

        DB::table('director')->insert([
            'firstname' => 'James',
            'lastname' => 'Cameron',   
        ]);

        DB::table('director')->insert([
            'firstname' => 'Night',
            'lastname' => 'Shyamalan',   
        ]);

        DB::table('director')->insert([
            'firstname' => 'Ridley',
            'lastname' => 'Scott',   
        ]);

        DB::table('director')->insert([
            'firstname' => 'Peter',
            'lastname' => 'Weir',   
        ]);

        DB::table('director')->insert([
            'firstname' => 'Martin',
            'lastname' => 'Scorsese',
        ]);
        
        DB::table('director')->insert([
            'firstname' => 'Peter',
            'lastname' => 'Farrelly',
        ]);
        
        DB::table('director')->insert([
            'firstname' => 'Bradley',
            'lastname' => 'Cooper',
        ]);
        
        DB::table('director')->insert([
            'firstname' => 'Nathan',
            'lastname' => 'Greno',
        ]);
        
        DB::table('director')->insert([
            'firstname' => 'Michael',
            'lastname' => 'Cristofer',
        ]);
        
        DB::table('director')->insert([
            'firstname' => 'Phillip',
            'lastname' => 'Noyce',
        ]);
        
        DB::table('director')->insert([
            'firstname' => 'Daniel',
            'lastname' => 'Caruso',
        ]);
        
        DB::table('director')->insert([
            'firstname' => 'Steve',
            'lastname' => 'Bendelack',
        ]);
        
        DB::table('director')->insert([
            'firstname' => 'Mel',
            'lastname' => 'Smith',
        ]);
        
        DB::table('director')->insert([
            'firstname' => 'Gore',
            'lastname' => 'Verbinski',
        ]);
    }
}
