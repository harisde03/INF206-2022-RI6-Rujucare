<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\pesan;
use App\Models\Kredensial;
use App\Models\Spesialis;


use Illuminate\Support\Facades\DB;

class Faskes extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function kredensial()
    {
        return $this->hasOne(Kredensial::class);
    }

    public function pesan()
    {
        return $this->hasMany(Pesan::class);
    }

    public function getKredensial(){

        return $this->kredensial();
    }

    public function scopeFilter($query){

        if (request('search')){
            return $query->join('kredensials', 'kredensials.id','=','faskes.kredensial_id')
                    ->join('spesialis','kredensials.id','=','spesialis.kredensial_id')
                    ->where('namaFaskes', 'like','%'. request('search') . '%')
                    ->orWhere('tingkatFaskes','like','%'. request('search') . '%')
                    ->orWhere('namaSpesialis','like','%'. request('search') . '%');
                    // ->DB::table('spesialis')->where('namaSpesialis','like','%'. request('search') . '%');

        }
    }

}
