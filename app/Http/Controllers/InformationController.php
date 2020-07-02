<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function showObjectives(){
        return 'EL objetivo principal es fomentar una mentlidad ordenada
        y de metas en la vida de los estudiantes a traves de la tecnologia';
    }

    public function showReach(){
        return 'Se pretende llegar a todas las universidades del pais y poder
        ayudar a la mayoria de universitarios salvadoreños a mejorar';
    }

    public function showDevelopers(){
        echo "Proramadores: Nestor Recinos";
    }
}
