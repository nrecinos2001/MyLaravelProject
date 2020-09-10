<?php

use App\Models\Careers;
use Illuminate\Database\Seeder;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newCareer = Careers::create([
            'name' => 'Ingeniería Informática'
        ]);
    }
}
