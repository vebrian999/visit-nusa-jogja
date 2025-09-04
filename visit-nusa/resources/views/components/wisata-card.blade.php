@props(['paket'])

<div class="bg-white rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group cursor-pointer w-[320px] flex-shrink-0">
    <!-- Image Container -->
    <div class="relative h-[212px] overflow-hidden">
        <img 
            src="{{ asset($paket->gambar) }}" 
            alt="{{ $paket->nama }}"
            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
        >
        
        <!-- Discount Badge -->
        @if($paket->hasDiscount())
        <div class="absolute top-3 right-3 bg-red-500 text-white px-2 py-1 rounded-full text-xs font-medium">
            -{{ $paket->getDiscountPercentage() }}%
        </div>
        @endif

        <!-- Tour Type Badge -->
        <div class="absolute top-3 left-3 bg-primary text-secondary px-3 py-1 rounded-full text-xs font-medium">
            {{ $paket->tipe_tour }}
        </div>
    </div>

    <!-- Content -->
    <div class="p-6">
        <!-- Title -->
        <h3 class="text-xl font-semibold text-gray-800 mb-2 line-clamp-2 group-hover:text-primary transition-colors duration-200">
            {{ $paket->nama }}
        </h3>

        <!-- Description -->
        <p class="text-gray-600 text-sm mb-4 line-clamp-2">
            {{ $paket->deskripsi }}
        </p>

        <!-- Location & Duration -->
        <div class="flex items-center gap-4 mb-4 text-sm text-gray-500">
            <div class="flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <span>{{ $paket->lokasi }}</span>
            </div>
            <div class="flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span>{{ $paket->durasi }}</span>
            </div>
        </div>

        <!-- Rating -->
        <div class="flex items-center gap-2 mb-4">
            <div class="flex items-center">
                @for($i = 1; $i <= 5; $i++)
                    @if($i <= floor($paket->rating))
                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @elseif($i <= $paket->rating)
                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                            <defs>
                                <linearGradient id="half-star">
                                    <stop offset="50%" style="stop-color:#FCD34D"/>
                                    <stop offset="50%" style="stop-color:#E5E7EB"/>
                                </linearGradient>
                            </defs>
                            <path fill="url(#half-star)" d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @else
                        <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endif
                @endfor
            </div>
            <span class="text-sm font-medium text-gray-700">{{ $paket->rating }}</span>
            <span class="text-sm text-gray-500">({{ $paket->total_review }} reviews)</span>
        </div>

        <!-- Group Type -->
        <div class="mb-4">
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                {{ $paket->group_type }}
            </span>
        </div>

        <!-- Price & Action -->
        <div class="flex items-center justify-between">
            <div class="flex flex-col">
                @if($paket->hasDiscount())
                    <span class="text-sm text-gray-500 line-through">{{ $paket->formatted_harga_awal }}</span>
                    <span class="text-lg font-bold text-primary">{{ $paket->formatted_harga_diskon }}</span>
                @else
                    <span class="text-lg font-bold text-primary">{{ $paket->formatted_harga_awal }}</span>
                @endif
                <span class="text-xs text-gray-500">per person</span>
            </div>
            
            <button class="bg-primary hover:bg-yellow-600 text-secondary font-medium px-4 py-2 rounded-lg transition-colors duration-200">
                Book Now
            </button>
        </div>
    </div>
</div>

<style>
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
