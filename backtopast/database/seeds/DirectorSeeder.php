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
            'director_name' => 'James Mangold',
        ]);

        DB::table('director')->insert([
            'director_name' => 'Clint Eastwood',         
        ]);

        DB::table('director')->insert([
            'director_name' => 'Doug Liman',
        ]);

        DB::table('director')->insert([
            'director_name' => 'Alejandro Gonzalez',  
        ]);

        DB::table('director')->insert([
            'director_name' => 'Robert Luketic',  
        ]);

        DB::table('director')->insert([
            'director_name' => 'Steven Spielberg',
        ]);

        DB::table('director')->insert([
            'director_name' => 'James Cameron', 
        ]);

        DB::table('director')->insert([
            'director_name' => 'Night Shyamalan',  
        ]);

        DB::table('director')->insert([
            'director_name' => 'Ridley Scott', 
        ]);

        DB::table('director')->insert([
            'director_name' => 'Peter Weir',   
        ]);

        DB::table('director')->insert([
            'director_name' => 'Martin Scorsese',
        ]);
        
        DB::table('director')->insert([
            'director_name' => 'Peter Farelly',
        ]);
        
        DB::table('director')->insert([
            'director_name' => 'Bradley Cooper',
        ]);
        
        DB::table('director')->insert([
            'director_name' => 'Nathan Greno',
        ]);
        
        DB::table('director')->insert([
            'director_name' => 'Michael Cristofer',
        ]);
        
        DB::table('director')->insert([
            'director_name' => 'Phillip Noyce',
        ]);
        
        DB::table('director')->insert([
            'director_name' => 'Daniel Caruso',
        ]);
        
        DB::table('director')->insert([
            'director_name' => 'Steve Bendelack',
        ]);
        
        DB::table('director')->insert([
            'director_name' => 'Mel Smith',
        ]);
        
        DB::table('director')->insert([
            'director_name' => 'Gore Verbinski',
        ]);
    }
}
