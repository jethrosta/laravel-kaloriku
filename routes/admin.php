<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ExerciseController;
use App\Http\Controllers\TrainerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/
Route::group(
    [
        'prefix' => 'admin',
        'middleware' => [ /*'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','admin'*/]
    ], function(){
/*    Route::group(['middleware' => 'admin'], function () {*/

    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/food', [AdminController::class, 'food'])->name('admin.food');
    Route::get('/food/edit/{id}', [AdminController::class, 'food_edit'])->name('admin.food.edit');
    Route::get('/food/{id}', [AdminController::class, 'food_details'])->name('admin.food.details');


    Route::get('/meals', [AdminController::class, 'index'])->name('admin.meal');
    Route::get('/meals/create', [AdminController::class, 'create_meals'])->name('admin.meals.create');
    Route::post('/meals/store', [AdminController::class, 'store_meals'])->name('admin.meals.store');


    Route::get('/exercises', [ExerciseController::class, 'index'])->name('admin.exercise');
    Route::get('/exercise-types/{id}', [ExerciseController::class, 'getExerciseType'])->name('admin.exercise.types');
    Route::get('/all-exercise/{id}', [ExerciseController::class, 'getAllExercise'])->name('admin.add.exercise');

    Route::get('/trainer', [TrainerController::class, 'index'])->name('admin.trainer');
});
