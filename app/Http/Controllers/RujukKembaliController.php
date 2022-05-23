<?php

namespace App\Http\Controllers;

use App\Models\Kredensial;
use App\Models\PesanKeluar;
use App\Models\PesanMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RujukKembaliController extends Controller
{
    public function index($urlFaskes, $nomorPesan)
    {
        $post = $urlFaskes;
        $post = Kredensial::where('urlFaskes', $post)->first();
        $pesanMasuk = PesanMasuk::where('id_pesan_masuk', $nomorPesan)->first();

        return view('rujucare.admin.rujuk-kembali', [
            'post' => $post,
            'pesan' => $pesanMasuk,
        ]);
    }

    public function terimaRujukan(Request $request, $urlFaskes, $nomorPesan)
    {
        $pesanMasuk = PesanMasuk::where('id_pesan_masuk', $nomorPesan)->first();
        $pesanKeluar = PesanKeluar::where('id_pesan_keluar', $nomorPesan)->first();

        $pesanMasuk->update([
            'persetujuanPesanMasuk' => 2,
        ]);

        $pesanKeluar->update([
            'persetujuanPesanKeluar' => 2,
        ]);

        return redirect()->route('pesan-masuk')->with('Success', 'Rujukan Berhasil Diterima!');
    }

    public function tolakRujukan(Request $request)
    {

        $pesanMasuk = PesanMasuk::where('id_pesan_masuk', $request->id_pesan_masuk)->first();
        $pesanKeluar = PesanKeluar::where('id_pesan_keluar', $request->id_pesan_masuk)->first();

        $validatePesanKeluar = $request->validate([
            'deskripsiPesanKeluar' => 'required|min:5|max:255',
            'gambarPesanKeluar' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $validatePesanKeluar['gambarPesanKeluar'] = Storage::disk('public')->put('gambarPesanKeluar', $request->file('gambarPesanKeluar'));

        $pesanMasuk->update([
            'persetujuanPesanMasuk' => 0,
            'deskripsiPesanMasuk' => $validatePesanKeluar['deskripsiPesanKeluar'],
            'gambarPesanMasuk' => $validatePesanKeluar['gambarPesanKeluar'],
        ]);

        $pesanKeluar->update([
            'persetujuanPesanKeluar' => 0,
            'deskripsiPesanKeluar' => $validatePesanKeluar['deskripsiPesanKeluar'],
            'gambarPesanKeluar' => $validatePesanKeluar['gambarPesanKeluar'],
        ]);

        return redirect()->route('pesan-masuk')->with('Success', 'Rujukan Berhasil Dikembalikan!');
    }

}
