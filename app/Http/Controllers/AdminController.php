<?php

namespace App\Http\Controllers;

use App\Models\Universities;
use App\Models\Subjects;
use App\Models\Careers;
use App\Models\Faculties;
use App\Models\Countries;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //AÑADIR UNIVERSIDAD
    public function addUniversity(Request $request){
        $newUniversity = Universities::create([
            'name' => $request->u_name,
            'color' => $request->u_color,
            'abbreviation' => $request->u_abbr,
            'country' => $request->country
        ]);
        if($newUniversity){
            return view('Admin.success_view');
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
            return view('Admin.success_view');
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
            return view('Admin.success_view');
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
            return view('Admin.success_view');
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
            return view('Admin.success_view');
        }else{
            return view('Admin.mistake_view');
        }
    }
}
