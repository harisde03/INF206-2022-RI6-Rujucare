<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaskesController;
use App\Http\Controllers\pesanMasukController;
use App\Http\Controllers\pesanKeluarController;
use App\Http\Controllers\SpesialisController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\kredensialController;

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
    return view('rujucare.index');
});

Route::get('/find/faskes', [FaskesController::class, 'index']);

Route::get('/find/spesialis',[SpesialisController::class, 'index']);

// Route::get('/faskes', function () {
//     return view('rujucare.faskes.faskes');
// });

//rute jika faskes
Route::get('/faskes/{post:namaFaskes}',[FaskesController::class, 'show']);

Route::get('/login',[loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[loginController::class, 'authenticate']);

//blum terbaca logout
Route::post('/logout', [loginController::class, 'logout']);

Route::get('/signup', [registerController::class, 'index'])->middleware('guest');
Route::post('/signup', [registerController::class, 'upload'])->middleware('guest');
    //

Route::get('/signup/upload-surat',[registerController::class, 'upload'])->middleware('guest');

Route::post('/signup/upload-surat',[registerController::class, 'store'])->middleware('guest');


Route::get('/signup/persetujuan', function () {
    return view('rujucare.signup.persetujuan');
})->middleware('guest');

Route::get('/signup/persyaratan', function () {
    return view('rujucare.signup.persyaratan');
})->middleware('guest');



Route::get('/admin/informasi-ketersediaan', function () {
    return view('rujucare.admin.informasi-ketersediaan');
})->middleware('auth');

Route::post('/admin/informasi-ketersediaan', function () {
    return view('rujucare.admin.informasi-ketersediaan');
});

// Route::post('/admin/informasi-ketersediaan',[loginController::class, 'authenticate']);

Route::get('/admin/informasi-profil',[kredensialController::class, 'index'])->middleware('auth');
Route::post('/admin/informasi-profil',[kredensialController::class, 'store']);

Route::get('/admin/pesan-masuk',[pesanMasukController::class,'index'])->middleware('auth');

Route::get('/admin/pesan-keluar', [pesanKeluarController::class,'index'])->middleware('auth');

Route::get('/admin/rujuk', function () {
    return view('rujucare.admin.rujuk');
})->middleware('auth');

Route::get('/admin/rujuk-kembali', function () {
    return view('rujucare.admin.rujuk-kembali');
})->middleware('auth');
