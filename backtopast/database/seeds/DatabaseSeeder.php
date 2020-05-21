<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            FilmSeeder::class,
            DirectorSeeder::class,
            CategorySeeder::class,
            Category_Film_Seeder::class,
            ActorSeeder::class,
            Actor_Film_Seeder::class,
        ]);
    }
}
