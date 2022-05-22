<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faskes;
use App\Models\Kredensial;
use Illuminate\Support\Facades\DB;


class kredensialController extends Controller
{

    public function index(){
        return view('rujucare.admin.informasi-profil',[
            "post" =>  Faskes::where('id',auth()->user()->id)->get()
        ]);
    }

    public function store(Request $request)
    {
        $validateData= $request->validate([
            'faskes_id' => 'required',
            'emailPublik' => 'required|email',
            'namaPublik' => 'required|max:255',
            'deskripsiPublik' => 'max:255',
            'alamatPublik' =>'max:255',
            'teleponPublik' => 'required|numeric',
            'faskesPicture' =>'image|file|max:1024',
            'tingkatFaskes' =>'required'
        ]);
        $validateData['urlFaskes'] =  strtolower(str_replace(" ", "-", $validateData['namaPublik']));

        $kredensial = DB::table('kredensials')->where('faskes_id',Auth()->user()->id)->get();
        if($request->file('faskesPicture')){
            $validateData['faskesPicture'] = $request->file('faskesPicture')->store('post-image');
            }
        //store
        try{
            if($kredensial->contains(1) === false) {


                    Kredensial::create($validateData);

                    return redirect('/admin/informasi-profil')->with('insert','informasi profil sudah di-tambahkan');
            }
        }catch(\Exception $e){

        }


        //update
        Kredensial::where('faskes_id',$kredensial[0]->faskes_id)
                    ->update($validateData);
        $updateFaskes = [

            'email'=> $request->emailPublik,
            'namaFaskes' => $request->namaPublik,
            'tingkatFaskes' =>  $request->tingkatFaskes
        ];
        Faskes::where('id',auth()->user()->id)
        ->update($updateFaskes);

        return redirect('/admin/informasi-profil')->with('update','informasi profil sudah di-update');

    }

}
