<?php

namespace App\Http\Controllers;

use App\Models\Universities;
use App\Models\Subjects;
use App\Models\Careers;
use App\Models\Faculties;
use App\Models\Countries;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function myAdminProfile(){
        $country = Countries::orderBy('name', 'asc')->get();
        return view('Admin.admin_view', compact('country'));
    }
    //AÑADIR UNIVERSIDAD
    public function addUniversity(Request $request){
        $request->validate([
            'name' => 'required|string|max:191',
            'color' => 'required|string|max:30',
            'abbreviation' => 'required|string|max:30',
            'country_id' => 'required|integer',
            'logo' => 'required|image|max:5000'
        ]);
        
        $logo = basename(Storage::put('Universities', $request->logoU));
        $newUniversity = Universities::create([
            'name' => $request->u_name,
            'color' => $request->u_color,
            'abbreviation' => $request->u_abbr,
            'country_id' => $request->country,
            'logo' => $logo
        ]);
        if($newUniversity){
            $request->session()->flash('uStored', true);
            return redirect()->route('adminAccess');
        }else{
            return view('Admin.mistake_view');
        }
    }

    //AÑADIR MATERIA
    public function addSubject(Request $request){
        $newSubject = Subjects::create([
            'name' => $request->sub_name,
        ]);
        if($newSubject){
            $request->session()->flash('subStored', true);
            return redirect()->route('adminAccess');
            }else{
            return view('Admin.mistake_view');
        }
    }

    //AÑADIR FACULTAD
    public function addFaculty(Request $request){
        $newFaculty = Faculties::create([
            'name' => $request->fac_name,
        ]);
        if($newFaculty){
            $request->session()->flash('facStored', true);
            return redirect()->route('adminAccess');
        }else{
            return view('Admin.mistake_view');
        }
    }

    //AÑADIR CARRERA
    public function addCareer(Request $request){
        $newCareer = Careers::create([
            'name' => $request->car_name,
        ]);
        if($newCareer){
            $request->session()->flash('cStored', true);
            return redirect()->route('adminAccess');
        }else{
            return view('Admin.mistake_view');
        }
    }

    //AÑADIR PAÍS
    public function addCountry(Request $request){
        $newCountry = Countries::create([
            'name' => $request->country_name,
            ]);
        if($newCountry){
            $request->session()->flash('counStored', true);
            return redirect()->route('adminAccess');
        }else{
            return view('Admin.mistake_view');
        }
    }
    
    //AÑADIR RED SOCIAL
    public function addSocialMedia(Request $request){
        $photo = basename(Storage::put('SocialPhotos', $request->socialPhoto));
        $newSocialMedia = SocialMedia::create([
            'socialName' => $request->socialName,
            'socialPhoto' => $photo
        ]);
        if($newSocialMedia){
            $request->session()->flash('sMediaStored', true);
            return redirect()->route('adminAccess');
        }else{
            return view('Admin.mistake_view');
        }
    }
}
