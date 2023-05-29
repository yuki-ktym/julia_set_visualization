<?php

use App\Http\Controllers\JuliaSetController;
use Illuminate\Support\Facades\Route;

// Route::POST('/satori/julia', [JuliaSetController::class, 'index'])->name('julia.generate');
Route::get('/satori/julia', 'JuliaSetController@index');
Route::get('/satori/julia', 'JuliaSetController@generateJuliaSet')->name('julia.generate');
