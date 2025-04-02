<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PeriksaController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/dokter', [HomeController::class, 'dokter'])->name('dokter');
Route::prefix('dokter')->group(function(){
    Route::resource('obat', ObatController::class);
    Route::resource('periksa', PeriksaController::class);
});


