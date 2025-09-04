{{-- Product Details and Gallery Component --}}
@props(['paket'])

<!-- Title & Rating -->
<div class="mb-8">
  <h1 class="text-3xl sm:text-4xl lg:text-4xl font-bold mb-4 text-secondary leading-tight">{{ $paket->nama }}</h1>
  <div>
    <div class="flex flex-col items-center justify-between sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
      <!-- Kiri: Info Paket & Rating -->
      <div class="flex items-center gap-2">
        <span class="bg-primary text-secondary px-4 py-2 rounded-md font-semibold text-sm w-fit"> {{ $paket->tipe }} </span>
        <div class="flex items-center star-rating">
          @for ($i = 0; $i < floor($paket->rating); $i++)
          <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20" style="color: #ffb300; fill: #ffb300">
            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
          </svg>
          @endfor
          @if ($paket->rating - floor($paket->rating) >= 0.5)
          <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20" style="color: #ffb300; fill: #ffb300">
              <defs>
                <linearGradient id="half-star">
                  <stop offset="50%" style="stop-color:#ffb300"/>
                  <stop offset="50%" style="stop-color:#e5e7eb"/>
                </linearGradient>
              </defs>
              <path fill="url(#half-star)" d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0v15z" />
          </svg>
          @endif
        </div>
        <span class="text-sm font-semibold text-secondary">{{ number_format($paket->rating, 1) }}</span>
        <a href="#reviews" class="underline text-secondary text-sm font-semibold">{{ $paket->total_review }} reviews</a>
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
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z" />
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
    <div class="hidden lg:grid grid-cols-4 grid-rows-2 gap-3 h-96">
      <!-- Gambar besar kiri (2 baris x 2 kolom) -->
      <div class="col-span-2 row-span-2 rounded-xl overflow-hidden group cursor-pointer">
        <div class="w-full h-full relative">
          <img src="{{ asset($paket->gallery[0] ?? 'img/bg-hero-index.png') }}" alt="{{ $paket->nama }}" class="w-full h-full object-cover gallery-image group-hover:scale-105 transition-transform duration-500" style="aspect-ratio: 3/2" />
        </div>
      </div>
      <!-- Gambar kanan atas -->
      <div class="col-span-1 row-span-2 rounded-xl overflow-hidden group cursor-pointer">
        <div class="w-full h-full relative">
          <img src="{{ asset($paket->gallery[1] ?? 'img/bg-hero-index.png') }}" alt="{{ $paket->nama }}" class="w-full h-full object-cover gallery-image group-hover:scale-105 transition-transform duration-500" style="aspect-ratio: 3/4" />
        </div>
      </div>
      <!-- Gambar kanan bawah kiri -->
      <div class="rounded-xl overflow-hidden group cursor-pointer">
        <div class="w-full h-full relative">
          <img src="{{ asset($paket->gallery[2] ?? 'img/bg-hero-index.png') }}" alt="{{ $paket->nama }}" class="w-full h-full object-cover gallery-image group-hover:scale-105 transition-transform duration-500" style="aspect-ratio: 5/3" />
        </div>
      </div>
      <!-- Gambar kanan bawah kanan dengan overlay +10 -->
      <div class="relative rounded-xl overflow-hidden group cursor-pointer" id="viewMoreBtn">
        <div class="w-full h-full relative">
          <img src="{{ asset($paket->gallery[3] ?? 'img/bg-hero-index.png') }}" alt="{{ $paket->nama }}" class="w-full h-full object-cover gallery-image" style="aspect-ratio: 5/3" />
          <div class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center group-hover:bg-opacity-70 transition-all duration-300">
            <div class="text-white text-center">
              <div class="text-2xl font-bold mb-1">+{{ max(0, count($paket->gallery) - 4) }}</div>
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
      <img src="{{ asset($paket->gallery[0] ?? 'img/bg-hero-index.png') }}" alt="{{ $paket->nama }}" class="w-full h-64 sm:h-80 object-cover" />
    </div>
    <div class="grid grid-cols-2 gap-4">
      <img src="{{ asset($paket->gallery[1] ?? 'img/bg-hero-index.png') }}" alt="{{ $paket->nama }}" class="rounded-2xl h-32 sm:h-40 w-full object-cover" />
      <div class="relative rounded-2xl overflow-hidden cursor-pointer" id="viewMoreBtnMobile">
        <img src="{{ asset($paket->gallery[2] ?? 'img/bg-hero-index.png') }}" alt="{{ $paket->nama }}" class="w-full h-32 sm:h-40 object-cover" />
        <div class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center">
          <div class="text-white text-center">
            <div class="text-xl font-bold">+{{ max(0, count($paket->gallery) - 2) }}</div>
            <div class="text-xs">Photos</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
