<?php

use App\Models\Numbers;
use Illuminate\Database\Seeder;

class NumbersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newNumber = Numbers::create([
            'university_id' => 1,
            'career_id' => 1,
            'nofSubjects' => 44
        ]);
    }
}
