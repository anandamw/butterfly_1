<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NavigasiController;
use Illuminate\Support\Facades\Route;




Route::get('/home', [AuthController::class, 'index']);
Route::get('/', [NavigasiController::class, 'index']);
