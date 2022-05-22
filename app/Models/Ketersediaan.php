<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\kredensial;

class Ketersediaan extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function kredensial()
    {
        return $this->belongsTo(Kredensial::class);
    }
}
