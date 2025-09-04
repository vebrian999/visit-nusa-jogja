<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaketWisata;

class PaketWisataSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        $paketWisatas = [
            // DAY TRIP PACKAGES
            [
                'nama' => 'Borobudur Temple Sunrise Tour',
                'deskripsi' => 'Nikmati keindahan matahari terbit di Candi Borobudur, salah satu keajaiban dunia. Paket termasuk guide profesional dan transportasi.',
                'gambar' => 'img/img-card.png',
                'durasi' => '1 Hari',
                'tipe' => 'DAY_TRIP',
                'harga_awal' => 350000,
                'harga_diskon' => 299000,
                'tipe_tour' => 'Private Tour',
                'group_type' => 'Small Group',
                'rating' => 4.8,
                'total_review' => 127,
                'lokasi' => 'Magelang, Jawa Tengah',
                'is_active' => true,
            ],
            [
                'nama' => 'Prambanan & Ratu Boko Sunset',
                'deskripsi' => 'Jelajahi kompleks candi Hindu terbesar di Indonesia dan saksikan sunset menawan di Ratu Boko.',
                'gambar' => 'img/img-card.png',
                'durasi' => '1 Hari',
                'tipe' => 'DAY_TRIP',
                'harga_awal' => 275000,
                'harga_diskon' => null,
                'tipe_tour' => 'Group Tour',
                'group_type' => 'Medium Group',
                'rating' => 4.6,
                'total_review' => 89,
                'lokasi' => 'Yogyakarta',
                'is_active' => true,
            ],
            [
                'nama' => 'Taman Sari & Kraton Yogyakarta',
                'deskripsi' => 'Wisata budaya ke istana raja dan taman air bersejarah di jantung kota Yogyakarta.',
                'gambar' => 'img/img-card.png',
                'durasi' => '1 Hari',
                'tipe' => 'DAY_TRIP',
                'harga_awal' => 200000,
                'harga_diskon' => 175000,
                'tipe_tour' => 'Cultural Tour',
                'group_type' => 'Small Group',
                'rating' => 4.4,
                'total_review' => 156,
                'lokasi' => 'Yogyakarta',
                'is_active' => true,
            ],
            [
                'nama' => 'Jomblang Cave Adventure',
                'deskripsi' => 'Petualangan seru menjelajahi gua vertikal dengan pemandangan cahaya surga yang menakjubkan.',
                'gambar' => 'img/img-card.png',
                'durasi' => '1 Hari',
                'tipe' => 'DAY_TRIP',
                'harga_awal' => 450000,
                'harga_diskon' => 399000,
                'tipe_tour' => 'Adventure Tour',
                'group_type' => 'Small Group',
                'rating' => 4.9,
                'total_review' => 203,
                'lokasi' => 'Gunungkidul, Yogyakarta',
                'is_active' => true,
            ],

            // MULTI DAY PACKAGES
            [
                'nama' => 'Yogya Cultural Heritage 3D2N',
                'deskripsi' => 'Paket wisata budaya lengkap mengunjungi semua situs bersejarah Yogyakarta dalam 3 hari 2 malam.',
                'gambar' => 'img/img-card.png',
                'durasi' => '3 Hari 2 Malam',
                'tipe' => 'MULTI_DAY',
                'harga_awal' => 1850000,
                'harga_diskon' => 1650000,
                'tipe_tour' => 'Cultural Package',
                'group_type' => 'Private Tour',
                'rating' => 4.7,
                'total_review' => 78,
                'lokasi' => 'Yogyakarta & Sekitarnya',
                'is_active' => true,
            ],
            [
                'nama' => 'Central Java Heritage Tour 4D3N',
                'deskripsi' => 'Eksplorasi lengkap warisan budaya Jawa Tengah termasuk Borobudur, Prambanan, dan Solo.',
                'gambar' => 'img/img-card.png',
                'durasi' => '4 Hari 3 Malam',
                'tipe' => 'MULTI_DAY',
                'harga_awal' => 2750000,
                'harga_diskon' => null,
                'tipe_tour' => 'Heritage Package',
                'group_type' => 'Small Group',
                'rating' => 4.5,
                'total_review' => 45,
                'lokasi' => 'Yogyakarta, Solo, Magelang',
                'is_active' => true,
            ],
            [
                'nama' => 'Adventure & Culture Combo 5D4N',
                'deskripsi' => 'Kombinasi perfect antara petualangan alam dan wisata budaya dalam satu paket eksklusif.',
                'gambar' => 'img/img-card.png',
                'durasi' => '5 Hari 4 Malam',
                'tipe' => 'MULTI_DAY',
                'harga_awal' => 3200000,
                'harga_diskon' => 2890000,
                'tipe_tour' => 'Combo Package',
                'group_type' => 'Private Tour',
                'rating' => 4.8,
                'total_review' => 67,
                'lokasi' => 'Yogyakarta & Jawa Tengah',
                'is_active' => true,
            ],
        ];

        foreach ($paketWisatas as $paket) {
            PaketWisata::create($paket);
        }
    }
}
