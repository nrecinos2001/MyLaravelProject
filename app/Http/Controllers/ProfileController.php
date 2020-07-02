<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showCareer(){
        return 'Ingenieria Informatica';
    }

    public function showInformation(int $age, string $name){
        echo"$name - $age años";
    }
}
