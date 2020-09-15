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
            abort('Ocurrió un error inesperado, intentelo nuevamente.');
        }
    }

    //AÑADIR MATERIA
    public function addSubject(Request $request){
        $request->validate([
            'sub_name' => 'required|string|max:191',
        ]);

        $newSubject = Subjects::create([
            'name' => $request->sub_name,
        ]);
        if($newSubject){
            $request->session()->flash('subStored', true);
            return redirect()->route('adminAccess');
            }else{
            abort('Ocurrió un error inesperado, intentelo nuevamente.');        
        }
    }

    //AÑADIR FACULTAD
    public function addFaculty(Request $request){
        $request->validate([
            'fac_name' => 'required|string|max:191'
        ]);
        $newFaculty = Faculties::create([
            'name' => $request->fac_name
        ]);
        if($newFaculty){
            $request->session()->flash('facStored', true);
            return redirect()->route('adminAccess');
        }else{
            abort('Ocurrió un error inesperado, intentelo nuevamente.');        
        }
    }

    //AÑADIR CARRERA
    public function addCareer(Request $request){
        $request->validate([
            'car_name' => 'required|string|max:191',
        ]);
        $newCareer = Careers::create([
            'name' => $request->car_name
        ]);
        if($newCareer){
            $request->session()->flash('cStored', true);
            return redirect()->route('adminAccess');
        }else{
            abort('Ocurrió un error inesperado, intentelo nuevamente.');        
        }
    }

    //AÑADIR PAÍS
    public function addCountry(Request $request){
        $request->validate([
            'country_name' => 'required|string|max:191'
        ]);
        $newCountry = Countries::create([
            'name' => $request->country_name
            ]);
        if($newCountry){
            $request->session()->flash('counStored', true);
            return redirect()->route('adminAccess');
        }else{
            abort('Ocurrió un error inesperado, intentelo nuevamente.');        
        }
    }
    
    //AÑADIR RED SOCIAL
    public function addSocialMedia(Request $request){
        $request->validate([
            'socialName' => 'required|string|max:191',
            'socialPhoto' => 'required|image|max:5000'
        ]);

        $newSocialMedia = SocialMedia::create([
            'socialName' => $request->socialName,
            'socialPhoto' => basename(Storage::put('SocialPhotos', $request->socialPhoto))
        ]);
        if($newSocialMedia){
            $request->session()->flash('sMediaStored', true);
            return redirect()->route('adminAccess');
        }else{
            abort('Ocurrió un error inesperado, intentelo nuevamente.');        
        }
    }
}
