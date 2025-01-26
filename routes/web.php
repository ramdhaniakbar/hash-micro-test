<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing');
});

Route::get('/', [LandingController::class, 'index'])->name('landing.index');
Route::post('/update-dish-title', [LandingController::class, 'update_dish_title'])->name('landing.update-dish-title');