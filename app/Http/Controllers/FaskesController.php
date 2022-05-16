<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faskes;

class FaskesController extends Controller
{
    public function index(){

        return view('rujucare.find.faskes',[
            'post'  => Faskes::latest()->filter()->paginate(7)->withQueryString()
        ]);
    }
    public function show(Faskes $post){
        return view('rujucare.faskes.faskes',[
            "post" => $post

        ]);
    }

}
