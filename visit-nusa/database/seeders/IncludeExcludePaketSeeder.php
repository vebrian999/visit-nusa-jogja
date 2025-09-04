<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaketWisata;
use App\Models\IncludeExcludePaket;

class IncludeExcludePaketSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        // Get all paket wisata
        $paketWisatas = PaketWisata::all();
        
        // Default includes
        $defaultIncludes = [
            'Hotel pickup and drop-off',
            'Transportation',
            'English-speaking driver',
            'Guide',
            'Mineral water',
            'Guarantee to climb the temple structure'
        ];
        
        // Default excludes
        $defaultExcludes = [
            'Meals and personal expenses',
            'Travel insurance',
            'Tips for guide and driver'
        ];
        
        foreach ($paketWisatas as $paket) {
            // Create include records
            foreach ($defaultIncludes as $index => $include) {
                IncludeExcludePaket::create([
                    'paket_wisata_id' => $paket->id,
                    'teks' => $include,
                    'tipe' => 'INCLUDE',
                    'urutan' => $index + 1,
                ]);
            }
            
            // Create exclude records
            foreach ($defaultExcludes as $index => $exclude) {
                IncludeExcludePaket::create([
                    'paket_wisata_id' => $paket->id,
                    'teks' => $exclude,
                    'tipe' => 'EXCLUDE',
                    'urutan' => $index + 1,
                ]);
            }
        }
    }
}
