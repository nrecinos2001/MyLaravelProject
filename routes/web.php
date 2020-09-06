<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScoresAddingController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SingUpController;

//Welcome rutes and related with profile

Route::get('/', [IndexController::class, 'welcome'])->name('home');
Route::get('login', [ProfileController::class, 'loginUser'])->name('login');
Route::prefix('singup')->group(function(){
    Route::get('partOne', [SingUpController::class, 'singUp'])->name('singUp');
    Route::post('partTwo', [SingUpController::class, 'singUpTwo'])->name('singUp2');
});
//Route::middleware('auth')->group(function(){
    Route::prefix('profile/me')->group(function(){
        Route::post('/', [ProfileController::class, 'myProfile'])->name('myProfile');
        Route::get('/myScores', [ProfileController::class, 'myScores'])->name('myScores');
        Route::get('/myScores/add', [ProfileController::class, 'adding'])->name('add');
        Route::get('/update', [ProfileController::class, 'updateData'])->name('update');
        Route::post('/update/addSM_user', [ProfileController::class, 'addSocialU'])->name('addSM_user');
        //Añadir notas del usuario
        Route::post('/myScores/adding', [ScoresAddingController::class, 'adding'])->name('adding');
    });
    Route::get('profile/admin', [AdminController::class, 'myAdminProfile'])->name('adminAccess');
//});
//Busqueda
Route::prefix('search')->group(function(){
    Route::get('results', [SearchController::class, 'results']);
});
//Prefijo para 'acerca'
Route::prefix('about')->group(function() {
    Route::get('/', [AboutController::class, 'show_about']);
    Route::get('/historia', [AboutController::class, 'show_history']);
});
//Añadir Información por el administrador
Route::prefix('admin/add')->group(function() {
    Route::post('University', [AdminController::class, 'addUniversity']);
    Route::post('Subject', [AdminController::class, 'addSubject']);
    Route::post('Faculty', [AdminController::class, 'addFaculty']);
    Route::post('Career', [AdminController::class, 'addCareer']);
    Route::post('Country', [AdminController::class, 'addCountry']);
    Route::post('SocialMedia', [AdminController::class, 'addSocialMedia']);
});






Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
