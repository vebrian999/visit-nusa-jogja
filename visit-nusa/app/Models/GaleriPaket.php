<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriPaket extends Model
{
    use HasFactory;

    protected $fillable = [
        'paket_wisata_id',
        'gambar',
        'urutan',
        'is_cover',
    ];

    protected $casts = [
        'is_cover' => 'boolean',
    ];

    public function paketWisata()
    {
        return $this->belongsTo(PaketWisata::class);
    }
}
