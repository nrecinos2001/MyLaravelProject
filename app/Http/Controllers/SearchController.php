<?php

namespace App\Http\Controllers;

use App\Models\Scores;
use App\Models\SocialUser;
use App\Models\subjectsbycareer;
use App\Models\Users;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function results(Request $request){
        $users = Users::select('*')->where('id', auth()->id())->get('image');
        $results = Users::select('*')->where('name', 'like', "$request->name%")->get();
        $userMedia = SocialUser::select('*')->get();
        foreach($results as $u){
            $allSubjects = subjectsbycareer::where('university_id', $u->university_id)->where('career_id', $u->career_id)->get('subjects');
            $subjectsDone = Scores::select('id','score')->where('student_id', $u->id)->where('score', '>', '5.99')->get();
        }
        //dd($subjectsDone);
        return view('search.search_results', compact('results', 'userMedia', 'users', 'allSubjects'), ['subjectsDone'=>$subjectsDone]);
    }
}
