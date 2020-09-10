<?php

use App\Models\Countries;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newCountrie = Countries::create([
            'name' => 'El Salvador' 
        ]);
    }
}
