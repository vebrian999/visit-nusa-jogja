<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaketWisata;
use App\Models\ItineraryPaket;

class ItineraryPaketSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        // Get all paket wisata
        $paketWisatas = PaketWisata::all();
        
        foreach ($paketWisatas as $paket) {
            // Default itinerary for all packages
            $itineraryItems = [];
            
            // Add pickup location
            $itineraryItems[] = [
                'judul' => 'Hotel Pickup',
                'deskripsi' => 'Our guide will pick you up from your hotel in Yogyakarta area.',
                'durasi' => null,
                'jenis' => 'PICKUP',
                'lokasi_nama' => 'Yogyakarta Center',
                'lokasi_lat' => -7.7956,
                'lokasi_lng' => 110.3695,
                'urutan' => 1
            ];
            
            if (strpos(strtolower($paket->nama), 'borobudur') !== false) {
                // Add Borobudur destination
                $itineraryItems[] = [
                    'judul' => 'Car Journey',
                    'deskripsi' => 'Travel by air-conditioned vehicle to Borobudur Temple.',
                    'durasi' => '60 minutes',
                    'jenis' => 'TRANSPORT',
                    'lokasi_nama' => 'Route to Borobudur',
                    'lokasi_lat' => null,
                    'lokasi_lng' => null,
                    'urutan' => 2
                ];
                
                $itineraryItems[] = [
                    'judul' => 'Borobudur Temple',
                    'deskripsi' => 'Visit the magnificent Borobudur Temple, the largest Buddhist temple in the world.',
                    'durasi' => '3 hours',
                    'jenis' => 'DESTINATION',
                    'lokasi_nama' => 'Borobudur Temple',
                    'lokasi_lat' => -7.6079,
                    'lokasi_lng' => 110.2038,
                    'urutan' => 3
                ];
            }
            
            if (strpos(strtolower($paket->nama), 'prambanan') !== false) {
                // Add Prambanan destination
                $itineraryItems[] = [
                    'judul' => 'Car Journey',
                    'deskripsi' => 'Travel by air-conditioned vehicle to Prambanan Temple.',
                    'durasi' => '45 minutes',
                    'jenis' => 'TRANSPORT',
                    'lokasi_nama' => 'Route to Prambanan',
                    'lokasi_lat' => null,
                    'lokasi_lng' => null,
                    'urutan' => count($itineraryItems) + 1
                ];
                
                $itineraryItems[] = [
                    'judul' => 'Prambanan Temple',
                    'deskripsi' => 'Explore the magnificent Prambanan Temple, the largest Hindu temple in Indonesia.',
                    'durasi' => '2 hours',
                    'jenis' => 'DESTINATION',
                    'lokasi_nama' => 'Prambanan Temple',
                    'lokasi_lat' => -7.752,
                    'lokasi_lng' => 110.4915,
                    'urutan' => count($itineraryItems) + 1
                ];
            }
            
            // Add drop-off location
            $itineraryItems[] = [
                'judul' => 'Return Journey',
                'deskripsi' => 'Return to Yogyakarta.',
                'durasi' => '45 minutes',
                'jenis' => 'TRANSPORT',
                'lokasi_nama' => 'Return to Yogyakarta',
                'lokasi_lat' => null,
                'lokasi_lng' => null,
                'urutan' => count($itineraryItems) + 1
            ];
            
            $itineraryItems[] = [
                'judul' => 'Hotel Drop-off',
                'deskripsi' => 'Drop-off at your hotel in Yogyakarta area.',
                'durasi' => null,
                'jenis' => 'DROPOFF',
                'lokasi_nama' => 'Yogyakarta Center',
                'lokasi_lat' => -7.7956,
                'lokasi_lng' => 110.3695,
                'urutan' => count($itineraryItems) + 1
            ];
            
            // Create itinerary records
            foreach ($itineraryItems as $item) {
                ItineraryPaket::create([
                    'paket_wisata_id' => $paket->id,
                    'judul' => $item['judul'],
                    'deskripsi' => $item['deskripsi'],
                    'durasi' => $item['durasi'],
                    'jenis' => $item['jenis'],
                    'lokasi_nama' => $item['lokasi_nama'],
                    'lokasi_lat' => $item['lokasi_lat'],
                    'lokasi_lng' => $item['lokasi_lng'],
                    'urutan' => $item['urutan'],
                ]);
            }
        }
    }
}
