<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index(){
        return view('rujucare.login.login');
    }

    public function authenticate(Request $request){

        $credential= $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        if(Auth::attempt($credential)){
            $request->session()->regenerate();

            return redirect()->intended('/admin/informasi-ketersediaan');

        }
        return back()->with('LoginError','Login Failed!');
    }



}
