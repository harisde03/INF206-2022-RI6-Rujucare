<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kredensial extends Model
{
    use HasFactory;

    protected $table = 'kredensial';
    protected $primaryKey = 'id_kredensial';
    protected $fillable = [
        'id_kredensial',
        'emailPublik',
        'namaPublik',
        'tingkatPublik',
        'urlFaskes',
    ];

    /**
     * Get the faskes that owns the Kredensial
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function faskes()
    {
        return $this->belongsTo(Faskes::class, 'id_faskes', 'id_kredensial');
    }

    /**
     * Get all of the spesialis for the Kredensial
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function spesialis()
    {
        return $this->hasMany(Spesialis::class, 'id_kredensial', 'id_kredensial');
    }

    /**
     * Get the ketersediaan associated with the Kredensial
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ketersediaan()
    {
        return $this->hasOne(Ketersediaan::class, 'id_ketersediaan', 'id_kredensial');
    }
}
