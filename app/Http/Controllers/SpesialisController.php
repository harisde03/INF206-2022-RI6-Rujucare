<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spesialis;
use App\Models\Faskes;


class SpesialisController extends Controller
{
    public function index(){

        return view('rujucare.find.spesialis',[
            'post'  => Faskes::filter()->get()
        ]);
    }

    public function show(Faskes $post){
        return view('rujucare.faskes.faskes',[
            "post" => $post

        ]);
    }
}
