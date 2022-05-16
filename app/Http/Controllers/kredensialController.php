<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faskes;

class kredensialController extends Controller
{
    public function index(){
        // return "hello";
        // return Faskes::where('id',auth()->user()->id)->get();
        return view('rujucare.admin.informasi-profil',[
            "post" =>  Faskes::where('id',auth()->user()->id)->get()
        ]);
    }

    public function store(Request $request)
    { ///
            // dd(request("emailPublik"));
        //return  $request->file('suratPernyataan')->store('post-image');
        // dd("berhasil");
        $request->validate([
            'faskes_id' => 'required',
            'namaPublik' => 'required|max:255',
            'emailPublik' => 'required|email',
            'deskripsiPublik' => 'required',
            'alamatPublik' =>'required',
            'teleponPublik' => 'required|numeric',
            'faskesPicture' =>'image|file|max:1024 '
        ]);
        dd("berhasil");


        // if($request->file('suratPernyataan')){
        //     $validateData['suratPernyataan'] = $request->file('suratPernyataan')->store('post-image');
        // }





        // $validateData['urlFaskes'] = "gchg";
        // Kredensial::create($validateData);

        return $this->login()->with('success','Registration successfull!! please login');

    }
}
