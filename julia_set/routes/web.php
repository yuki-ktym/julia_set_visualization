<?php

use App\Http\Controllers\JuliaSetController;
use Illuminate\Support\Facades\Route;

Route::get('/satori/julia', [JuliaSetController::class, 'index'])->name('julia.generate');
