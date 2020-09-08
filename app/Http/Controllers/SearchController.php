<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function results(Request $request){
        $search = $request->hoal;
        $people = [
            $search => 'Nestor Recinos',
        ];
        $users = [
            $search => 'nestor_recinos@mup.ues',
        ];
        $university = [
            $search => 'Centroamericana Jose Simeon Cañas'
        ];
        $universityColor = [
            $search => 'bg-blue-700'
        ];
        $career = [
            $search => 'Ingenieria Informatica'
        ];
        $country =[
            $search => 'El Salvador'
        ];
        $information = [
            'name' => $people[$search],
            'username' => $users[$search],
            'university' => $university[$search],
            'career' => $career[$search],
            'country' => $country[$search],
            'color' => $universityColor[$search]
        ];
        return view('search.search_results', ['info'=>$information]);
    }
}
