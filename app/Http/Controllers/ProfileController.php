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
    public function myProfile(){
        $search = "nestor_recinos@mup.uca";
        $people = [
            $search => 'Nestor Recinos',
        ];
        $users = [
            $search => 'nestor_recinos@mup.ues',
        ];
        $university = [
            $search => 'Centroamericana Jose Simeon Cañas'
        ];
        $universityColor = [
            $search => 'bg-blue-700'
        ];
        $career = [
            $search => 'Ingenieria Informatica'
        ];
        $country =[
            $search => 'El Salvador'
        ];
        $information = [
            'name' => $people[$search],
            'username' => $users[$search],
            'university' => $university[$search],
            'career' => $career[$search],
            'country' => $country[$search],
            'color' => $universityColor[$search]
        ];
        return view('Profile.profile', ['info'=>$information]);
    }
    public function singUp(){
        return view('welcome_views.singup');
    }

    public function singUpTwo(){
        return view('welcome_views.singup2');
    }
    
}
