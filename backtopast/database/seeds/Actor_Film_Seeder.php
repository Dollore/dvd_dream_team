<?php

use Illuminate\Database\Seeder;

class Actor_Film_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actor_film')->insert([
            'actor_id' => 1,
            'film_id' => 1,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 2,
            'film_id' => 1,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 3,
            'film_id' => 1,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 2,
            'film_id' => 2,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 4,
            'film_id' => 2,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 5,
            'film_id' => 2,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 2,
            'film_id' => 3,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 6,
            'film_id' => 3,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 7,
            'film_id' => 3,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 8,
            'film_id' => 4,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 9,
            'film_id' => 4,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 10,
            'film_id' => 4,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 11,
            'film_id' => 5,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 12,
            'film_id' => 5,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 13,
            'film_id' => 5,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 8,
            'film_id' => 6,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 14,
            'film_id' => 6,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 15,
            'film_id' => 6,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 8,
            'film_id' => 7,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 16,
            'film_id' => 7,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 17,
            'film_id' => 7,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 18,
            'film_id' => 8,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 19,
            'film_id' => 8,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 20,
            'film_id' => 8,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 21,
            'film_id' => 9,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 22,
            'film_id' => 9,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 23,
            'film_id' => 9,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 24,
            'film_id' => 10,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 25,
            'film_id' => 10,            
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 26,
            'film_id' => 10,            
        ]);
    }
}
