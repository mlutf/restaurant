<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\KokiController;

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

Route::get('login', function () {
    return view('welcome');
});
Route::resource('pegawai',PegawaiController::class);
Route::resource('menu',MenuController::class);
Route::resource('koki',KokiController::class);
Route::resource('pesanan',PesananController::class);
Route::get('pegawai/hapus/{id}',[PegawaiController::class,'destroy']);
Route::get('update/pesanan/{id}',[KokiController::class,'update']);
Route::get('update/pesanan2/{id}',[KokiController::class,'destroy']);
Route::post('/filter',[KokiController::class,'filter']);
Route::post('/cari',[KokiController::class,'cari']);
Route::post('/login',[LoginController::class,'auth']);
Route::get('logout',[LoginController::class,'logout']);

