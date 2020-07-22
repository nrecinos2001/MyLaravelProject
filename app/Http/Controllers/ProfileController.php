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
            $search => 'nestor_recinos@mup.uca',
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
        //Progress of the career
        $done = 4.5;
        $missing = 100-$done;
        $progress = [
            'done' => $done,
            'missing' => $missing
        ];
        return view('Profile.profile', ['info'=>$information], ['pro'=>$progress]);
    }
    public function singUp(){
        return view('welcome_views.singup');
    }

    public function singUpTwo(){
        return view('welcome_views.singup2');
    }
    
}
