<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesanMasukController extends Controller
{
    public function index()
    {
        return view('rujucare.admin.pesan-masuk', [
            'post' => auth()->user(),
        ]);
    }
}
