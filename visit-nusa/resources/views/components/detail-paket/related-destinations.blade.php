{{-- Related Destinations Component --}}
@props(['relatedPakets'])

<!-- Card Section -->
<section id="paket-wisata" class="mt-10 py-16">
  <h1 class="text-2xl font-bold mb-3">Other destinations you may love....</h1>
  <div class="relative">
    <div id="card-slider" class="flex gap-6 overflow-x-auto scroll-smooth px-1 py-2">
      @foreach($relatedPakets as $paket)
      <div class="bg-white rounded-xl overflow-hidden max-w-sm w-[320px] flex-shrink-0 border">
        <div class="relative">
            <img src="{{ asset($paket->gambar) }}" alt="{{ $paket->nama }}" class="w-full h-[212px] object-cover" />
          <div class="absolute top-2 right-2 w-8 h-8 rounded-full flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 20 18" fill="none">
                <path d="M19 5.25C19 2.76472 16.9013 0.75 14.3125 0.75C12.3769 0.75 10.7153 1.87628 10 3.48342C9.28472 1.87628 7.62312 0.75 5.6875 0.75C3.09867 0.75 1 2.76472 1 5.25C1 12.4706 10 17.25 10 17.25C10 17.25 19 12.4706 19 5.25Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
        </div>
        <div class="p-4">
          <div class="mb-3">
              <span class="text-xs font-medium text-gray-500 uppercase tracking-wide">{{ $paket->tipe }}</span>
          </div>
            <h2 class="text-xl font-bold text-gray-900 mb-4 leading-tight">{{ $paket->nama }}</h2>
          <div class="flex items-center text-sm text-gray-600 mb-4 space-x-2">
              <span>{{ $paket->durasi }}</span>
            <span>•</span>
              <span>{{ $paket->tipe_tour }}</span>
            <span>•</span>
              <span>{{ $paket->group_type }}</span>
          </div>
          <div class="flex items-center mb-4">
            <div class="flex items-center space-x-1">
                @for ($i = 0; $i < floor($paket->rating); $i++)
              <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                @endfor
            </div>
              <span class="text-sm font-semibold text-gray-900 ml-2">{{ $paket->rating }}</span>
              <span class="text-sm text-gray-500 ml-1">({{ $paket->total_review }})</span>
          </div>
          <div class="border-t pt-4">
              @if($paket->hasDiscount())
                <div class="text-sm text-gray-500 mb-1 line-through">{{ $paket->formatted_harga_awal }}</div>
            <div class="flex items-end justify-between">
              <div class="flex items-baseline">
                    <span class="text-xl font-bold text-gray-900">{{ $paket->formatted_harga_diskon }}</span>
                <span class="text-sm text-gray-500 ml-2">Per person</span>
              </div>
            </div>
              @else
                <div class="text-sm text-gray-500 mb-1">From {{ $paket->formatted_harga_awal }}</div>
            <div class="flex items-end justify-between">
              <div class="flex items-baseline">
                    <span class="text-xl font-bold text-gray-900">{{ $paket->formatted_harga_awal }}</span>
                <span class="text-sm text-gray-500 ml-2">Per person</span>
              </div>
            </div>
              @endif
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- End of Card Section -->
