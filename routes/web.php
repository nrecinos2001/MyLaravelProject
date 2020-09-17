<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GoalsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScoresAddingController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SingUpController;
use App\Http\Controllers\UpdateUserInfoController;
use App\Models\Goals;

//Welcome rutes and related with profile

Route::get('/', [IndexController::class, 'welcome'])->name('welcome');
Route::get('loginView', [ProfileController::class, 'loginUser'])->name('loginView');
Route::prefix('register')->group(function(){
    Route::get('partTwo', [SingUpController::class, 'singUp'])->name('registerTwo');
    Route::post('finish', [SingUpController::class, 'singUpTwo'])->name('registerFinish'); 
});
Route::middleware('auth')->group(function(){
    Route::prefix('profile/me')->group(function(){
        Route::get('/', [ProfileController::class, 'myProfile'])->name('myProfile');
        Route::get('/myScores', [ProfileController::class, 'myScores'])->name('myScores');
        Route::get('/myScores/add', [ProfileController::class, 'adding'])->name('add');
        Route::get('/myGoals', [GoalsController::class, 'show'])->name('showGoals');
        Route::get('/myGoals/add', [GoalsController::class, 'adding'])->name('showGoalsAdding');
        Route::post('/myGoals/adding', [GoalsController::class, 'store'])->name('storeGoal');
        Route::post('/myGoals/updating', [GoalsController::class, 'update'])->name('updatingGoal');
        Route::get('/update', [ProfileController::class, 'updateData'])->name('update');
        Route::post('/updating', [UpdateUserInfoController::class, 'updatingData'])->name('updatingUser');
        Route::post('/update/addSM_user', [ProfileController::class, 'addSocialU'])->name('addSM_user');
        Route::post('/update/updateSM_user', [UpdateUserInfoController::class, 'updateSocialUser'])->name('updateSM_user');
        Route::post('/update/deletingSM', [UpdateUserInfoController::class, 'destroySM'])->name('deletingSM_user');
        Route::post('/update/updatingPhoto', [UpdateUserInfoController::class, 'updatePhoto'])->name('updatePhoto');
        //Añadir notas del usuario
        Route::post('/myScores/adding', [ScoresAddingController::class, 'adding'])->name('adding');
        Route::get('profile/admin', [AdminController::class, 'myAdminProfile'])->name('adminAccess');
    });
});
//Busqueda
Route::prefix('search')->group(function(){
    Route::get('results', [SearchController::class, 'results']);
});
//Prefijo para 'acerca'
Route::prefix('about')->group(function() {
    Route::get('/', [AboutController::class, 'show_about']);
});
//Añadir Información por el administrador
Route::prefix('admin/add')->group(function() {
    Route::post('University', [AdminController::class, 'addUniversity']);
    Route::post('Subject', [AdminController::class, 'addSubject']);
    Route::post('Faculty', [AdminController::class, 'addFaculty']);
    Route::post('Career', [AdminController::class, 'addCareer']);
    Route::post('Country', [AdminController::class, 'addCountry']);
    Route::post('SocialMedia', [AdminController::class, 'addSocialMedia']);
    Route::post('NumberofSubjects', [AdminController::class, 'addnOfSubjects']);
});






Auth::routes();

//Route::get('/home', [HomeController::class, 'index'])->name('home');
