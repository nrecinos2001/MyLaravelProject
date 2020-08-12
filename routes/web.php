<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\InformationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;


//Welcome rutes and related with profile

Route::get('/', [IndexController::class, 'welcome'])->name('inicio');
Route::get('login', [ProfileController::class, 'loginUser'])->name('login');
Route::prefix('singup')->group(function(){
    Route::get('partOne', [ProfileController::class, 'singUp'])->name('singUp');
    Route::get('partTwo', [ProfileController::class, 'singUpTwo'])->name('singUp2');
});
Route::prefix('profile/me')->group(function(){
    Route::get('/', [ProfileController::class, 'myProfile'])->name('myProfile');
    Route::get('/myScores', [ProfileController::class, 'myScores'])->name('myProfile');
    Route::get('/myScores/add', [ProfileController::class, 'adding'])->name('add');
});
Route::middleware('auth')->group(function(){
    Route::get('/', [ProfileController::class, 'myProfile'])->name('myProfile');
});
//Busqueda
Route::prefix('search')->group(function(){
    Route::get('results', [SearchController::class, 'results']);
});
//Prefijo para 'acerca'
Route::prefix('about')->group(function() {
    Route::get('/', [AboutController::class, 'show_about']);
    Route::get('/historia', [AboutController::class, 'show_history']);
});

//Prefijo para 'contactos'
Route::prefix('contactos')->group(function(){
    Route::get('email', [ContactController::class, 'show_email']);
    Route::get('redessociales', [ContactController::class, 'show_social_media']);
});
//Autenticacion para el perfil.
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




