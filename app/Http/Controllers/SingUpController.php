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
            'lastname' => 'required|string|max:191',
            'country_id' => 'required|integer',
            'gender' => 'required|string|max:1',
            'university_id' => 'required|integer',
            'faculty_id' => 'required|integer',
            'career_id' => 'required|integer',
            'username' => 'required|string|max:191',
            'image' => 'required|image|max:5000'
        ]);
        /* $image =  */
        $fillUser = Users::find(auth()->id());
            $fillUser->id_student = $request->student_id;
            $fillUser->lastname = $request->last_name;
            $fillUser->country_i = $request->country;
            $fillUser->gender = $request->gender;
            $fillUser->university_id = $request->university;
            $fillUser->faculty_id = $request->faculty;
            $fillUser->career_i = $request->career;
            $fillUser->username = $request->username;
            $fillUser->image = basename(Storage::put('profile', $request->profilepic));
            $fillUser->save();
        return redirect()->route('myProfile');
    }

}