<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaketWisata;
use App\Models\PaketHarga;

class PaketHargaSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        // Get all paket wisata
        $paketWisatas = PaketWisata::all();
        
        foreach ($paketWisatas as $paket) {
            // Weekday price (base price)
            PaketHarga::create([
                'paket_wisata_id' => $paket->id,
                'tipe_hari' => 'WEEKDAY',
                'harga' => $paket->harga_awal,
            ]);
            
            // Weekend price (20% higher)
            PaketHarga::create([
                'paket_wisata_id' => $paket->id,
                'tipe_hari' => 'WEEKEND',
                'harga' => $paket->harga_awal * 1.2,
            ]);
            
            // Holiday price (50% higher)
            PaketHarga::create([
                'paket_wisata_id' => $paket->id,
                'tipe_hari' => 'HOLIDAY',
                'harga' => $paket->harga_awal * 1.5,
            ]);
        }
    }
}
