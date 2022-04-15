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
    return view('rujucare\index');
});

Route::get('/find/faskes', function () {
    return view('rujucare\find\faskes');
});

Route::get('/find/spesialis', function () {
    return view('rujucare\find\spesialis');
});

Route::get('/faskes', function () {
    return view('rujucare\faskes\faskes');
});

Route::get('/login', function () {
    return view('rujucare\login\login');
});

Route::get('/signup', function () {
    return view('rujucare\signup\signup');
});

Route::get('/signup/persetujuan', function () {
    return view('rujucare\signup\persetujuan');
});

Route::get('/signup/persyaratan', function () {
    return view('rujucare\signup\persyaratan');
});

Route::get('/signup/upload-surat', function () {
    return view('rujucare\signup\upload-surat');
});

Route::get('/admin/informasi-ketersediaan', function () {
    return view('rujucare\admin\informasi-ketersediaan');
});

Route::get('/admin/informasi-profil', function () {
    return view('rujucare\admin\informasi-profil');
});

Route::get('/admin/pesan-masuk', function () {
    return view('rujucare\admin\pesan-masuk');
});

Route::get('/admin/pesan-keluar', function () {
    return view('rujucare\admin\pesan-keluar');
});

Route::get('/admin/rujuk', function () {
    return view('rujucare\admin\rujuk');
});

Route::get('/admin/rujuk-kembali', function () {
    return view('rujucare\admin\rujuk-kembali');
});
