<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewPaket extends Model
{
    use HasFactory;

    protected $fillable = [
        'paket_wisata_id',
        'user_id',
        'user_name',
        'user_avatar',
        'user_country',
        'rating',
        'ulasan',
        'komentar_admin',
        'tanggal',
        'negara',
    ];

    protected $casts = [
        'rating' => 'decimal:1',
        'tanggal' => 'date',
    ];

    public function paketWisata()
    {
        return $this->belongsTo(PaketWisata::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function galeriReviews()
    {
        return $this->hasMany(GaleriReview::class, 'review_id');
    }
}
