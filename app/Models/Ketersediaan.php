<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ketersediaan extends Model
{
    use HasFactory;

    protected $table = 'ketersediaan';
    protected $primaryKey = 'id_ketersediaan';
    protected $fillable = [
        'id_ketersediaan',
        'rujukanTersedia',
        'kamarTersedia',
    ];

    /**
     * Get the kredensial that owns the Ketersediaan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kredensial()
    {
        return $this->belongsTo(Kredensial::class, 'id_kredensial', 'id_ketersediaan');
    }
}
