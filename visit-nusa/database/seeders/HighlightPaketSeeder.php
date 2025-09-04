<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaketWisata;
use App\Models\HighlightPaket;

class HighlightPaketSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        // Get all paket wisata
        $paketWisatas = PaketWisata::all();
        
        // Default highlights if not specified
        $defaultHighlights = [
            'Enjoy temples with a guarantee of full access to all temples and climb up',
            'Explore the highest Hindu temple and largest buddha temple structure',
            'Enjoy the temple in detail with full temple access',
            'Enjoy the most complex Buddhist temple in the world'
        ];
        
        foreach ($paketWisatas as $paket) {
            // If paket has highlights field, use it
            $highlights = [];
            if (!empty($paket->highlights)) {
                $highlights = explode('|', $paket->highlights);
            } else {
                $highlights = $defaultHighlights;
            }
            
            // Create highlight records
            foreach ($highlights as $index => $highlight) {
                HighlightPaket::create([
                    'paket_wisata_id' => $paket->id,
                    'teks' => $highlight,
                    'urutan' => $index + 1,
                ]);
            }
        }
    }
}
