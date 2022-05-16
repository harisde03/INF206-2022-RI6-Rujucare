<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Foundation\Notifiable;
use App\Models\pesanMasuk;
use App\Models\Kredensial;
use App\Models\pesanKeluar;


use Illuminate\Support\Facades\DB;

class Faskes extends Authenticatable
{
    use HasFactory;
    // use Notifiable;
    protected $table = 'faskes';

    protected $guarded=['id'];

    protected $hidden=[
        'password','remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->password;
    }


    public function kredensial()
    {
        return $this->hasOne(Kredensial::class);
    }

    public function pesanMasuk()
    {
        return $this->hasMany(PesanMasuk::class);
    }

    public function pesanKeluar()
    {
        return $this->hasMany(PesanKeluar::class);
    }

    public function getKredensial(){

        return $this->kredensial();
    }

    public function scopeFilter($query){

        if (request('search')){
            return $query->where('namaFaskes', 'like', '%' . request('search') . '%');
        }
    }

}
