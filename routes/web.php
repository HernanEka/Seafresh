<?php

use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\UserController;
use App\Models\Pendaftaran;
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

Route::post('/daftar', [UserController::class, 'daftar']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/artikel', function () {
    return view('Artikel');
});

Route::get('/pelatihan', [PelatihanController::class, 'index']);
Route::get('/pelatihan/detail/{id}', [PelatihanController::class, 'detail']);

Route::get('/daftar-pelatihan/{id}', [PendaftaranController::class, 'daftar']);
Route::get('/daftar_pelatihan', [PendaftaranController::class, 'index']);


Route::get('/admin', [PelatihanController::class, 'data']);
Route::post('/admin/input-pelatihan', [PelatihanController::class, 'input']);
Route::get('/admin/data-pendaftaran', [PendaftaranController::class, 'data']);
Route::get('/admin/delete-pelatihan/{id}', [PelatihanController::class, 'delete']);
Route::post('/admin/update-pelatihan/{id}', [PelatihanController::class, 'update']);
Route::get('/admin/detail-pelatihan/{id}', [PelatihanController::class, 'data_detail']);


