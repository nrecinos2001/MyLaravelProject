<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show_about(){
        return 'My University progress te ayuda a conocer tu progreso universitario.';
    }
    public function show_history(){
        return 'La idea surge en EL Salvador en el año 2020 con un estudiante universitario.';
    }
}
