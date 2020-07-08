<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\InformationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


//Using controllers and 

Route::get('/', [IndexController::class, 'welcome'])->name('inicio');
Route::get('login', [ProfileController::class, 'loginUser'])->name('login');
//Prefijo para 'acerca'
Route::prefix('acerca')->group(function() {
    Route::get('/', [AboutController::class, 'show_about']);
    Route::get('/historia', [AboutController::class, 'show_history']);
});

//Prefijo para 'contactos'
Route::prefix('contactos')->group(function(){
    Route::get('email', [ContactController::class, 'show_email']);
    Route::get('redessociales', [ContactController::class, 'show_social_media']);
});
//Autenticacion para el perfil
Route::middleware('auth')->group(function(){
    Route::post('career', [ProfileController::class, 'showCareer']);
    Route::get('information/{age}/{name}', [ProfileController::class, 'showInformation']);
});
//Prefijo para 'info'
Route::prefix('info')->group(function(){
    Route::get('objetivos', [InformationController::class, 'showObjectives']);
    Route::get('alcances-a-futuro', [InformationController::class, 'showReach']);
    Route::get('desarrolladores', [InformationController::class, 'showDevelopers']);
});




