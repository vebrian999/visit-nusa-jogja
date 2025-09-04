<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaketWisata;

class LandingController extends Controller
{
    public function index()
    {
        // Ambil paket wisata day trip (max 6 untuk slider)
        $paketHarian = PaketWisata::active()
            ->dayTrip()
            ->orderBy('rating', 'desc')
            ->limit(6)
            ->get();

        // Ambil paket wisata multi day (max 6 untuk slider)
        $paketBeberapaHari = PaketWisata::active()
            ->multiDay()
            ->orderBy('rating', 'desc')
            ->limit(6)
            ->get();

        return view('pages.landing', compact('paketHarian', 'paketBeberapaHari'));
    }
}
