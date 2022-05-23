<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Spesialis;

class SpesialisController extends Controller
{
    public function updateSpesialis(Request $request)
    {
        $validateSpesialis = $request->validate([
            'namaSpesialis' => 'required|string|max:255',
            'kemampuanSpesialis' => 'required|string|max:255',
            'profilePicture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        auth()->user()->kredensial->spesialis->where('id_spesialis', $request->id_spesialis)->first()->namaSpesialis = $validateSpesialis['namaSpesialis'];
        auth()->user()->kredensial->spesialis->where('id_spesialis', $request->id_spesialis)->first()->kemampuanSpesialis = $validateSpesialis['kemampuanSpesialis'];
        if ($request->hasFile('profilePicture'))
        {
            auth()->user()->kredensial->spesialis->where('id_spesialis', $request->id_spesialis)->first()->profilePicture = Storage::disk('public')->put('profilePicture', $request->file('profilePicture'));
        }

        auth()->user()->kredensial->spesialis->where('id_spesialis', $request->id_spesialis)->first()->update();

        return redirect()->route('informasi-ketersediaan')->with('Success', 'Spesialis Profile Diubah!');
    }

    public function storeSpesialis(Request $request)
    {
        $validateSpesialis = $request->validate([
            'namaSpesialis' => 'required|string|max:255',
            'kemampuanSpesialis' => 'required|string|max:255',
            'profilePicture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $validateSpesialis['profilePicture'] = Storage::disk('public')->put('profilePicture', $request->file('profilePicture'));
        $validateSpesialis['id_kredensial'] = auth()->user()->kredensial->id_kredensial;

        Spesialis::create($validateSpesialis);

        return redirect()->route('informasi-ketersediaan')->with('Success', 'Spesialis Profile Ditambah!');
    }

    public function deleteSpesialis(Request $request)
    {
        auth()->user()->kredensial->spesialis->where('id_spesialis', $request->id_spesialis)->first()->delete();

        return redirect()->route('informasi-ketersediaan')->with('Success', 'Spesialis Profile Dihapus!');
    }
}
