<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesanMasuk extends Model
{
    use HasFactory;

    protected $table = 'pesan_masuk';
    protected $primaryKey = 'id_pesan_masuk';
        protected $fillable = [
        'id_faskes_pengirim',
        'id_faskes_penerima',
        'nomorBpjs',
        'deskripsiPesanMasuk',
        'persetujuanPesanMasuk',
        'gambarPesanMasuk',
    ];

    /**
     * Get the faskes that owns the PesanMasuk
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function faskes()
    {
        return $this->belongsTo(Faskes::class, 'id_faskes', 'id_faskes_penerima');
    }
}
