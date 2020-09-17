<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users; 
use App\Models\Universities;
use App\Models\Countries;
use App\Models\Careers;
use App\Models\Faculties;
use App\Models\Numbers;
use App\Models\Subjects;
use App\Models\Scores;
use App\Models\SocialMedia;
use App\Models\SocialUser;
use Illuminate\Foundation\Auth\User;

class ProfileController extends Controller
{
    //Profile
    public function myProfile(Request $request){
        $countries = Countries::select('*')
        ->orderBy('name', 'asc')
        ->get();

        $userMedia = SocialUser::select('user_id', 'socialmedia_id', 'link')
        ->where('user_id', auth()->id())
        ->with('socialMedia')
        ->get();

        $users = Users::select('*')
        ->where('id', auth()->id())
        ->with('university','career')
        ->get();

        foreach($users as $us){
            $sbyCareer = Numbers::where('university_id', $us->university_id)
            ->where('career_id', $us->career_id)
            ->get('nofSubjects');
        }

        return view('Profile.profile',  compact('users', 'userMedia', 'sbyCareer'));
        }
    
    public function myScores(Request $request){
        $users = Users::select('*')
        ->where('id', auth()->id())
        ->get();

        $scores = Scores::select('*')
        ->where('student_id', auth()->id())
        ->with('subject')
        ->orderBy('cicle', 'asc')
        ->get();

        $higher = DB::table('scores')
        ->where('student_id', auth()->id())
        ->max('cicle');

        return view('Profile.myScores', compact('users', 'scores'), 
        ['higher'=>$higher, 'numbers'=>$request->numbers]
        );
    }

    public function adding(Request $request){
        $request->validate([
            'nos'=>'required|integer|max:10',
            'cicle'=>'required|integer|max:25'
        ]);
        $subjects = Subjects::select('id', 'name')
        ->orderBy('name', 'asc')
        ->get();

        $users = Users::select('*')
        ->where('id_student', '00083120')
        ->get();
        
        return view('Profile.adding', compact('subjects', 'users'), ['nOfSub'=>$request->nos, 'cicle'=>$request->cicle]);
    }

    public function updateData(){
        $users = Users::select('*')
        ->where('id', auth()->id())
        ->with('university','career')
        ->get();

        $countries = Countries::select('id', 'name')
        ->get();
        $universities = Universities::select('id', 'name')
        ->get();

        $careers = Careers::select('id', 'name')
        ->get();

        $faculties = Faculties::select('id', 'name')
        ->get();

        $socialmedia = SocialMedia::select('id', 'socialName')
        ->get();

        $userMedia = SocialUser::select('id', 'user_id', 'socialmedia_id', 'link')
        ->where('user_id', auth()->id())
        ->with('socialMedia')
        ->get();

        return view('Profile.updateProfile', compact(
            'users', 'countries', 'universities', 'careers', 'faculties', 'socialmedia', 'userMedia'
        ));
    }
    
    public function addSocialU(Request $request){
        $newLink = SocialUser::create([
            'user_id' => auth()->id(),
            'socialmedia_id' => $request->sm_id,
            'link' => $request->link
        ]);

        if($newLink){
            return redirect()->route('myProfile');
        }
    }
}
