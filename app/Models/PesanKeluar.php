<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesanKeluar extends Model
{
    use HasFactory;

    protected $table = 'pesan_keluar';
    protected $primaryKey = 'id_pesan_keluar';
    protected $fillable = [
        'id_faskes_pengirim',
        'id_faskes_penerima',
        'nomorBpjs',
        'deskripsiPesanKeluar',
        'persetujuanPesanKeluar',
        'gambarPesanKeluar',
    ];

    /**
     * Get the faskes that owns the PesanKeluar
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function faskes()
    {
        return $this->belongsTo(Faskes::class, 'id_faskes', 'id_faskes_pengirim');
    }
}
