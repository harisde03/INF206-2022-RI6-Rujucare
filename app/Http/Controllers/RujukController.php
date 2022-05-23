<?php

namespace App\Http\Controllers;

use App\Models\Kredensial;
use App\Models\PesanKeluar;
use App\Models\PesanMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RujukController extends Controller
{
    public function index($urlFaskes)
    {
        $post = $urlFaskes;
        $post = Kredensial::where('urlFaskes', $post)->first();

        return view('rujucare.admin.rujuk', [
            'post' => $post
        ]);
    }

    public function kirimRujukan(Request $request)
    {
        $validatePesanKeluar = $request->validate([
            'nomorBpjs' => 'required|min:1|max:255',
            'deskripsiPesanKeluar' => 'required|min:5|max:255',
            'gambarPesanKeluar' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $validatePesanKeluar['id_faskes_pengirim'] = $request->id_faskes_pengirim;
        $validatePesanKeluar['id_faskes_penerima'] = $request->id_faskes_penerima;
        $validatePesanKeluar['persetujuanPesanKeluar'] = 1;
        $validatePesanKeluar['gambarPesanKeluar'] = Storage::disk('public')->put('gambarPesanKeluar', $request->file('gambarPesanKeluar'));

        $validatePesanMasuk = [
            'id_faskes_pengirim' => $request->id_faskes_pengirim,
            'id_faskes_penerima' => $request->id_faskes_penerima,
            'nomorBpjs' => $request->nomorBpjs,
            'deskripsiPesanMasuk' => $request->deskripsiPesanKeluar,
            'persetujuanPesanMasuk' => 1,
            'gambarPesanMasuk' => $validatePesanKeluar['gambarPesanKeluar'],
        ];

        PesanKeluar::create($validatePesanKeluar);
        PesanMasuk::create($validatePesanMasuk);

        return view('rujucare.admin.pesan-keluar', ['post' => auth()->user()])->with('Success','Pengiriman Pesan Berhasil!');
    }
}
