<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JuliaSetController;

Route::get('/satori/julia', [JuliaSetController::class, 'index']);
Route::get('/satori/julia/generate', [JuliaSetController::class, 'generateJuliaSet'])->name('julia.generate');
