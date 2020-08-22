<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users; 
use App\Models\Universities;
use App\Models\Countries;
use App\Models\Careers;
use App\Models\Faculties;
use App\Models\Subjects;
use mysqli;

class ProfileController extends Controller
{
    //Login & Sing up
    public function loginUser(){
        return view('welcome_views.login');
    }

    //Profile
    public function myProfile(Request $request){
        $countries = Countries::select('*')->orderBy('name', 'asc')->get();

        $user = $request->user;
        $password = $request->password;
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
        }elseif ($user == "admin.mup@mup" && $password == "SohCahToa") {
            return view('Admin.admin_view', ['country'=>$countries]);
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
        $subjects = Subjects::select('id', 'name')->orderBy('name', 'asc')->get();
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
        return view('Profile.adding', compact('subjects'), ['info'=>$information, 'nOfSub'=>$nos]);
    }
    
    
}
