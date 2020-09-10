<?php

use App\Models\Faculties;
use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newFaculty = Faculties::create([
            'name' => 'Ingeniería y Arquitectura'
        ]);
    }
}
