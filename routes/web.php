<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\KerajinanController;
use App\Http\Controllers\KesenianController;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WisataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});


Route::get('/home', function () {
    return view('home');
});


Route::get('kesenian', function () {
    return view('kesenian');
});


Route::get('kerajinan', function () {
    return view('kerajinan');
});

Route::get('kuliner', function () {
    return view('kulineran');
});

Route::get('fasilitas', function () {
    return view('fasilitas');
});
Route::get('addw', function () {
    return view('modal.addwisata');
});

// Route Auth
Route::group(['middleware'=>['auth']],function(){
    // Route Dashboard
    Route::get('/home', [DashboardController::class, 'index']);

    // Route Wisata
    Route::get('/wisata', [WisataController::class, 'index']);
    Route::post('/createWisata', [WisataController::class, 'create'])->name('wisata.create');
    Route::put('/updatewisata/{id}', [WisataController::class, 'update'])->name('wisata.update');
    Route::delete('/wisata/hapus/{id}', [WisataController::class, 'delete']);
    // Route Kesenian
    Route::get('/kesenian', [KesenianController::class, 'indexKesenian']);
    Route::post('/createKesenian', [KesenianController::class, 'create'])->name('kesenian.create');
    Route::put('/updatekesenian/{id}', [KesenianController::class, 'update'])->name('kesenian.update');
    Route::delete('/kesenian/hapus/{id}', [KesenianController::class, 'deleteKesenian']);
    // Route Kerajinan
    Route::get('/kerajinan', [KerajinanController::class, 'indexKerajinan']);
    Route::post('/createKerajinan', [KerajinanController::class, 'create'])->name('kerajinan.create');
    Route::put('/updatekerajinan/{id}', [KerajinanController::class, 'update'])->name('kerajinan.update');
    Route::delete('/kerajinan/hapus/{id}', [KerajinanController::class, 'deleteKerajinan']);
    // Route Kuliner
    Route::get('/kuliner', [KulinerController::class, 'indexKuliner']);
    Route::post('/createKuliner', [KulinerController::class, 'create'])->name('kuliner.create');
    Route::put('/updatekuliner/{id}', [KulinerController::class, 'update'])->name('kuliner.update');
    Route::delete('/kuliner/hapus/{id}', [KulinerController::class, 'deleteKuliner']);
    // Route Fasilitas
    Route::get('/fasilitas', [FasilitasController::class, 'indexFasilitas']);
    Route::post('/createFasilitas', [FasilitasController::class, 'create'])->name('fasilitas.create');
    Route::put('/updatefasilitas/{id}', [FasilitasController::class, 'update'])->name('fasilitas.update');
    Route::delete('/fasilitas/hapus/{id}', [FasilitasController::class, 'deleteFasilitas']);

});
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::get('/postregister', [RegisterController::class, 'create'])->name('create');

Route::get('/postlogin', [LoginController::class, 'postLogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');




