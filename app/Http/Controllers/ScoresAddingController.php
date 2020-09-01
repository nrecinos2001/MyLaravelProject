<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Scores;

class ScoresAddingController extends Controller
{
    public function adding(Request $request){
        //dd($request->all());
        for($i = 0; $i < $request->nOfS; $i++){
            $score = Scores::create([
                'student_id' => $request->s_ID,
                'subject_id' => $request->subjects[$i],
                'score' => $request->scores[$i],
                'UV' => $request->unities[$i],
                'cicle' => $request->cicle
            ]);
        }   
        return redirect()->route('myScores');
    }
}