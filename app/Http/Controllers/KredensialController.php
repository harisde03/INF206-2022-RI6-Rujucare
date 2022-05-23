<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KredensialController extends Controller
{
    public function index()
    {
        return view('rujucare.admin.informasi-profil', [
            'post' => auth()->user(),
        ]);
    }

    public function update(Request $request)
    {
        $validateData = $request->validate([
            'namaPublik' => 'required|min:5|max:255',
            'emailPublik' => 'required|email',
            'teleponPublik' => 'required|numeric',
            'deskripsiPublik' => 'required|min:5|max:255',
            'alamatPublik' => 'required|min:5|max:255',
            'tingkatPublik' => 'required',
            'faskesPicture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        auth()->user()->kredensial->namaPublik = $validateData['namaPublik'];
        auth()->user()->kredensial->emailPublik = $validateData['emailPublik'];
        auth()->user()->kredensial->teleponPublik = $validateData['teleponPublik'];
        auth()->user()->kredensial->deskripsiPublik = $validateData['deskripsiPublik'];
        auth()->user()->kredensial->alamatPublik = $validateData['alamatPublik'];
        auth()->user()->kredensial->tingkatPublik = $validateData['tingkatPublik'];
        if ($request->hasFile('faskesPicture')) {
            auth()->user()->kredensial->faskesPicture = Storage::disk('public')->put('faskesPicture', $request->file('faskesPicture'));
        }

        auth()->user()->kredensial->update();

        return redirect()->route('informasi-profil')->with('Success', 'Profile updated!');
    }
}
