@extends('layouts.app')

@push('styles')
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet" />
@endpush

@section('content')
    <main class="pt-20 min-h-screen bg-gray-50">
      <!-- Wishlist Container -->
      <div class="main-container mx-auto px-4 py-8">
        <!-- Header Section -->
        <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
          <div class="flex items-center justify-between mb-4">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
                <!-- Heart Icon Placeholder -->
                <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path
                      d="M21 8.25C21 5.76472 18.9013 3.75 16.3125 3.75C14.3769 3.75 12.7153 4.87628 12 6.48342C11.2847 4.87628 9.62312 3.75 7.6875 3.75C5.09867 3.75 3 5.76472 3 8.25C3 15.4706 12 20.25 12 20.25C12 20.25 21 15.4706 21 8.25Z"
                      fill="#FFB300"
                      stroke="white"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                </div>
              </div>
              <div>
                <h1 class="text-2xl font-bold text-gray-900">My Wishlist</h1>
                <p class="text-gray-600 text-sm font-normal"><span id="wishlist-count">4</span> activities</p>
              </div>
            </div>

            <!-- Info Button -->
            <button class="transition-colors">
              <!-- Info Icon Placeholder -->
              <div class="w-8 h-8 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <circle cx="10" cy="10" r="9.25" stroke="#FFB300" stroke-width="1.5" />
                  <circle cx="6" cy="10" r="1" fill="#FFB300" />
                  <circle cx="10" cy="10" r="1" fill="#FFB300" />
                  <circle cx="14" cy="10" r="1" fill="#FFB300" />
                </svg>
              </div>
            </button>
          </div>

          <!-- Search Bar -->
          <div class="relative mb-4">
            <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
              <!-- Search Icon Placeholder -->
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                  <path
                    d="M16.4999 16.5002L12.1691 12.1693M12.1691 12.1693C13.3412 10.9972 13.9997 9.40741 13.9997 7.74975C13.9997 6.09208 13.3412 4.50231 12.1691 3.33016C10.9969 2.15802 9.40717 1.49951 7.7495 1.49951C6.09184 1.49951 4.50207 2.15802 3.32992 3.33016C2.15777 4.50231 1.49927 6.09208 1.49927 7.74975C1.49927 9.40741 2.15777 10.9972 3.32992 12.1693C4.50207 13.3415 6.09184 14 7.7495 14C9.40717 14 10.9969 13.3415 12.1691 12.1693Z"
                    stroke="black"
                    stroke-opacity="0.5"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </div>
            </div>
            <input
              type="text"
              placeholder="Search in Wishlist"
              class="w-full pl-10 pr-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all text-secondary"
              id="search-input" />
          </div>

          <!-- Sort Section -->
          <div class="flex items-center gap-2">
            <span class="text-sm font-semibold text-secondary">Sort by:</span>
            <div class="relative">
              <select
                id="sort-select"
                class="appearance-none bg-white border border-gray-200 rounded-lg px-4 py-2 pr-8 text-sm font-semibold text-secondary focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all cursor-pointer">
                <option value="newest">Newest Added</option>
                <option value="oldest">Oldest Added</option>
                <option value="price-low">Price: Low to High</option>
                <option value="price-high">Price: High to Low</option>
                <option value="rating">Highest Rated</option>
              </select>
              <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                <!-- Dropdown Arrow Placeholder -->
                <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none">
                    <path d="M9.5 1L5 5L0.5 1" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Wishlist Items Grid -->
        <div class="grid gap-6" id="wishlist-grid">
          <!-- Wishlist Item 1 -->
          <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden wishlist-item" data-category="day-trip" data-price="34.52" data-rating="5.0" data-date="2024-01-15">
            <div class="flex flex-col md:flex-row">
              <!-- Image Section -->
              <div class="relative flex items-center justify-center bg-gray-100 overflow-hidden w-full h-[180px] md:h-[258px] md:w-[320px]">
                <img
                  src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                  alt="Yogyakarta: Borobudur sunrise"
                  class="absolute inset-0 w-full h-full object-cover transition-transform duration-300 hover:scale-105" />
                <!-- Heart Icon Overlay -->
                <button class="absolute top-3 left-3 w-8 h-8 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white transition-colors shadow-sm">
                  <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path
                        d="M21 8.25C21 5.76472 18.9013 3.75 16.3125 3.75C14.3769 3.75 12.7153 4.87628 12 6.48342C11.2847 4.87628 9.62312 3.75 7.6875 3.75C5.09867 3.75 3 5.76472 3 8.25C3 15.4706 12 20.25 12 20.25C12 20.25 21 15.4706 21 8.25Z"
                        fill="#FFB300"
                        stroke="white"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </div>
                </button>
                <!-- Category Badge -->
                <div class="absolute top-3 right-3 bg-primary text-black px-3 py-1 rounded-full text-xs font-medium">DAY TRIP</div>
              </div>

              <!-- Content Section -->
              <div class="flex-1 p-6">
                <div class="flex flex-col h-full">
                  <!-- Title and Description -->
                  <div class="flex-1">
                    <h3 class="text-xl font-bold text-gray-900 mb-2 line-clamp-2">Yogyakarta: Borobudur sunrise (guarantee climb up) & Prambanan</h3>
                    <div class="flex items-center text-sm text-gray-600 mb-4 space-x-2">
                      <span>7 hours</span>
                      <span>•</span>
                      <span>Private tour</span>
                      <span>•</span>
                      <span>Small group</span>
                    </div>
                  </div>

                  <!-- Rating and Price Section -->
                  <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                      <!-- Rating Stars -->
                      <div class="flex items-center gap-1">
                        <span class="text-lg font-bold text-gray-900">5.0</span>
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
                      </div>
                      <span class="text-sm text-gray-500">(4,212 reviews)</span>
                    </div>

                    <!-- Price Section -->
                    <div class="text-right">
                      <p class="text-sm text-gray-600">From</p>
                      <p class="text-2xl font-bold text-gray-900">$34.52</p>
                      <p class="text-sm text-gray-500">per person</p>
                    </div>
                  </div>

                  <!-- Action Buttons -->
                  <div class="flex gap-3 mt-4">
                    <button class="flex-1 bg-primary hover:bg-primary/90 text-black font-medium py-3 px-6 rounded-lg transition-colors">View Details</button>
                    <button class="px-4 py-3 border border-gray-200 hover:border-gray-300 rounded-lg transition-colors remove-wishlist" title="Remove from wishlist">
                      <div class="rounded-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                      </div>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Additional Wishlist Items (duplicated for demo) -->
          <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden wishlist-item" data-category="day-trip" data-price="45.00" data-rating="4.8" data-date="2024-01-10">
            <div class="flex flex-col md:flex-row">
              <div class="relative flex items-center justify-center bg-gray-100 overflow-hidden w-full h-[180px] md:h-[258px] md:w-[320px]">
                <img
                  src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?q=80&w=738&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                  alt="Yogyakarta: Borobudur sunrise"
                  class="absolute inset-0 w-full h-full object-cover transition-transform duration-300 hover:scale-105" />
                <!-- Heart Icon Overlay -->
                <button class="absolute top-3 left-3 w-8 h-8 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white transition-colors shadow-sm">
                  <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path
                        d="M21 8.25C21 5.76472 18.9013 3.75 16.3125 3.75C14.3769 3.75 12.7153 4.87628 12 6.48342C11.2847 4.87628 9.62312 3.75 7.6875 3.75C5.09867 3.75 3 5.76472 3 8.25C3 15.4706 12 20.25 12 20.25C12 20.25 21 15.4706 21 8.25Z"
                        fill="#FFB300"
                        stroke="white"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </div>
                </button>
                <div class="absolute top-4 right-4 bg-primary text-black px-3 py-1 rounded-full text-xs font-medium">CULTURAL</div>
              </div>
              <div class="flex-1 p-6">
                <div class="flex flex-col h-full">
                  <div class="flex-1">
                    <h3 class="text-xl font-bold text-gray-900 mb-2 line-clamp-2">Bali: Traditional Temple & Cultural Experience Tour</h3>
                    <div class="flex items-center text-sm text-gray-600 mb-4 space-x-2">
                      <span>7 hours</span>
                      <span>•</span>
                      <span>Private tour</span>
                      <span>•</span>
                      <span>Small group</span>
                    </div>
                  </div>
                  <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                      <div class="flex items-center gap-1">
                        <span class="text-lg font-bold text-gray-900">4.8</span>
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
                      </div>
                      <span class="text-sm text-gray-500">(2,847 reviews)</span>
                    </div>
                    <div class="text-right">
                      <p class="text-sm text-gray-600">From</p>
                      <p class="text-2xl font-bold text-gray-900">$45.00</p>
                      <p class="text-sm text-gray-500">per person</p>
                    </div>
                  </div>
                  <div class="flex gap-3 mt-4">
                    <button class="flex-1 bg-primary hover:bg-primary/90 text-black font-medium py-3 px-6 rounded-lg transition-colors">View Details</button>
                    <button class="px-4 py-3 border border-gray-200 hover:border-gray-300 rounded-lg transition-colors remove-wishlist" title="Remove from wishlist">
                      <div class="rounded-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                      </div>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- More items... -->
          <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden wishlist-item" data-category="adventure" data-price="89.99" data-rating="4.9" data-date="2024-01-05">
            <div class="flex flex-col md:flex-row">
              <div class="relative flex items-center justify-center bg-gray-100 overflow-hidden w-full h-[180px] md:h-[258px] md:w-[320px]">
                <img
                  src="https://images.unsplash.com/photo-1637292872273-1fc99340ac04?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                  alt="Yogyakarta: Borobudur sunrise"
                  class="absolute inset-0 w-full h-full object-cover transition-transform duration-300 hover:scale-105" />
                <!-- Heart Icon Overlay -->
                <button class="absolute top-3 left-3 w-8 h-8 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white transition-colors shadow-sm">
                  <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path
                        d="M21 8.25C21 5.76472 18.9013 3.75 16.3125 3.75C14.3769 3.75 12.7153 4.87628 12 6.48342C11.2847 4.87628 9.62312 3.75 7.6875 3.75C5.09867 3.75 3 5.76472 3 8.25C3 15.4706 12 20.25 12 20.25C12 20.25 21 15.4706 21 8.25Z"
                        fill="#FFB300"
                        stroke="white"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </div>
                </button>
                <div class="absolute top-4 right-4 bg-primary text-black px-3 py-1 rounded-full text-xs font-medium">ADVENTURE</div>
              </div>
              <div class="flex-1 p-6">
                <div class="flex flex-col h-full">
                  <div class="flex-1">
                    <h3 class="text-xl font-bold text-gray-900 mb-2 line-clamp-2">Mount Bromo Sunrise Trek & Crater Adventure Tour</h3>
                    <div class="flex items-center text-sm text-gray-600 mb-4 space-x-2">
                      <span>7 hours</span>
                      <span>•</span>
                      <span>Private tour</span>
                      <span>•</span>
                      <span>Small group</span>
                    </div>
                  </div>
                  <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                      <div class="flex items-center gap-1">
                        <span class="text-lg font-bold text-gray-900">4.9</span>
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
                      </div>
                      <span class="text-sm text-gray-500">(1,532 reviews)</span>
                    </div>
                    <div class="text-right">
                      <p class="text-sm text-gray-600">From</p>
                      <p class="text-2xl font-bold text-gray-900">$89.99</p>
                      <p class="text-sm text-gray-500">per person</p>
                    </div>
                  </div>
                  <div class="flex gap-3 mt-4">
                    <button class="flex-1 bg-primary hover:bg-primary/90 text-black font-medium py-3 px-6 rounded-lg transition-colors">View Details</button>
                    <button class="px-4 py-3 border border-gray-200 hover:border-gray-300 rounded-lg transition-colors remove-wishlist" title="Remove from wishlist">
                      <div class="rounded-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                      </div>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden wishlist-item" data-category="day-trip" data-price="28.75" data-rating="4.7" data-date="2024-01-01">
            <div class="flex flex-col md:flex-row">
              <div class="relative flex items-center justify-center bg-gray-100 overflow-hidden w-full h-[180px] md:h-[258px] md:w-[320px]">
                <img
                  src="https://images.unsplash.com/photo-1555899434-94d1368aa7af?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                  alt="Yogyakarta: Borobudur sunrise"
                  class="absolute inset-0 w-full h-full object-cover transition-transform duration-300 hover:scale-105" />
                <!-- Heart Icon Overlay -->
                <button class="absolute top-3 left-3 w-8 h-8 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white transition-colors shadow-sm">
                  <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path
                        d="M21 8.25C21 5.76472 18.9013 3.75 16.3125 3.75C14.3769 3.75 12.7153 4.87628 12 6.48342C11.2847 4.87628 9.62312 3.75 7.6875 3.75C5.09867 3.75 3 5.76472 3 8.25C3 15.4706 12 20.25 12 20.25C12 20.25 21 15.4706 21 8.25Z"
                        fill="#FFB300"
                        stroke="white"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </div>
                </button>
                <div class="absolute top-4 right-4 bg-primary text-black px-3 py-1 rounded-full text-xs font-medium">CITY TOUR</div>
              </div>
              <div class="flex-1 p-6">
                <div class="flex flex-col h-full">
                  <div class="flex-1">
                    <h3 class="text-xl font-bold text-gray-900 mb-2 line-clamp-2">Jakarta: Old Town Heritage & Modern City Discovery Tour</h3>
                    <div class="flex items-center text-sm text-gray-600 mb-4 space-x-2">
                      <span>7 hours</span>
                      <span>•</span>
                      <span>Private tour</span>
                      <span>•</span>
                      <span>Small group</span>
                    </div>
                  </div>
                  <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                      <div class="flex items-center gap-1">
                        <span class="text-lg font-bold text-gray-900">4.7</span>
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
                      </div>
                      <span class="text-sm text-gray-500">(956 reviews)</span>
                    </div>
                    <div class="text-right">
                      <p class="text-sm text-gray-600">From</p>
                      <p class="text-2xl font-bold text-gray-900">$28.75</p>
                      <p class="text-sm text-gray-500">per person</p>
                    </div>
                  </div>
                  <div class="flex gap-3 mt-4">
                    <button class="flex-1 bg-primary hover:bg-primary/90 text-black font-medium py-3 px-6 rounded-lg transition-colors">View Details</button>
                    <button class="px-4 py-3 border border-gray-200 hover:border-gray-300 rounded-lg transition-colors remove-wishlist" title="Remove from wishlist">
                      <div class="rounded-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                      </div>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Empty State (Initially Hidden) -->
        <div id="empty-state" class="bg-white rounded-lg shadow-sm p-12 text-center hidden">
          <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
            <!-- Empty Heart Icon Placeholder -->
            <div class="w-12 h-12 bg-gray-300 rounded-full"></div>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Your wishlist is empty</h3>
          <p class="text-gray-600 mb-6">Start adding activities you love to keep track of them here.</p>
          <button class="bg-primary hover:bg-primary/90 text-black font-medium py-3 px-8 rounded-lg transition-colors">Explore Activities</button>
        </div>
      </div>
    </main>

@endsection

@push('scripts')
  <script>
    // Wishlist functionality
    document.addEventListener("DOMContentLoaded", function () {
      const searchInput = document.getElementById("search-input");
      const sortSelect = document.getElementById("sort-select");
      const wishlistGrid = document.getElementById("wishlist-grid");
      const wishlistCount = document.getElementById("wishlist-count");
      const emptyState = document.getElementById("empty-state");
      const removeButtons = document.querySelectorAll(".remove-wishlist");

      let wishlistItems = Array.from(document.querySelectorAll(".wishlist-item"));

      // Update wishlist count
      function updateWishlistCount() {
        const visibleItems = wishlistItems.filter((item) => !item.classList.contains("hidden"));
        wishlistCount.textContent = visibleItems.length;

        if (visibleItems.length === 0) {
          wishlistGrid.classList.add("hidden");
          emptyState.classList.remove("hidden");
        } else {
          wishlistGrid.classList.remove("hidden");
          emptyState.classList.add("hidden");
        }
      }

      // Search functionality
      searchInput.addEventListener("input", function () {
        const searchTerm = this.value.toLowerCase();

        wishlistItems.forEach((item) => {
          const title = item.querySelector("h3").textContent.toLowerCase();
          const category = item.dataset.category.toLowerCase();

          if (title.includes(searchTerm) || category.includes(searchTerm)) {
            item.style.display = "block";
          } else {
            item.style.display = "none";
          }
        });

        updateWishlistCount();
      });

      // Sort functionality
      sortSelect.addEventListener("change", function () {
        const sortBy = this.value;
        const container = wishlistGrid;

        let sortedItems = [...wishlistItems];

        switch (sortBy) {
          case "newest":
            sortedItems.sort((a, b) => new Date(b.dataset.date) - new Date(a.dataset.date));
            break;
          case "oldest":
            sortedItems.sort((a, b) => new Date(a.dataset.date) - new Date(b.dataset.date));
            break;
          case "price-low":
            sortedItems.sort((a, b) => parseFloat(a.dataset.price) - parseFloat(b.dataset.price));
            break;
          case "price-high":
            sortedItems.sort((a, b) => parseFloat(b.dataset.price) - parseFloat(a.dataset.price));
            break;
          case "rating":
            sortedItems.sort((a, b) => parseFloat(b.dataset.rating) - parseFloat(a.dataset.rating));
            break;
        }

        // Reorder items in DOM
        sortedItems.forEach((item) => {
          container.appendChild(item);
        });
      });

      // Remove from wishlist functionality
      removeButtons.forEach((button) => {
        button.addEventListener("click", function (e) {
          e.preventDefault();

          const wishlistItem = this.closest(".wishlist-item");

          // Add fade out animation
          wishlistItem.style.opacity = "0";
          wishlistItem.style.transform = "translateX(100px)";
          wishlistItem.style.transition = "all 0.3s ease-out";

          setTimeout(() => {
            wishlistItem.remove();
            wishlistItems = wishlistItems.filter((item) => item !== wishlistItem);
            updateWishlistCount();
          }, 300);
        });
      });

      // Mobile sidebar functionality
      const mobileMenuButton = document.getElementById("mobile-menu-button");
      const mobileSidebar = document.getElementById("mobile-sidebar");
      const sidebarOverlay = document.getElementById("sidebar-overlay");
      const sidebarClose = document.getElementById("sidebar-close");

      function openSidebar() {
        mobileSidebar.classList.remove("pointer-events-none");
        sidebarOverlay.classList.remove("opacity-0");
        sidebarOverlay.classList.add("opacity-100");
        document.getElementById("sidebar-panel").classList.remove("translate-x-full");
        document.getElementById("sidebar-panel").classList.add("translate-x-0");
      }

      function closeSidebar() {
        sidebarOverlay.classList.remove("opacity-100");
        sidebarOverlay.classList.add("opacity-0");
        document.getElementById("sidebar-panel").classList.remove("translate-x-0");
        document.getElementById("sidebar-panel").classList.add("translate-x-full");

        setTimeout(() => {
          mobileSidebar.classList.add("pointer-events-none");
        }, 300);
      }

      if (mobileMenuButton) {
        mobileMenuButton.addEventListener("click", openSidebar);
      }

      if (sidebarClose) {
        sidebarClose.addEventListener("click", closeSidebar);
      }

      if (sidebarOverlay) {
        sidebarOverlay.addEventListener("click", closeSidebar);
      }

      // Initialize count
      updateWishlistCount();
    });
  </script>
@endpush
