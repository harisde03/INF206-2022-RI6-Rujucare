<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spesialis extends Model
{
    use HasFactory;

    protected $table = 'spesialis';
    protected $primaryKey = 'id_spesialis';
    protected $fillable = [
        'id_kredensial',
        'namaSpesialis',
        'kemampuanSpesialis',
        'profilePicture',
    ];

    /**
     * Get the kredensial that owns the Spesialis
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kredensial()
    {
        return $this->belongsTo(Kredensial::class, 'id_kredensial', 'id_kredensial');
    }

    public function scopeFilter($query)
    {
        if (request('search')) {
            return $query->where('namaSpesialis', 'like', '%' . request('search') . '%');
        }
    }
}
