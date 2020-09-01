<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('universities')->insert([
            'name' => 'Universidad Centroamericána José Simeón Cañas',
            'color' => 'blue-700',
            'country_id' => 1,
            'abbreviation' => 'UCA',
        ]);
    }
}
