<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\spesialis;
use App\Models\ketersediaan;
use App\Models\faskes;


class Kredensial extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function getSpesialis()
    {
        return $this->hasMany(Spesialis::class);
    }

    public function getKetersediaan()
    {
        return $this->hasOne(Ketersediaan::class);
    }

    public function faskes()
    {
        return $this->belongsTo(Faskes::class);
    }
    public function scopeFilter($query){

        if (request('search')){
            return $query->where('namaPublik', 'like', '%' . request('search') . '%');
        }
    }

}
