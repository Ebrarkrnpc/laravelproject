<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TempController;

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ExerciseController;


    

Route::resource('customers', CustomerController::class);
Route::resource('meals', MealController::class);
Route::resource('foods', FoodController::class);
Route::resource('activities', ActivityController::class);
Route::resource('exercises', ExerciseController::class);





