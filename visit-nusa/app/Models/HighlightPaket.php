<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HighlightPaket extends Model
{
    use HasFactory;

    protected $fillable = [
        'paket_wisata_id',
        'teks',
        'urutan',
    ];

    public function paketWisata()
    {
        return $this->belongsTo(PaketWisata::class);
    }
}
