<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Scores;

class ScoresAddingController extends Controller
{
    public function adding(Request $request){
        $uvAll = 0;
        $sumAll = 0;
        $subjectsCounter = 0;
        for($i = 0; $i < $request->nOfS; $i++){
            $score = Scores::create([
                'student_id' => auth()->id(),
                'subject_id' => $request->subjects[$i],
                'score' => $request->scores[$i],
                'UV' => $request->unities[$i],
                'cicle' => $request->cicle
            ]);
        }
        
        $scores = Scores::select('*')
        ->where('student_id', auth()->id())
        ->get();
        
        foreach ($scores as $score) {
            if($score->score >= 6){
                $sumAll += ($score->score * $score->UV);
                $uvAll += $score->UV;
                $subjectsCounter++;
            }
        }
        $cum = $sumAll / $uvAll;

        $updateCum = Users::find(auth()->id());
        $updateCum->userCUM = $cum;
        $updateCum->subjectsDone = $subjectsCounter;
        $updateCum->save();
        
        return redirect()->route('myScores');
    }
}