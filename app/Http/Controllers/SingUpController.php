<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users; 
use App\Models\Universities;
use App\Models\Countries;
use App\Models\Careers;
use App\Models\Faculties;

class SingUpController extends Controller
{
    public function singUp(){
        $countries = Countries::select('id', 'name')->get();
        $universities = Universities::select('id', 'name')->get();
        $careers = Careers::select('id', 'name')->get();
        $faculties = Faculties::select('id', 'name')->get();
        return view('welcome_views.singup', compact('careers', 'faculties','countries', 'universities'));
    }
    public function singUpTwo(Request $request){
        $newUser = Users::create([
            'id_student' => $request->student_id,
            'name' => $request->name,
            'lastname' => $request->last_name,
            'email' => $request->email,
            'password' => $request->passWord,
            'country_id' => $request->country,
            'gender' => $request->gender,
            'university_id' => $request->university,
            'faculty_id' => $request->faculty,
            'career_id' => $request->career,
            'username' => $request->username,
        ]);
        return view('welcome_views.singup2', ['name'=>$request->name]);
    }

}