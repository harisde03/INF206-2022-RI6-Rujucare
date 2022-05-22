<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faskes;
use App\Models\Kredensial;

class FaskesController extends Controller
{
    public function index(){

        return view('rujucare.find.faskes',[
            'post'  => Kredensial::latest()->filter()->paginate(7)->withQueryString()
        ]);
    }
    public function show(Kredensial $post){
        return view('rujucare.faskes.faskes',[
            "post" => $post

        ]);
    }

}
