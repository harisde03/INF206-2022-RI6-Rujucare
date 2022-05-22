<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faskes;

class FaskesController extends Controller
{
    public function index(){
        dd(request('search'));
        return view('rujucare.find.faskes',[
            'post'  => Faskes::filter()->get()
        ]);
    }
    public function show(Faskes $post){
        return view('rujucare.faskes.faskes',[
            "post" => $post

        ]);
    }

}
