<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faskes;
use App\Models\Kredensial;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Exception;
use Illuminate\Support\Facades\Auth;

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
       // return DB::table('kredensials')->where('faskes_id',Auth()->user()->id)->get();
        // dd($kredensial->is_null);
        //return  $request->file('suratPernyataan')->store('post-image');
        //  dd("berhasil");
        $validateData= $request->validate([
            'faskes_id' => 'required',
            'emailPublik' => 'required|email',
            'namaPublik' => 'required|max:255',
            'deskripsiPublik' => 'required|max:255',
            'alamatPublik' =>'required|max:255',
            'teleponPublik' => 'required|numeric',
            'faskesPicture' =>'image|file|max:1024'
        ]);


        $kredensial = DB::table('kredensials')->where('faskes_id',Auth()->user()->id)->get();
        //dd($kredensial->contains(1));

        //return $request->file('faskesPicture')->store('post-image');

        if($request->file('faskesPicture')){
            $validateData['faskesPicture'] = $request->file('faskesPicture')->store('post-image');
            //return $request->file('faskesPicture')->store('post-image');;

            }
        //store
        try{
            if($kredensial->contains(1) === false) {
                // $this->$rules['faskes_id'] = 'required';
                //return "berhasil";
                // $this->$rules['emailPublik'] = 'required|email';


                    //return $validateData;

                    Kredensial::create($validateData);

                    return redirect('/admin/informasi-profil')->with('insert','informasi profil sudah di-tambahkan');
            }
        }catch(\Exception $e){

        }
                // return "berhasil";
        //update
        Kredensial::where('faskes_id',$kredensial[0]->faskes_id)
                    ->update($validateData);

        // $validateData['urlFaskes'] = "gchg";
        // Kredensial::create($validateData);

        return redirect('/admin/informasi-profil')->with('update','informasi profil sudah di-update');

    }
}
