<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show_about(){
        return view('.About.aboutUs');
    }
}
