<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users; 
use App\Models\Universities;
use App\Models\Countries;
use App\Models\Careers;
use App\Models\Faculties;
use Illuminate\Support\Facades\Storage;

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
        $request->validate([
            'id_student' => 'required|string|max:191',
            'name' => 'required|string|max:191',
            'lastname' => 'required|string|max:191',
            'email' => 'required|string|max:191',
            'password' => 'required|string|max:191',
            'country_id' => 'required|integer',
            'gender' => 'required|char|max:1',
            'university_id' => 'required|integer',
            'faculty_id' => 'required|integer',
            'career_id' => 'required|integer',
            'username' => 'required|string|max:191',
            'image' => 'required|image|max:5000'
        ]);
        $image = basename(Storage::put('profile', $request->profilepic));
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
            'image' => $image
        ]);
        return view('welcome_views.singup2', ['name'=>$request->name]);
    }

}