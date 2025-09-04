<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PaketWisata;
use App\Models\GaleriPaket;
use App\Models\ItineraryPaket;
use App\Models\HighlightPaket;
use App\Models\IncludeExcludePaket;
use App\Models\PaketHarga;
use App\Models\ReviewPaket;
use App\Models\GaleriReview;
use App\Models\User;

class PaketWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat paket wisata
        $paket1 = PaketWisata::create([
            'nama' => 'Borobudur & Prambanan Temple Day Tour',
            'deskripsi' => 'Jelajahi dua situs warisan dunia UNESCO dalam satu hari. Kunjungi Candi Borobudur, monumen Buddha terbesar di dunia dan Candi Prambanan, kompleks candi Hindu terbesar di Indonesia.',
            'full_description' => 'Jelajahi dua situs warisan dunia UNESCO dalam satu hari. Kunjungi Candi Borobudur, monumen Buddha terbesar di dunia yang dibangun pada abad ke-9 dan dihiasi dengan 2.672 panel relief dan 504 patung Buddha. Kemudian lanjutkan perjalanan ke Candi Prambanan, kompleks candi Hindu terbesar di Indonesia yang dibangun pada abad ke-9 dan terdiri dari lebih dari 200 candi dengan tiga candi utama yang didedikasikan untuk Trimurti: Brahma, Vishnu, dan Shiva. Tour ini termasuk transportasi AC, tiket masuk, guide berbahasa Inggris, dan makan siang.',
            'gambar' => 'img/bg-hero-index.png',
            'durasi' => '10 - 11 hours',
                'tipe' => 'DAY_TRIP',
            'harga_awal' => 750000,
            'harga_diskon' => 650000,
            'tipe_tour' => 'Shared Tour',
                'group_type' => 'Small Group',
            'rating' => 4.9,
            'total_review' => 256,
            'lokasi' => 'Yogyakarta, Indonesia',
                'is_active' => true,
        ]);

        // Tambahkan galeri untuk paket 1
        $galeri1 = [
            ['paket_wisata_id' => $paket1->id, 'gambar' => 'img/bg-hero-index.png', 'urutan' => 1, 'is_cover' => true],
            ['paket_wisata_id' => $paket1->id, 'gambar' => 'img/img-card.png', 'urutan' => 2, 'is_cover' => false],
            ['paket_wisata_id' => $paket1->id, 'gambar' => 'img/banner-index.png', 'urutan' => 3, 'is_cover' => false],
            ['paket_wisata_id' => $paket1->id, 'gambar' => 'img/right side.png', 'urutan' => 4, 'is_cover' => false],
            ['paket_wisata_id' => $paket1->id, 'gambar' => 'img/img-card.png', 'urutan' => 5, 'is_cover' => false],
        ];
        GaleriPaket::insert($galeri1);

        // Tambahkan itinerary untuk paket 1
        $itinerary1 = [
            [
                'paket_wisata_id' => $paket1->id,
                'judul' => 'Hotel Pickup',
                'deskripsi' => 'Penjemputan di hotel Anda di Yogyakarta',
                'durasi' => '30 minutes',
                'jenis' => 'PICKUP',
                'lokasi_nama' => 'Hotel di Yogyakarta',
                'lokasi_lat' => -7.7956,
                'lokasi_lng' => 110.3695,
                'urutan' => 1
            ],
            [
                'paket_wisata_id' => $paket1->id,
                'judul' => 'Perjalanan ke Borobudur',
                'deskripsi' => 'Perjalanan dengan mobil AC ke Candi Borobudur',
                'durasi' => '75 minutes',
                'jenis' => 'TRANSPORT',
                'lokasi_nama' => 'Jalan menuju Borobudur',
                'lokasi_lat' => -7.7000,
                'lokasi_lng' => 110.2500,
                'urutan' => 2
            ],
            [
                'paket_wisata_id' => $paket1->id,
                'judul' => 'Candi Borobudur',
                'deskripsi' => 'Mengunjungi dan menjelajahi Candi Borobudur dengan guide lokal',
                'durasi' => '2 hours',
                'jenis' => 'DESTINATION',
                'lokasi_nama' => 'Candi Borobudur',
                'lokasi_lat' => -7.6079,
                'lokasi_lng' => 110.2038,
                'urutan' => 3
            ],
            [
                'paket_wisata_id' => $paket1->id,
                'judul' => 'Perjalanan ke Prambanan',
                'deskripsi' => 'Perjalanan dengan mobil AC ke Candi Prambanan',
                'durasi' => '90 minutes',
                'jenis' => 'TRANSPORT',
                'lokasi_nama' => 'Jalan menuju Prambanan',
                'lokasi_lat' => -7.7000,
                'lokasi_lng' => 110.4000,
                'urutan' => 4
            ],
            [
                'paket_wisata_id' => $paket1->id,
                'judul' => 'Candi Prambanan',
                'deskripsi' => 'Mengunjungi dan menjelajahi Candi Prambanan dengan guide lokal',
                'durasi' => '2 hours',
                'jenis' => 'DESTINATION',
                'lokasi_nama' => 'Candi Prambanan',
                'lokasi_lat' => -7.7520,
                'lokasi_lng' => 110.4915,
                'urutan' => 5
            ],
            [
                'paket_wisata_id' => $paket1->id,
                'judul' => 'Kembali ke Hotel',
                'deskripsi' => 'Perjalanan kembali ke hotel Anda di Yogyakarta',
                'durasi' => '35 minutes',
                'jenis' => 'TRANSPORT',
                'lokasi_nama' => 'Jalan kembali ke Yogyakarta',
                'lokasi_lat' => -7.7500,
                'lokasi_lng' => 110.3800,
                'urutan' => 6
            ],
            [
                'paket_wisata_id' => $paket1->id,
                'judul' => 'Hotel Drop-off',
                'deskripsi' => 'Pengantaran kembali ke hotel Anda',
                'durasi' => '10 minutes',
                'jenis' => 'DROPOFF',
                'lokasi_nama' => 'Hotel di Yogyakarta',
                'lokasi_lat' => -7.7956,
                'lokasi_lng' => 110.3695,
                'urutan' => 7
            ],
        ];
        ItineraryPaket::insert($itinerary1);

        // Tambahkan highlight untuk paket 1
        $highlight1 = [
            ['paket_wisata_id' => $paket1->id, 'teks' => 'Kunjungi dua situs Warisan Dunia UNESCO dalam satu hari', 'urutan' => 1],
            ['paket_wisata_id' => $paket1->id, 'teks' => 'Jelajahi Candi Borobudur, monumen Buddha terbesar di dunia', 'urutan' => 2],
            ['paket_wisata_id' => $paket1->id, 'teks' => 'Lihat Candi Prambanan, kompleks candi Hindu terbesar di Indonesia', 'urutan' => 3],
            ['paket_wisata_id' => $paket1->id, 'teks' => 'Pelajari sejarah dan budaya Jawa dari guide berpengalaman', 'urutan' => 4],
        ];
        HighlightPaket::insert($highlight1);

        // Tambahkan include exclude untuk paket 1
        $includeExclude1 = [
            ['paket_wisata_id' => $paket1->id, 'teks' => 'Transportasi AC pulang-pergi', 'tipe' => 'INCLUDE', 'urutan' => 1],
            ['paket_wisata_id' => $paket1->id, 'teks' => 'Tiket masuk ke Borobudur dan Prambanan', 'tipe' => 'INCLUDE', 'urutan' => 2],
            ['paket_wisata_id' => $paket1->id, 'teks' => 'Guide berbahasa Inggris', 'tipe' => 'INCLUDE', 'urutan' => 3],
            ['paket_wisata_id' => $paket1->id, 'teks' => 'Air mineral', 'tipe' => 'INCLUDE', 'urutan' => 4],
            ['paket_wisata_id' => $paket1->id, 'teks' => 'Makan siang', 'tipe' => 'EXCLUDE', 'urutan' => 1],
            ['paket_wisata_id' => $paket1->id, 'teks' => 'Pengeluaran pribadi', 'tipe' => 'EXCLUDE', 'urutan' => 2],
            ['paket_wisata_id' => $paket1->id, 'teks' => 'Asuransi perjalanan', 'tipe' => 'EXCLUDE', 'urutan' => 3],
        ];
        IncludeExcludePaket::insert($includeExclude1);

        // Tambahkan paket harga untuk paket 1
        $paketHarga1 = [
            ['paket_wisata_id' => $paket1->id, 'tipe_hari' => 'WEEKDAY', 'harga' => 650000],
            ['paket_wisata_id' => $paket1->id, 'tipe_hari' => 'WEEKEND', 'harga' => 750000],
            ['paket_wisata_id' => $paket1->id, 'tipe_hari' => 'HOLIDAY', 'harga' => 850000],
        ];
        PaketHarga::insert($paketHarga1);

        // Buat beberapa user untuk review
        $user1 = User::firstOrCreate(
            ['email' => 'john@example.com'],
            [
                'name' => 'John Doe',
                'password' => bcrypt('password'),
            ]
        );

        // Tambahkan review untuk paket 1
        $review1 = ReviewPaket::create([
            'paket_wisata_id' => $paket1->id,
            'user_id' => $user1->id,
            'user_name' => 'John Doe',
            'user_country' => 'United States',
            'rating' => 5.0,
            'ulasan' => 'Tour yang luar biasa! Guide kami sangat berpengetahuan dan ramah. Candi Borobudur dan Prambanan sangat menakjubkan. Sangat direkomendasikan untuk siapa saja yang mengunjungi Yogyakarta.',
            'tanggal' => now()->subDays(7),
        ]);

        // Tambahkan galeri review
        $galeriReview1 = [
            ['review_id' => $review1->id, 'gambar' => 'img/bg-hero-index.png'],
            ['review_id' => $review1->id, 'gambar' => 'img/img-card.png'],
        ];
        GaleriReview::insert($galeriReview1);
    }
}