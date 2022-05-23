<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Faskes extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'faskes';

    protected $primaryKey = 'id_faskes';

    protected $guarded=['id_faskes'];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $fillable = [
        'email',
        'password',
    ];

    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * Get the kredensial associated with the Faskes
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function kredensial()
    {
        return $this->hasOne(Kredensial::class, 'id_kredensial', 'id_faskes');
    }

    /**
     * Get all of the pesanMasuk for the Faskes
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pesanMasuk()
    {
        return $this->hasMany(PesanMasuk::class, 'id_faskes_penerima', 'id_faskes');
    }

    /**
     * Get all of the pesanKeluar for the Faskes
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pesanKeluar()
    {
        return $this->hasMany(PesanKeluar::class, 'id_faskes_pengirim', 'id_faskes');
    }

    public function scopeFilter($query)
    {
        if (request('search')) {
            return $query->where('namaFaskes', 'like', '%' . request('search') . '%');
        }
    }
}
