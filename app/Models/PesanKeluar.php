<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Model\Faskes;

class PesanKeluar extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function faskes()
    {
        return $this->belongsTo(Faskes::class);
    }


}