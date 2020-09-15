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
use App\Models\Scores;
use App\Models\SocialMedia;
use App\Models\SocialUser;
use App\Models\subjectsbycareer;
use App\Models\User as ModelsUser;
use App\User as AppUser;
use Illuminate\Foundation\Auth\User;

class ProfileController extends Controller
{
    //Login & Sing up
    public function loginUser(){
        
        return view('welcome_views.1login');
    }

    //Profile
    public function myProfile(Request $request){
        $countries = Countries::select('*')->orderBy('name', 'asc')->get();
        $scores = Scores::select('*')->where('student_id', auth()->id())->get();
        $userMedia = SocialUser::select('user_id', 'socialmedia_id', 'link')
        ->where('user_id', auth()->id())->with('socialMedia')
        ->get();
        $users = Users::select('*')->where('id', auth()->id())
        ->with('university','career')
        ->get();
        //Progress of the career
        $uvAll = 0;
        $sumAll = 0;
        $done = 0;
        $subjectsCounter = 0;
        foreach($users as $u){
            $subjectsTotal = subjectsbycareer::select('subjects')
            ->where('university_id', $u->university_id)
            ->where('career_id', $u->career_id)
            ->get();
        }
        foreach ($scores as $score) {
            if($score->score >= 6){
                $sumAll += ($score->score * $score->UV);
                $uvAll += $score->UV;
                $subjectsCounter++;
            }
        }
        foreach ($subjectsTotal as $sT){
            $allS = $sT->subjects;
        }
        
        //CUM
        if($sumAll == 0 && $uvAll == 0){
            $sumAll = 0.01;
            $uvAll = 1;
        }
        $missing = $allS - $subjectsCounter;
        $achCum = round(($sumAll/$uvAll),2);
        $missCum = 10 - $achCum;
        $progress = [
            'done' => $subjectsCounter,
            'missing' => $missing,
            'CUM_ach' => $achCum,
            'CUM_miss' => $missCum
        ];
        return view('Profile.profile',  compact('users', 'userMedia'), ['pro'=>$progress, 'numbers'=>$sumAll]);
        }

    
    public function myScores(Request $request){
        $users = Users::select('*')->where('id', auth()->id())->get();
        $scores = Scores::select('*')->where('student_id', auth()->id())->with('subject')->orderBy('cicle', 'asc')->get();
        $higher = DB::table('scores')->where('student_id', auth()->id())->max('cicle');

        return view('Profile.myScores', compact('users', 'scores'), ['higher'=>$higher, 'numbers'=>$request->numbers]);
    }

    public function adding(Request $request){
        $request->validate([
            'nos'=>'required|integer|max:10',
            'cicle'=>'required|integer|max:25'

        ]);
        $subjects = Subjects::select('id', 'name')->orderBy('name', 'asc')->get();
        $users = Users::select('*')->where('id_student', '00083120')->get();
        
        return view('Profile.adding', compact('subjects', 'users'), ['nOfSub'=>$request->nos, 'cicle'=>$request->cicle]);
    }
    
    public function updateData(){
        $users = Users::select('*')->where('id', auth()->id())->with('university','career'
        )->get();
        $countries = Countries::select('id', 'name')->get();
        $universities = Universities::select('id', 'name')->get();
        $careers = Careers::select('id', 'name')->get();
        $faculties = Faculties::select('id', 'name')->get();
        $socialmedia = SocialMedia::select('id', 'socialName')->get();
        $userMedia = SocialUser::select('id', 'user_id', 'socialmedia_id', 'link')
        ->where('user_id', auth()->id())->with('socialMedia')
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
            return redirect()->route('update');
        }
    }
}
