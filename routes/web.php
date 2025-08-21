<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});
Route::get('/kalkulator', function () {
    return view('kalkulator');
});
