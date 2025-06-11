<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CreditController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\FoodDairyController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\MakananController; // Tambahkan controller MakananController

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Only keep routes related to calorie calculator and profile.
| Others are commented out for now.
|
*/

\Illuminate\Support\Facades\Auth::routes();

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::group(['middleware' => 'auth'], function () {
    // Profile routes (keep)
    Route::get('/profile/{user_name}', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/edit/{user_name}', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');

    // Calorie calculator routes (keep)
    Route::get('/calories-calculate', [App\Http\Controllers\CalorieCalculatorController::class, 'index'])->name('calorie');
    Route::post('/calories-calculate/store', [App\Http\Controllers\CalorieCalculatorController::class, 'store'])->name('calorie.store');

    // Tambahkan route MakananController di sini
    Route::get('/makanans', [MakananController::class, 'index'])->name('makanans.index');
    Route::get('/makanans/create', [MakananController::class, 'create'])->name('makanans.create');
    Route::post('/makanans', [MakananController::class, 'store'])->name('makanans.store');
    Route::post('/calories-upload', [App\Http\Controllers\CalorieCalculatorController::class, 'upload'])->name('calorie.upload');

});

Auth::routes();

Route::get('/counter', \App\Http\Livewire\Counter::class);

// Blog is not needed, so comment out
// Route::get('/blog', [BlogController::class, 'index'])->name('blog');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
