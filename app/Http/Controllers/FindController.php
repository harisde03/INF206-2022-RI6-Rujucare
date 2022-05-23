<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FindController extends Controller
{
    public function findFaskes()
    {
        $post = \App\Models\Kredensial::paginate(10);
        return view('rujucare.find.faskes', ['post' => $post]);
    }

    public function findSpesialis()
    {
        $post = \App\Models\Spesialis::paginate(10);
        return view('rujucare.find.spesialis', ['post' => $post]);
    }

    public function cariFaskes(Request $request)
    {
        $cari = $request->searchFaskes;

        $post = \App\Models\Kredensial::where('namaPublik', 'LIKE', '%' . $cari . '%')->orwhere('tingkatPublik', 'LIKE', '%' . $cari . '%')->paginate(10);

        return view('rujucare.find.faskes', ['post' => $post]);
    }

    public function cariSpesialis(Request $request)
    {
        $cari = $request->searchSpesialis;

        $post = \App\Models\Spesialis::where('namaSpesialis', 'LIKE', '%' . $cari . '%')->orwhere('kemampuanSpesialis', 'LIKE', '%' . $cari . '%')->paginate(10);

        return view('rujucare.find.spesialis', ['post' => $post]);
    }
}
