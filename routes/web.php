<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PeriksaController;
use App\Http\Middleware\CheckUserRole;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

// Definisikan route autentikasi secara otomatis
Auth::routes();

// Route untuk pasien
Route::prefix('pasien')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('pasien');
    Route::resource('obat', PeriksaController::class);
});

// Route logout (pindahkan di luar grup pasien)
Route::post('/pasien/logout', [LoginController::class, 'logout'])->name('logout');

// Route untuk dokter yang memerlukan autentikasi dan role dokter
Route::middleware(['auth', CheckUserRole::class.':dokter'])->group(function () {
    Route::prefix('dokter')->group(function(){
        Route::resource('obat', ObatController::class);
        Route::resource('periksa', PeriksaController::class);
        Route::get('/', [HomeController::class, 'dokter'])->name('dokter');
    });
});
