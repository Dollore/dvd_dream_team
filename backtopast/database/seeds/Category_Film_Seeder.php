<?php

use Illuminate\Database\Seeder;

class Category_Film_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_film')->insert([
            'category_id' => 1,
            'film_id' => 1,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 2,
            'film_id' => 1,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 3,
            'film_id' => 1,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 2,
            'film_id' => 2,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 4,
            'film_id' => 3,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 2,
            'film_id' => 4,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 5,
            'film_id' => 4,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 6,
            'film_id' => 5,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 7,
            'film_id' => 6,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 8,
            'film_id' => 7,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 9,
            'film_id' => 7,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 10,
            'film_id' => 8,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 11,
            'film_id' => 9,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 2,
            'film_id' => 10,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 2,
            'film_id' => 11,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 10,
            'film_id' => 11,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 2,
            'film_id' => 12,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 7,
            'film_id' => 12,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 2,
            'film_id' => 13,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 12,
            'film_id' => 13,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 13,
            'film_id' => 14,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 14,
            'film_id' => 14,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 7,
            'film_id' => 14,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 1,
            'film_id' => 15,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 2,
            'film_id' => 15,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 6,
            'film_id' => 16,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 10,
            'film_id' => 16,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 6,
            'film_id' => 17,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 10,
            'film_id' => 17,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 14,
            'film_id' => 18,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 7,
            'film_id' => 18,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 7,
            'film_id' => 19,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 15,
            'film_id' => 20,
        ]);

        DB::table('category_film')->insert([
            'category_id' => 5,
            'film_id' => 20,
        ]);
    }
}
