<?php

use Illuminate\Database\Seeder;
use App\Models\Subjects;
class SubjecsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newSubject = Subjects::create([
            'name' => 'Precálculo'
        ]);
        $newSubject2 = Subjects::create([
            'name' => 'Elementos Para El Estudio De La Ciencia Y La Tecnología'
        ]);
        $newSubject3 = Subjects::create([
            'name' => 'Matemática Discreta 1'
        ]);
        $newSubject4 = Subjects::create([
            'name' => 'Fundamentos de Programación'
        ]);
        $newSubject5 = Subjects::create([
            'name' => 'Álgebra Vectorial y Matrices'
        ]);
        $newSubject6 = Subjects::create([
            'name' => 'Matemática Discreta 2'
        ]);
        $newSubject7 = Subjects::create([
            'name' => 'Cálculo 1'
        ]);
        $newSubject8 = Subjects::create([
            'name' => 'Programación de Estructuras Dinámicas'
        ]);
    }
}
