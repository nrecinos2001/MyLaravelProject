<?php

use App\Models\SubjectsByCareer;
use Illuminate\Database\Seeder;

class NoSubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $careerOne = SubjectsByCareer::create([
            'university_id' => 1,
            'career_id' => 1,
            'faculty_id' => 1,
            'subjects' => 44
        ]);
    }
}
