<?php

namespace App\Http\Controllers;

use App\Models\Numbers;
use App\Models\SocialUser;
use App\Models\Users;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function results(Request $request){
        $users = Users::select('*')->where('id', auth()->id())->get('image');
        $results = Users::select('*')->where('name', 'like', "$request->name%")->get();
        $userMedia = SocialUser::select('*')->get();
        $sbyCareer = Numbers::select('university_id', 'career_id', 'nofSubjects')->get();

        return view('search.search_results', compact('results', 'userMedia', 'users', 'sbyCareer'));
    }
}
