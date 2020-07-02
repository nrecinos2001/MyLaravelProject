<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


//Closures
Route::get('/', function () {
    return '¡Bienvenido a My University Progress!';
});
Route::get('acerca', function () {
    return 'My UNiversity progress te ayuda a conocer tu progreso universitario.';
});
Route::get('acerca/historia', function () {
    return 'La idea surge en EL Salvador en el año 2020 con un estudiante universitario.';
});
Route::get('acerca/contactos', function () {
    return 'Escribenos a nuestro correo myuprogress@gmail.com o llamanos al 7182-7890.';
});
Route::get('acerca/redessociales', function () {
    return 'Facebook: My University Progress, INstagram: @myu_progress';
});

//controller
Route::post('career', 'ProfileController@showCareer');
Route::get('information', 'ProfileController@showInformation');
Route::get('objetivos', 'InformationController@showObjectives');
Route::get('alcances-a-futuro', 'InformationCOntroller@showReach');
Route::get('desarrolladores', 'InformationCOntroller@showDevelopers');



