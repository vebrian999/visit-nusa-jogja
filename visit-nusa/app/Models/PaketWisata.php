<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketWisata extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'deskripsi', 'gambar', 'durasi', 'tipe', 'harga_awal', 'harga_diskon',
        'tipe_tour', 'group_type', 'rating', 'total_review', 'lokasi', 'is_active',
        'full_description', 'highlights'
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
    
    // Relationships
    public function galeriPakets()
    {
        return $this->hasMany(GaleriPaket::class);
    }
    
    public function itineraryPakets()
    {
        return $this->hasMany(ItineraryPaket::class);
    }
    
    public function highlightPakets()
    {
        return $this->hasMany(HighlightPaket::class);
    }
    
    public function includeExcludePakets()
    {
        return $this->hasMany(IncludeExcludePaket::class);
    }
    
    public function reviewPakets()
    {
        return $this->hasMany(ReviewPaket::class);
    }
    
    public function paketHargas()
    {
        return $this->hasMany(PaketHarga::class);
    }
    
    // Helper methods for related data
    public function getGalleryAttribute()
    {
        $gallery = $this->galeriPakets()->orderBy('urutan')->pluck('gambar')->toArray();
        
        // If no gallery images, return the main image
        if (empty($gallery) && $this->gambar) {
            return [$this->gambar];
        }
        
        return $gallery;
    }
    
    public function getIncludesAttribute()
    {
        return $this->includeExcludePakets()
            ->where('tipe', 'INCLUDE')
            ->orderBy('urutan')
            ->pluck('teks')
            ->toArray();
    }
    
    public function getExcludesAttribute()
    {
        return $this->includeExcludePakets()
            ->where('tipe', 'EXCLUDE')
            ->orderBy('urutan')
            ->pluck('teks')
            ->toArray();
    }
    
    public function getHighlightPointsAttribute()
    {
        return $this->highlightPakets()
            ->orderBy('urutan')
            ->pluck('teks')
            ->toArray();
    }
}
