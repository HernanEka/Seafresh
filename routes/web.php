<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Beranda');
});

Route::get('/artikel', function () {
    return view('Artikel');
});

Route::get('/pelatihan', function () {
    return view('Pelatihan');
});

Route::get('/pelatihan/detail', function () {
    return view('Pelatihan_Detail');
});
