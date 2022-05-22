<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesanMasuk;

class pesanMasukController extends Controller
{
    public function index(){
       // return Pesan::where('faskes_id',auth()->user()->id)->get();
        return view('rujucare.admin.pesan-masuk',[
            'post'  => PesanMasuk::where('faskes_id',auth()->user()->id)->get()
        ]);
    }
}
