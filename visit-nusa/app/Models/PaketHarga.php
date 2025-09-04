<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketHarga extends Model
{
    use HasFactory;

    protected $fillable = [
        'paket_wisata_id',
        'tipe_hari',
        'harga',
    ];

    protected $casts = [
        'harga' => 'decimal:2',
    ];

    public function paketWisata()
    {
        return $this->belongsTo(PaketWisata::class);
    }

    public function getFormattedHargaAttribute()
    {
        return 'Rp ' . number_format($this->harga, 0, ',', '.');
    }
}
