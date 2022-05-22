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
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        dd("berhasilll");

        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            return redirect()->intended('/admin');

        }

        return back()->with('Login error','Login Failed!');


    }

}
