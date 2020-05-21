<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'category_name' => 'Biograficzny',
        ]);

        DB::table('category')->insert([
            'category_name' => 'Dramat',
        ]);

        DB::table('category')->insert([
            'category_name' => 'Psychologiczny',
        ]);

        DB::table('category')->insert([
            'category_name' => 'Akcja',
        ]);

        DB::table('category')->insert([
            'category_name' => 'Przygodowy',
        ]);

        DB::table('category')->insert([
            'category_name' => 'Kryminał',
        ]);

        DB::table('category')->insert([
            'category_name' => 'Komedia',
        ]);

        DB::table('category')->insert([
            'category_name' => 'Melodramat',
        ]);

        DB::table('category')->insert([
            'category_name' => 'Katastroficzny',
        ]);

        DB::table('category')->insert([
            'category_name' => 'Thriller',
        ]);

        DB::table('category')->insert([
            'category_name' => 'Sci-Fi',
        ]);

        DB::table('category')->insert([
            'category_name' => 'Muzyczny',
        ]);

        DB::table('category')->insert([
            'category_name' => 'Animacja',
        ]);

        DB::table('category')->insert([
            'category_name' => 'Familijny',
        ]);

        DB::table('category')->insert([
            'category_name' => 'Fantasy',
        ]);

        DB::table('category')->insert([
            'category_name' => 'Romans',
        ]);
    }
}
