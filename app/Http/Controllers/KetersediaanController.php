<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Spesialis;

class KetersediaanController extends Controller
{
    public function index()
    {
        return view('rujucare.admin.informasi-ketersediaan', [
            'post' => auth()->user(),
        ]);
    }

    public function updateKetersediaan(Request $request)
    {
        $validateKetersediaan = $request->validate([
            'rujukanTersedia' => 'required|numeric|min:0',
            'kamarTersedia' => 'required|numeric|min:0',
        ]);

        auth()->user()->kredensial->ketersediaan->rujukanTersedia = $validateKetersediaan['rujukanTersedia'];
        auth()->user()->kredensial->ketersediaan->kamarTersedia = $validateKetersediaan['kamarTersedia'];

        auth()->user()->kredensial->ketersediaan->update();

        return redirect()->route('informasi-ketersediaan')->with('Success', 'Ketersediaan updated!');
    }
}
