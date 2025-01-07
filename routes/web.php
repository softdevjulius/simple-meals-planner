<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\MealController::class, 'landing'])->name("lunch");
Route::get('breakfast', [\App\Http\Controllers\MealController::class, 'breakfast'])->name("breakfast");


//meal plan
//breakfast fruits..

