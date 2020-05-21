<?php

use Illuminate\Database\Seeder;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actor')->insert([
            'firstname' => 'Winona',
            'lastname' => 'Ryder',            
        ]);

        DB::table('actor')->insert([
            'firstname' => 'Angelina',
            'lastname' => 'Jolie',            
        ]);

        DB::table('actor')->insert([
            'firstname' => 'Brittany',
            'lastname' => 'Murphy',            
        ]);

        DB::table('actor')->insert([
            'firstname' => 'Jason',
            'lastname' => 'Harner',            
        ]);

        DB::table('actor')->insert([
            'firstname' => 'John',
            'lastname' => 'Malkovich',            
        ]);

        DB::table('actor')->insert([
            'firstname' => 'Brad',
            'lastname' => 'Pitt',            
        ]);

        DB::table('actor')->insert([
            'firstname' => 'Vince',
            'lastname' => 'Vaughn',            
        ]);

        DB::table('actor')->insert([
            'firstname' => 'Leonardo',
            'lastname' => 'DiCaprio',            
        ]);

        DB::table('actor')->insert([
            'firstname' => 'Tom',
            'lastname' => 'Hardy',            
        ]);

        DB::table('actor')->insert([
            'firstname' => 'Domhnall',
            'lastname' => 'Gleeson',            
        ]);

        DB::table('actor')->insert([
            'firstname' => 'Jim',
            'lastname' => 'Sturgess',            
        ]);

        DB::table('actor')->insert([
            'firstname' => 'Kevin',
            'lastname' => 'Spacey',            
        ]);

        DB::table('actor')->insert([
            'firstname' => 'Kate',
            'lastname' => 'Bosworth',            
        ]);

        DB::table('actor')->insert([
            'firstname' => 'Tom',
            'lastname' => 'Hanks',            
        ]);

        DB::table('actor')->insert([
            'firstname' => 'Christopher',
            'lastname' => 'Walken',            
        ]);

        DB::table('actor')->insert([
            'firstname' => 'Kate',
            'lastname' => 'Winslet',            
        ]);

        DB::table('actor')->insert([
            'firstname' => 'Gloria',
            'lastname' => 'Stuart',            
        ]);

        DB::table('actor')->insert([
            'firstname' => 'James',
            'lastname' => 'McAvoy',            
        ]);

        DB::table('actor')->insert([
            'firstname' => 'Anya',
            'lastname' => 'Taylor',            
        ]);

        DB::table('actor')->insert([
            'firstname' => 'Betty',
            'lastname' => 'Buckley',            
        ]);

        DB::table('actor')->insert([
            'firstname' => 'Matt',
            'lastname' => 'Damon',            
        ]);

        DB::table('actor')->insert([
            'firstname' => 'Jessica',
            'lastname' => 'Chastain',            
        ]);

        DB::table('actor')->insert([
            'firstname' => 'Kristen',
            'lastname' => 'Wiig',            
        ]);

        DB::table('actor')->insert([
            'firstname' => 'Robin',
            'lastname' => 'Williams',            
        ]);

        DB::table('actor')->insert([
            'firstname' => 'Robert',
            'lastname' => 'Leonard',            
        ]);

        DB::table('actor')->insert([
            'firstname' => 'Ethan',
            'lastname' => 'Hawke',            
        ]);
    }
}
