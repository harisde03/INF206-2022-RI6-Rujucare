<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kredensial;
use Illuminate\Support\Facades\Redirect;

class FaskesController extends Controller
{
    public function index($urlFaskes)
    {
        $post = $urlFaskes;
        $post = Kredensial::where('urlFaskes', $post)->first();

        if ($post == NULL) {
            return Redirect::route('home');
        }

        if ($post->teleponPublik == NULL) {
            return Redirect::route('home');
        }

        if ($post->deskripsiPublik == NULL) {
            return Redirect::route('home');
        }

        if ($post->alamatPublik == NULL) {
            return Redirect::route('home');
        }

        if ($post->faskesPicture == NULL) {
            return Redirect::route('home');
        }

        return view('rujucare.faskes.faskes', [
            'post' => $post,
        ]);
    }
}
