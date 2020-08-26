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
use App\User;
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
        /* $user = $request->user;
        $password = $request->password; */
        //LOGIN DATA
        $loginData = [
            'username' => 'admin',
            'password' => 'SohCahToa'
        ];
        

        $search = "nestor_recinos@mup.uca";
        $people = [
            $search => 'Nestor Recinos',
        ];
        $users43 = [
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
            'username' => $users43[$search],
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

        $usersAll = Users::select('*')->get();
        if ($loginData['username'] == $request->user && $loginData['password'] == $request->password) {
            return view('Admin.admin_view', ['country'=>$countries]);
        }else{
            $users = Users::select('*')->where('id_student', '00083120')->get();
            dd($users);
            return view('Profile.profile',  compact('users'), ['info'=>$information, 'pro'=>$progress]);
            }
        }
        /* if(($user == $loginData['username']) && ($password == $loginData['password'])){*/
    public function myScores(Request $request){
        $users = Users::select('*')->where('id_student', '00083120')->get();
        /* $search = "nestor_recinos@mup.uca";
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
        ]; */
        return view('Profile.myScores', compact('users'));
    }

    public function adding(Request $request){
        $subjects = Subjects::select('id', 'name')->orderBy('name', 'asc')->get();
        $nos = $request->nos;
        $cicle = $request->cicle;
        $users = Users::select('*')->where('id_student', '00083120')->get();
        /* $search = "nestor_recinos@mup.uca";
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
        ]; */
        //dd($user);
        return view('Profile.adding', compact('subjects', 'users'), ['nOfSub'=>$nos]);
    }
    
    
}
