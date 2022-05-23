<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredFaskesController;
use App\Http\Controllers\KetersediaanController;
use App\Http\Controllers\KredensialController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesanKeluarController;
use App\Http\Controllers\PesanMasukController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\FaskesController;
use App\Http\Controllers\FindController;
use App\Http\Controllers\RujukController;
use App\Http\Controllers\RujukKembaliController;
use App\Http\Controllers\SpesialisController;

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

Route::redirect('/', '/find');

Route::get('/find', function () {
    return view('rujucare.index');
})->name('home');

Route::get('/test', function() {
    return view('testing');
});

Route::get('/faskes/{urlFaskes}', [FaskesController::class, 'index'])->name('faskes');

Route::get('/signup/persetujuan', function() {
    return view('rujucare.signup.persetujuan');
});

Route::get('/signup/persyaratan', function() {
    return view('rujucare.signup.persyaratan');
});

// Route::get('/find/faskes', function() {
//     return view('rujucare.find.faskes');
// });

Route::get('/find/faskes', [FindController::class, 'findFaskes'])->name('find.faskes');

Route::get('/find/faskes', [FindController::class, 'cariFaskes'])->name('cari.faskes');

// Route::get('/find/spesialis', function() {
//     return view('rujucare.find.spesialis');
// });

Route::get('/find/spesialis', [FindController::class, 'findSpesialis'])->name('find.spesialis');

Route::get('/find/spesialis', [FindController::class, 'cariSpesialis'])->name('cari.spesialis');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');

    Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');

    Route::get('/signup', [SignupController::class, 'index'])->name('signup');

    Route::post('/signup', [SignupController::class, 'store'])->name('signup.store');
});

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/signup/upload-surat', [SignupController::class, 'uploadSurat'])->name('upload-surat');

    Route::get('/admin/informasi-ketersediaan', [KetersediaanController::class, 'index'])->name('informasi-ketersediaan');

    Route::post('/admin/informasi-ketersediaan/updateKetersediaan', [KetersediaanController::class, 'updateKetersediaan'])->name('informasi-ketersediaan.updateKetersediaan');
    Route::post('/admin/informasi-ketersediaan/updateSpesialis', [SpesialisController::class, 'updateSpesialis'])->name('informasi-ketersediaan.updateSpesialis');
    Route::post('/admin/informasi-ketersediaan/storeSpesialis', [SpesialisController::class, 'storeSpesialis'])->name('informasi-ketersediaan.storeSpesialis');
    Route::post('/admin/informasi-ketersediaan/deleteSpesialis', [SpesialisController::class, 'deleteSpesialis'])->name('informasi-ketersediaan.deleteSpesialis');

    Route::get('/admin/informasi-profil', [KredensialController::class, 'index'])->name('informasi-profil');

    Route::post('/admin/informasi-profil', [KredensialController::class, 'update'])->name('informasi-profil.update');

    Route::get('/admin/pesan-masuk', [PesanMasukController::class, 'index'])->name('pesan-masuk');

    Route::get('/admin/pesan-masuk/terima/{urlFaskes}/{nomorPesan}', [RujukKembaliController::class, 'terimaRujukan'])->name('pesan-masuk.terima');

    Route::get('/admin/pesan-keluar', [PesanKeluarController::class, 'index'])->name('pesan-keluar');

    Route::get('/admin/rujuk/{urlFaskes}', [RujukController::class, 'index'])->name('rujuk');

    Route::post('/admin/rujuk/kirimRujukan', [RujukController::class, 'kirimRujukan'])->name('rujuk.kirimRujukan');

    Route::get('/admin/rujuk-kembali/{urlFaskes}/{nomorPesan}', [RujukKembaliController::class, 'index'])->name('rujukKembali');

    Route::post('/admin/rujuk/tolakRujukan', [RujukKembaliController::class, 'tolakRujukan'])->name('rujukKembali.tolakRujukan');

});
