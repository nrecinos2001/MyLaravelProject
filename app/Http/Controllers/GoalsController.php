<?php

namespace App\Http\Controllers;

use App\Models\Goals;
use App\Models\Scores;
use App\Models\Users;
use Illuminate\Http\Request;

class GoalsController extends Controller
{
    public function show(){
        $users = Users::select('*')->where('id_student', '00083120'
            )->with('university','career'
            )->get();
        $goals = Goals::select('*')->where('user_id', 1)->get();
        $totagoals = Goals::where('user_id', 1)->count();
        $higher = Goals::where('user_id', 1)->max('cicle');
        return view('Profile.goals', compact('users', 'goals'), ['tG'=>$totagoals, 'higher'=>$higher]);
    }
    public function adding(){
        $users = Users::where('id_student', '00083120')->get('*');
        return view('Profile.goalsAdd', compact('users'));
    }
    public function store(Request $request){
        $request->validate([
            'status' => 'required|integer|max:2',
            'name' => 'required|string|max:191',
            'description' => 'required|string|max:191',
            'cicle' => 'required|integer'
        ]);
        
        $newGoal = Goals::create([
            'name' => $request->name,
            'description' => $request->description,
            'cicle' => $request->cicle,
            'user_id' => $request->user_id,
            'state' => $request->status
        ]);

        return redirect()->route('showGoals');
    }
    public function update(Request $request){
        $newupdate = Goals::find($request->goal_id);
        $newupdate->state = $request->status;
        $newupdate->save();
    return redirect()->route('showGoals');
    }
}
