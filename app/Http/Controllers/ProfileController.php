<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mysqli;

class ProfileController extends Controller
{
    public function showCareer(){
        return 'Ingenieria Informatica';
    }

    public function showInformation(int $age, string $name){
        echo"$name - $age años";
    }

    public function loginUser(){
        return view('welcome_views.login');
    }

    public function singUp(){
        return view('welcome_views.singup');
    }

    public function singUpTwo(){
        return view('welcome_views.singup2');
    }
}
