<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Profil_Yayasan\SejaragpembentukanController;
use Illuminate\Support\Facades\Route;

Route::get('/template', function () {
    return view('page.template');
});

//index landing page
Route::get('/', [HomeController::class, 'home'])->name('home');
//profil yayasan
Route::get('sejarah_pembentukan', [SejaragpembentukanController::class, 'sejarah'])->name('sejarah.pembentukan');
