@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <main class="pt-20 pb-16">
      <section class="main-container mx-auto mt-10 container">
        <!-- Search Bar & Filters -->
        <div class="mb-7">
          <!-- Top Bar with Search and Location -->
          <div class="bg-white rounded-xl border shadow-sm p-2 mb-6">
            <form method="GET" action="{{ route('paket.index') }}" id="searchForm">
              <div class="flex flex-col md:flex-row items-center gap-2 md:gap-0">
                <div class="flex w-full md:w-auto flex-1 items-center bg-white rounded-lg px-4 py-2">
                  <!-- Search Icon -->
                  <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                    <path
                      d="M9.32178 2.28564C11.3347 2.28575 13.227 3.06916 14.6489 4.49365C16.0718 5.91916 16.8569 7.80687 16.8569 9.82178C16.8568 11.5062 16.3094 13.1044 15.2983 14.4116L15.0288 14.7603L22.0972 21.8286L21.3267 22.5981L14.5688 15.8423L14.2573 15.5317L13.9097 15.8003C12.6021 16.8092 11.0062 17.3568 9.32178 17.3569C7.30612 17.3569 5.41579 16.5736 3.99365 15.1489C2.57132 13.7266 1.78575 11.8343 1.78564 9.82178C1.78564 7.9321 2.47398 6.1529 3.73389 4.76611L3.99365 4.49365C5.41613 3.07118 7.30909 2.28564 9.32178 2.28564ZM9.32178 3.32178C7.58717 3.32178 5.95422 3.99794 4.7251 5.22412V5.2251C3.49823 6.45197 2.82178 8.08747 2.82178 9.82178C2.82189 11.5562 3.49808 13.1885 4.72412 14.4175L4.7251 14.4185C5.95422 15.6447 7.58713 16.3218 9.32178 16.3218C11.0562 16.3217 12.6885 15.6445 13.9175 14.4185V14.4175C15.1442 13.1907 15.8217 11.5559 15.8218 9.82178C15.8218 8.08713 15.1447 6.45422 13.9185 5.2251C12.6912 3.99489 11.0554 3.32189 9.32178 3.32178Z"
                      fill="#6E7175"
                      stroke="#202020" />
                  </svg>
                  <!-- Search Input -->
                  <input 
                    type="text" 
                    name="search"
                    value="{{ $request->get('search') }}"
                    placeholder="Cari destinasi, kota, atau aktivitas yang kamu inginkan" 
                    class="w-full bg-transparent outline-none text-base text-gray-700 placeholder-gray-400" />
                </div>
                <!-- Divider -->
                <div class="hidden md:block h-8 w-px bg-gray-200 mx-4"></div>
                <!-- Location Selector -->
                <div class="relative flex items-center w-full md:w-auto">
                  <button id="locationDropdownBtn" type="button" class="flex items-center text-gray-700 px-2 py-2 rounded-lg hover:bg-gray-50 transition text-base font-medium w-full md:w-auto">
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="20" height="23" viewBox="0 0 20 23" fill="none">
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M13 9.75076C13 8.13927 11.6569 6.8335 10.0006 6.8335C8.34308 6.8335 7 8.13927 7 9.75076C7 11.3611 8.34308 12.6668 10.0006 12.6668C11.6569 12.6668 13 11.3611 13 9.75076Z"
                        stroke="#202020"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M9.99941 22C8.56124 22 1 16.0481 1 9.82384C1 4.95108 5.02852 1 9.99941 1C14.9703 1 19 4.95108 19 9.82384C19 16.0481 11.4376 22 9.99941 22Z"
                        stroke="#202020"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                    <span id="selectedLocation" class="mr-1">
                      {{ $request->get('location') ?: 'Pilih Lokasi' }}
                    </span>
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </button>
                  <!-- Dropdown -->
                  <div id="locationDropdown" class="absolute left-0 top-12 z-20 w-48 bg-white rounded-lg shadow-lg border border-gray-100 py-2 hidden">
                    <button type="button" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100" data-location="">Semua Lokasi</button>
                    @foreach($locations as $location)
                      <button type="button" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100" data-location="{{ $location }}">{{ $location }}</button>
                    @endforeach
                  </div>
                  <input type="hidden" name="location" id="locationInput" value="{{ $request->get('location') }}">
                </div>
                <!-- Divider -->
                <div class="hidden md:block h-8 w-px bg-gray-200 mx-4"></div>
                <!-- Cari Button -->
                <div class="w-full md:w-auto flex justify-end">
                  <button type="submit" class="bg-primary hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg text-base transition-colors w-full md:w-auto">Cari</button>
                </div>
              </div>
            </form>
          </div>

          <!-- Filter Tags Row -->
          <div class="flex flex-wrap items-center gap-2 mb-2">
            @foreach($types as $key => $label)
              <button 
                type="button"
                class="filter-type px-4 py-2.5 border border-gray-300 rounded-lg text-sm font-semibold text-secondary hover:bg-primary hover:text-black transition-colors {{ $request->get('type') == $key ? 'bg-primary text-black' : '' }}"
                data-type="{{ $key }}">
                {{ $label }}
              </button>
            @endforeach
            
            <!-- Filters Button with Icon -->
            <button id="filtersDropdownBtn" class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-secondary flex items-center gap-2 hover:bg-primary hover:text-black transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path
                  d="M10.5 6H20.25M10.5 6C10.5 6.39782 10.342 6.77936 10.0607 7.06066C9.77936 7.34196 9.39782 7.5 9 7.5C8.60218 7.5 8.22064 7.34196 7.93934 7.06066C7.65804 6.77936 7.5 6.39782 7.5 6M10.5 6C10.5 5.60218 10.342 5.22064 10.0607 4.93934C9.77936 4.65804 9.39782 4.5 9 4.5C8.60218 4.5 8.22064 4.65804 7.93934 4.93934C7.65804 5.22064 7.5 5.60218 7.5 6M7.5 6H3.75M10.5 18H20.25M10.5 18C10.5 18.3978 10.342 18.7794 10.0607 19.0607C9.77936 19.342 9.39782 19.5 9 19.5C8.60218 19.5 8.22064 19.342 7.93934 19.0607C7.65804 18.7794 7.5 18.3978 7.5 18M10.5 18C10.5 17.6022 10.342 17.2206 10.0607 16.9393C9.77936 16.658 9.39782 16.5 9 16.5C8.60218 16.5 8.22064 16.658 7.93934 16.9393C7.65804 17.2206 7.5 17.6022 7.5 18M7.5 18H3.75M16.5 12H20.25M16.5 12C16.5 12.3978 16.342 12.7794 16.0607 13.0607C15.7794 13.342 15.3978 13.5 15 13.5C14.6022 13.5 14.2206 13.342 13.9393 13.0607C13.658 12.7794 13.5 12.3978 13.5 12M16.5 12C16.5 11.6022 16.342 11.2206 16.0607 10.9393C15.7794 10.658 15.3978 10.5 15 10.5C14.6022 10.5 14.2206 10.658 13.9393 10.9393C13.658 11.2206 13.5 11.6022 13.5 12M13.5 12H3.75"
                  stroke="currentColor"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
              Filters
              <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>
          </div>

          <!-- Advanced Filters Panel (Hidden by default) -->
          <div id="filtersPanel" class="hidden bg-white border rounded-lg p-4 mt-2">
            <form method="GET" action="{{ route('paket.index') }}" id="filtersForm">
              <!-- Keep existing search and location -->
              <input type="hidden" name="search" value="{{ $request->get('search') }}">
              <input type="hidden" name="location" value="{{ $request->get('location') }}">
              <input type="hidden" name="type" value="{{ $request->get('type') }}">
              
              <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Price Range -->
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-2">Rentang Harga</label>
                  <div class="flex gap-2">
                    <input 
                      type="number" 
                      name="min_price" 
                      value="{{ $request->get('min_price') }}"
                      placeholder="Min" 
                      class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm">
                    <input 
                      type="number" 
                      name="max_price" 
                      value="{{ $request->get('max_price') }}"
                      placeholder="Max" 
                      class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm">
                  </div>
                </div>
                
                <!-- Sorting -->
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-2">Urutkan</label>
                  <select name="sort" class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm">
                    <option value="recommended" {{ $request->get('sort') == 'recommended' ? 'selected' : '' }}>Direkomendasikan</option>
                    <option value="price_low" {{ $request->get('sort') == 'price_low' ? 'selected' : '' }}>Harga Terendah</option>
                    <option value="price_high" {{ $request->get('sort') == 'price_high' ? 'selected' : '' }}>Harga Tertinggi</option>
                    <option value="rating" {{ $request->get('sort') == 'rating' ? 'selected' : '' }}>Rating Tertinggi</option>
                    <option value="newest" {{ $request->get('sort') == 'newest' ? 'selected' : '' }}>Terbaru</option>
                  </select>
                </div>
                
                <!-- Action Buttons -->
                <div class="flex items-end gap-2">
                  <button type="submit" class="bg-primary text-black px-4 py-2 rounded-md text-sm font-medium hover:bg-yellow-500 transition">
                    Terapkan Filter
                  </button>
                  <a href="{{ route('paket.index') }}" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-300 transition">
                    Reset
                  </a>
                </div>
              </div>
            </form>
          </div>
        </div>

        <!-- Results Info & Sort -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6 gap-2">
          <div class="flex items-center space-x-2 text-[#202020] text-opacity-70 font-semibold text-sm">
            <span>{{ $pakets->total() }} paket wisata ditemukan</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18" viewBox="0 0 17 18" fill="none">
              <path
                d="M11.1562 11.6562L9.39321 9.89321M9.39321 9.89321C9.6152 9.67122 9.79129 9.40767 9.91143 9.11763C10.0316 8.82758 10.0934 8.51671 10.0934 8.20277C10.0934 7.88883 10.0316 7.57796 9.91143 7.28791C9.79129 6.99787 9.6152 6.73432 9.39321 6.51233C9.17122 6.29034 8.90767 6.11425 8.61763 5.99411C8.32758 5.87397 8.01671 5.81213 7.70277 5.81213C7.38883 5.81213 7.07796 5.87397 6.78791 5.99411C6.49787 6.11425 6.23432 6.29034 6.01233 6.51233C5.56391 6.96076 5.31198 7.56896 5.31198 8.20312C5.31198 8.83729 5.56391 9.44549 6.01233 9.89392C6.46076 10.3423 7.06896 10.5943 7.70312 10.5943C8.33729 10.5943 8.94549 10.3423 9.39392 9.89392L9.39321 9.89321ZM14.875 9C14.875 9.83718 14.7101 10.6662 14.3897 11.4396C14.0694 12.2131 13.5998 12.9158 13.0078 13.5078C12.4158 14.0998 11.7131 14.5694 10.9396 14.8897C10.1662 15.2101 9.33718 15.375 8.5 15.375C7.66282 15.375 6.83384 15.2101 6.06039 14.8897C5.28694 14.5694 4.58417 14.0998 3.99219 13.5078C3.40022 12.9158 2.93064 12.2131 2.61027 11.4396C2.28989 10.6662 2.125 9.83718 2.125 9C2.125 7.30924 2.79665 5.68774 3.99219 4.49219C5.18774 3.29665 6.80924 2.625 8.5 2.625C10.1908 2.625 11.8123 3.29665 13.0078 4.49219C14.2034 5.68774 14.875 7.30924 14.875 9Z"
                stroke="#202020"
                stroke-opacity="0.7"
                stroke-width="0.8"
                stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </div>
          <div class="flex items-center gap-2 text-sm">
            <span class="text-[#202020] text-sm font-medium">Urutkan berdasarkan:</span>
            <form method="GET" action="{{ route('paket.index') }}" class="inline">
              <!-- Keep existing filters -->
              <input type="hidden" name="search" value="{{ $request->get('search') }}">
              <input type="hidden" name="location" value="{{ $request->get('location') }}">
              <input type="hidden" name="type" value="{{ $request->get('type') }}">
              <input type="hidden" name="min_price" value="{{ $request->get('min_price') }}">
              <input type="hidden" name="max_price" value="{{ $request->get('max_price') }}">
              
              <select name="sort" onchange="this.form.submit()" class="font-semibold text-[#202020] hover:text-secondary underline transition bg-transparent border-none">
                <option value="recommended" {{ $request->get('sort') == 'recommended' ? 'selected' : '' }}>Direkomendasikan</option>
                <option value="price_low" {{ $request->get('sort') == 'price_low' ? 'selected' : '' }}>Harga Terendah</option>
                <option value="price_high" {{ $request->get('sort') == 'price_high' ? 'selected' : '' }}>Harga Tertinggi</option>
                <option value="rating" {{ $request->get('sort') == 'rating' ? 'selected' : '' }}>Rating Tertinggi</option>
                <option value="newest" {{ $request->get('sort') == 'newest' ? 'selected' : '' }}>Terbaru</option>
              </select>
            </form>
          </div>
        </div>

        <!-- Tour Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 mb-8">
          @forelse($pakets as $paket)
            <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300">
              <div class="relative">
                <img
                  src="{{ asset($paket->gambar) }}"
                  alt="{{ $paket->nama }}"
                  class="w-full h-48 object-cover" />
                <button class="absolute top-3 right-3 w-8 h-8 bg-black bg-opacity-30 rounded-full flex items-center justify-center hover:bg-opacity-50 transition-colors">
                  <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                  </svg>
                </button>
                
                @if($paket->hasDiscount())
                  <div class="absolute top-3 left-3 bg-red-500 text-white px-2 py-1 rounded-full text-xs font-medium">
                    -{{ $paket->getDiscountPercentage() }}%
                  </div>
                @endif
              </div>
              <div class="p-4">
                <div class="mb-2">
                  <span class="text-xs font-semibold text-gray-500 uppercase tracking-wide">{{ str_replace('_', ' ', $paket->tipe) }}</span>
                </div>
                <h3 class="text-lg font-semibold text-secondary mb-3 line-clamp-2">{{ $paket->nama }}</h3>
                <div class="flex flex-wrap items-center text-sm text-gray-600 mb-3 gap-1">
                  <span>{{ $paket->durasi }}</span>
                  <span>•</span>
                  <span>{{ $paket->tipe_tour }}</span>
                  <span>•</span>
                  <span>{{ $paket->group_type }}</span>
                </div>
                <div class="flex items-center mb-4">
                  <div class="flex items-center">
                    <div class="flex text-primary">
                      @for($i = 1; $i <= 5; $i++)
                        @if($i <= floor($paket->rating))
                          <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                        @elseif($i <= $paket->rating)
                          <svg class="w-4 h-4 text-primary" viewBox="0 0 20 20">
                            <defs>
                              <linearGradient id="half-star-{{ $paket->id }}">
                                <stop offset="50%" style="stop-color:#FCD34D"/>
                                <stop offset="50%" style="stop-color:#E5E7EB"/>
                              </linearGradient>
                            </defs>
                            <path fill="url(#half-star-{{ $paket->id }})" d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                          </svg>
                        @else
                          <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                        @endif
                      @endfor
                    </div>
                    <span class="text-sm font-semibold text-secondary ml-2">{{ number_format($paket->rating, 1) }}</span>
                    <span class="text-sm text-gray-500 ml-1">({{ $paket->total_review }})</span>
                  </div>
                </div>
                <div class="border-t pt-3">
                  @if($paket->hasDiscount())
                    <div class="text-sm text-gray-500 mb-1 line-through">{{ $paket->formatted_harga_awal }}</div>
                    <div class="flex items-baseline justify-between">
                      <div>
                        <span class="text-xl font-bold text-secondary">{{ $paket->formatted_harga_diskon }}</span>
                        <span class="text-sm text-gray-500 ml-1">Per person</span>
                      </div>
                    </div>
                  @else
                    <div class="text-sm text-gray-500 mb-1">From {{ $paket->formatted_harga_awal }}</div>
                    <div class="flex items-baseline justify-between">
                      <div>
                        <span class="text-xl font-bold text-secondary">{{ $paket->formatted_harga_awal }}</span>
                        <span class="text-sm text-gray-500 ml-1">Per person</span>
                      </div>
                    </div>
                  @endif
                </div>
                
                <!-- Action Button -->
                <div class="mt-4">
                  <a href="{{ route('paket.show', $paket->id) }}" class="w-full bg-primary hover:bg-yellow-500 text-black font-semibold py-2 px-4 rounded-lg transition-colors text-center block">
                    Lihat Detail
                  </a>
                </div>
              </div>
            </div>
          @empty
            <div class="col-span-full text-center py-12">
              <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6-4h6m2 5.291A7.962 7.962 0 0112 15c-2.34 0-4.29-1.044-5.709-2.709m0 0a7.962 7.962 0 01-2.291-5.291c0-2.99 1.352-5.709 3.709-7.291m0 0A7.962 7.962 0 0112 1c2.34 0 4.29 1.044 5.709 2.709m0 0a7.962 7.962 0 012.291 5.291c0 2.99-1.352 5.709-3.709 7.291" />
              </svg>
              <h3 class="mt-2 text-sm font-medium text-gray-900">Tidak ada paket wisata ditemukan</h3>
              <p class="mt-1 text-sm text-gray-500">Coba ubah filter pencarian Anda atau <a href="{{ route('paket.index') }}" class="text-primary hover:underline">reset filter</a>.</p>
            </div>
          @endforelse
        </div>

        <!-- Pagination -->
        @if($pakets->hasPages())
          <div class="flex justify-center">
            {{ $pakets->links('pagination::tailwind') }}
          </div>
        @endif
      </section>

      <!-- Show More Button Section (if not using pagination) -->
      @if(!$pakets->hasPages() && $pakets->count() >= 12)
        <section class="py-12 mx-auto main-container container">
          <!-- Show More Button Component -->
          <div class="relative flex items-center justify-center">
            <!-- Left line -->
            <div class="flex-1 h-[1.5px] bg-primary"></div>

            <!-- Button -->
            <div class="mx-6 sm:mx-8">
              <button
                class="inline-flex items-center justify-center px-6 py-3 sm:px-8 sm:py-3 text-sm sm:text-base font-medium text-primary border-2 border-primary rounded-full hover:border-primary hover:text-primary focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 transition-all duration-200 ease-in-out transform hover:scale-105 active:scale-95 shadow-sm hover:shadow-md">
                Show more
              </button>
            </div>

            <!-- Right line -->
            <div class="flex-1 h-[1.5px] bg-primary"></div>
          </div>
        </section>
      @endif
    </main>

    <!-- Hidden form inputs for type filter -->
    <form id="typeFilterForm" method="GET" action="{{ route('paket.index') }}" style="display: none;">
      <input type="hidden" name="search" value="{{ $request->get('search') }}">
      <input type="hidden" name="location" value="{{ $request->get('location') }}">
      <input type="hidden" name="min_price" value="{{ $request->get('min_price') }}">
      <input type="hidden" name="max_price" value="{{ $request->get('max_price') }}">
      <input type="hidden" name="sort" value="{{ $request->get('sort') }}">
      <input type="hidden" name="type" id="typeInput" value="">
    </form>

@endsection

@push('styles')
<style>
  .line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
</style>
@endpush

@push('scripts')
<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Location dropdown functionality
    const locationBtn = document.getElementById("locationDropdownBtn");
    const locationDropdown = document.getElementById("locationDropdown");
    const selectedLocation = document.getElementById("selectedLocation");
    const locationInput = document.getElementById("locationInput");
    let isLocationOpen = false;

    locationBtn.addEventListener("click", function (e) {
      e.stopPropagation();
      locationDropdown.classList.toggle("hidden");
      isLocationOpen = !isLocationOpen;
    });

    locationDropdown.querySelectorAll("button[data-location]").forEach((item) => {
      item.addEventListener("click", function () {
        const location = this.getAttribute("data-location");
        selectedLocation.textContent = location || "Pilih Lokasi";
        locationInput.value = location;
        locationDropdown.classList.add("hidden");
        isLocationOpen = false;
      });
    });

    // Close dropdown when clicking outside
    document.addEventListener("click", function () {
      if (isLocationOpen) {
        locationDropdown.classList.add("hidden");
        isLocationOpen = false;
      }
    });

    // Type filter functionality
    const typeButtons = document.querySelectorAll(".filter-type");
    const typeForm = document.getElementById("typeFilterForm");
    const typeInput = document.getElementById("typeInput");

    typeButtons.forEach((button) => {
      button.addEventListener("click", function () {
        const type = this.getAttribute("data-type");
        
        // Toggle active state
        typeButtons.forEach(btn => {
          btn.classList.remove("bg-primary", "text-black");
          btn.classList.add("text-secondary");
        });
        
        // If clicking the same button, remove filter
        if (typeInput.value === type) {
          typeInput.value = "";
        } else {
          this.classList.add("bg-primary", "text-black");
          this.classList.remove("text-secondary");
          typeInput.value = type;
        }
        
        // Submit form
        typeForm.submit();
      });
    });

    // Filters panel toggle
    const filtersBtn = document.getElementById("filtersDropdownBtn");
    const filtersPanel = document.getElementById("filtersPanel");

    filtersBtn.addEventListener("click", function () {
      filtersPanel.classList.toggle("hidden");
    });

    // Heart/favorite buttons
    const heartButtons = document.querySelectorAll('button[class*="absolute top-3 right-3"]');
    heartButtons.forEach((button) => {
      button.addEventListener("click", function (e) {
        e.preventDefault();
        const svg = this.querySelector("svg");
        const path = svg.querySelector("path");

        if (path.getAttribute("fill") === "currentColor") {
          path.setAttribute("fill", "none");
          svg.classList.remove("text-red-500");
          svg.classList.add("text-white");
        } else {
          path.setAttribute("fill", "currentColor");
          svg.classList.add("text-red-500");
          svg.classList.remove("text-white");
        }
      });
    });

    // Search form submit on Enter
    const searchInput = document.querySelector('input[name="search"]');
    if (searchInput) {
      searchInput.addEventListener("keypress", function (e) {
        if (e.key === "Enter") {
          document.getElementById("searchForm").submit();
        }
      });
    }
  });
</script>
@endpush
