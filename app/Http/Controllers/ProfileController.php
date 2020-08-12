<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mysqli;

class ProfileController extends Controller
{
    //Login & Sing up
    public function loginUser(){
        return view('welcome_views.login');
    }
    public function singUp(){
        return view('welcome_views.singup');
    }
    public function singUpTwo(){
        return view('welcome_views.singup2');
    }
    //Profile
    public function myProfile(){
        $user = $_REQUEST['user'];
        $password = $_REQUEST['password'];
        //LOGIN DATA
        $loginData = [
            'username' => 'nestor.recinos@mup.uca',
            'password' => 'Nestor_10'
        ];
        

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
        //CUM
        $achCum = 8.17;
        $missCum = 10 - $achCum;
        $progress = [
            'done' => $done,
            'missing' => $missing,
            'CUM_ach' => $achCum,
            'CUM_miss' => $missCum
        ];


        if(($user == $loginData['username']) && ($password == $loginData['password'])){
            return view('Profile.profile', ['info'=>$information], ['pro'=>$progress]);
        }else{
            return view('welcome_views.login');
        }
    }
    public function myScores(){
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
        return view('Profile.myScores', ['info'=>$information]);
    }

    public function adding(){
        $nos = $_REQUEST['nos'];
        $cicle = $_REQUEST['cicle'];
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
        return view('Profile.adding', ['info'=>$information, 'nOfSub'=>$nos]);
    }
    
}
