<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\KerajinanController;
use App\Http\Controllers\KesenianController;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\FavoriteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WisataController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/wisata', [WisataController::class, 'getSemuaWisata']);
Route::get('/kuliner', [KulinerController::class, 'getSemuaKuliner']);
Route::get('/kesenian', [KesenianController::class, 'getSemuaKesenian']);
Route::get('/kerajinan', [KerajinanController::class, 'getSemuaKerajinan']);
Route::get('/fasilitas', [FasilitasController::class, 'getSemuaFasilitas']);
Route::get('/wisata/edit/{id}', [WisataController::class, 'getSemuaWisata']);
Route::get('/home', [DashboardController::class, 'index']);


