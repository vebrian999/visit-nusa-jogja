@extends('layouts.app')

@section('content')
       <main class="mt-12">
      <div id="content">
        <!-- Hero Section Start -->
        <section class="relative flex flex-col items-center justify-center h-[512px]" style="background: url('{{ asset('img/bg-hero-index.png') }}') center/cover no-repeat">
          <!-- Overlay warna primary dengan opacity 30% -->
          <div class="absolute inset-0 bg-primary opacity-10"></div>
          <!-- Konten utama hero -->
          <div class="relative w-full flex flex-col items-center">
            <!-- Search Bar Start -->
            <div class="main-container w-full mt-2 text-center space-y-5">
              <h1 class="text-6xl font-semibold text-white px-48">Inspiring Travel Articles for Every Explorer</h1>
              <p class="font-normal text-xl text-white px-60">Get practical travel tips, discover hidden gems, plan your dream trips, and read personal stories from explorers around the world.</p>
            </div>
          </div>
        </section>
        <!-- Hero Section End -->
        <section class="main-container mx-auto mb-4 mt-16">
          <div class="flex justify-between items-center mb-5">
            <div>
              <h1 class="text-2xl font-semibold">All Articles</h1>
            </div>
            <!-- nanti dibawah ini buat ikut database sesuai profesi yang ada pada database. -->
            <!-- Tombol & Search Bar -->
            <div class="flex flex-wrap items-center gap-2" id="searchWrapper">
              <!-- Input Search (awal hidden, akan geser tombol lain saat aktif) -->
              <input id="searchInput" type="text" placeholder="Cari artikel..." class="w-0 opacity-0 transition-all duration-300 ease-in-out border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" />

              <!-- Tombol Search -->
              <button id="searchToggle" class="flex items-center justify-center w-10 h-10 bg-white border-2 rounded-lg hover:bg-gray-100 transition-all duration-300">
                <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 103.6 3.6a7.5 7.5 0 0013.05 13.05z" />
                </svg>
              </button>

              <!-- Tombol Semua -->
              <button type="button" class="bg-white border-2 py-2 rounded-lg px-4">Terbaru</button>
              <button type="button" class="bg-white border-2 py-2 rounded-lg px-4">Newest</button>

              <!-- Dropdown Kota / Kabupaten -->
              <div class="relative inline-block">
                <button id="dropdownButton" class="bg-white border-2 py-2 px-4 rounded-lg text-black hover:bg-gray-100 flex items-center">
                  Recommended
                  <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                  </svg>
                </button>
                <div id="dropdownMenu" class="absolute z-50 mt-2 right-0 w-64 bg-white border border-gray-200 rounded-lg shadow-lg hidden max-h-60 overflow-y-auto">
                  <ul class="py-2 text-left text-gray-700">
                    <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Tips Karir</li>
                    <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Wawancara Kerja</li>
                    <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">CV & Resume</li>
                    <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Lowongan Terbaru</li>
                    <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Motivasi & Inspirasi</li>
                    <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Budaya Kerja</li>
                    <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Freelance & Remote</li>
                  </ul>
                </div>
              </div>
            </div>

            <script>
              const searchToggle = document.getElementById("searchToggle");
              const searchInput = document.getElementById("searchInput");

              let searchActive = false;

              searchToggle.addEventListener("click", () => {
                if (!searchActive) {
                  searchInput.classList.remove("opacity-0", "w-0");
                  searchInput.classList.add("opacity-100", "w-64", "mr-2");
                  searchInput.focus();
                } else {
                  searchInput.classList.add("opacity-0", "w-0");
                  searchInput.classList.remove("opacity-100", "w-64", "mr-2");
                  searchInput.value = ""; // Optional: kosongkan input
                }
                searchActive = !searchActive;
              });
            </script>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Card Artikel Start -->
            <div class="overflow-hidden">
              <!-- Gambar Artikel dengan hover effect dan link -->
              <div class="overflow-hidden">
                <a href="detail-artikel.html">
                  <img src="{{ asset('img/bg-hero-index.png') }}" alt="Gambar Artikel" class="w-full h-48 object-cover transition-transform duration-300 ease-in-out hover:scale-105" />
                </a>
              </div>

              <div class="py-6 space-y-2">
                <!-- Kategori dan Tanggal -->
                <div class="flex justify-between items-center text-sm text-gray-500 mb-1">
                  <span class="bg-primary text-secondary rounded-md px-2 py-1 text-sm font-medium">Travel & Adventure</span>
                  <span class="text-sm">24 Juli 2025</span>
                </div>

                <!-- Judul -->
                <h2 class="text-lg font-semibold text-gray-800 hover:text-primary transition-colors duration-200 cursor-pointer">
                  <a href="detail-artikel.html">Discover Yogyakarta’s Hidden Gems Worth Exploring Today......</a>
                </h2>

                <!-- Potongan Artikel -->
                <p class="text-gray-600 text-sm leading-relaxed">
                  Yogyakarta is full of hidden gems waiting to be discovered beyond the usual tourist spots. From serene temples tucked away in lush greenery to quiet cafes with stunning views, and local artisan workshops where you can try
                  traditional crafts, this guide will take you off the beaten path....
                </p>
              </div>
            </div>

            <!-- card 2 -->
            <div class="overflow-hidden">
              <!-- Gambar Artikel dengan hover effect dan link -->
              <div class="overflow-hidden">
                <a href="detail-artikel.html">
                  <img src="{{ asset('img/bg-hero-index.png') }}" alt="Gambar Artikel" class="w-full h-48 object-cover transition-transform duration-300 ease-in-out hover:scale-105" />
                </a>
              </div>

              <div class="py-6 space-y-2">
                <!-- Kategori dan Tanggal -->
                <div class="flex justify-between items-center text-sm text-gray-500 mb-1">
                  <span class="bg-primary text-secondary rounded-md px-2 py-1 text-sm font-medium">Travel & Adventure</span>
                  <span class="text-sm">24 Juli 2025</span>
                </div>

                <!-- Judul -->
                <h2 class="text-lg font-semibold text-gray-800 hover:text-primary transition-colors duration-200 cursor-pointer">
                  <a href="detail-artikel.html">Discover Yogyakarta’s Hidden Gems Worth Exploring Today...</a>
                </h2>

                <!-- Potongan Artikel -->
                <p class="text-gray-600 text-sm leading-relaxed">
                  Yogyakarta is full of hidden gems waiting to be discovered beyond the usual tourist spots. From serene temples tucked away in lush greenery to quiet cafes with stunning views, and local artisan workshops where you can try
                  traditional crafts, this guide will take you off the beaten path....
                </p>
              </div>
            </div>

            <!-- card 3 -->
            <div class="overflow-hidden">
              <!-- Gambar Artikel dengan hover effect dan link -->
              <div class="overflow-hidden">
                <a href="detail-artikel.html">
                  <img src="{{ asset('img/bg-hero-index.png') }}" alt="Gambar Artikel" class="w-full h-48 object-cover transition-transform duration-300 ease-in-out hover:scale-105" />
                </a>
              </div>

              <div class="py-6 space-y-2">
                <!-- Kategori dan Tanggal -->
                <div class="flex justify-between items-center text-sm text-gray-500 mb-1">
                  <span class="bg-primary text-secondary rounded-md px-2 py-1 text-sm font-medium">Travel & Adventure</span>
                  <span class="text-sm">24 Juli 2025</span>
                </div>

                <!-- Judul -->
                <h2 class="text-lg font-semibold text-gray-800 hover:text-primary transition-colors duration-200 cursor-pointer">
                  <a href="detail-artikel.html">Discover Yogyakarta’s Hidden Gems Worth Exploring Today...</a>
                </h2>

                <!-- Potongan Artikel -->
                <p class="text-gray-600 text-sm leading-relaxed">
                  Yogyakarta is full of hidden gems waiting to be discovered beyond the usual tourist spots. From serene temples tucked away in lush greenery to quiet cafes with stunning views, and local artisan workshops where you can try
                  traditional crafts, this guide will take you off the beaten path....
                </p>
              </div>
            </div>

            <!-- Card End -->
          </div>
        </section>

        <section class="py-12 mx-auto main-container container">
          <!-- Show More Button Component -->
          <div class="relative flex items-center justify-center">
            <!-- Left line -->
            <div class="flex-1 h-[1.5px] bg-primary"></div>

            <!-- Button -->
            <div class="mx-6 sm:mx-8">
              <button
                class="inline-flex items-center justify-center px-6 py-3 sm:px-8 sm:py-3 text-sm sm:text-base font-medium text-primary border-2 border-primary rounded-full h hover:border-primary hover:text-primary focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 transition-all duration-200 ease-in-out transform hover:scale-105 active:scale-95 shadow-sm hover:shadow-md">
                Show more
              </button>
            </div>

            <!-- Right line -->
            <div class="flex-1 h-[1.5px] bg-primary"></div>
          </div>
        </section>

        <!-- banner -->
        <section class="py-12 mx-auto main-container container">
          <div class="relative overflow-hidden bg-white rounded-2xl" style="height: 568px">
            <!-- Background Image -->
            <img src="{{ asset('img/banner-index.png') }}" alt="banner" class="absolute inset-0 h-full w-full object-cover object-center rounded-2xl z-0" />

            <!-- Banner Content -->
            <div class="relative z-30 flex flex-col items-center justify-center h-full px-6 text-center">
              <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Are You Ready to Travel With Us?</h2>
              <p class="text-lg md:text-xl text-gray-900 mb-6 max-w-2xl mx-auto">Discover amazing destinations, hidden gems, and unforgettable experiences around the world. Plan your perfect trip today!</p>
              <a href="#" class="rounded-full flex items-center space-x-2 bg-black px-8 py-3 font-semibold text-[#FFB300] text-base shadow hover:opacity-90 transition">
                <p>Explore Destinations</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                  <path d="M14 4.5L21.5 12M21.5 12L14 19.5M21.5 12H3.5" stroke="#FFB300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
            </div>
          </div>
        </section>
      </div>
    </main>
@endsection

@push('styles')
    <!-- Jika ada style khusus, tambahkan di sini -->
@endpush

@push('scripts')
    <!-- Jika ada script khusus, tambahkan di sini -->
@endpush
