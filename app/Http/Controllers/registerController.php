<?php

namespace App\Http\Controllers;




use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Faskes;
use Illuminate\Foundation\Auth\RegisterUser;

class registerController extends Controller

{
    // use RegisterUser;

    public function index()
    {
        return view('rujucare.signup.signup');
    }

    public function store(Request $request)
    { ///
        //  dd(request());
        //return  $request->file('suratPernyataan')->store('post-image');
        $validateData = $request->validate([
            'email' => 'required|email|unique:faskes',
            'tingkatFaskes' => 'required|max:255',
            'namaFaskes' => 'required|min:5|max:255',
            'password' => 'required|min:5|max:255',
            'suratPernyataan' =>'image|file|max:1024 '

        ]);
        //dd("berhasil");

        if($request->file('suratPernyataan')){
            $validateData['suratPernyataan'] = $request->file('suratPernyataan')->store('post-image');
        }


        $validateData['password'] = Hash::make($validateData['password']);
        //  $request->session()->flash('success','Registration already success, please login');


        $validateData['urlFaskes'] = "gchg";
        Faskes::create($validateData);

        return $this->login()->with('success','Registration successfull!! please login');

    }

    public function upload()
    {
        return view('rujucare.signup.upload-surat');
    }

    // public function uploadGambar(Request $request){
    //     return $request->file('suratPernyataan')->store('post-images');
    // }
    public function login(){
        return view('rujucare.login.login');
    }
}


