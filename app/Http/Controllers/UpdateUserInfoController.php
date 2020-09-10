<?php

namespace App\Http\Controllers;

use App\Models\Users as AppUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
class UpdateUserInfoController extends Controller
{
    public function updatingData(Request $request){
        $request->validate([
            //'student_id' => 'required|string|max:191',
             'name' => 'required|string|max:25',
            'lastname' => 'required|string|max:25',
            'email' => 'required|string|max:191',
            //'password' => 'required|string|max:191',
            'country' => 'required|integer',
            'gender' => 'required|string|max:1',
            'university' => 'required|integer',
            'faculty' => 'required|integer',
            'career' => 'required|integer',
            'username' => 'required|string|max:191',
            //'image' => 'required|image|max:5000'
        ]);
        //$image = basename(Storage::put('profile', $request->profilepic));
        $newupdate = AppUser::find($request->id_user);
        $newupdate->id_student = $request->student_id;
        $newupdate->name = $request->name;
        $newupdate->lastname = $request->lastname;
        $newupdate->email = $request->email; 
        //$newupdate->password = bcrypt($request->password);
        $newupdate->country_id = $request->country;
        $newupdate->gender = $request->gender;
        $newupdate->university_id = $request->university;
        $newupdate->faculty_id = $request->faculty;
        $newupdate->career_id = $request->career;
        $newupdate->username = $request->username;
        //$newupdate->image = $image;
        $newupdate->save();

        return redirect()->route('myProfile');
    }
}
