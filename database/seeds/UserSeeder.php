<?php

use App\User as AppUser;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newStudent = AppUser::create([
            'id_student' => '00083120',
            'name' => 'Néstor',
            'lastname' => 'Recinos',
            'email' => 'nestor.recinos2001@gmail.com',
            'username' => 'nestor_UCA',
            'password' => bcrypt('Nestor_10'),
            'gender' => 'M',
            'university_id' => 1,
            'career_id' => 1,
            'faculty_id' => 1,
            'country_id' => 1,
            'isadmin' => 'y',
            'image' => 'NProfile.jpg'
        ]);
    }
}
