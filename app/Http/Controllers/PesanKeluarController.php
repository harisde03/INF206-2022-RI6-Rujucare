<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesanKeluarController extends Controller
{
    public function index()
    {
        return view('rujucare.admin.pesan-keluar', [
            'post' => auth()->user(),
        ]);
    }
}
