<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesanMasuk;

class pesanMasukController extends Controller
{
    public function index(){
        return view('rujucare.admin.pesan-masuk',[
            'post'  => PesanMasuk::all()
        ]);
    }
}
