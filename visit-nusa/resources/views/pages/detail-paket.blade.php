@extends('layouts.app')

<head>
@push('styles')
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.css" />
@endpush
</head>

@section('content')

    <main class="pt-16">
      <div class="container mx-auto main-container md:py-16">
        <!-- Title & Rating -->
        <div class="mb-8">
          <h1 class="text-3xl sm:text-4xl lg:text-4xl font-bold mb-4 text-secondary leading-tight">Yogyakarta: Borobudur Sunrise (Guarantee Climb Up) & Prambanan</h1>
          <div>
            <div class="flex flex-col items-center justify-between sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
              <!-- Kiri: Info Paket & Rating -->
              <div class="flex items-center gap-2">
                <span class="bg-primary text-secondary px-4 py-2 rounded-md font-semibold text-sm w-fit"> DAY TRIP </span>

                <div class="flex items-center star-rating">
                  <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20" style="color: #ffb300; fill: #ffb300">
                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                  </svg>
                  <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20" style="color: #ffb300; fill: #ffb300">
                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                  </svg>
                  <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20" style="color: #ffb300; fill: #ffb300">
                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                  </svg>
                  <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20" style="color: #ffb300; fill: #ffb300">
                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                  </svg>
                  <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20" style="color: #ffb300; fill: #ffb300">
                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                  </svg>
                </div>
                <span class="text-sm font-semibold text-secondary">4.9</span>
                <a href="#" class="underline text-secondary text-sm font-semibold">910 reviews</a>
              </div>

              <!-- Kanan: Action Buttons -->
              <div class="flex space-x-4">
                <button class="flex items-center gap-2 underline text-secondary text-sm font-semibold hover:text-red-500 py-2 rounded-lg transition-colors">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                  </svg>
                  Add to wishlist
                </button>
                <button class="flex items-center gap-2 hover:text-blue-500 py-2 rounded-lg underline text-secondary text-sm font-semibold transition-colors">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z" />
                  </svg>
                  Share
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modern Gallery Layout -->
        <div class="mb-8">
          <!-- Desktop Gallery -->
          <div class="mb-8">
            <!-- Desktop Gallery -->
            <div class="hidden lg:grid grid-cols-4 grid-rows-2 gap-3 h-96">
              <!-- Gambar besar kiri (2 baris x 2 kolom) - Rasio 600x402 (≈ 3:2) -->
              <div class="col-span-2 row-span-2 rounded-xl overflow-hidden group cursor-pointer">
                <div class="w-full h-full relative">
                  <img src="{{ asset('img/bg-hero-index.png') }}" alt="Borobudur Temple Landscape" class="w-full h-full object-cover gallery-image group-hover:scale-105 transition-transform duration-500" style="aspect-ratio: 3/2" />
                </div>
              </div>

              <!-- Gambar kanan atas (1 kolom x 2 baris) - Rasio 296x399 (≈ 3:4) -->
              <div class="col-span-1 row-span-2 rounded-xl overflow-hidden group cursor-pointer">
                <div class="w-full h-full relative">
                  <img src="{{ asset('img/bg-hero-index.png') }}" alt="Borobudur Sunrise" class="w-full h-full object-cover gallery-image group-hover:scale-105 transition-transform duration-500" style="aspect-ratio: 3/4" />
                </div>
              </div>

              <!-- Gambar kanan bawah kiri (1 baris x 1 kolom) - Rasio 328x196 (≈ 5:3) -->
              <div class="rounded-xl overflow-hidden group cursor-pointer">
                <div class="w-full h-full relative">
                  <img src="{{ asset('img/bg-hero-index.png') }}" alt="Temple Detail" class="w-full h-full object-cover gallery-image group-hover:scale-105 transition-transform duration-500" style="aspect-ratio: 5/3" />
                </div>
              </div>

              <!-- Gambar kanan bawah kanan dengan overlay +10 (1 baris x 1 kolom) - Rasio 328x196 (≈ 5:3) -->
              <div class="relative rounded-xl overflow-hidden group cursor-pointer" id="viewMoreBtn">
                <div class="w-full h-full relative">
                  <img src="{{ asset('img/bg-hero-index.png') }}" alt="More Photos" class="w-full h-full object-cover gallery-image" style="aspect-ratio: 5/3" />
                  <div class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center group-hover:bg-opacity-70 transition-all duration-300">
                    <div class="text-white text-center">
                      <div class="text-2xl font-bold mb-1">+10</div>
                      <div class="text-sm opacity-90">More Photos</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Mobile Gallery -->
          <div class="lg:hidden space-y-4">
            <div class="rounded-2xl overflow-hidden">
              <img src="https://images.unsplash.com/photo-1539650116574-75c0c6d8f86f?w=800&h=400&fit=crop" alt="Borobudur Temple" class="w-full h-64 sm:h-80 object-cover" />
            </div>
            <div class="grid grid-cols-2 gap-4">
              <img src="https://images.unsplash.com/photo-1553036835-c0b7d4ad0d41?w=400&h=300&fit=crop" alt="Sunrise" class="rounded-2xl h-32 sm:h-40 w-full object-cover" />
              <div class="relative rounded-2xl overflow-hidden cursor-pointer" id="viewMoreBtnMobile">
                <img src="https://images.unsplash.com/photo-1587474260584-136574528ed5?w=400&h=300&fit=crop" alt="More Photos" class="w-full h-32 sm:h-40 object-cover" />
                <div class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center">
                  <div class="text-white text-center">
                    <div class="text-xl font-bold">+12</div>
                    <div class="text-xs">Photos</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Content & Booking -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
          <!-- Main Content -->
          <div class="lg:col-span-2 space-y-6">
            <div class="">
              <p class="text-gray-700 mb-6 leading-relaxed">Paket tur ini menjamin akses penuh ke seluruh area candi, naik ke puncak, menjelajahi kompleks Buddha megah, serta mengagumi detail candi Hindu terbesar</p>
              <div class="space-y-5 mb-6">
                <h1 class="text-xl font-bold">About this activity</h1>
                <div class="flex gap-3 text-gray-700">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path
                      d="M6.75 3V5.25M17.25 3V5.25M3 18.75V7.5C3 6.90326 3.23705 6.33097 3.65901 5.90901C4.08097 5.48705 4.65326 5.25 5.25 5.25H18.75C19.3467 5.25 19.919 5.48705 20.341 5.90901C20.7629 6.33097 21 6.90326 21 7.5V18.75M3 18.75C3 19.3467 3.23705 19.919 3.65901 20.341C4.08097 20.7629 4.65326 21 5.25 21H18.75C19.3467 21 19.919 20.7629 20.341 20.341C20.7629 19.919 21 19.3467 21 18.75M3 18.75V11.25C3 10.6533 3.23705 10.081 3.65901 9.65901C4.08097 9.23705 4.65326 9 5.25 9H18.75C19.3467 9 19.919 9.23705 20.341 9.65901C20.7629 10.081 21 10.6533 21 11.25V18.75"
                      stroke="black"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path d="M9.0625 14.8438L11.8125 17.5938L15.9375 11.4062" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="ml-1">
                    <h1 class="font-bold text-sm">Free cancellation</h1>
                    <p class="text-sm font-normal">Cancel up to 24 hours in advance for a full refund</p>
                  </div>
                </div>
                <div class="flex gap-3 text-gray-700">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="19" viewBox="0 0 22 19" fill="none">
                    <path
                      d="M10.5391 14.4062H5.89844H4.35156C2.50055 14.4062 1 12.9057 1 11.0547V7.70312V4.35156C1 2.50055 2.50055 1 4.35156 1H5.89844H10.7969H15.6953H17.2422C19.0932 1 20.5938 2.50055 20.5938 4.35156V7.70312V8.73438M1 5.64062H20.3359M4.60938 10.2812H7.44531M16.9844 14.0196L18.1445 12.8594"
                      stroke="black"
                      stroke-width="1.5"
                      stroke-linecap="round" />
                    <path
                      d="M16.9844 17.5C18.9778 17.5 20.5938 15.884 20.5938 13.8906C20.5938 11.8972 18.9778 10.2812 16.9844 10.2812C14.991 10.2812 13.375 11.8972 13.375 13.8906C13.375 15.884 14.991 17.5 16.9844 17.5Z"
                      stroke="black"
                      stroke-width="1.5" />
                  </svg>
                  <div class="ml-1">
                    <h1 class="font-bold text-sm">Book now with 50% deposit</h1>
                    <p class="text-sm font-normal">Keep your travel plans flexible book your spot and pay nothing today.</p>
                  </div>
                </div>
                <div class="flex gap-3 text-gray-700">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path
                      d="M12 6V12H16.5M21 12C21 13.1819 20.7672 14.3522 20.3149 15.4442C19.8626 16.5361 19.1997 17.5282 18.364 18.364C17.5282 19.1997 16.5361 19.8626 15.4442 20.3149C14.3522 20.7672 13.1819 21 12 21C10.8181 21 9.64778 20.7672 8.55585 20.3149C7.46392 19.8626 6.47177 19.1997 5.63604 18.364C4.80031 17.5282 4.13738 16.5361 3.68508 15.4442C3.23279 14.3522 3 13.1819 3 12C3 9.61305 3.94821 7.32387 5.63604 5.63604C7.32387 3.94821 9.61305 3 12 3C14.3869 3 16.6761 3.94821 18.364 5.63604C20.0518 7.32387 21 9.61305 21 12Z"
                      stroke="black"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                  <div class="ml-1">
                    <h1 class="font-bold text-sm">Duration 10 - 11 hours</h1>
                    <p class="text-sm font-normal">Check availability to see starting times</p>
                  </div>
                </div>
                <div class="flex gap-3 text-gray-700">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path
                      d="M3 8.68907C3 7.82507 3.933 7.28307 4.683 7.71207L11.791 11.7731C11.9633 11.8714 12.1065 12.0136 12.2061 12.1852C12.3058 12.3568 12.3582 12.5517 12.3582 12.7501C12.3582 12.9485 12.3058 13.1434 12.2061 13.3149C12.1065 13.4865 11.9633 13.6287 11.791 13.7271L4.683 17.7881C4.5119 17.8858 4.31812 17.9369 4.12107 17.9362C3.92402 17.9355 3.73061 17.8831 3.5602 17.7842C3.38978 17.6852 3.24833 17.5433 3.15002 17.3725C3.05171 17.2017 2.99998 17.0081 3 16.8111V8.68907ZM12.75 8.68907C12.75 7.82507 13.683 7.28307 14.433 7.71207L21.541 11.7731C21.7133 11.8714 21.8565 12.0136 21.9562 12.1852C22.0558 12.3568 22.1082 12.5517 22.1082 12.7501C22.1082 12.9485 22.0558 13.1434 21.9562 13.3149C21.8565 13.4865 21.7133 13.6287 21.541 13.7271L14.433 17.7881C14.2619 17.8858 14.0681 17.9369 13.8711 17.9362C13.674 17.9355 13.4806 17.8831 13.3102 17.7842C13.1398 17.6852 12.9983 17.5433 12.9 17.3725C12.8017 17.2017 12.75 17.0081 12.75 16.8111V8.68907Z"
                      stroke="black"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                  <div class="ml-1">
                    <h1 class="font-bold text-sm">Skip the ticket line</h1>
                    <p class="text-sm font-normal">Save time by avoiding long queues at the entrance.</p>
                  </div>
                </div>
                <div class="flex gap-3 text-gray-700">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="22" viewBox="0 0 30 22" fill="none">
                    <path
                      d="M18.7468 0.918457L18.4006 1.76723M18.4006 1.76723L20.1034 2.00444C21.3847 2.18324 22.5554 2.82042 23.4039 3.80081L23.4516 3.85591C24.283 4.81631 25.4242 5.44787 26.6768 5.64074L28.578 5.93314C27.562 7.82179 26.7504 9.81411 26.1575 11.8751L24.2541 11.5818C23.0013 11.3892 21.8597 10.7577 21.028 9.7973L20.9804 9.74221C20.1319 8.76182 18.9612 8.12464 17.6799 7.94584L15.9771 7.70862M18.4006 1.76723L15.9771 7.70862M14.5922 11.1037L15.9771 7.70862"
                      stroke="black"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path
                      d="M12.75 5C12.75 5.99456 12.3549 6.94839 11.6516 7.65165C10.9484 8.35491 9.99454 8.75 8.99998 8.75C8.00541 8.75 7.05159 8.35491 6.34833 7.65165C5.64506 6.94839 5.24998 5.99456 5.24998 5C5.24998 4.00544 5.64506 3.05161 6.34833 2.34835C7.05159 1.64509 8.00541 1.25 8.99998 1.25C9.99454 1.25 10.9484 1.64509 11.6516 2.34835C12.3549 3.05161 12.75 4.00544 12.75 5ZM1.50098 19.118C1.53311 17.1504 2.33731 15.2742 3.74015 13.894C5.14299 12.5139 7.03206 11.7405 8.99998 11.7405C10.9679 11.7405 12.857 12.5139 14.2598 13.894C15.6626 15.2742 16.4668 17.1504 16.499 19.118C14.1464 20.1968 11.5881 20.7535 8.99998 20.75C6.32398 20.75 3.78398 20.166 1.50098 19.118Z"
                      stroke="black"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                  <div class="">
                    <h1 class="font-bold text-sm">Live tour guide</h1>
                    <p class="text-sm font-normal">Enlish, Indonesia</p>
                  </div>
                </div>

                <div class="flex gap-3 text-gray-700">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path
                      d="M15 19.128C15.853 19.3757 16.7368 19.5009 17.625 19.5C19.0534 19.5021 20.4633 19.1764 21.746 18.548C21.7839 17.6517 21.5286 16.7675 21.0188 16.0293C20.509 15.2912 19.7724 14.7394 18.9207 14.4575C18.0691 14.1757 17.1487 14.1791 16.2992 14.4674C15.4497 14.7557 14.7173 15.313 14.213 16.055M15 19.128V19.125C15 18.012 14.714 16.965 14.213 16.055M15 19.128V19.234C13.0755 20.3931 10.8706 21.0038 8.62402 21C6.29302 21 4.11202 20.355 2.25002 19.234L2.24902 19.125C2.24826 17.7095 2.71864 16.3339 3.58601 15.2153C4.45338 14.0966 5.6684 13.2984 7.03951 12.9466C8.41063 12.5948 9.85985 12.7093 11.1587 13.2721C12.4575 13.8349 13.5321 14.814 14.213 16.055M12 6.375C12 7.27011 11.6444 8.12855 11.0115 8.76149C10.3786 9.39442 9.52013 9.75 8.62502 9.75C7.72992 9.75 6.87147 9.39442 6.23854 8.76149C5.6056 8.12855 5.25002 7.27011 5.25002 6.375C5.25002 5.47989 5.6056 4.62145 6.23854 3.98851C6.87147 3.35558 7.72992 3 8.62502 3C9.52013 3 10.3786 3.35558 11.0115 3.98851C11.6444 4.62145 12 5.47989 12 6.375ZM20.25 8.625C20.25 9.32119 19.9735 9.98887 19.4812 10.4812C18.9889 10.9734 18.3212 11.25 17.625 11.25C16.9288 11.25 16.2612 10.9734 15.7689 10.4812C15.2766 9.98887 15 9.32119 15 8.625C15 7.92881 15.2766 7.26113 15.7689 6.76884C16.2612 6.27656 16.9288 6 17.625 6C18.3212 6 18.9889 6.27656 19.4812 6.76884C19.9735 7.26113 20.25 7.92881 20.25 8.625Z"
                      stroke="black"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                  <div class="ml-1">
                    <h1 class="font-bold text-sm">Small group</h1>
                    <p class="text-sm font-normal">Limited to 14 participants</p>
                  </div>
                </div>
              </div>

              <div class="flex flex-wrap gap-3">
                <span class="px-4 py-2 rounded-full bg-amber-100 text-amber-800 font-semibold text-sm border border-amber-200"> Best Seller </span>
                <span class="px-4 py-2 rounded-full bg-blue-100 text-blue-800 font-semibold text-sm border border-blue-200"> Promo </span>
              </div>
            </div>

            <!-- Additional Info -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
              <h3 class="text-xl font-bold mb-4 text-gray-900">Informasi Tambahan</h3>
              <div class="space-y-3 text-gray-700">
                <div class="flex items-start gap-3">
                  <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                  <span>Meeting point: Hotel/Alamat sesuai request</span>
                </div>
                <div class="flex items-start gap-3">
                  <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  <span>Jam mulai: 04.00 pagi</span>
                </div>
                <div class="flex items-start gap-3">
                  <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  <span>Include: Transport, tiket, guide, snack</span>
                </div>
                <div class="flex items-start gap-3">
                  <svg class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                  <span>Exclude: Makan siang, pengeluaran pribadi</span>
                </div>
                <div class="flex items-start gap-3">
                  <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  <span>Pembatalan gratis hingga H-2</span>
                </div>
              </div>
            </div>

            <div class="flex-col">
              <!-- Main Booking Section -->
              <div class="bg-secondary rounded-2xl p-6 w-full max-w-4xl shadow-xl">
                <h2 class="text-white text-2xl font-bold mb-4">Select participants and date</h2>

                <!-- Booking Form -->
                <div class="flex flex-col gap-3">
                  <!-- Input Row: Adults, Children, Date -->
                  <div class="flex flex-col md:flex-row gap-3">
                    <!-- Adults Counter -->
                    <div class="bg-white rounded-xl p-3 flex items-center justify-between min-h-[60px] flex-1">
                      <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 25" fill="none">
                          <g clip-path="url(#clip0_adults)">
                            <path
                              d="M15 19.628C15.853 19.8757 16.7368 20.0009 17.625 20C19.0534 20.0021 20.4633 19.6764 21.746 19.048C21.7839 18.1517 21.5286 17.2675 21.0188 16.5293C20.509 15.7912 19.7724 15.2394 18.9207 14.9575C18.0691 14.6757 17.1487 14.6791 16.2992 14.9674C15.4497 15.2557 14.7173 15.813 14.213 16.555M15 19.628V19.625C15 18.512 14.714 17.465 14.213 16.555M15 19.628V19.734C13.0755 20.8931 10.8706 21.5038 8.62402 21.5C6.29302 21.5 4.11202 20.855 2.25002 19.734L2.24902 19.625C2.24826 18.2095 2.71864 16.8339 3.58601 15.7153C4.45338 14.5966 5.6684 13.7984 7.03951 13.4466C8.41063 13.0948 9.85985 13.2093 11.1587 13.7721C12.4575 14.3349 13.5321 15.314 14.213 16.555M12 6.875C12 7.77011 11.6444 8.62855 11.0115 9.26149C10.3786 9.89442 9.52013 10.25 8.62502 10.25C7.72992 10.25 6.87147 9.89442 6.23854 9.26149C5.6056 8.62855 5.25002 7.77011 5.25002 6.875C5.25002 5.97989 5.6056 5.12145 6.23854 4.48851C6.87147 3.85558 7.72992 3.5 8.62502 3.5C9.52013 3.5 10.3786 3.85558 11.0115 4.48851C11.6444 5.12145 12 5.97989 12 6.875ZM20.25 9.125C20.25 9.82119 19.9735 10.4889 19.4812 10.9812C18.9889 11.4734 18.3212 11.75 17.625 11.75C16.9288 11.75 16.2612 11.4734 15.7689 10.9812C15.2766 10.4889 15 9.82119 15 9.125C15 8.42881 15.2766 7.76113 15.7689 7.26884C16.2612 6.77656 16.9288 6.5 17.625 6.5C18.3212 6.5 18.9889 6.77656 19.4812 7.26884C19.9735 7.76113 20.25 8.42881 20.25 9.125Z"
                              stroke="#4B5563"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_adults">
                              <rect width="24" height="24" fill="white" transform="translate(0 0.5)" />
                            </clipPath>
                          </defs>
                        </svg>
                        <span class="font-medium text-secondary text-sm">Adults</span>
                      </div>
                      <div class="flex items-center gap-2">
                        <button onclick="decreaseCount('adults')" class="w-6 h-6 rounded-full border border-secondary-300 flex items-center justify-center hover:bg-gray-50 transition-colors">
                          <svg class="w-3 h-3 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                          </svg>
                        </button>
                        <span id="adultsCount" class="font-semibold text-sm text-secondary w-4 text-center">0</span>
                        <button onclick="increaseCount('adults')" class="w-6 h-6 rounded-full border border-secondary-300 flex items-center justify-center hover:bg-gray-50 transition-colors">
                          <svg class="w-3 h-3 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                          </svg>
                        </button>
                      </div>
                    </div>

                    <!-- Children Counter -->
                    <div class="bg-white rounded-xl p-3 flex items-center justify-between min-h-[60px] flex-1">
                      <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#4B5563" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z" />
                          <path d="M16 18v2a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2c0-1.1.9-2 2-2h8c1.1 0 2 .9 2 2z" />
                          <path d="M18 8a3 3 0 1 1 0 6" />
                          <path d="M22 18v2a2 2 0 0 1-2 2h-1" />
                        </svg>
                        <span class="font-medium text-secondary text-sm">Children</span>
                      </div>
                      <div class="flex items-center gap-2">
                        <button onclick="decreaseCount('children')" class="w-6 h-6 rounded-full border border-secondary-300 flex items-center justify-center hover:bg-gray-50 transition-colors">
                          <svg class="w-3 h-3 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                          </svg>
                        </button>
                        <span id="childrenCount" class="font-semibold text-sm text-secondary w-4 text-center">0</span>
                        <button onclick="increaseCount('children')" class="w-6 h-6 rounded-full border border-secondary-300 flex items-center justify-center hover:bg-gray-50 transition-colors">
                          <svg class="w-3 h-3 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                          </svg>
                        </button>
                      </div>
                    </div>

                    <!-- Date Selector -->
                    <div class="bg-white rounded-xl p-3 min-h-[60px] flex items-center flex-1">
                      <div class="flex items-center gap-2 flex-1 relative">
                        <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <input type="text" id="dateInput" placeholder="Select date" class="flex-1 border-0 outline-none text-sm font-medium text-secondary bg-transparent cursor-pointer pr-8" readonly />
                        <svg class="w-4 h-4 text-secondary absolute right-2 top-1/2 -translate-y-1/2 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                      </div>
                    </div>
                  </div>

                  <!-- Button Row: Check Availability -->
                  <div class="mt-3">
                    <button onclick="checkAvailability()" class="bg-primary text-secondary font-semibold py-3 px-4 rounded-xl transition-all duration-300 hover:bg-yellow-500 text-sm w-full min-h-[60px]">Check Availability</button>
                  </div>
                </div>

                <!-- Total Price Display (Mobile) -->
                <div id="totalPriceMobile" class="mt-4 bg-white rounded-xl p-3 hidden md:hidden">
                  <div class="flex justify-between items-center">
                    <div>
                      <div class="text-sm text-secondary">Total for <span id="totalPeopleMobile">2</span> people</div>
                    </div>
                    <div class="text-lg font-bold text-secondary" id="priceAmountMobile">Rp 0</div>
                  </div>
                </div>
              </div>

              <!-- Availability Result Section -->
              <div id="availabilityResult" class="mt-10 w-full max-w-4xl mx-auto hidden">
                <div class="bg-white rounded-2xl border-2 border-yellow-300 shadow-lg overflow-hidden">
                  <!-- Tour Header -->
                  <div class="p-4 border-b">
                    <div class="flex justify-between items-start">
                      <h3 class="text-lg font-semibold text-secondary mb-2">Day Tour with Guides at Temple and Hotel Pickup</h3>
                      <button onclick="toggleDetails()" class="p-2 text-secondary hover:bg-gray-100 rounded-full transition-colors">
                        <svg id="toggleIcon" class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                      </button>
                    </div>
                    <p class="text-sm text-gray-600 mb-3">
                      This option sharing tour includes all prambanan and borobudur guides, excluding temple tickets IDR 950,000 per person cash only, the driver will take care of all your tickets, The driver will collect your ticket money
                      during the trip
                    </p>

                    <!-- Tour Details -->
                    <div class="flex flex-wrap gap-4 text-sm">
                      <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                          <path
                            d="M10 3.78711V9.78711H14.5M19 9.78711C19 10.969 18.7672 12.1393 18.3149 13.2313C17.8626 14.3232 17.1997 15.3153 16.364 16.1511C15.5282 16.9868 14.5361 17.6497 13.4442 18.102C12.3522 18.5543 11.1819 18.7871 10 18.7871C8.8181 18.7871 7.64778 18.5543 6.55585 18.102C5.46392 17.6497 4.47177 16.9868 3.63604 16.1511C2.80031 15.3153 2.13738 14.3232 1.68508 13.2313C1.23279 12.1393 1 10.969 1 9.78711C1 7.40016 1.94821 5.11098 3.63604 3.42315C5.32387 1.73532 7.61305 0.787109 10 0.787109C12.3869 0.787109 14.6761 1.73532 16.364 3.42315C18.0518 5.11098 19 7.40016 19 9.78711Z"
                            stroke="black"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        </svg>
                        <span class="text-secondary">11 hours</span>
                      </div>
                      <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="18" viewBox="0 0 30 22" fill="none">
                          <path
                            d="M18.7468 0.918457L18.4006 1.76723M18.4006 1.76723L20.1034 2.00444C21.3847 2.18324 22.5554 2.82042 23.4039 3.80081L23.4516 3.85591C24.283 4.81631 25.4242 5.44787 26.6768 5.64074L28.578 5.93314C27.562 7.82179 26.7504 9.81411 26.1575 11.8751L24.2541 11.5818C23.0013 11.3892 21.8597 10.7577 21.028 9.7973L20.9804 9.74221C20.1319 8.76182 18.9612 8.12464 17.6799 7.94584L15.9771 7.70862M18.4006 1.76723L15.9771 7.70862M14.5922 11.1037L15.9771 7.70862"
                            stroke="black"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                          <path
                            d="M12.75 5C12.75 5.99456 12.3549 6.94839 11.6516 7.65165C10.9484 8.35491 9.99454 8.75 8.99998 8.75C8.00541 8.75 7.05159 8.35491 6.34833 7.65165C5.64506 6.94839 5.24998 5.99456 5.24998 5C5.24998 4.00544 5.64506 3.05161 6.34833 2.34835C7.05159 1.64509 8.00541 1.25 8.99998 1.25C9.99454 1.25 10.9484 1.64509 11.6516 2.34835C12.3549 3.05161 12.75 4.00544 12.75 5ZM1.50098 19.118C1.53311 17.1504 2.33731 15.2742 3.74015 13.894C5.14299 12.5139 7.03206 11.7405 8.99998 11.7405C10.9679 11.7405 12.857 12.5139 14.2598 13.894C15.6626 15.2742 16.4668 17.1504 16.499 19.118C14.1464 20.1968 11.5881 20.7535 8.99998 20.75C6.32398 20.75 3.78398 20.166 1.50098 19.118Z"
                            stroke="black"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        </svg>
                        <span class="text-secondary">Guide: English</span>
                      </div>
                    </div>

                    <!-- Pickup Location -->
                    <div class="mt-3">
                      <button class="text-secondary underline text-sm flex items-center gap-2 hover:text-gray-800 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="24" viewBox="0 0 17 22" fill="none">
                          <path
                            d="M16 9.125C16 16.267 8.5 20.375 8.5 20.375C8.5 20.375 1 16.267 1 9.125C1 7.13588 1.79018 5.22822 3.1967 3.8217C4.60322 2.41518 6.51088 1.625 8.5 1.625C10.4891 1.625 12.3968 2.41518 13.8033 3.8217C15.2098 5.22822 16 7.13588 16 9.125Z"
                            stroke="#202020"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                          <path
                            d="M5.99947 15V6.27273H9.27219C9.94265 6.27273 10.5051 6.39773 10.9597 6.64773C11.4171 6.89773 11.7623 7.24148 11.9952 7.67898C12.231 8.11364 12.3489 8.60795 12.3489 9.16193C12.3489 9.72159 12.231 10.2187 11.9952 10.6534C11.7594 11.0881 11.4114 11.4304 10.9512 11.6804C10.4909 11.9276 9.92418 12.0511 9.25089 12.0511H7.08185V10.7514H9.03782C9.42987 10.7514 9.75089 10.6832 10.0009 10.5469C10.2509 10.4105 10.4355 10.223 10.5549 9.98438C10.677 9.74574 10.7381 9.47159 10.7381 9.16193C10.7381 8.85227 10.677 8.57955 10.5549 8.34375C10.4355 8.10795 10.2495 7.92472 9.99663 7.79403C9.74663 7.66051 9.42418 7.59375 9.0293 7.59375H7.58043V15H5.99947Z"
                            fill="#202020" />
                        </svg>
                        View pickup area
                      </button>
                      <p class="text-xs text-gray-500 mt-1">Check to see if your accommodation is within the eligible area for pickup.</p>
                    </div>
                  </div>

                  <!-- Expandable Details Section -->
                  <div id="detailsSection" class="hidden">
                    <div class="p-4 bg-gray-50">
                      <h4 class="font-semibold text-secondary mb-2">Starting time</h4>
                      <div class="mb-4">
                        <div class="text-secondary mb-2" id="selectedDateDisplay">Wednesday, August 20, 2025</div>
                        <div class="text-secondary font-semibold">8:00 AM</div>
                      </div>
                      <div class="text-sm font-medium text-secondary flex items-center gap-2 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 15 15" fill="none">
                          <path
                            d="M6.84375 6.84375L6.87279 6.82958C6.96362 6.78421 7.06555 6.76581 7.16651 6.77657C7.26747 6.78733 7.36324 6.8268 7.44246 6.8903C7.52169 6.9538 7.58106 7.03867 7.61354 7.13487C7.64603 7.23106 7.65026 7.33455 7.62575 7.43308L7.12425 9.44192C7.09956 9.5405 7.10366 9.64409 7.13607 9.7404C7.16848 9.83672 7.22784 9.92172 7.3071 9.98532C7.38636 10.0489 7.4822 10.0885 7.58325 10.0992C7.6843 10.11 7.78632 10.0916 7.87721 10.0461L7.90625 10.0312M13.75 7.375C13.75 8.21218 13.5851 9.04116 13.2647 9.81461C12.9444 10.5881 12.4748 11.2908 11.8828 11.8828C11.2908 12.4748 10.5881 12.9444 9.81461 13.2647C9.04116 13.5851 8.21218 13.75 7.375 13.75C6.53782 13.75 5.70884 13.5851 4.93539 13.2647C4.16194 12.9444 3.45917 12.4748 2.86719 11.8828C2.27522 11.2908 1.80564 10.5881 1.48527 9.81461C1.16489 9.04116 1 8.21218 1 7.375C1 5.68424 1.67165 4.06274 2.86719 2.86719C4.06274 1.67165 5.68424 1 7.375 1C9.06576 1 10.6873 1.67165 11.8828 2.86719C13.0783 4.06274 13.75 5.68424 13.75 7.375ZM7.375 4.71875H7.38067V4.72442H7.375V4.71875Z"
                            stroke="#202020"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        </svg>
                        Only 18 hour left to book
                      </div>
                      <div class="text-sm font-medium text-secondary flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 15 15" fill="none">
                          <path
                            d="M3.65625 1V2.59375M11.0937 1V2.59375M1 12.1562V4.1875C1 3.76481 1.16791 3.35943 1.4668 3.06055C1.76568 2.76166 2.17106 2.59375 2.59375 2.59375H12.1562C12.5789 2.59375 12.9843 2.76166 13.2832 3.06055C13.5821 3.35943 13.75 3.76481 13.75 4.1875V12.1562M1 12.1562C1 12.5789 1.16791 12.9843 1.4668 13.2832C1.76568 13.5821 2.17106 13.75 2.59375 13.75H12.1562C12.5789 13.75 12.9843 13.5821 13.2832 13.2832C13.5821 12.9843 13.75 12.5789 13.75 12.1562M1 12.1562V6.84375C1 6.42106 1.16791 6.01568 1.4668 5.7168C1.76568 5.41791 2.17106 5.25 2.59375 5.25H12.1562C12.5789 5.25 12.9843 5.41791 13.2832 5.7168C13.5821 6.01568 13.75 6.42106 13.75 6.84375V12.1562"
                            stroke="#202020"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                          <path d="M5.5 9.375L7 10.875L9.25 7.5" stroke="#202020" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Cancel before 8:00 AM on August 20 for a full refund
                      </div>
                    </div>
                  </div>

                  <!-- Price and Continue Section -->
                  <div class="bg-secondary p-4 flex flex-col md:flex-row justify-between items-center gap-3">
                    <div class="text-left">
                      <div class="text-primary text-2xl font-bold" id="finalPrice">$4792</div>
                      <div class="text-white text-sm" id="participantCount">1 adult</div>
                      <div class="text-gray-300 text-xs">All taxes and fees included</div>
                    </div>
                    <button onclick="continuePurchase()" class="bg-primary text-secondary font-semibold px-8 py-3 rounded-xl transition-all duration-300 hover:bg-yellow-500 text-sm min-w-[120px]">Continue</button>
                  </div>
                </div>
              </div>

              <!-- Flatpickr JS -->
              <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js"></script>

              <script>
                // App State
                const state = {
                  adultsCount: 0,
                  childrenCount: 0,
                  selectedDate: null,
                  priceData: {
                    weekday: 250000,
                    weekend: 350000,
                    holiday: 450000,
                  },
                };

                // Initialize Flatpickr
                const fp = flatpickr("#dateInput", {
                  minDate: "today",
                  dateFormat: "d F Y",
                  locale: {
                    firstDayOfWeek: 1,
                  },
                  onChange: function (selectedDates, dateStr, instance) {
                    if (selectedDates.length > 0) {
                      state.selectedDate = selectedDates[0];
                      updateTotalPrice();
                    }
                  },
                  onDayCreate: function (dObj, dStr, fp, dayElem) {
                    const date = dayElem.dateObj;
                    if (date >= new Date().setHours(0, 0, 0, 0)) {
                      const dayType = getDayType(date);
                      const price = state.priceData[dayType];
                      const priceEl = document.createElement("div");
                      priceEl.className = "text-xs font-bold text-orange-600 mt-1";
                      priceEl.textContent = `${price / 1000}k`;
                      dayElem.appendChild(priceEl);
                    }
                  },
                });

                // Counter Functions
                function increaseCount(type) {
                  if (type === "adults") {
                    state.adultsCount++;
                    document.getElementById("adultsCount").textContent = state.adultsCount;
                  } else if (type === "children") {
                    state.childrenCount++;
                    document.getElementById("childrenCount").textContent = state.childrenCount;
                  }
                  updateTotalPrice();
                }

                function decreaseCount(type) {
                  if (type === "adults" && state.adultsCount > 1) {
                    state.adultsCount--;
                    document.getElementById("adultsCount").textContent = state.adultsCount;
                  } else if (type === "children" && state.childrenCount > 0) {
                    state.childrenCount--;
                    document.getElementById("childrenCount").textContent = state.childrenCount;
                  }
                  updateTotalPrice();
                }

                // Utility Functions
                function getDayType(date) {
                  const day = date.getDay();
                  const holidays = ["2024-12-25", "2025-01-01", "2025-08-17"];
                  const dateString = date.toISOString().split("T")[0];

                  if (holidays.includes(dateString)) {
                    return "holiday";
                  } else if (day === 0 || day === 6) {
                    return "weekend";
                  } else {
                    return "weekday";
                  }
                }

                function formatPrice(price) {
                  return `Rp ${price.toLocaleString("id-ID")}`;
                }

                function formatPriceUSD(price) {
                  // Convert IDR to USD (approximate rate 1 USD = 15000 IDR)
                  const usdPrice = Math.round(price / 15000);
                  return `$${usdPrice}`;
                }

                function updatePriceDisplay() {
                  if (state.selectedDate) {
                    const dayType = getDayType(state.selectedDate);
                    const price = state.priceData[dayType];
                    document.getElementById("selectedPrice").textContent = formatPrice(price);
                    document.getElementById("selectedPrice").classList.remove("hidden");
                  } else {
                    document.getElementById("selectedPrice").classList.add("hidden");
                  }
                }

                function updateTotalPrice() {
                  const totalPeople = state.adultsCount + state.childrenCount;

                  if (document.getElementById("totalPeople")) {
                    document.getElementById("totalPeople").textContent = totalPeople;
                  }
                  document.getElementById("totalPeopleMobile").textContent = totalPeople;

                  if (state.selectedDate) {
                    const dayType = getDayType(state.selectedDate);
                    const basePrice = state.priceData[dayType];
                    const totalPrice = state.adultsCount * basePrice + state.childrenCount * basePrice * 0.7;

                    if (document.getElementById("priceAmount")) {
                      document.getElementById("priceAmount").textContent = formatPrice(totalPrice);
                    }
                    document.getElementById("priceAmountMobile").textContent = formatPrice(totalPrice);
                  }
                }

                function checkAvailability() {
                  if (state.adultsCount < 1) {
                    alert("Minimal 1 adult harus dipilih!");
                    return;
                  }
                  if (!state.selectedDate) {
                    alert("Please select a date first!");
                    return;
                  }

                  const dayType = getDayType(state.selectedDate);
                  const basePrice = state.priceData[dayType];
                  const totalPrice = state.adultsCount * basePrice + state.childrenCount * basePrice * 0.7;

                  // Update availability result display
                  updateAvailabilityDisplay(totalPrice);

                  // Show availability result with animation
                  const resultElement = document.getElementById("availabilityResult");
                  resultElement.classList.remove("hidden");
                  resultElement.classList.add("slide-up", "bounce-in");

                  // Scroll to result smoothly
                  setTimeout(() => {
                    resultElement.scrollIntoView({
                      behavior: "smooth",
                      block: "nearest",
                    });
                  }, 100);
                }

                function updateAvailabilityDisplay(totalPrice) {
                  // Update selected date display
                  const options = { weekday: "long", year: "numeric", month: "long", day: "numeric" };
                  const formattedDate = state.selectedDate.toLocaleDateString("en-US", options);
                  document.getElementById("selectedDateDisplay").textContent = formattedDate;

                  // Update price display
                  document.getElementById("finalPrice").textContent = formatPriceUSD(totalPrice);

                  // Update participant count
                  let participantText = "";
                  if (state.adultsCount > 0) {
                    participantText += `${state.adultsCount} adult${state.adultsCount > 1 ? "s" : ""}`;
                  }
                  if (state.childrenCount > 0) {
                    if (participantText) participantText += ", ";
                    participantText += `${state.childrenCount} child${state.childrenCount > 1 ? "ren" : ""}`;
                  }
                  document.getElementById("participantCount").textContent = participantText;
                }

                function toggleDetails() {
                  const detailsSection = document.getElementById("detailsSection");
                  const toggleIcon = document.getElementById("toggleIcon");

                  if (detailsSection.classList.contains("hidden")) {
                    detailsSection.classList.remove("hidden");
                    detailsSection.classList.add("slide-up");
                    toggleIcon.classList.add("rotate-180");
                  } else {
                    detailsSection.classList.add("slide-down");
                    toggleIcon.classList.remove("rotate-180");
                    setTimeout(() => {
                      detailsSection.classList.add("hidden");
                      detailsSection.classList.remove("slide-down");
                    }, 300);
                  }
                }

                function continuePurchase() {
                  const dayType = getDayType(state.selectedDate);
                  const basePrice = state.priceData[dayType];
                  const totalPrice = state.adultsCount * basePrice + state.childrenCount * basePrice * 0.7;

                  const options = { year: "numeric", month: "long", day: "numeric" };
                  const formattedDate = state.selectedDate.toLocaleDateString("id-ID", options);

                  alert(`Proceeding to payment...
        
                  Date: ${formattedDate}
                  Adults: ${state.adultsCount}
                  Children: ${state.childrenCount}
                  Total Price: ${formatPrice(totalPrice)}

                  Thank you for your booking!`);
                }

                // Initialize
                updateTotalPrice();
              </script>
            </div>

            <!-- section maps and itenenary -->
            <div class="">
              <div class="rounded-2xl overflow-hidden">
                <div class="mb-6">
                  <h2 class="text-2xl font-bold text-gray-900 m-6">Itinerary</h2>
                </div>
                <div class="flex flex-col lg:flex-row">
                  <!-- Left Panel - Itinerary -->
                  <div class="w-full lg:w-2/5 px-6">
                    <!-- Timeline -->
                    <div class="relative">
                      <!-- Pickup Locations -->
                      <div class="flex items-start mb-6">
                        <div class="flex flex-col items-center mr-4">
                          <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center text-white font-bold text-sm shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none">
                              <path
                                d="M20 11C20 18.142 12.5 22.25 12.5 22.25C12.5 22.25 5 18.142 5 11C5 9.01088 5.79018 7.10322 7.1967 5.6967C8.60322 4.29018 10.5109 3.5 12.5 3.5C14.4891 3.5 16.3968 4.29018 17.8033 5.6967C19.2098 7.10322 20 9.01088 20 11Z"
                                fill="#FFB300"
                                stroke="#202020"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                              <path
                                d="M9.99947 16.5V7.77273H13.2722C13.9426 7.77273 14.5051 7.89773 14.9597 8.14773C15.4171 8.39773 15.7623 8.74148 15.9952 9.17898C16.231 9.61364 16.3489 10.108 16.3489 10.6619C16.3489 11.2216 16.231 11.7187 15.9952 12.1534C15.7594 12.5881 15.4114 12.9304 14.9512 13.1804C14.4909 13.4276 13.9242 13.5511 13.2509 13.5511H11.0819V12.2514H13.0378C13.4299 12.2514 13.7509 12.1832 14.0009 12.0469C14.2509 11.9105 14.4355 11.723 14.5549 11.4844C14.677 11.2457 14.7381 10.9716 14.7381 10.6619C14.7381 10.3523 14.677 10.0795 14.5549 9.84375C14.4355 9.60795 14.2495 9.42472 13.9966 9.29403C13.7466 9.16051 13.4242 9.09375 13.0293 9.09375H11.5804V16.5H9.99947Z"
                                fill="#202020" />
                            </svg>
                          </div>
                          <div class="w-1 h-16 dotted-line mt-2"></div>
                        </div>
                        <div class="flex-1 pt-1">
                          <h3 class="font-semibold text-gray-900 mb-1">3 pickup location options:</h3>
                          <p class="text-sm text-gray-600">Central Java, Special Region of Yogyakarta,</p>
                          <button class="text-amber-600 text-sm font-medium hover:underline">See more</button>
                        </div>
                      </div>

                      <!-- Car Journey 1 -->
                      <div class="flex items-start mb-6">
                        <div class="flex flex-col items-center mr-4">
                          <div class="w-10 h-10 border-2 border-secondary rounded-full flex items-center justify-center text-white text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                              <path
                                d="M8.78418 3.5H16.2158C17.591 3.5 18.817 4.29825 19.3613 5.50488L19.4609 5.75195L20.9053 9.79004L20.9805 10.001L21.1875 10.085C21.962 10.3989 22.5 11.1431 22.5 12V19.7139C22.5 20.1392 22.1471 20.5 21.6875 20.5H20.375C19.9154 20.5 19.5625 20.1392 19.5625 19.7139V17.9287H5.4375V19.7139C5.4375 20.1392 5.0846 20.5 4.625 20.5H3.3125C2.8529 20.5 2.5 20.1392 2.5 19.7139V12C2.5 11.1431 3.03804 10.3989 3.8125 10.085L4.01953 10.001L4.09473 9.79004L5.53906 5.75195C6.02005 4.40842 7.31721 3.5 8.78418 3.5ZM5.9375 12.1426C4.94515 12.1426 4.125 12.9317 4.125 13.9287C4.12508 14.9256 4.9452 15.7139 5.9375 15.7139C6.9298 15.7139 7.74992 14.9256 7.75 13.9287C7.75 12.9317 6.92985 12.1426 5.9375 12.1426ZM19.0625 12.1426C18.0701 12.1426 17.25 12.9317 17.25 13.9287C17.2501 14.9256 18.0702 15.7139 19.0625 15.7139C20.0548 15.7139 20.8749 14.9256 20.875 13.9287C20.875 12.9317 20.0549 12.1426 19.0625 12.1426ZM8.78418 5.07129C8.06791 5.07129 7.41843 5.48764 7.12793 6.13086L7.07422 6.2627L6.00391 9.26074L5.76562 9.92871H19.2344L18.9961 9.26074L17.9258 6.2627L17.8721 6.13086C17.5816 5.48764 16.9321 5.07129 16.2158 5.07129H8.78418Z"
                                fill="#202020"
                                stroke="#202020" />
                            </svg>
                          </div>
                          <div class="w-1 h-24 dotted-line mt-2"></div>
                        </div>
                        <div class="flex-1 pt-1">
                          <div class="bg-gray-50 rounded-lg p-3 mb-2">
                            <div class="flex items-center justify-between mb-2">
                              <span class="font-semibold text-gray-900">Car</span>
                              <span class="text-sm text-gray-600">(35 minutes)</span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Prambanan -->
                      <div class="flex items-start mb-6">
                        <div class="flex flex-col items-center mr-4">
                          <div class="w-10 h-10 border-2 border-secondary rounded-full flex items-center justify-center text-white font-bold text-sm shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 17 21" fill="none">
                              <path
                                d="M16 8.625C16 15.767 8.5 19.875 8.5 19.875C8.5 19.875 1 15.767 1 8.625C1 6.63588 1.79018 4.72822 3.1967 3.3217C4.60322 1.91518 6.51088 1.125 8.5 1.125C10.4891 1.125 12.3968 1.91518 13.8033 3.3217C15.2098 4.72822 16 6.63588 16 8.625Z"
                                fill="#FFB300"
                                stroke="black"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                              <path
                                d="M11.5 8.625C11.5 9.42065 11.1839 10.1837 10.6213 10.7463C10.0587 11.3089 9.29565 11.625 8.5 11.625C7.70435 11.625 6.94129 11.3089 6.37868 10.7463C5.81607 10.1837 5.5 9.42065 5.5 8.625C5.5 7.82935 5.81607 7.06629 6.37868 6.50368C6.94129 5.94107 7.70435 5.625 8.5 5.625C9.29565 5.625 10.0587 5.94107 10.6213 6.50368C11.1839 7.06629 11.5 7.82935 11.5 8.625Z"
                                stroke="black"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                            </svg>
                          </div>
                          <div class="w-1 h-24 dotted-line mt-2"></div>
                        </div>
                        <div class="flex-1 pt-1">
                          <h3 class="font-bold text-gray-900 mb-2">Prambanan</h3>
                          <p class="text-sm text-gray-600 mb-2">Break time, Photo stop, Visit, Guided tour, Free time, Sightseeing, Walk</p>
                          <p class="text-sm font-medium text-secondary font-medium text-sm">(2 hours)</p>
                          <span class="inline-block bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded mt-2">Optional</span>
                        </div>
                      </div>

                      <!-- Car Journey 2 -->
                      <div class="flex items-start mb-6">
                        <div class="flex flex-col items-center mr-4">
                          <div class="w-10 h-10 border-2 border-secondary rounded-full flex items-center justify-center text-white text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                              <path
                                d="M8.78418 3.5H16.2158C17.591 3.5 18.817 4.29825 19.3613 5.50488L19.4609 5.75195L20.9053 9.79004L20.9805 10.001L21.1875 10.085C21.962 10.3989 22.5 11.1431 22.5 12V19.7139C22.5 20.1392 22.1471 20.5 21.6875 20.5H20.375C19.9154 20.5 19.5625 20.1392 19.5625 19.7139V17.9287H5.4375V19.7139C5.4375 20.1392 5.0846 20.5 4.625 20.5H3.3125C2.8529 20.5 2.5 20.1392 2.5 19.7139V12C2.5 11.1431 3.03804 10.3989 3.8125 10.085L4.01953 10.001L4.09473 9.79004L5.53906 5.75195C6.02005 4.40842 7.31721 3.5 8.78418 3.5ZM5.9375 12.1426C4.94515 12.1426 4.125 12.9317 4.125 13.9287C4.12508 14.9256 4.9452 15.7139 5.9375 15.7139C6.9298 15.7139 7.74992 14.9256 7.75 13.9287C7.75 12.9317 6.92985 12.1426 5.9375 12.1426ZM19.0625 12.1426C18.0701 12.1426 17.25 12.9317 17.25 13.9287C17.2501 14.9256 18.0702 15.7139 19.0625 15.7139C20.0548 15.7139 20.8749 14.9256 20.875 13.9287C20.875 12.9317 20.0549 12.1426 19.0625 12.1426ZM8.78418 5.07129C8.06791 5.07129 7.41843 5.48764 7.12793 6.13086L7.07422 6.2627L6.00391 9.26074L5.76562 9.92871H19.2344L18.9961 9.26074L17.9258 6.2627L17.8721 6.13086C17.5816 5.48764 16.9321 5.07129 16.2158 5.07129H8.78418Z"
                                fill="#202020"
                                stroke="#202020" />
                            </svg>
                          </div>
                          <div class="w-1 h-24 dotted-line mt-2"></div>
                        </div>
                        <div class="flex-1 pt-1">
                          <div class="bg-gray-50 rounded-lg p-3 mb-2">
                            <div class="flex items-center justify-between mb-2">
                              <span class="font-semibold text-gray-900">Car</span>
                              <span class="text-sm text-gray-600">(75 minutes)</span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Borobudur -->
                      <div class="flex items-start mb-6">
                        <div class="flex flex-col items-center mr-4">
                          <div class="w-10 h-10 border-2 border-secondary rounded-full flex items-center justify-center text-white font-bold text-sm shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 17 21" fill="none">
                              <path
                                d="M16 8.625C16 15.767 8.5 19.875 8.5 19.875C8.5 19.875 1 15.767 1 8.625C1 6.63588 1.79018 4.72822 3.1967 3.3217C4.60322 1.91518 6.51088 1.125 8.5 1.125C10.4891 1.125 12.3968 1.91518 13.8033 3.3217C15.2098 4.72822 16 6.63588 16 8.625Z"
                                fill="#FFB300"
                                stroke="black"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                              <path
                                d="M11.5 8.625C11.5 9.42065 11.1839 10.1837 10.6213 10.7463C10.0587 11.3089 9.29565 11.625 8.5 11.625C7.70435 11.625 6.94129 11.3089 6.37868 10.7463C5.81607 10.1837 5.5 9.42065 5.5 8.625C5.5 7.82935 5.81607 7.06629 6.37868 6.50368C6.94129 5.94107 7.70435 5.625 8.5 5.625C9.29565 5.625 10.0587 5.94107 10.6213 6.50368C11.1839 7.06629 11.5 7.82935 11.5 8.625Z"
                                stroke="black"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                            </svg>
                          </div>
                          <div class="w-1 h-24 dotted-line mt-2"></div>
                        </div>
                        <div class="flex-1 pt-1">
                          <h3 class="font-bold text-gray-900 mb-2">Borobudur</h3>
                          <p class="text-sm text-gray-600 mb-2">Break time, Photo stop, Visit, Guided tour, Free time, Sightseeing, Walk</p>
                          <p class="text-sm font-medium text-secondary font-medium text-sm">(2 hours)</p>
                          <span class="inline-block bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded mt-2">Optional</span>
                        </div>
                      </div>

                      <!-- Car Journey 3 -->
                      <div class="flex items-start mb-6">
                        <div class="flex flex-col items-center mr-4">
                          <div class="w-10 h-10 border-2 border-secondary rounded-full flex items-center justify-center text-white text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                              <path
                                d="M8.78418 3.5H16.2158C17.591 3.5 18.817 4.29825 19.3613 5.50488L19.4609 5.75195L20.9053 9.79004L20.9805 10.001L21.1875 10.085C21.962 10.3989 22.5 11.1431 22.5 12V19.7139C22.5 20.1392 22.1471 20.5 21.6875 20.5H20.375C19.9154 20.5 19.5625 20.1392 19.5625 19.7139V17.9287H5.4375V19.7139C5.4375 20.1392 5.0846 20.5 4.625 20.5H3.3125C2.8529 20.5 2.5 20.1392 2.5 19.7139V12C2.5 11.1431 3.03804 10.3989 3.8125 10.085L4.01953 10.001L4.09473 9.79004L5.53906 5.75195C6.02005 4.40842 7.31721 3.5 8.78418 3.5ZM5.9375 12.1426C4.94515 12.1426 4.125 12.9317 4.125 13.9287C4.12508 14.9256 4.9452 15.7139 5.9375 15.7139C6.9298 15.7139 7.74992 14.9256 7.75 13.9287C7.75 12.9317 6.92985 12.1426 5.9375 12.1426ZM19.0625 12.1426C18.0701 12.1426 17.25 12.9317 17.25 13.9287C17.2501 14.9256 18.0702 15.7139 19.0625 15.7139C20.0548 15.7139 20.8749 14.9256 20.875 13.9287C20.875 12.9317 20.0549 12.1426 19.0625 12.1426ZM8.78418 5.07129C8.06791 5.07129 7.41843 5.48764 7.12793 6.13086L7.07422 6.2627L6.00391 9.26074L5.76562 9.92871H19.2344L18.9961 9.26074L17.9258 6.2627L17.8721 6.13086C17.5816 5.48764 16.9321 5.07129 16.2158 5.07129H8.78418Z"
                                fill="#202020"
                                stroke="#202020" />
                            </svg>
                          </div>
                          <div class="w-1 h-8 dotted-line mt-2"></div>
                        </div>
                        <div class="flex-1 pt-1">
                          <div class="bg-gray-50 rounded-lg p-3 mb-2">
                            <div class="flex items-center justify-between mb-2">
                              <span class="font-semibold text-gray-900">Car</span>
                              <span class="text-sm text-gray-600">(90 minutes)</span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Drop-off -->
                      <div class="flex items-start">
                        <div class="flex flex-col items-center mr-4">
                          <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center text-white font-bold text-sm shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 25" fill="none">
                              <path
                                d="M19.5 11C19.5 18.142 12 22.25 12 22.25C12 22.25 4.5 18.142 4.5 11C4.5 9.01088 5.29018 7.10322 6.6967 5.6967C8.10322 4.29018 10.0109 3.5 12 3.5C13.9891 3.5 15.8968 4.29018 17.3033 5.6967C18.7098 7.10322 19.5 9.01088 19.5 11Z"
                                fill="#FFB300"
                                stroke="#202020"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                              <path
                                d="M11.8182 16.5H8.8608V7.77273H11.8778C12.7443 7.77273 13.4886 7.94744 14.1108 8.29688C14.7358 8.64347 15.2159 9.14205 15.5511 9.79261C15.8864 10.4432 16.054 11.2216 16.054 12.1278C16.054 13.0369 15.8849 13.8182 15.5469 14.4716C15.2116 15.125 14.7273 15.6264 14.0938 15.9759C13.4631 16.3253 12.7045 16.5 11.8182 16.5ZM10.4418 15.1321H11.7415C12.3494 15.1321 12.8565 15.0213 13.2628 14.7997C13.669 14.5753 13.9744 14.2415 14.179 13.7983C14.3835 13.3523 14.4858 12.7955 14.4858 12.1278C14.4858 11.4602 14.3835 10.9062 14.179 10.4659C13.9744 10.0227 13.6719 9.69176 13.2713 9.47301C12.8736 9.25142 12.3793 9.14062 11.7884 9.14062H10.4418V15.1321Z"
                                fill="#202020" />
                            </svg>
                          </div>
                        </div>
                        <div class="flex-1 pt-1">
                          <h3 class="font-semibold text-gray-900 mb-1">3 drop-off locations:</h3>
                          <p class="text-sm text-gray-600">Central Java, Special Region of Yogyakarta,</p>
                          <button class="text-amber-600 text-sm font-medium hover:underline">See more</button>
                        </div>
                      </div>
                    </div>

                    <!-- Reference Note -->
                    <div class="mt-8 pt-4 border-t border-gray-200">
                      <p class="text-xs text-gray-500 flex items-center">
                        <span class="w-4 h-4 border border-gray-400 rounded-full mr-2 flex items-center justify-center">
                          <span class="text-xs">i</span>
                        </span>
                        For reference only. Itineraries are subject to change.
                      </p>
                    </div>
                  </div>

                  <!-- Right Panel - Map -->
                  <div class="w-full lg:w-3/5">
                    <div class="h-96 lg:h-[400px]">
                      <div id="map" class="relative z-10 w-full h-[400px]"></div>

                      <!-- Map Controls -->
                      <div class="absolute top-10 right-28 z-20">
                        <button id="recenterBtn" class="bg-gray-800 text-white px-4 py-2 rounded-lg shadow-lg hover:bg-gray-700 transition-colors">Re-center</button>
                      </div>

                      <!-- Legend - Below Map -->
                      <div class="mt-5">
                        <div class="flex items-center space-x-5 text-sm">
                          <div class="legend-item flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none">
                              <path
                                d="M19.5 10.5C19.5 17.642 12 21.75 12 21.75C12 21.75 4.5 17.642 4.5 10.5C4.5 8.51088 5.29018 6.60322 6.6967 5.1967C8.10322 3.79018 10.0109 3 12 3C13.9891 3 15.8968 3.79018 17.3033 5.1967C18.7098 6.60322 19.5 8.51088 19.5 10.5Z"
                                fill="#FFB300"
                                stroke="#202020"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                              <path
                                d="M9.8608 16V7.27273H13.1335C13.804 7.27273 14.3665 7.39773 14.821 7.64773C15.2784 7.89773 15.6236 8.24148 15.8565 8.67898C16.0923 9.11364 16.2102 9.60795 16.2102 10.1619C16.2102 10.7216 16.0923 11.2187 15.8565 11.6534C15.6207 12.0881 15.2727 12.4304 14.8125 12.6804C14.3523 12.9276 13.7855 13.0511 13.1122 13.0511H10.9432V11.7514H12.8991C13.2912 11.7514 13.6122 11.6832 13.8622 11.5469C14.1122 11.4105 14.2969 11.223 14.4162 10.9844C14.5384 10.7457 14.5994 10.4716 14.5994 10.1619C14.5994 9.85227 14.5384 9.57955 14.4162 9.34375C14.2969 9.10795 14.1108 8.92472 13.858 8.79403C13.608 8.66051 13.2855 8.59375 12.8906 8.59375H11.4418V16H9.8608Z"
                                fill="#202020" />
                            </svg>
                            <span class="text-secondary font-medium text-sm">Pickup Location</span>
                          </div>
                          <div class="legend-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none">
                              <path
                                d="M19.5 10.5C19.5 17.642 12 21.75 12 21.75C12 21.75 4.5 17.642 4.5 10.5C4.5 8.51088 5.29018 6.60322 6.6967 5.1967C8.10322 3.79018 10.0109 3 12 3C13.9891 3 15.8968 3.79018 17.3033 5.1967C18.7098 6.60322 19.5 8.51088 19.5 10.5Z"
                                fill="#FFB300"
                                stroke="black"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                              <path
                                d="M15 10.5C15 11.2956 14.6839 12.0587 14.1213 12.6213C13.5587 13.1839 12.7956 13.5 12 13.5C11.2044 13.5 10.4413 13.1839 9.87868 12.6213C9.31607 12.0587 9 11.2956 9 10.5C9 9.70435 9.31607 8.94129 9.87868 8.37868C10.4413 7.81607 11.2044 7.5 12 7.5C12.7956 7.5 13.5587 7.81607 14.1213 8.37868C14.6839 8.94129 15 9.70435 15 10.5Z"
                                stroke="black"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                            </svg>
                            <span class="text-secondary font-medium text-sm">Destinations</span>
                          </div>
                          <div class="legend-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none">
                              <path
                                d="M19.5 10.5C19.5 17.642 12 21.75 12 21.75C12 21.75 4.5 17.642 4.5 10.5C4.5 8.51088 5.29018 6.60322 6.6967 5.1967C8.10322 3.79018 10.0109 3 12 3C13.9891 3 15.8968 3.79018 17.3033 5.1967C18.7098 6.60322 19.5 8.51088 19.5 10.5Z"
                                fill="#FFB300"
                                stroke="#202020"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                              <path
                                d="M11.8182 16H8.8608V7.27273H11.8778C12.7443 7.27273 13.4886 7.44744 14.1108 7.79688C14.7358 8.14347 15.2159 8.64205 15.5511 9.29261C15.8864 9.94318 16.054 10.7216 16.054 11.6278C16.054 12.5369 15.8849 13.3182 15.5469 13.9716C15.2116 14.625 14.7273 15.1264 14.0938 15.4759C13.4631 15.8253 12.7045 16 11.8182 16ZM10.4418 14.6321H11.7415C12.3494 14.6321 12.8565 14.5213 13.2628 14.2997C13.669 14.0753 13.9744 13.7415 14.179 13.2983C14.3835 12.8523 14.4858 12.2955 14.4858 11.6278C14.4858 10.9602 14.3835 10.4062 14.179 9.96591C13.9744 9.52273 13.6719 9.19176 13.2713 8.97301C12.8736 8.75142 12.3793 8.64062 11.7884 8.64062H10.4418V14.6321Z"
                                fill="#202020" />
                            </svg>
                            <span class="text-secondary font-medium text-sm">Drop-off Location</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                // Initialize the map
                const map = L.map("map").setView([-7.8014, 110.3644], 10);

                // Add Google Maps-style tiles (satellite/hybrid view)
                L.tileLayer("https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}", {
                  attribution: "© Google",
                  maxZoom: 18,
                }).addTo(map);

                // Define locations
                const locations = {
                  pickupLocations: [
                    { name: "Yogyakarta Center", lat: -7.7956, lng: 110.3695, type: "pickup" },
                    { name: "Adisucipto Airport", lat: -7.7886, lng: 110.4317, type: "pickup" },
                    { name: "Tugu Station", lat: -7.7892, lng: 110.3639, type: "pickup" },
                  ],
                  destinations: [
                    { name: "Prambanan Temple", lat: -7.752, lng: 110.4915, type: "destination", number: 1 },
                    { name: "Borobudur Temple", lat: -7.6079, lng: 110.2038, type: "destination", number: 2 },
                  ],
                  dropoffLocations: [
                    { name: "Yogyakarta Center", lat: -7.7956, lng: 110.3695, type: "dropoff" },
                    { name: "Malioboro Street", lat: -7.7926, lng: 110.3656, type: "dropoff" },
                    { name: "Kraton Yogyakarta", lat: -7.8053, lng: 110.3642, type: "dropoff" },
                  ],
                };

                // Custom SVG icons as Leaflet DivIcons
                function createSVGIcon(svgString) {
                  return L.divIcon({
                    html: svgString,
                    className: "",
                    iconSize: [35, 35],
                    iconAnchor: [17, 35],
                    popupAnchor: [0, -35],
                  });
                }

                // SVG for pickup
                const pickupSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none">
        <path d="M19.5 10.5C19.5 17.642 12 21.75 12 21.75C12 21.75 4.5 17.642 4.5 10.5C4.5 8.51088 5.29018 6.60322 6.6967 5.1967C8.10322 3.79018 10.0109 3 12 3C13.9891 3 15.8968 3.79018 17.3033 5.1967C18.7098 6.60322 19.5 8.51088 19.5 10.5Z" fill="#FFB300" stroke="#202020" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M9.8608 16V7.27273H13.1335C13.804 7.27273 14.3665 7.39773 14.821 7.64773C15.2784 7.89773 15.6236 8.24148 15.8565 8.67898C16.0923 9.11364 16.2102 9.60795 16.2102 10.1619C16.2102 10.7216 16.0923 11.2187 15.8565 11.6534C15.6207 12.0881 15.2727 12.4304 14.8125 12.6804C14.3523 12.9276 13.7855 13.0511 13.1122 13.0511H10.9432V11.7514H12.8991C13.2912 11.7514 13.6122 11.6832 13.8622 11.5469C14.1122 11.4105 14.2969 11.223 14.4162 10.9844C14.5384 10.7457 14.5994 10.4716 14.5994 10.1619C14.5994 9.85227 14.5384 9.57955 14.4162 9.34375C14.2969 9.10795 14.1108 8.92472 13.858 8.79403C13.608 8.66051 13.2855 8.59375 12.8906 8.59375H11.4418V16H9.8608Z" fill="#202020"/>
      </svg>
      `;

                // SVG for destination
                const destinationSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none">
        <path d="M19.5 10.5C19.5 17.642 12 21.75 12 21.75C12 21.75 4.5 17.642 4.5 10.5C4.5 8.51088 5.29018 6.60322 6.6967 5.1967C8.10322 3.79018 10.0109 3 12 3C13.9891 3 15.8968 3.79018 17.3033 5.1967C18.7098 6.60322 19.5 8.51088 19.5 10.5Z" fill="#FFB300" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M15 10.5C15 11.2956 14.6839 12.0587 14.1213 12.6213C13.5587 13.1839 12.7956 13.5 12 13.5C11.2044 13.5 10.4413 13.1839 9.87868 12.6213C9.31607 12.0587 9 11.2956 9 10.5C9 9.70435 9.31607 8.94129 9.87868 8.37868C10.4413 7.81607 11.2044 7.5 12 7.5C12.7956 7.5 13.5587 7.81607 14.1213 8.37868C14.6839 8.94129 15 9.70435 15 10.5Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      `;

                // SVG for dropoff
                const dropoffSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none">
        <path d="M19.5 10.5C19.5 17.642 12 21.75 12 21.75C12 21.75 4.5 17.642 4.5 10.5C4.5 8.51088 5.29018 6.60322 6.6967 5.1967C8.10322 3.79018 10.0109 3 12 3C13.9891 3 15.8968 3.79018 17.3033 5.1967C18.7098 6.60322 19.5 8.51088 19.5 10.5Z" fill="#FFB300" stroke="#202020" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M11.8182 16H8.8608V7.27273H11.8778C12.7443 7.27273 13.4886 7.44744 14.1108 7.79688C14.7358 8.14347 15.2159 8.64205 15.5511 9.29261C15.8864 9.94318 16.054 10.7216 16.054 11.6278C16.054 12.5369 15.8849 13.3182 15.5469 13.9716C15.2116 14.625 14.7273 15.1264 14.0938 15.4759C13.4631 15.8253 12.7045 16 11.8182 16ZM10.4418 14.6321H11.7415C12.3494 14.6321 12.8565 14.5213 13.2628 14.2997C13.669 14.0753 13.9744 13.7415 14.179 13.2983C14.3835 12.8523 14.4858 12.2955 14.4858 11.6278C14.4858 10.9602 14.3835 10.4062 14.179 9.96591C13.9744 9.52273 13.6719 9.19176 13.2713 8.97301C12.8736 8.75142 12.3793 8.64062 11.7884 8.64062H10.4418V14.6321Z" fill="#202020"/>
      </svg>
      `;

                // Create Leaflet icons
                const pickupIcon = createSVGIcon(pickupSVG);
                const destinationIcon = createSVGIcon(destinationSVG);
                const dropoffIcon = createSVGIcon(dropoffSVG);

                // Pastikan array allMarkers sudah didefinisikan sebelum digunakan
                const allMarkers = [];

                // Add pickup locations
                locations.pickupLocations.forEach((location, index) => {
                  const marker = L.marker([location.lat, location.lng], { icon: pickupIcon })
                    .addTo(map)
                    .bindPopup(`<strong>Pickup Location ${index + 1}</strong><br>${location.name}`);
                  allMarkers.push(marker);
                });

                // Add destinations
                locations.destinations.forEach((location, index) => {
                  const marker = L.marker([location.lat, location.lng], { icon: destinationIcon })
                    .addTo(map)
                    .bindPopup(`<strong>Destination ${index + 1}</strong><br>${location.name}`);
                  allMarkers.push(marker);
                });

                // Add drop-off locations
                locations.dropoffLocations.forEach((location, index) => {
                  const marker = L.marker([location.lat, location.lng], { icon: dropoffIcon })
                    .addTo(map)
                    .bindPopup(`<strong>Drop-off Location ${index + 1}</strong><br>${location.name}`);
                  allMarkers.push(marker);
                });

                // Create route lines (simplified)
                const routeCoordinates = [
                  [locations.pickupLocations[0].lat, locations.pickupLocations[0].lng],
                  [locations.destinations[0].lat, locations.destinations[0].lng],
                  [locations.destinations[1].lat, locations.destinations[1].lng],
                  [locations.dropoffLocations[0].lat, locations.dropoffLocations[0].lng],
                ];

                const polyline = L.polyline(routeCoordinates, {
                  color: "#f59e0b",
                  weight: 2,
                  opacity: 0.8,
                  dashArray: "8, 8",
                }).addTo(map);

                // Re-center button functionality
                document.getElementById("recenterBtn").addEventListener("click", function () {
                  const group = new L.featureGroup(allMarkers);
                  map.fitBounds(group.getBounds().pad(0.1));
                });

                // Initial fit to bounds
                setTimeout(() => {
                  const group = new L.featureGroup(allMarkers);
                  map.fitBounds(group.getBounds().pad(0.1));
                }, 100);

                // Responsive map resize
                window.addEventListener("resize", function () {
                  map.invalidateSize();
                });

                // Interactive timeline hover effects
                const timelineItems = document.querySelectorAll("[data-location]");
                timelineItems.forEach((item) => {
                  item.addEventListener("mouseenter", function () {
                    const locationName = this.getAttribute("data-location");
                    // Highlight corresponding marker
                    allMarkers.forEach((marker) => {
                      if (marker.getPopup().getContent().includes(locationName)) {
                        marker.openPopup();
                      }
                    });
                  });
                });
              </script>
            </div>

            <!-- full description section -->
            <section class="">
              <div class="container mx-auto main-container mt-10">
                <!-- Highlights Section -->
                <div class="mb-12">
                  <div class="flex flex-col md:flex-row border-t-2 pt-10 gap-8">
                    <!-- Left Column - Title -->
                    <div class="md:w-1/4">
                      <h2 class="section-title text-base font-bold mb-0">Highlights</h2>
                    </div>

                    <!-- Right Column - Content -->
                    <div class="md:w-3/4">
                      <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                          <span class="bullet-point text-base">•</span>
                          <span class="description-text text-base">Enjoy temples with a guarantee of full access to all temples and climb up</span>
                        </li>
                        <li class="flex items-start gap-3">
                          <span class="bullet-point text-base">•</span>
                          <span class="description-text text-base">explore the highest Hindu temple and largest buddha temple structure</span>
                        </li>
                        <li class="flex items-start gap-3">
                          <span class="bullet-point text-base">•</span>
                          <span class="description-text text-base">Enjoy the temple in detail with full temple access</span>
                        </li>
                        <li class="flex items-start gap-3">
                          <span class="bullet-point text-base">•</span>
                          <span class="description-text text-base">Enjoy the most complex Buddhist temple in the world</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <!-- Full Description Section -->
                <div class="mb-12">
                  <div class="flex flex-col md:flex-row gap-8 border-t-2 pt-10">
                    <!-- Left Column - Title -->
                    <div class="md:w-1/4">
                      <h2 class="section-title text-base font-bold mb-0">Full description</h2>
                    </div>

                    <!-- Right Column - Content -->
                    <div class="md:w-3/4">
                      <div class="space-y-4">
                        <p class="description-text text-base">Start your adventure with pick-up from your accommodation in Yogyakarta.</p>
                        <p class="description-text text-base">Head to the largest and most complex Hindu temple.</p>
                        <div class="mt-6">
                          <p class="description-text text-base">The narrative unfolds at the majestic Prambanan Temple. Built between the 8th and...</p>
                          <button class="see-more-link text-base mt-2 hover:text-secondary hover:font-medium underline">See more</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Includes Section -->
                <div class="mb-12">
                  <div class="flex flex-col md:flex-row gap-8 border-t-2 pt-10">
                    <!-- Left Column - Title -->
                    <div class="md:w-1/4">
                      <h2 class="section-title text-base font-bold mb-0">Includes</h2>
                    </div>

                    <!-- Right Column - Content -->
                    <div class="md:w-3/4">
                      <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <path d="M4.47263 12.1199L9.50855 18.9492L20.425 6.94585" stroke="#1A8567" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                          <span class="description-text text-base">guarantee to climb the temple structure</span>
                        </li>
                        <li class="flex items-start gap-3">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <path d="M4.47263 12.1199L9.50855 18.9492L20.425 6.94585" stroke="#1A8567" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                          <span class="description-text text-base">Hotel pickup and drop-off</span>
                        </li>
                        <li class="flex items-start gap-3">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <path d="M4.47263 12.1199L9.50855 18.9492L20.425 6.94585" stroke="#1A8567" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                          <span class="description-text text-base">borobudur and prambanan ticket ( if you choose the private tour option)</span>
                        </li>
                        <li class="flex items-start gap-3">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <path d="M4.47263 12.1199L9.50855 18.9492L20.425 6.94585" stroke="#1A8567" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                          <span class="description-text text-base">Transportation</span>
                        </li>
                        <li class="flex items-start gap-3">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <path d="M4.47263 12.1199L9.50855 18.9492L20.425 6.94585" stroke="#1A8567" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                          <span class="description-text text-base">English-speaking driver</span>
                        </li>
                        <li class="flex items-start gap-3">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <path d="M4.47263 12.1199L9.50855 18.9492L20.425 6.94585" stroke="#1A8567" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                          <span class="description-text text-base">Guide</span>
                        </li>
                        <li class="flex items-start gap-3">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <path d="M4.47263 12.1199L9.50855 18.9492L20.425 6.94585" stroke="#1A8567" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                          <span class="description-text text-base">Mineral water</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <!-- Important Information Section -->
                <div class="mb-0">
                  <div class="flex flex-col md:flex-row gap-8 border-t-2 border-b-2 py-10">
                    <!-- Left Column - Title -->
                    <div class="md:w-1/4">
                      <h2 class="section-title text-base font-bold mb-0">Important information</h2>
                    </div>

                    <!-- Right Column - Content -->
                    <div class="md:w-3/4">
                      <div class="space-y-6">
                        <!-- What to bring -->
                        <div>
                          <h3 class="description-text text-base font-semibold mb-3">What to bring</h3>
                          <ul class="space-y-2">
                            <li class="flex items-start gap-3">
                              <span class="bullet-point text-base">•</span>
                              <span class="description-text text-base">Comfortable shoes</span>
                            </li>
                            <li class="flex items-start gap-3">
                              <span class="bullet-point text-base">•</span>
                              <span class="description-text text-base">Sunscreen</span>
                            </li>
                            <li class="flex items-start gap-3">
                              <span class="bullet-point text-base">•</span>
                              <span class="description-text text-base">Comfortable clothes</span>
                            </li>
                          </ul>
                        </div>

                        <!-- Know before you go -->
                        <div>
                          <h3 class="description-text text-base font-semibold mb-3">Know before you go</h3>
                          <ul class="space-y-2">
                            <li class="flex items-start gap-3">
                              <span class="bullet-point text-base">•</span>
                              <span class="description-text text-base">There are several tour package options, please read the description of the options carefully.</span>
                            </li>
                            <li class="flex items-start gap-3">
                              <span class="bullet-point text-base">•</span>
                              <span class="description-text text-base">Student cards can only be used for ground temple tickets</span>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                // Add interactive behavior for "See more" button
                document.querySelector(".see-more-link").addEventListener("click", function (e) {
                  e.preventDefault();

                  // Toggle expanded content
                  const currentText = this.previousElementSibling;
                  const isExpanded = this.dataset.expanded === "true";

                  if (!isExpanded) {
                    currentText.innerHTML =
                      "The narrative unfolds at the majestic Prambanan Temple. Built between the 8th and 10th centuries, this UNESCO World Heritage site stands as a testament to the grandeur of Hindu architecture in Indonesia. As you explore its towering spires and intricate reliefs, you'll be transported back in time to an era of spiritual devotion and artistic mastery.";
                    this.textContent = "See less";
                    this.dataset.expanded = "true";
                  } else {
                    currentText.innerHTML = "The narrative unfolds at the majestic Prambanan Temple. Built between the 8th and...";
                    this.textContent = "See more";
                    this.dataset.expanded = "false";
                  }
                });

                // Responsive behavior
                function handleResize() {
                  const sections = document.querySelectorAll(".flex.flex-col.md\\:flex-row");
                  const isMobile = window.innerWidth < 768;

                  sections.forEach((section) => {
                    if (isMobile) {
                      section.classList.add("space-y-4");
                    } else {
                      section.classList.remove("space-y-4");
                    }
                  });
                }

                window.addEventListener("resize", handleResize);
                handleResize(); // Initial call
              </script>
            </section>
          </div>
          <!-- Booking Card -->
          <div class="lg:col-span-1">
            <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100 sticky top-24">
              <div class="mb-6">
                <div class="text-gray-500 text-sm mb-1 line-through">From Rp 500.000</div>
                <div class="flex items-baseline mb-2">
                  <span class="text-3xl font-bold text-gray-900">Rp 250,000</span>
                  <span class="text-sm text-gray-500 ml-2">Per person</span>
                </div>
                <div class="text-sm text-gray-600 bg-blue-50 p-3 rounded-lg border border-blue-100">💳 Bayar 50% di awal, pelunasan saat bertemu sopir</div>
              </div>

              <button
                class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold py-4 rounded-xl hover:from-blue-700 hover:to-blue-800 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                Pesan Sekarang
              </button>

              <div class="mt-4 text-center">
                <div class="flex items-center justify-center gap-2 text-sm text-gray-600">
                  <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  Free cancellation up to 2 days before
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- section comments (belum fiks sih) -->
        <section class="">
          <div class="">
            <!-- Header Section -->
            <div class="mb-8">
              <div class="flex items-center gap-2 mb-6">
                <h2 class="text-2xl font-bold text-gray-900">Customer reviews</h2>
                <div class="flex items-center gap-1 text-sm text-gray-500">
                  <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                  </svg>
                  <span>(Only customers who made bookings can review this experience)</span>
                </div>
              </div>

              <!-- Review Summary Section -->
              <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                <!-- Overall Rating -->
                <div>
                  <h3 class="text-lg font-semibold text-gray-900 mb-4">Overall rating</h3>
                  <div class="flex items-center gap-2 mb-2">
                    <span class="text-4xl font-bold text-gray-900">4.9</span>
                    <span class="text-gray-500">/5</span>
                  </div>
                  <div class="flex items-center gap-2 mb-2">
                    <div class="flex text-primary">
                      <!-- Star icons will be added here -->
                      <span class="text-2xl">★★★★★</span>
                    </div>
                  </div>
                  <p class="text-sm text-gray-500">based on 910 reviews</p>
                </div>

                <!-- Review Summary -->
                <div>
                  <h3 class="text-lg font-semibold text-gray-900 mb-4">Review summary</h3>
                  <div class="space-y-3">
                    <div class="flex items-center justify-between">
                      <span class="text-sm text-gray-700 min-w-[100px]">Guide</span>
                      <div class="flex items-center gap-3 flex-1 max-w-[200px]">
                        <div class="flex-1 bg-gray-200 rounded-full h-2">
                          <div class="bg-gray-800 h-2 rounded-full" style="width: 98%"></div>
                        </div>
                        <span class="text-sm text-gray-700 min-w-[30px]">4.9/5</span>
                      </div>
                    </div>
                    <div class="flex items-center justify-between">
                      <span class="text-sm text-gray-700 min-w-[100px]">Transportation</span>
                      <div class="flex items-center gap-3 flex-1 max-w-[200px]">
                        <div class="flex-1 bg-gray-200 rounded-full h-2">
                          <div class="bg-gray-800 h-2 rounded-full" style="width: 98%"></div>
                        </div>
                        <span class="text-sm text-gray-700 min-w-[30px]">4.9/5</span>
                      </div>
                    </div>
                    <div class="flex items-center justify-between">
                      <span class="text-sm text-gray-700 min-w-[100px]">Experience</span>
                      <div class="flex items-center gap-3 flex-1 max-w-[200px]">
                        <div class="flex-1 bg-gray-200 rounded-full h-2">
                          <div class="bg-gray-800 h-2 rounded-full" style="width: 92%"></div>
                        </div>
                        <span class="text-sm text-gray-700 min-w-[30px]">4.6/5</span>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Write Review Button -->
                <div class="flex justify-end">
                  <button class="bg-primary hover:bg-yellow-600 text-white px-6 py-3 rounded-full font-medium transition-colors duration-200">Write a Review</button>
                </div>
              </div>
            </div>

            <!-- Customer Photos Section -->
            <div class="mb-8">
              <h3 class="text-lg font-semibold text-gray-900 mb-4">Customer photos</h3>
              <div class="hidden lg:grid grid-cols-4 grid-rows-2 gap-4 h-96">
                <div class="col-span-2 row-span-2 rounded-2xl overflow-hidden group cursor-pointer">
                  <img
                    src="https://images.unsplash.com/photo-1583900985737-6d0495555783?q=80&w=764&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Borobudur Temple"
                    class="w-full h-full object-cover gallery-image group-hover:scale-105 transition-transform duration-500" />
                </div>
                <div class="rounded-2xl overflow-hidden group cursor-pointer">
                  <img
                    src="https://images.unsplash.com/photo-1515161318750-781d6122e367?q=80&w=676&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Sunrise at Borobudur"
                    class="w-full h-full object-cover gallery-image group-hover:scale-105 transition-transform duration-500" />
                </div>
                <div class="rounded-2xl overflow-hidden group cursor-pointer">
                  <img
                    src="https://images.unsplash.com/photo-1574539602047-548bf9557352?q=80&w=765&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Prambanan Temple"
                    class="w-full h-full object-cover gallery-image group-hover:scale-105 transition-transform duration-500" />
                </div>
                <div class="rounded-2xl overflow-hidden group cursor-pointer">
                  <img
                    src="https://images.unsplash.com/photo-1568819317551-31051b37f69f?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Temple Architecture"
                    class="w-full h-full object-cover gallery-image group-hover:scale-105 transition-transform duration-500" />
                </div>
                <div class="relative rounded-2xl overflow-hidden group cursor-pointer" id="openGallery">
                  <img
                    src="https://images.unsplash.com/photo-1627007636205-2e2d3e2f9e6d?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="More Photos"
                    class="w-full h-full object-cover gallery-image" />
                  <div class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center group-hover:bg-opacity-70">
                    <div class="text-white text-center">
                      <div class="text-2xl font-bold mb-1">+999</div>
                      <div class="text-sm opacity-90">More Photos</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Reviews and Filters Section -->
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
              <!-- Filters Column -->
              <div class="lg:col-span-1">
                <h4 class="text-lg font-semibold text-gray-900 mb-4">Filter by</h4>

                <!-- Guest Type Filters -->
                <div class="mb-6">
                  <div class="space-y-2">
                    <label class="flex items-center cursor-pointer">
                      <input type="checkbox" class="sr-only peer" checked />
                      <div class="bg-primary text-white px-3 py-2 rounded-full text-sm peer-checked:bg-primary peer-checked:text-white bg-gray-100 text-gray-700 hover:bg-gray-200 transition-colors">All Guests</div>
                    </label>
                    <label class="flex items-center cursor-pointer">
                      <input type="checkbox" class="sr-only peer" />
                      <div class="bg-gray-100 text-gray-700 px-3 py-2 rounded-full text-sm peer-checked:bg-primary peer-checked:text-white hover:bg-gray-200 transition-colors">Couple Travelers</div>
                    </label>
                    <label class="flex items-center cursor-pointer">
                      <input type="checkbox" class="sr-only peer" />
                      <div class="bg-gray-100 text-gray-700 px-3 py-2 rounded-full text-sm peer-checked:bg-primary peer-checked:text-white hover:bg-gray-200 transition-colors">Friend Groups</div>
                    </label>
                    <label class="flex items-center cursor-pointer">
                      <input type="checkbox" class="sr-only peer" />
                      <div class="bg-gray-100 text-gray-700 px-3 py-2 rounded-full text-sm peer-checked:bg-primary peer-checked:text-white hover:bg-gray-200 transition-colors">Solo Guests</div>
                    </label>
                    <label class="flex items-center cursor-pointer">
                      <input type="checkbox" class="sr-only peer" />
                      <div class="bg-gray-100 text-gray-700 px-3 py-2 rounded-full text-sm peer-checked:bg-primary peer-checked:text-white hover:bg-gray-200 transition-colors">Family Visitors</div>
                    </label>
                  </div>
                </div>

                <!-- Star Rating Filters -->
                <div>
                  <h5 class="text-sm font-semibold text-gray-900 mb-3">By star rating</h5>
                  <div class="space-y-2">
                    <label class="flex items-center cursor-pointer">
                      <input type="checkbox" class="sr-only peer" checked />
                      <div class="bg-primary text-white px-3 py-2 rounded-full text-sm peer-checked:bg-primary peer-checked:text-white bg-gray-100 text-gray-700 hover:bg-gray-200 transition-colors">All star ratings</div>
                    </label>
                    <label class="flex items-center cursor-pointer">
                      <input type="checkbox" class="sr-only peer" />
                      <div class="bg-gray-100 text-gray-700 px-3 py-2 rounded-full text-sm peer-checked:bg-primary peer-checked:text-white hover:bg-gray-200 transition-colors flex items-center gap-2">
                        5 stars <span class="text-primary">★★★★★</span>
                      </div>
                    </label>
                    <label class="flex items-center cursor-pointer">
                      <input type="checkbox" class="sr-only peer" />
                      <div class="bg-gray-100 text-gray-700 px-3 py-2 rounded-full text-sm peer-checked:bg-primary peer-checked:text-white hover:bg-gray-200 transition-colors flex items-center gap-2">
                        4 stars <span class="text-primary">★★★★☆</span>
                      </div>
                    </label>
                    <label class="flex items-center cursor-pointer">
                      <input type="checkbox" class="sr-only peer" />
                      <div class="bg-gray-100 text-gray-700 px-3 py-2 rounded-full text-sm peer-checked:bg-primary peer-checked:text-white hover:bg-gray-200 transition-colors flex items-center gap-2">
                        3 stars <span class="text-primary">★★★☆☆</span>
                      </div>
                    </label>
                    <label class="flex items-center cursor-pointer">
                      <input type="checkbox" class="sr-only peer" />
                      <div class="bg-gray-100 text-gray-700 px-3 py-2 rounded-full text-sm peer-checked:bg-primary peer-checked:text-white hover:bg-gray-200 transition-colors flex items-center gap-2">
                        2 stars <span class="text-primary">★★☆☆☆</span>
                      </div>
                    </label>
                    <label class="flex items-center cursor-pointer">
                      <input type="checkbox" class="sr-only peer" />
                      <div class="bg-gray-100 text-gray-700 px-3 py-2 rounded-full text-sm peer-checked:bg-primary peer-checked:text-white hover:bg-gray-200 transition-colors flex items-center gap-2">
                        1 stars <span class="text-primary">★☆☆☆☆</span>
                      </div>
                    </label>
                  </div>
                </div>
              </div>

              <!-- Reviews Column -->
              <div class="lg:col-span-3">
                <!-- Search and Sort -->
                <div class="flex flex-col sm:flex-row gap-4 mb-6">
                  <div class="flex-1">
                    <div class="relative">
                      <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                      </div>
                      <input
                        type="text"
                        class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg leading-5 bg-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500"
                        placeholder="Search reviews (e.g. guide)" />
                    </div>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="text-sm text-gray-700 whitespace-nowrap">Sort by:</span>
                    <select class="border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 bg-white">
                      <option>Recommended</option>
                      <option>Newest</option>
                      <option>Oldest</option>
                      <option>Highest Rating</option>
                      <option>Lowest Rating</option>
                    </select>
                  </div>
                </div>

                <!-- Single Review -->
                <div class="border border-gray-200 rounded-lg p-6 mb-6">
                  <!-- Review Header -->
                  <div class="flex text-primary mb-3">
                    <span class="text-lg">★★★★★</span>
                    <span class="ml-2 text-sm font-medium text-gray-900">5</span>
                  </div>

                  <!-- Reviewer Info -->
                  <div class="flex items-start gap-3 mb-4">
                    <img class="w-12 h-12 rounded-full object-cover" src="https://images.unsplash.com/photo-1494790108755-2616c0672015?w=100&h=100&fit=crop&crop=face" alt="Nicolas" />
                    <div>
                      <div class="flex items-center gap-2 mb-1">
                        <span class="font-semibold text-gray-900">Nicolas</span>
                        <span class="text-gray-400">-</span>
                        <span class="text-gray-600">France</span>
                      </div>
                      <div class="flex items-center gap-2 text-sm text-gray-500">
                        <span>August 16, 2025</span>
                        <span>-</span>
                        <span class="flex items-center gap-1">
                          <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                          </svg>
                          Verified booking
                        </span>
                      </div>
                    </div>
                  </div>

                  <!-- Review Text -->
                  <p class="text-gray-700 leading-relaxed mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In aliquam pretium risus ac porta. Vivamus nec malesuada tortor. Cras fermentum finibus viverra. Vivamus lacinia libero in molestie luctus. Aliquam tempus magna
                    non neque ornare, nec blandit tellus pretium. Ut suscipit mauris nisl, vitae consequat nisl efficitur in.
                  </p>

                  <!-- Review Photos -->
                  <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                    <div class="aspect-square overflow-hidden rounded-lg">
                      <img src="https://images.unsplash.com/photo-1515536765-9b2a70c4b333?w=300&h=300&fit=crop" alt="Review photo 1" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" />
                    </div>
                    <div class="aspect-square overflow-hidden rounded-lg">
                      <img src="https://images.unsplash.com/photo-1541051595295-e7d4ae8b845f?w=300&h=300&fit=crop" alt="Review photo 2" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" />
                    </div>
                    <div class="aspect-square overflow-hidden rounded-lg">
                      <img src="https://images.unsplash.com/photo-1574539602047-548bf9557352?w=300&h=300&fit=crop" alt="Review photo 3" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" />
                    </div>
                    <div class="aspect-square overflow-hidden rounded-lg">
                      <img src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=300&h=300&fit=crop" alt="Review photo 4" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" />
                    </div>
                  </div>
                </div>

                <!-- See More Reviews Button -->
                <div class="flex justify-center">
                  <button class="bg-primary hover:bg-yellow-600 text-white px-8 py-3 rounded-full font-medium transition-colors duration-200">See more reviews</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Photo Gallery Modal -->
          <div id="galleryModal" class="fixed inset-0 bg-black bg-opacity-80 z-50 hidden modal-backdrop">
            <div class="flex items-center justify-center min-h-screen p-4">
              <div class="bg-white rounded-3xl max-w-6xl w-full max-h-[90vh] overflow-hidden modal-content">
                <!-- Modal Header -->
                <div class="flex items-center justify-between p-6 border-b border-gray-200">
                  <h3 class="text-2xl font-bold text-gray-900">Photo Gallery</h3>
                  <button id="tutupModal" class="p-2 hover:bg-gray-100 rounded-full transition-colors">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>

                <!-- Modal Content -->
                <div class="p-6 custom-scrollbar overflow-y-auto max-h-[calc(90vh-120px)]">
                  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Gallery Images -->
                    <div class="group cursor-pointer">
                      <img src="https://images.unsplash.com/photo-1515536765-9b2a70c4b333?w=400&h=300&fit=crop" alt="Borobudur Temple" class="w-full h-48 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300" />
                    </div>
                    <div class="group cursor-pointer">
                      <img
                        src="https://images.unsplash.com/photo-1541051595295-e7d4ae8b845f?w=400&h=300&fit=crop"
                        alt="Sunrise at Borobudur"
                        class="w-full h-48 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300" />
                    </div>
                    <div class="group cursor-pointer">
                      <img src="https://images.unsplash.com/photo-1587474260584-136574528ed5?w=400&h=300&fit=crop" alt="Prambanan Temple" class="w-full h-48 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300" />
                    </div>
                    <div class="group cursor-pointer">
                      <img
                        src="https://images.unsplash.com/photo-1542994419-6ce2d65bea12?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Temple Architecture"
                        class="w-full h-48 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300" />
                    </div>
                    <div class="group cursor-pointer">
                      <img src="https://images.unsplash.com/photo-1589394815804-964ed0be2eb5?w=400&h=300&fit=crop" alt="Temple Detail" class="w-full h-48 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300" />
                    </div>
                    <div class="group cursor-pointer">
                      <img src="https://images.unsplash.com/photo-1564507592333-c60657eea523?w=400&h=300&fit=crop" alt="Buddhist Statues" class="w-full h-48 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300" />
                    </div>
                    <div class="group cursor-pointer">
                      <img src="https://images.unsplash.com/photo-1555086156-e6c7353d283f?w=400&h=300&fit=crop" alt="Temple Complex" class="w-full h-48 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300" />
                    </div>
                    <div class="group cursor-pointer">
                      <img src="https://images.unsplash.com/photo-1574539602047-548bf9557352?w=400&h=300&fit=crop" alt="Stone Carving" class="w-full h-48 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300" />
                    </div>
                    <div class="group cursor-pointer">
                      <img src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=400&h=300&fit=crop" alt="Temple Garden" class="w-full h-48 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <script>
            // Modal functionality
            const modal = document.getElementById("galleryModal");
            const openGallery = document.getElementById("openGallery");
            const tutupModal = document.getElementById("tutupModal");
            const modalBackdrop = document.querySelector(".modal-backdrop");

            // Open modal
            openGallery.addEventListener("click", () => {
              modal.classList.remove("hidden");
              document.body.style.overflow = "hidden";
            });

            // Close modal
            function tutupModalFunction() {
              modal.classList.add("hidden");
              document.body.style.overflow = "auto";
            }

            tutupModal.addEventListener("click", tutupModalFunction);

            // Close modal when clicking backdrop
            modalBackdrop.addEventListener("click", (e) => {
              if (e.target === modalBackdrop) {
                tutupModalFunction();
              }
            });

            // Close modal with escape key
            document.addEventListener("keydown", (e) => {
              if (e.key === "Escape") {
                tutupModalFunction();
              }
            });

            // Filter functionality with improved styling
            document.querySelectorAll('input[type="checkbox"]').forEach((checkbox) => {
              checkbox.addEventListener("change", function () {
                const label = this.nextElementSibling;

                if (this.checked) {
                  label.className = label.className.replace("bg-gray-100 text-gray-700", "bg-primary text-white");
                } else {
                  label.className = label.className.replace("bg-primary text-white", "bg-gray-100 text-gray-700");
                }
              });
            });
          </script>
        </section>

        <!-- Card Section -->
        <section id="paket-wisata" class="mt-10 py-16">
          <h1 class="text-2xl font-bold mb-3">Other destinations you may love....</h1>
          <div class="relative">
            <!-- Card Slider -->
            <div id="card-slider" class="flex gap-6 overflow-x-auto scroll-smooth px-1 py-2">
              <!-- Card 1 -->
              <div class="bg-white rounded-xl overflow-hidden max-w-sm w-[320px] flex-shrink-0 border">
                <div class="relative">
                  <img src="{{ asset('img/img-card.png') }}" alt="Bali" class="w-full h-[212px] object-cover" />
                  <div class="absolute top-2 right-2 w-8 h-8 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 20 18" fill="none">
                      <path
                        d="M19 5.25C19 2.76472 16.9013 0.75 14.3125 0.75C12.3769 0.75 10.7153 1.87628 10 3.48342C9.28472 1.87628 7.62312 0.75 5.6875 0.75C3.09867 0.75 1 2.76472 1 5.25C1 12.4706 10 17.25 10 17.25C10 17.25 19 12.4706 19 5.25Z"
                        stroke="white"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </div>
                </div>
                <div class="p-4">
                  <div class="mb-3">
                    <span class="text-xs font-medium text-gray-500 uppercase tracking-wide">DAY TRIP</span>
                  </div>
                  <h2 class="text-xl font-bold text-gray-900 mb-4 leading-tight">Yogyakarta: Borobudur sunrise(guarantee climb up)& Prambanan</h2>
                  <div class="flex items-center text-sm text-gray-600 mb-4 space-x-2">
                    <span>7 hours</span>
                    <span>•</span>
                    <span>Private tour</span>
                    <span>•</span>
                    <span>Small group</span>
                  </div>
                  <div class="flex items-center mb-4">
                    <div class="flex items-center space-x-1">
                      <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                      <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                      <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                      <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                      <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                    </div>
                    <span class="text-sm font-semibold text-gray-900 ml-2">4.7</span>
                    <span class="text-sm text-gray-500 ml-1">(320)</span>
                  </div>
                  <div class="border-t pt-4">
                    <div class="text-sm text-gray-500 mb-1">From Rp 500.000</div>
                    <div class="flex items-end justify-between">
                      <div class="flex items-baseline">
                        <span class="text-xl font-bold text-gray-900">Rp 250,000</span>
                        <span class="text-sm text-gray-500 ml-2">Per person</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Card 2 -->
              <div class="bg-white rounded-xl overflow-hidden max-w-sm w-[320px] flex-shrink-0 border">
                <div class="relative">
                  <img src="{{ asset('img/img-card.png') }}" alt="Bali" class="w-full h-[212px] object-cover" />
                  <div class="absolute top-2 right-2 w-8 h-8 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 20 18" fill="none">
                      <path
                        d="M19 5.25C19 2.76472 16.9013 0.75 14.3125 0.75C12.3769 0.75 10.7153 1.87628 10 3.48342C9.28472 1.87628 7.62312 0.75 5.6875 0.75C3.09867 0.75 1 2.76472 1 5.25C1 12.4706 10 17.25 10 17.25C10 17.25 19 12.4706 19 5.25Z"
                        stroke="white"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </div>
                </div>
                <div class="p-4">
                  <div class="mb-3">
                    <span class="text-xs font-medium text-gray-500 uppercase tracking-wide">DAY TRIP</span>
                  </div>
                  <h2 class="text-xl font-bold text-gray-900 mb-4 leading-tight">Yogyakarta: Borobudur sunrise(guarantee climb up)& Prambanan</h2>
                  <div class="flex items-center text-sm text-gray-600 mb-4 space-x-2">
                    <span>7 hours</span>
                    <span>•</span>
                    <span>Private tour</span>
                    <span>•</span>
                    <span>Small group</span>
                  </div>
                  <div class="flex items-center mb-4">
                    <div class="flex items-center space-x-1">
                      <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                      <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                      <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                      <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                      <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                    </div>
                    <span class="text-sm font-semibold text-gray-900 ml-2">4.7</span>
                    <span class="text-sm text-gray-500 ml-1">(320)</span>
                  </div>
                  <div class="border-t pt-4">
                    <div class="text-sm text-gray-500 mb-1">From Rp 500.000</div>
                    <div class="flex items-end justify-between">
                      <div class="flex items-baseline">
                        <span class="text-xl font-bold text-gray-900">Rp 250,000</span>
                        <span class="text-sm text-gray-500 ml-2">Per person</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Card 3 -->
              <div class="bg-white rounded-xl overflow-hidden max-w-sm w-[320px] flex-shrink-0 border">
                <div class="relative">
                  <img src="{{ asset('img/img-card.png') }}" alt="Jakarta" class="w-full h-[212px] object-cover" />
                  <div class="absolute top-2 right-2 w-8 h-8 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 20 18" fill="none">
                      <path
                        d="M19 5.25C19 2.76472 16.9013 0.75 14.3125 0.75C12.3769 0.75 10.7153 1.87628 10 3.48342C9.28472 1.87628 7.62312 0.75 5.6875 0.75C3.09867 0.75 1 2.76472 1 5.25C1 12.4706 10 17.25 10 17.25C10 17.25 19 12.4706 19 5.25Z"
                        stroke="white"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </div>
                </div>
                <div class="p-4">
                  <div class="mb-3">
                    <span class="text-xs font-medium text-gray-500 uppercase tracking-wide">DAY TRIP</span>
                  </div>
                  <h2 class="text-xl font-bold text-gray-900 mb-4 leading-tight">Yogyakarta: Borobudur sunrise(guarantee climb up)& Prambanan</h2>
                  <div class="flex items-center text-sm text-gray-600 mb-4 space-x-2">
                    <span>8 hours</span>
                    <span>•</span>
                    <span>Skip the line</span>
                    <span>•</span>
                    <span>Small group</span>
                  </div>
                  <div class="flex items-center mb-4">
                    <div class="flex items-center space-x-1">
                      <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                      <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                      <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                      <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                      <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                    </div>
                    <span class="text-sm font-semibold text-gray-900 ml-2">4.7</span>
                    <span class="text-sm text-gray-500 ml-1">(320)</span>
                  </div>
                  <div class="border-t pt-4">
                    <div class="text-sm text-gray-500 mb-1">From Rp 500.000</div>
                    <div class="flex items-end justify-between">
                      <div class="flex items-baseline">
                        <span class="text-xl font-bold text-gray-900">Rp 250,000</span>
                        <span class="text-sm text-gray-500 ml-2">Per person</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="bg-white rounded-xl overflow-hidden max-w-sm w-[320px] flex-shrink-0 border">
                <div class="relative">
                  <img src="{{ asset('img/img-card.png') }}" alt="Jakarta" class="w-full h-[212px] object-cover" />
                  <div class="absolute top-2 right-2 w-8 h-8 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 20 18" fill="none">
                      <path
                        d="M19 5.25C19 2.76472 16.9013 0.75 14.3125 0.75C12.3769 0.75 10.7153 1.87628 10 3.48342C9.28472 1.87628 7.62312 0.75 5.6875 0.75C3.09867 0.75 1 2.76472 1 5.25C1 12.4706 10 17.25 10 17.25C10 17.25 19 12.4706 19 5.25Z"
                        stroke="white"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </div>
                </div>
                <div class="p-4">
                  <div class="mb-3">
                    <span class="text-xs font-medium text-gray-500 uppercase tracking-wide">DAY TRIP</span>
                  </div>
                  <h2 class="text-xl font-bold text-gray-900 mb-4 leading-tight">Yogyakarta: Borobudur sunrise(guarantee climb up)& Prambanan</h2>
                  <div class="flex items-center text-sm text-gray-600 mb-4 space-x-2">
                    <span>8 hours</span>
                    <span>•</span>
                    <span>Skip the line</span>
                    <span>•</span>
                    <span>Small group</span>
                  </div>
                  <div class="flex items-center mb-4">
                    <div class="flex items-center space-x-1">
                      <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                      <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                      <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                      <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                      <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                    </div>
                    <span class="text-sm font-semibold text-gray-900 ml-2">4.7</span>
                    <span class="text-sm text-gray-500 ml-1">(320)</span>
                  </div>
                  <div class="border-t pt-4">
                    <div class="text-sm text-gray-500 mb-1">From Rp 500.000</div>
                    <div class="flex items-end justify-between">
                      <div class="flex items-baseline">
                        <span class="text-xl font-bold text-gray-900">Rp 250,000</span>
                        <span class="text-sm text-gray-500 ml-2">Per person</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End of Card Section -->
      </div>
    </main>

    <!-- Photo Gallery Modal -->
    <div id="galleryModal" class="fixed inset-0 bg-black bg-opacity-80 z-50 hidden modal-backdrop">
      <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-3xl max-w-6xl w-full max-h-[90vh] overflow-hidden modal-content">
          <!-- Modal Header -->
          <div class="flex items-center justify-between p-6 border-b border-gray-200">
            <h3 class="text-2xl font-bold text-gray-900">Photo Gallery</h3>
            <button id="closeModal" class="p-2 hover:bg-gray-100 rounded-full transition-colors">
              <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>

          <!-- Modal Content -->
          <div class="p-6 custom-scrollbar overflow-y-auto max-h-[calc(90vh-120px)]">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
              <!-- Gallery Images -->
              <div class="group cursor-pointer">
                <img
                  src="https://images.unsplash.com/photo-1515536765-9b2a70c4b333?q=80&w=736&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                  alt="Borobudur Temple"
                  class="w-full h-48 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300" />
              </div>
              <div class="group cursor-pointer">
                <img
                  src="https://images.unsplash.com/photo-1541051595295-e7d4ae8b845f?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                  alt="Sunrise at Borobudur"
                  class="w-full h-48 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300" />
              </div>
              <div class="group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1587474260584-136574528ed5?w=600&h=400&fit=crop" alt="Prambanan Temple" class="w-full h-48 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300" />
              </div>
              <div class="group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=600&h=400&fit=crop" alt="Temple Architecture" class="w-full h-48 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300" />
              </div>
              <div class="group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1589394815804-964ed0be2eb5?w=600&h=400&fit=crop" alt="Temple Detail" class="w-full h-48 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300" />
              </div>
              <div class="group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1564507592333-c60657eea523?w=600&h=400&fit=crop" alt="Buddhist Statues" class="w-full h-48 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300" />
              </div>
              <div class="group cursor-pointer">
                <img
                  src="https://images.unsplash.com/photo-1555086156-e6c7353d283f?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                  alt="Temple Complex"
                  class="w-full h-48 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300" />
              </div>
              <div class="group cursor-pointer">
                <img
                  src="https://images.unsplash.com/photo-1574539602047-548bf9557352?q=80&w=765&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                  alt="Stone Carving"
                  class="w-full h-48 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300" />
              </div>
              <div class="group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=600&h=400&fit=crop" alt="Temple Garden" class="w-full h-48 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300" />
              </div>
              <div class="group cursor-pointer">
                <img
                  src="https://images.unsplash.com/photo-1716004657433-08aed0c63f50?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                  alt="Ancient Structure"
                  class="w-full h-48 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300" />
              </div>
              <div class="group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1544735716-392fe2489ffa?w=600&h=400&fit=crop" alt="Traditional Architecture" class="w-full h-48 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300" />
              </div>
              <div class="group cursor-pointer">
                <img
                  src="https://images.unsplash.com/photo-1583900985737-6d0495555783?q=80&w=764&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                  alt="Temple Pathway"
                  class="w-full h-48 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300" />
              </div>
              <div class="group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1609137144813-7d9921338f24?w=600&h=400&fit=crop" alt="Cultural Heritage" class="w-full h-48 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300" />
              </div>
              <div class="group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1528127269322-539801943592?w=600&h=400&fit=crop" alt="Historical Site" class="w-full h-48 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300" />
              </div>
              <div class="group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1582719471137-c3967ffb1c42?w=600&h=400&fit=crop" alt="Temple View" class="w-full h-48 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@push('scripts')
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <!-- Flatpickr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js"></script>

    <script>
      // Modal functionality
      const galleryModal = document.getElementById("galleryModal");
      const viewMoreBtn = document.getElementById("viewMoreBtn");
      const viewMoreBtnMobile = document.getElementById("viewMoreBtnMobile");
      const closeModal = document.getElementById("closeModal");

      // Open modal function
      function openModal() {
        galleryModal.classList.remove("hidden");
        document.body.style.overflow = "hidden";
      }

      // Close modal function
      function closeModalFunc() {
        galleryModal.classList.add("hidden");
        document.body.style.overflow = "auto";
      }

      // Event listeners
      if (viewMoreBtn) {
        viewMoreBtn.addEventListener("click", openModal);
      }

      if (viewMoreBtnMobile) {
        viewMoreBtnMobile.addEventListener("click", openModal);
      }

      closeModal.addEventListener("click", closeModalFunc);

      // Close modal when clicking outside
      galleryModal.addEventListener("click", function (e) {
        if (e.target === galleryModal) {
          closeModalFunc();
        }
      });

      // Close modal with Escape key
      document.addEventListener("keydown", function (e) {
        if (e.key === "Escape" && !galleryModal.classList.contains("hidden")) {
          closeModalFunc();
        }
      });

      // Image zoom functionality in modal
      const modalImages = document.querySelectorAll("#galleryModal img");
      modalImages.forEach((img) => {
        img.addEventListener("click", function () {
          // Create lightbox overlay
          const lightbox = document.createElement("div");
          lightbox.className = "fixed inset-0 bg-black bg-opacity-95 z-[60] flex items-center justify-center p-4";
          lightbox.innerHTML = `
                    <div class="relative max-w-5xl max-h-[90vh] w-full h-full flex items-center justify-center">
                        <img src="${this.src}" alt="${this.alt}" class="max-w-full max-h-full object-contain rounded-lg shadow-2xl">
                        <button class="absolute top-4 right-4 text-white hover:text-gray-300 p-2 rounded-full bg-black bg-opacity-50 hover:bg-opacity-70 transition-all">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                `;

          document.body.appendChild(lightbox);

          // Close lightbox
          lightbox.addEventListener("click", function (e) {
            if (e.target === lightbox || e.target.closest("button")) {
              document.body.removeChild(lightbox);
            }
          });

          // Close with Escape key
          const escapeHandler = function (e) {
            if (e.key === "Escape") {
              document.body.removeChild(lightbox);
              document.removeEventListener("keydown", escapeHandler);
            }
          };
          document.addEventListener("keydown", escapeHandler);
        });
      });

      // Smooth scrolling for anchor links
      document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
          e.preventDefault();
          const target = document.querySelector(this.getAttribute("href"));
          if (target) {
            target.scrollIntoView({
              behavior: "smooth",
              block: "start",
            });
          }
        });
      });

      // Add loading animation for images
      document.querySelectorAll("img").forEach((img) => {
        img.addEventListener("load", function () {
          this.style.opacity = "1";
        });

        img.addEventListener("error", function () {
          this.src =
            "data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjRjNGNEY2Ii8+CjxwYXRoIGQ9Ik0xNzUgMTIwVjE4MEgyMjVWMTIwSDE3NVpNMjAwIDEzNUMyMDggMTM1IDIxMCAxNDMgMjEwIDE1MEMyMTAgMTU3IDIwOCAxNjUgMjAwIDE2NUMxOTIgMTY1IDE5MCAxNTcgMTkwIDE1MEMxOTAgMTQzIDE5MiAxMzUgMjAwIDEzNVoiIGZpbGw9IiM5Q0E0QUYiLz4KPC9zdmc+";
        });
      });
    </script>

@endpush

