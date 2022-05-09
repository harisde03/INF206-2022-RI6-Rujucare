<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaskesController;
use App\Http\Controllers\pesanMasukController;
use App\Http\Controllers\SpesialisController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;

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
    // return view('rujucare.find.faskes',[
    //     'title' => 'Pencarian Fasilitas Kesehatan',
    //     'post'  => Faskes::all()
    // ]);
// });

Route::get('/find/spesialis',[SpesialisController::class, 'index']);
//     return view('rujucare.find.spesialis');
// });





Route::get('/faskes', function () {
    return view('rujucare.faskes.faskes');
});

//rute jika faskes
Route::get('/faskes/{post:namaFaskes}',[FaskesController::class, 'show']);


Route::get('/login',[loginController::class, 'index']);
Route::post('/login',[registerController::class, 'store']);

// Route::post('/login',[loginController::class, 'authenticate']);

Route::get('/signup', [registerController::class, 'index']);
    //

Route::get('/signup/upload-surat',[registerController::class, 'upload']);

Route::post('/signup/upload-surat',[registerController::class, 'upload']);






Route::get('/signup/persetujuan', function () {
    return view('rujucare.signup.persetujuan');
});

Route::get('/signup/persyaratan', function () {
    return view('rujucare.signup.persyaratan');
});



Route::get('/admin/informasi-ketersediaan', function () {
    return view('rujucare.admin.informasi-ketersediaan');
});

Route::post('/admin/informasi-ketersediaan',[loginController::class, 'authenticate']);


Route::get('/admin/informasi-profil', function () {
    return view('rujucare.admin.informasi-profil');
});

Route::get('/admin/pesan-masuk',[pesanMasukController::class,'index']);
//     return view('rujucare.admin.pesan-masuk',[
//         'post' =>
//     ]);
// });

Route::get('/admin/pesan-keluar', function () {
    return view('rujucare.admin.pesan-keluar');
});

Route::get('/admin/rujuk', function () {
    return view('rujucare.admin.rujuk');
});

Route::get('/admin/rujuk-kembali', function () {
    return view('rujucare.admin.rujuk-kembali');
});
