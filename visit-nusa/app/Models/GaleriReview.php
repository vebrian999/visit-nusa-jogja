<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'review_id',
        'gambar',
    ];

    public function reviewPaket()
    {
        return $this->belongsTo(ReviewPaket::class, 'review_id');
    }
}
