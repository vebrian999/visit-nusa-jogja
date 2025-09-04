<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketWisata extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'deskripsi', 'gambar', 'durasi', 'tipe', 'harga_awal', 'harga_diskon',
        'tipe_tour', 'group_type', 'rating', 'total_review', 'lokasi', 'is_active'
    ];

    protected $casts = [
        'harga_awal' => 'decimal:2',
        'harga_diskon' => 'decimal:2',
        'rating' => 'decimal:2',
        'is_active' => 'boolean',
    ];

    // Scope untuk paket aktif
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope untuk day trip
    public function scopeDayTrip($query)
    {
        return $query->where('tipe', 'DAY_TRIP');
    }

    // Scope untuk multi day
    public function scopeMultiDay($query)
    {
        return $query->where('tipe', 'MULTI_DAY');
    }

    // Accessor untuk harga yang sudah diformat
    public function getFormattedHargaAwalAttribute()
    {
        return 'Rp ' . number_format($this->harga_awal, 0, ',', '.');
    }

    public function getFormattedHargaDiskonAttribute()
    {
        if ($this->harga_diskon) {
            return 'Rp ' . number_format($this->harga_diskon, 0, ',', '.');
        }
        return null;
    }

    // Check apakah ada diskon
    public function hasDiscount()
    {
        return $this->harga_diskon && $this->harga_diskon < $this->harga_awal;
    }

    // Calculate persentase diskon
    public function getDiscountPercentage()
    {
        if ($this->hasDiscount()) {
            return round((($this->harga_awal - $this->harga_diskon) / $this->harga_awal) * 100);
        }
        return 0;
    }
}
