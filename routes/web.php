<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmisiController;




Route::get('/', function () {
    return view('beranda');
});
Route::get('/kalkulator', function () {
    return view('kalkulator');
});
Route::get('/emisi', function () {
    return view('form');
});
Route::post('/emisi/hitung', [EmisiController::class, 'hitung'])->name('hitung.emisi');
