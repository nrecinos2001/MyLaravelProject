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
            CareerSeeder::class,
            CountrySeeder::class,
            FacultySeeder::class,
            SMediaSeeder::class,
            UniversitySeeder::class,
            UserSeeder::class,
            NumbersSeeder::class,
            SubjecsSeeder::class
        ]);
    }
}
