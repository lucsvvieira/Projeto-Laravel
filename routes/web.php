<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/include', [SiteController::class, 'index2']);
Route::get('/', [SiteController::class, 'index']);
Route::get('/exercicio/2', [SiteController::class, 'exercicio2']);