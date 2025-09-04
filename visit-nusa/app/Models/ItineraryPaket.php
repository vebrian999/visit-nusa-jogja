<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItineraryPaket extends Model
{
    use HasFactory;

    protected $fillable = [
        'paket_wisata_id',
        'judul',
        'deskripsi',
        'durasi',
        'jenis',
        'lokasi_nama',
        'lokasi_lat',
        'lokasi_lng',
        'urutan',
    ];

    protected $casts = [
        'lokasi_lat' => 'decimal:8',
        'lokasi_lng' => 'decimal:8',
    ];

    public function paketWisata()
    {
        return $this->belongsTo(PaketWisata::class);
    }
}
