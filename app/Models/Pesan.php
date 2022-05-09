<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\pesanMasuk;
use App\Models\faskes;
use App\Models\kredensial;

class Pesan extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function faskes()
    {
        return $this->belongsTo(Faskes::class);
    }

    public function pesanMasuk()
    {
        return $this->belongsToMany(PesanMasuk::class);
    }

    public function pesanKeluar()
    {
        return $this->belongsToMany(PesanKeluar::class);
    }

}
