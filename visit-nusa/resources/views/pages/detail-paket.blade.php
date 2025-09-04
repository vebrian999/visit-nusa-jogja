@extends('layouts.app')

@push('styles')
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.css" />
    
    <style>
        /* Main content positioning */
        .detail-paket-page {
            position: relative;
            margin-top: 0;
            padding-top: 0;
        }
        
        /* Sticky sidebar styling */
        .sticky-sidebar {
            position: sticky;
            top: 8rem; /* Adjusted to account for fixed navbar */
            height: fit-content;
            z-index: 30;
        }
        
        /* Smooth scrolling for better UX */
        html {
            scroll-behavior: smooth;
        }
        
        /* Ensure proper spacing and layout */
        .main-content-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
        }
        
        @media (min-width: 1024px) {
            .main-content-grid {
                grid-template-columns: 2fr 1fr;
                gap: 3rem;
            }
        }
        
        /* Better spacing for sections */
        .section-spacing {
            margin-bottom: 2rem;
        }
        
        @media (min-width: 768px) {
            .section-spacing {
                margin-bottom: 3rem;
            }
        }
    </style>
@endpush

@section('content')
<div class="detail-paket-page">
    <main class="pt-24 bg-white">
      <div class="container mx-auto main-container md:py-16">
        <!-- Title & Gallery Section -->
        <x-detail-paket.product-gallery :paket="$paket" />

        <!-- Content & Booking -->
        <div class="main-content-grid mb-12">
          <!-- Main Content -->
          <div class="space-y-8">
            <!-- About this Activity Section -->
            <div class="bg-white">
              <p class="text-gray-700 mb-6 leading-relaxed text-base">{{ $paket->deskripsi_singkat ?? 'Paket tur ini menjamin akses penuh ke seluruh area candi, naik ke puncak, menjelajahi kompleks Buddha megah, serta mengagumi detail candi Hindu terbesar' }}</p>
              
              <div class="space-y-5 mb-8">
                <h2 class="text-xl font-bold text-gray-900">About this activity</h2>
                
                <div class="flex gap-3 text-gray-700">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M6.75 3V5.25M17.25 3V5.25M3 18.75V7.5C3 6.90326 3.23705 6.33097 3.65901 5.90901C4.08097 5.48705 4.65326 5.25 5.25 5.25H18.75C19.3467 5.25 19.919 5.48705 20.341 5.90901C20.7629 6.33097 21 6.90326 21 7.5V18.75M3 18.75C3 19.3467 3.23705 19.919 3.65901 20.341C4.08097 20.7629 4.65326 21 5.25 21H18.75C19.3467 21 19.919 20.7629 20.341 20.341C20.7629 19.919 21 19.3467 21 18.75M3 18.75V11.25C3 10.6533 3.23705 10.081 3.65901 9.65901C4.08097 9.23705 4.65326 9 5.25 9H18.75C19.3467 9 19.919 9.23705 20.341 9.65901C20.7629 10.081 21 10.6533 21 11.25V18.75" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M9.0625 14.8438L11.8125 17.5938L15.9375 11.4062" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="ml-1">
                    <h1 class="font-bold text-sm">Free cancellation</h1>
                    <p class="text-sm font-normal">Cancel up to 24 hours in advance for a full refund</p>
                  </div>
                </div>
                
                <div class="flex gap-3 text-gray-700">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="19" viewBox="0 0 22 19" fill="none">
                    <path d="M10.5391 14.4062H5.89844H4.35156C2.50055 14.4062 1 12.9057 1 11.0547V7.70312V4.35156C1 2.50055 2.50055 1 4.35156 1H5.89844H10.7969H15.6953H17.2422C19.0932 1 20.5938 2.50055 20.5938 4.35156V7.70312V8.73438M1 5.64062H20.3359M4.60938 10.2812H7.44531M16.9844 14.0196L18.1445 12.8594" stroke="black" stroke-width="1.5" stroke-linecap="round" />
                    <path d="M16.9844 17.5C18.9778 17.5 20.5938 15.884 20.5938 13.8906C20.5938 11.8972 18.9778 10.2812 16.9844 10.2812C14.991 10.2812 13.375 11.8972 13.375 13.8906C13.375 15.884 14.991 17.5 16.9844 17.5Z" stroke="black" stroke-width="1.5" />
                  </svg>
                  <div class="ml-1">
                    <h1 class="font-bold text-sm">Book now with 50% deposit</h1>
                    <p class="text-sm font-normal">Keep your travel plans flexible book your spot and pay nothing today.</p>
                  </div>
                </div>
                
                <div class="flex gap-3 text-gray-700">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M12 6V12H16.5M21 12C21 13.1819 20.7672 14.3522 20.3149 15.4442C19.8626 16.5361 19.1997 17.5282 18.364 18.364C17.5282 19.1997 16.5361 19.8626 15.4442 20.3149C14.3522 20.7672 13.1819 21 12 21C10.8181 21 9.64778 20.7672 8.55585 20.3149C7.46392 19.8626 6.47177 19.1997 5.63604 18.364C4.80031 17.5282 4.13738 16.5361 3.68508 15.4442C3.23279 14.3522 3 13.1819 3 12C3 9.61305 3.94821 7.32387 5.63604 5.63604C7.32387 3.94821 9.61305 3 12 3C14.3869 3 16.6761 3.94821 18.364 5.63604C20.0518 7.32387 21 9.61305 21 12Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="ml-1">
                    <h1 class="font-bold text-sm">Duration {{ $paket->durasi ?? '10 - 11' }} hours</h1>
                    <p class="text-sm font-normal">Check availability to see starting times</p>
                  </div>
                </div>
                
                <div class="flex gap-3 text-gray-700">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M3 8.68907C3 7.82507 3.933 7.28307 4.683 7.71207L11.791 11.7731C11.9633 11.8714 12.1065 12.0136 12.2061 12.1852C12.3058 12.3568 12.3582 12.5517 12.3582 12.7501C12.3582 12.9485 12.3058 13.1434 12.2061 13.3149C12.1065 13.4865 11.9633 13.6287 11.791 13.7271L4.683 17.7881C4.5119 17.8858 4.31812 17.9369 4.12107 17.9362C3.92402 17.9355 3.73061 17.8831 3.5602 17.7842C3.38978 17.6852 3.24833 17.5433 3.15002 17.3725C3.05171 17.2017 2.99998 17.0081 3 16.8111V8.68907ZM12.75 8.68907C12.75 7.82507 13.683 7.28307 14.433 7.71207L21.541 11.7731C21.7133 11.8714 21.8565 12.0136 21.9562 12.1852C22.0558 12.3568 22.1082 12.5517 22.1082 12.7501C22.1082 12.9485 22.0558 13.1434 21.9562 13.3149C21.8565 13.4865 21.7133 13.6287 21.541 13.7271L14.433 17.7881C14.2619 17.8858 14.0681 17.9369 13.8711 17.9362C13.674 17.9355 13.4806 17.8831 13.3102 17.7842C13.1398 17.6852 12.9983 17.5433 12.9 17.3725C12.8017 17.2017 12.75 17.0081 12.75 16.8111V8.68907Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="ml-1">
                    <h1 class="font-bold text-sm">Skip the ticket line</h1>
                    <p class="text-sm font-normal">Save time by avoiding long queues at the entrance.</p>
                  </div>
                </div>
                
                <div class="flex gap-3 text-gray-700">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="22" viewBox="0 0 30 22" fill="none">
                    <path d="M18.7468 0.918457L18.4006 1.76723M18.4006 1.76723L20.1034 2.00444C21.3847 2.18324 22.5554 2.82042 23.4039 3.80081L23.4516 3.85591C24.283 4.81631 25.4242 5.44787 26.6768 5.64074L28.578 5.93314C27.562 7.82179 26.7504 9.81411 26.1575 11.8751L24.2541 11.5818C23.0013 11.3892 21.8597 10.7577 21.028 9.7973L20.9804 9.74221C20.1319 8.76182 18.9612 8.12464 17.6799 7.94584L15.9771 7.70862M18.4006 1.76723L15.9771 7.70862M14.5922 11.1037L15.9771 7.70862" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12.75 5C12.75 5.99456 12.3549 6.94839 11.6516 7.65165C10.9484 8.35491 9.99454 8.75 8.99998 8.75C8.00541 8.75 7.05159 8.35491 6.34833 7.65165C5.64506 6.94839 5.24998 5.99456 5.24998 5C5.24998 4.00544 5.64506 3.05161 6.34833 2.34835C7.05159 1.64509 8.00541 1.25 8.99998 1.25C9.99454 1.25 10.9484 1.64509 11.6516 2.34835C12.3549 3.05161 12.75 4.00544 12.75 5ZM1.50098 19.118C1.53311 17.1504 2.33731 15.2742 3.74015 13.894C5.14299 12.5139 7.03206 11.7405 8.99998 11.7405C10.9679 11.7405 12.857 12.5139 14.2598 13.894C15.6626 15.2742 16.4668 17.1504 16.499 19.118C14.1464 20.1968 11.5881 20.7535 8.99998 20.75C6.32398 20.75 3.78398 20.166 1.50098 19.118Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="">
                    <h1 class="font-bold text-sm">Live tour guide</h1>
                    <p class="text-sm font-normal">English, Indonesia</p>
                  </div>
                </div>

                <div class="flex gap-3 text-gray-700">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M15 19.128C15.853 19.3757 16.7368 19.5009 17.625 19.5C19.0534 19.5021 20.4633 19.1764 21.746 18.548C21.7839 17.6517 21.5286 16.7675 21.0188 16.0293C20.509 15.2912 19.7724 14.7394 18.9207 14.4575C18.0691 14.1757 17.1487 14.1791 16.2992 14.4674C15.4497 14.7557 14.7173 15.313 14.213 16.055M15 19.128V19.125C15 18.012 14.714 16.965 14.213 16.055M15 19.128V19.234C13.0755 20.3931 10.8706 21.0038 8.62402 21C6.29302 21 4.11202 20.355 2.25002 19.234L2.24902 19.125C2.24826 17.7095 2.71864 16.3339 3.58601 15.2153C4.45338 14.0966 5.6684 13.2984 7.03951 12.9466C8.41063 12.5948 9.85985 12.7093 11.1587 13.2721C12.4575 13.8349 13.5321 14.814 14.213 16.055M12 6.375C12 7.27011 11.6444 8.12855 11.0115 8.76149C10.3786 9.39442 9.52013 9.75 8.62502 9.75C7.72992 9.75 6.87147 9.39442 6.23854 8.76149C5.6056 8.12855 5.25002 7.27011 5.25002 6.375C5.25002 5.47989 5.6056 4.62145 6.23854 3.98851C6.87147 3.35558 7.72992 3 8.62502 3C9.52013 3 10.3786 3.35558 11.0115 3.98851C11.6444 4.62145 12 5.47989 12 6.375ZM20.25 8.625C20.25 9.32119 19.9735 9.98887 19.4812 10.4812C18.9889 10.9734 18.3212 11.25 17.625 11.25C16.9288 11.25 16.2612 10.9734 15.7689 10.4812C15.2766 9.98887 15 9.32119 15 8.625C15 7.92881 15.2766 7.26113 15.7689 6.76884C16.2612 6.27656 16.9288 6 17.625 6C18.3212 6 18.9889 6.27656 19.4812 6.76884C19.9735 7.26113 20.25 7.92881 20.25 8.625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
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
              <h3 class="text-xl font-bold mb-6 text-gray-900">Informasi Tambahan</h3>
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

            <!-- Booking Form Section -->
            <div class="w-full section-spacing">
              <x-detail-paket.booking-form :paket="$paket" :priceData="$priceData" />
            </div>

            <!-- Itinerary & Map -->
            <div class="w-full section-spacing">
              <x-detail-paket.itinerary-map :paket="$paket" />
            </div>
            
            <!-- Description Sections -->
            <div class="w-full section-spacing">
              <x-detail-paket.description-sections :paket="$paket" />
            </div>
          </div>

          <!-- Booking Card (Desktop) -->
          <div class="hidden lg:block">
            <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100 sticky-sidebar">
              <div class="mb-6">
                @if($paket->hasDiscount())
                  <div class="text-gray-500 text-sm mb-1 line-through">From {{ $paket->formatted_harga_awal }}</div>
                  <div class="flex items-baseline mb-2">
                    <span class="text-3xl font-bold text-gray-900">{{ $paket->formatted_harga_diskon }}</span>
                    <span class="text-sm text-gray-500 ml-2">Per person</span>
                  </div>
                @else
                  <div class="text-gray-500 text-sm mb-1">From {{ $paket->formatted_harga_awal }}</div>
                  <div class="flex items-baseline mb-2">
                    <span class="text-3xl font-bold text-gray-900">{{ $paket->formatted_harga_awal }}</span>
                    <span class="text-sm text-gray-500 ml-2">Per person</span>
                  </div>
                @endif
                <div class="text-sm text-gray-600 bg-blue-50 p-3 rounded-lg border border-blue-100">💳 Bayar 50% di awal, pelunasan saat bertemu sopir</div>
              </div>
              <button class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold py-4 rounded-xl hover:from-blue-700 hover:to-blue-800 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 text-center">
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

        <!-- Mobile Booking Card -->
        <div class="lg:hidden mb-8">
          <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100">
            <div class="mb-6">
              @if($paket->hasDiscount())
                <div class="text-gray-500 text-sm mb-1 line-through">From {{ $paket->formatted_harga_awal }}</div>
                <div class="flex items-baseline mb-2">
                  <span class="text-3xl font-bold text-gray-900">{{ $paket->formatted_harga_diskon }}</span>
                  <span class="text-sm text-gray-500 ml-2">Per person</span>
                </div>
              @else
                <div class="text-gray-500 text-sm mb-1">From {{ $paket->formatted_harga_awal }}</div>
                <div class="flex items-baseline mb-2">
                  <span class="text-3xl font-bold text-gray-900">{{ $paket->formatted_harga_awal }}</span>
                  <span class="text-sm text-gray-500 ml-2">Per person</span>
                </div>
              @endif
              <div class="text-sm text-gray-600 bg-blue-50 p-3 rounded-lg border border-blue-100">💳 Bayar 50% di awal, pelunasan saat bertemu sopir</div>
            </div>
            <button class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold py-4 rounded-xl hover:from-blue-700 hover:to-blue-800 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 text-center">
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

        <!-- Customer Reviews Section -->
        <div class="w-full mt-16">
          <x-detail-paket.customer-reviews :paket="$paket" />
        </div>

        <!-- Related Destinations -->
        <div class="w-full mt-16">
          <x-detail-paket.related-destinations :relatedPakets="$relatedPakets" />
        </div>
      </div>

      <!-- Photo Gallery Modal -->
      <x-detail-paket.photo-gallery-modal :paket="$paket" />
    </main>
</div>
@endsection

@push('scripts')
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <!-- Flatpickr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js"></script>

    <script>
      // Modal functionality
      document.addEventListener('DOMContentLoaded', function() {
        const galleryModal = document.getElementById("galleryModal");
        const viewMoreBtn = document.getElementById("viewMoreBtn");
        const viewMoreBtnMobile = document.getElementById("viewMoreBtnMobile");
        const closeModal = document.getElementById("closeModal");

        // Open modal function
        function openModal() {
          if (galleryModal) {
            galleryModal.classList.remove("hidden");
            document.body.style.overflow = "hidden";
          }
        }

        // Close modal function
        function closeModalFunc() {
          if (galleryModal) {
            galleryModal.classList.add("hidden");
            document.body.style.overflow = "auto";
          }
        }

        // Event listeners
        if (viewMoreBtn) {
          viewMoreBtn.addEventListener("click", openModal);
        }

        if (viewMoreBtnMobile) {
          viewMoreBtnMobile.addEventListener("click", openModal);
        }

        if (closeModal) {
          closeModal.addEventListener("click", closeModalFunc);
        }

        // Close modal when clicking outside
        if (galleryModal) {
          galleryModal.addEventListener("click", function (e) {
            if (e.target === galleryModal) {
              closeModalFunc();
            }
          });
        }

        // Close modal with Escape key
        document.addEventListener("keydown", function (e) {
          if (e.key === "Escape" && galleryModal && !galleryModal.classList.contains("hidden")) {
            closeModalFunc();
          }
        });
      });
    </script>
    
    <script>
      // Map Functionality
      document.addEventListener('DOMContentLoaded', function() {
        if (document.getElementById("map")) {
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
          const recenterBtn = document.getElementById("recenterBtn");
          if (recenterBtn) {
            recenterBtn.addEventListener("click", function () {
              const group = new L.featureGroup(allMarkers);
              map.fitBounds(group.getBounds().pad(0.1));
            });
          }

          // Initial fit to bounds
          setTimeout(() => {
            const group = new L.featureGroup(allMarkers);
            map.fitBounds(group.getBounds().pad(0.1));
          }, 100);

          // Hide loading indicator
          const mapLoadingIndicator = document.getElementById("mapLoadingIndicator");
          if (mapLoadingIndicator) {
            mapLoadingIndicator.style.display = "none";
          }
        }
      });
    </script>

              <script>
      // Booking Form Functionality
      document.addEventListener('DOMContentLoaded', function() {
                // App State
                const state = {
          adultsCount: 1,
                  childrenCount: 0,
                  selectedDate: null,
                  priceData: {
            weekday: {{ $priceData['weekday'] ?? 250000 }},
            weekend: {{ $priceData['weekend'] ?? 350000 }},
            holiday: {{ $priceData['holiday'] ?? 450000 }},
                  },
                };

                // Initialize Flatpickr
        if (document.getElementById("dateInput")) {
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
        }

                // Counter Functions
        window.increaseCount = function(type) {
                  if (type === "adults") {
                    state.adultsCount++;
                    document.getElementById("adultsCount").textContent = state.adultsCount;
                  } else if (type === "children") {
                    state.childrenCount++;
                    document.getElementById("childrenCount").textContent = state.childrenCount;
                  }
                  updateTotalPrice();
                }

        window.decreaseCount = function(type) {
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
            if (document.getElementById("selectedPrice")) {
                    document.getElementById("selectedPrice").textContent = formatPrice(price);
                    document.getElementById("selectedPrice").classList.remove("hidden");
            }
                  } else {
            if (document.getElementById("selectedPrice")) {
                    document.getElementById("selectedPrice").classList.add("hidden");
            }
                  }
                }

                function updateTotalPrice() {
                  const totalPeople = state.adultsCount + state.childrenCount;

                  if (document.getElementById("totalPeople")) {
                    document.getElementById("totalPeople").textContent = totalPeople;
                  }
          if (document.getElementById("totalPeopleMobile")) {
                  document.getElementById("totalPeopleMobile").textContent = totalPeople;
          }

                  if (state.selectedDate) {
                    const dayType = getDayType(state.selectedDate);
                    const basePrice = state.priceData[dayType];
                    const totalPrice = state.adultsCount * basePrice + state.childrenCount * basePrice * 0.7;

                    if (document.getElementById("priceAmount")) {
                      document.getElementById("priceAmount").textContent = formatPrice(totalPrice);
                    }
            if (document.getElementById("priceAmountMobile")) {
                    document.getElementById("priceAmountMobile").textContent = formatPrice(totalPrice);
            }
                  }
                }

        window.checkAvailability = function() {
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
          if (resultElement) {
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
                }

                function updateAvailabilityDisplay(totalPrice) {
                  // Update selected date display
                  const options = { weekday: "long", year: "numeric", month: "long", day: "numeric" };
                  const formattedDate = state.selectedDate.toLocaleDateString("en-US", options);
          if (document.getElementById("selectedDateDisplay")) {
                  document.getElementById("selectedDateDisplay").textContent = formattedDate;
          }

                  // Update price display
          if (document.getElementById("finalPrice")) {
                  document.getElementById("finalPrice").textContent = formatPriceUSD(totalPrice);
          }

                  // Update participant count
                  let participantText = "";
                  if (state.adultsCount > 0) {
                    participantText += `${state.adultsCount} adult${state.adultsCount > 1 ? "s" : ""}`;
                  }
                  if (state.childrenCount > 0) {
                    if (participantText) participantText += ", ";
                    participantText += `${state.childrenCount} child${state.childrenCount > 1 ? "ren" : ""}`;
                  }
          if (document.getElementById("participantCount")) {
                  document.getElementById("participantCount").textContent = participantText;
          }
                }

        window.toggleDetails = function() {
                  const detailsSection = document.getElementById("detailsSection");
                  const toggleIcon = document.getElementById("toggleIcon");

          if (detailsSection && toggleIcon) {
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
                }

        window.continuePurchase = function() {
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
                });

        // Add interactive behavior for "See more" button
        document.addEventListener('DOMContentLoaded', function() {
          const seeMoreButtons = document.querySelectorAll('.see-more-link');
          seeMoreButtons.forEach(button => {
            button.addEventListener('click', function(e) {
              e.preventDefault();
              
              const isExpanded = this.dataset.expanded === 'true';
              const shortText = this.parentElement.querySelector('.full-description-short');
              const fullText = this.parentElement.querySelector('.full-description-full');
              
              if (shortText && fullText) {
                if (!isExpanded) {
                  shortText.classList.add('hidden');
                  fullText.classList.remove('hidden');
                  this.textContent = 'See less';
                  this.dataset.expanded = 'true';
                } else {
                  shortText.classList.remove('hidden');
                  fullText.classList.add('hidden');
                  this.textContent = 'See more';
                  this.dataset.expanded = 'false';
                }
              }
            });
          });
        });
              </script>
@endpush