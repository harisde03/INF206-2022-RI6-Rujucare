<?php

namespace App\Http\Controllers;

use App\Models\PesanKeluar;
use Illuminate\Http\Request;


class pesanKeluarController extends Controller
{
    public function index(){
        // return Pesan::where('faskes_id',auth()->user()->id)->get();
         return view('rujucare.admin.pesan-keluar',[
             'post'  => PesanKeluar::where('faskes_id',auth()->user()->id)->get()
         ]);
     }
}
