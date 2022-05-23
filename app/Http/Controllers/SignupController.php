<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegisterUser;
use App\Models\Faskes;
use App\Models\Kredensial;
use App\Models\Ketersediaan;

class SignupController extends Controller
{
    public function index()
    {
        return view('rujucare.signup.signup');
    }

    public function uploadSurat()
    {
        return view('rujucare.signup.upload-surat');
    }

    public function store(Request $request)
    {
        $request->validate([
            'checkbox' => 'accepted',
        ]);

        $validateSignup = $request->validate([
            'email' => 'required|email|unique:faskes',
            'password' => 'required|min:5|max:255|confirmed',
        ]);

        $validateKredensial = $request->validate([
            'namaPublik' => 'required|min:5|max:255',
            'tingkatPublik' => 'required',
        ]);

        $validateSignup['password'] = Hash::make($validateSignup['password']);

        Faskes::create($validateSignup);

        $validateKredensial['id_kredensial'] = Faskes::latest()->first()->id_faskes;
        $validateKredensial['urlFaskes'] = str_replace('.', '', str_replace(' ', '-', strtolower($validateKredensial['namaPublik'])));
        $validateKredensial['emailPublik'] = $validateSignup['email'];

        $validateKetersediaan['id_ketersediaan'] = Faskes::latest()->first()->id_faskes;
        $validateKetersediaan['rujukanTersedia'] = 0;
        $validateKetersediaan['kamarTersedia'] = 0;

        Kredensial::create($validateKredensial);
        Ketersediaan::create($validateKetersediaan);

        return view('rujucare.login.login')->with('Success','Registration Successfull! Please login');
    }
}

