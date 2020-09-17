<?php

namespace App\Http\Controllers;

use App\Models\Universities;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function welcome(){
        $universities = Universities::select('logo')
        ->orderBy('name', 'ASC')
        ->get();
        
        return view('welcome_views.welcome', compact('universities'));
    }
}
