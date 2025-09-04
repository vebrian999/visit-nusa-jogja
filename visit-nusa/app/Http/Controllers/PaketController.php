<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaketWisata;

class PaketController extends Controller
{
    public function index(Request $request)
    {
        $query = PaketWisata::active();

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->get('search');
            $query->where(function($q) use ($search) {
                $q->where('nama', 'LIKE', "%{$search}%")
                  ->orWhere('deskripsi', 'LIKE', "%{$search}%")
                  ->orWhere('lokasi', 'LIKE', "%{$search}%");
            });
        }

        // Location filter
        if ($request->filled('location')) {
            $location = $request->get('location');
            $query->where('lokasi', 'LIKE', "%{$location}%");
        }

        // Type filter
        if ($request->filled('type')) {
            $type = $request->get('type');
            if ($type === 'DAY_TRIPS') {
                $query->dayTrip();
            } elseif ($type === 'MULTI_DAY') {
                $query->multiDay();
            }
        }

        // Price range filter
        if ($request->filled('min_price')) {
            $minPrice = $request->get('min_price');
            $query->where(function($q) use ($minPrice) {
                $q->where('harga_diskon', '>=', $minPrice)
                  ->orWhere(function($subQ) use ($minPrice) {
                      $subQ->whereNull('harga_diskon')
                           ->where('harga_awal', '>=', $minPrice);
                  });
            });
        }

        if ($request->filled('max_price')) {
            $maxPrice = $request->get('max_price');
            $query->where(function($q) use ($maxPrice) {
                $q->where('harga_diskon', '<=', $maxPrice)
                  ->orWhere(function($subQ) use ($maxPrice) {
                      $subQ->whereNull('harga_diskon')
                           ->where('harga_awal', '<=', $maxPrice);
                  });
            });
        }

        // Sorting
        $sortBy = $request->get('sort', 'recommended');
        switch ($sortBy) {
            case 'price_low':
                $query->orderByRaw('COALESCE(harga_diskon, harga_awal) ASC');
                break;
            case 'price_high':
                $query->orderByRaw('COALESCE(harga_diskon, harga_awal) DESC');
                break;
            case 'rating':
                $query->orderBy('rating', 'DESC');
                break;
            case 'newest':
                $query->orderBy('created_at', 'DESC');
                break;
            case 'recommended':
            default:
                $query->orderBy('rating', 'DESC')
                      ->orderBy('total_review', 'DESC');
                break;
        }

        // Pagination
        $pakets = $query->paginate(12)->withQueryString();

        // Get filter options
        $locations = PaketWisata::active()
            ->selectRaw("SUBSTRING_INDEX(lokasi, ',', 1) as city")
            ->distinct()
            ->pluck('city')
            ->filter()
            ->sort()
            ->values();

        $types = [
            'DAY_TRIPS' => 'Day Trips',
            'MULTI_DAY' => 'Multi Day'
        ];

        return view('pages.listing-paket', compact('pakets', 'locations', 'types', 'request'));
    }

    public function show($id)
    {
        $paket = PaketWisata::active()->findOrFail($id);
        
        // Related packages
        $relatedPakets = PaketWisata::active()
            ->where('id', '!=', $id)
            ->where('tipe', $paket->tipe)
            ->orderBy('rating', 'DESC')
            ->limit(4)
            ->get();

        return view('pages.detail-paket', compact('paket', 'relatedPakets'));
    }
}
