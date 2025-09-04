<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaketWisata;
use App\Models\GaleriPaket;

class GaleriPaketSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        // Get all paket wisata
        $paketWisatas = PaketWisata::all();
        
        foreach ($paketWisatas as $paket) {
            // Create gallery images for each paket
            for ($i = 1; $i <= 5; $i++) {
                GaleriPaket::create([
                    'paket_wisata_id' => $paket->id,
                    'gambar' => 'img/img-card.png', // Using placeholder image
                    'urutan' => $i,
                    'is_cover' => $i === 1, // First image is cover
                ]);
            }
        }
    }
}
