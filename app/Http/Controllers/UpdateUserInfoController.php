<?php

namespace App\Http\Controllers;

use App\Models\SocialUser;
use App\Models\Users as AppUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
class UpdateUserInfoController extends Controller
{
    public function updatingData(Request $request){
        $request->validate([
            'student_id' => 'required|string|max:75',
            'name' => 'required|string|max:25',
            'lastname' => 'required|string|max:25',
            'email' => 'required|string|max:191',
            'country' => 'required|integer',
            'gender' => 'required|string|max:1',
            'university' => 'required|integer',
            'faculty' => 'required|integer',
            'career' => 'required|integer',
            'username' => 'required|string|max:191',
        ]);
        $newupdate = AppUser::find(auth()->id());
        $newupdate->id_student = $request->student_id;
        $newupdate->name = $request->name;
        $newupdate->lastname = $request->lastname;
        $newupdate->email = $request->email; 
        $newupdate->country_id = $request->country;
        $newupdate->gender = $request->gender;
        $newupdate->university_id = $request->university;
        $newupdate->faculty_id = $request->faculty;
        $newupdate->career_id = $request->career;
        $newupdate->username = $request->username;
        $newupdate->save();

        return redirect()->route('myProfile');
    }

    public function updateSocialUser(Request $request){
        $updateUM = SocialUser::find($request->socialmedia);
        $updateUM->link = $request->linkforusermedia;
        $updateUM->save();

        return redirect()->route('myProfile');
    }
    public function destroySM(Request $request){
        $deleteUM = SocialUser::find($request->socialmedia);
        $deleteUM->delete();

        return redirect()->route('myProfile');
    }
    public function updatePhoto(Request $request){
        $request->validate([
            'profilepic' => 'image|max:5000'
        ]);

        $updateProfPic = AppUser::find(auth()->id());
        $updateProfPic->image = basename(Storage::put('profile', $request->profilepic)); 
        $updateProfPic->save();

        return redirect()->route('myProfile');
    }
}
