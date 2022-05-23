<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\pesan;

class PesanMasuk extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function pesan()
    {
        return $this->hasOne(Pesan::class);
    }
}
