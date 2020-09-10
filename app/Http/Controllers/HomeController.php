<?php

namespace App\Http\Controllers;

use App\Models\Countries;
use App\Models\Scores;
use App\Models\SocialUser;
use App\User as AppUser;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countries = Countries::select('*')->orderBy('name', 'asc')->get();
        $scores = Scores::select('*')->where('student_id', '00083120')->get();
        $userMedia = SocialUser::select('user_id', 'socialmedia_id', 'link')
        ->where('user_id', 1)->with('socialMedia')
        ->get();
        $uvAll = 0;
        $sumAll = 0;
        foreach ($scores as $score) {
            if($score->score >= 6){
                $sumAll += ($score->score * $score->UV);
                $uvAll += $score->UV;
            }
        }
        //Progress of the career
        $done = 4.5;
        $missing = 100-$done;
        /* $missCum = 0;
        $achCum = 0; */

        //CUM
        if($sumAll == 0 && $uvAll == 0){
            $sumAll = 0.01;
            $uvAll = 1;
        }
        $achCum = round(($sumAll/$uvAll),2);
        $missCum = 10 - $achCum;
        $progress = [
            'done' => $done,
            'missing' => $missing,
            'CUM_ach' => $achCum,
            'CUM_miss' => $missCum
        ];
        
        $usersAll = AppUser::get('username', 'password');
            $users = AppUser::select('*')->where('id_student', '00083120'
            )->with('university','career'
            )->get();
            return view('Profile.profile',  compact('users', 'userMedia'), ['pro'=>$progress, 'numbers'=>$sumAll]);
 //return redirect()->route('myProfile');
    }
}
