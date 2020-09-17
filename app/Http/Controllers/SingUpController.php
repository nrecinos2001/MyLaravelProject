<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users as AppUser; 
use App\Models\Universities;
use App\Models\Countries;
use App\Models\Careers;
use App\Models\Faculties;
use Illuminate\Support\Facades\Storage;

class SingUpController extends Controller
{
    public function singUp(){
        $countries = Countries::select('id', 'name')
        ->get();

        $universities = Universities::select('id', 'name')
        ->get();

        $careers = Careers::select('id', 'name')
        ->get();

        $faculties = Faculties::select('id', 'name')
        ->get();

        return view('welcome_views.singup', compact('careers', 'faculties','countries', 'universities'));
    }
    public function singUpTwo(Request $request){
        $request->validate([
            'student_id' => 'required|string|max:75',
            'lastname' => 'required|string|max:25',
            'country' => 'required|integer',
            'gender' => 'required|string|max:1',
            'university' => 'required|integer',
            'faculty' => 'required|integer',
            'career' => 'required|integer',
            'username' => 'required|string|max:191',
            'profilepic' => 'image|max:5000'
        ]);
        if(!($request->profilepic)){
            $image = null;
        }else{
            $image = basename(Storage::put('profile', $request->profilepic));
        }
        $fillUser = AppUser::find(auth()->id());
            $fillUser->id_student = $request->student_id;
            $fillUser->lastname = $request->lastname;
            $fillUser->gender = $request->gender;
            $fillUser->country_id = $request->country;
            $fillUser->university_id = $request->university;
            $fillUser->faculty_id = $request->faculty;
            $fillUser->career_id = $request->career;
            $fillUser->username = $request->username;
            $fillUser->image = $image; 
            $fillUser->save();
        return redirect()->route('myProfile');
    }

}