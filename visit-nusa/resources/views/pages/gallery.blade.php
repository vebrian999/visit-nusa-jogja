@extends('layouts.app')

@push('styles')
<style>
body {
        font-family: "Inter", sans-serif;
      }

      /* Custom scrollbar untuk slider */
      .scroll-container::-webkit-scrollbar {
        height: 6px;
      }

      .scroll-container::-webkit-scrollbar-track {
        background: #e5e7eb;
        border-radius: 10px;
      }

      .scroll-container::-webkit-scrollbar-thumb {
        background: #fbbf24;
        border-radius: 10px;
      }

      .scroll-container::-webkit-scrollbar-thumb:hover {
        background: #f59e0b;
      }

      /* Smooth scroll behavior */
      .scroll-container {
        scroll-behavior: smooth;
      }

      /* Play button hover effect */
      .play-button {
        transition: all 0.3s ease;
      }

      .play-button:hover {
        transform: scale(1.1);
        background-color: rgba(251, 191, 36, 0.9);
      }

      /* Video card hover effect */
      .video-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .video-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      }

      /* Photo card hover effects */
      .photo-card {
        transition: all 0.3s ease;
      }

      .photo-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
      }

      .photo-overlay {
        transition: all 0.3s ease;
        opacity: 0;
      }

      .photo-card:hover .photo-overlay {
        opacity: 1;
      }

      /* Modal transitions */
      .modal-backdrop {
        transition: opacity 0.3s ease;
      }

      .modal-content {
        transition: all 0.3s ease;
        transform: scale(0.9);
        opacity: 0;
      }

      .modal-active .modal-content {
        transform: scale(1);
        opacity: 1;
      }
</style>
@endpush

@section('content')
  <body class="">
    <!-- Hero Section Start -->
    <section class="relative flex flex-col items-center justify-center h-[512px] mt-16 mb-10" style="background: url('{{ asset('img/bg-hero-index.png') }}') center/cover no-repeat">
      <!-- Overlay warna primary dengan opacity 30% -->
      <div class="absolute inset-0 bg-primary opacity-10"></div>
      <!-- Konten utama hero -->
      <div class="relative w-full flex flex-col items-center">
        <!-- Search Bar Start -->
        <div class="main-container w-full mt-2 text-center space-y-5">
          <h1 class="text-6xl font-semibold text-white px-48">Galerry</h1>
          <p class="font-normal text-xl text-white px-60">Get answers to common questions and reach out to us</p>
        </div>
      </div>
    </section>
    <!-- Video Gallery Section -->
    <section class="main-container mx-auto mb-16">
      <!-- Header Section -->
      <div class="flex justify-between items-start mb-6">
        <div class="space-y-2">
          <h1 class="text-4xl font-bold text-gray-800">Moments to Remember - Videos</h1>
          <p class="font-normal text-gray-600 max-w-2xl">Get practical travel tips, discover hidden gems, plan your dream trips, and read personal stories from explorers around the world.</p>
        </div>

        <!-- Sort Dropdown -->
        <div class="flex items-center space-x-2">
          <span class="text-sm text-gray-600">Sort by:</span>
          <div class="relative">
            <select class="bg-white border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-pribg-primary focus:border-transparent">
              <option>Newest</option>
              <option>Oldest</option>
              <option>Most Popular</option>
              <option>Most Viewed</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Video Slider Container -->
      <div class="relative">
        <!-- Slider -->
        <div class="scroll-container flex space-x-6 overflow-x-auto pb-4" id="videoSlider">
          <!-- Video Card 1 -->
          <div class="video-card flex-shrink-0 w-[400px] bg-white overflow-hidden cursor-pointer" onclick="openVideo()">
            <div class="relative">
              <!-- Video Thumbnail -->
              <img
                src="https://images.unsplash.com/photo-1587474260584-136574528ed5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                alt="Prambanan Temple"
                class="w-full h-60 object-cover" />

              <!-- Play Button -->
              <div class="absolute inset-0 flex items-center justify-center">
                <button class="play-button bg-primary hover:bg-yellow-500 text-white rounded-full w-12 h-12 flex items-center justify-center">
                  <svg class="w-8 h-8 ml-1" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7z" />
                  </svg>
                </button>
              </div>

              <!-- Duration Badge -->
              <div class="absolute bottom-2 right-2 bg-black bg-opacity-70 text-white text-xs px-2 py-1 rounded">2:34</div>
            </div>

            <!-- Video Info -->
            <div class="py-4">
              <h3 class="font-medium text-secondary text-base mb-1">Testimoni : Sunset at Prambanan</h3>
            </div>
          </div>

          <!-- Video Card 2 -->
          <div class="video-card flex-shrink-0 w-[400px] bg-white overflow-hidden cursor-pointer" onclick="openVideo()">
            <div class="relative">
              <!-- Video Thumbnail -->
              <img
                src="https://images.unsplash.com/photo-1587474260584-136574528ed5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                alt="Prambanan Temple"
                class="w-full h-60 object-cover" />

              <!-- Play Button -->
              <div class="absolute inset-0 flex items-center justify-center">
                <button class="play-button bg-primary hover:bg-yellow-500 text-white rounded-full w-12 h-12 flex items-center justify-center">
                  <svg class="w-8 h-8 ml-1" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7z" />
                  </svg>
                </button>
              </div>

              <!-- Duration Badge -->
              <div class="absolute bottom-2 right-2 bg-black bg-opacity-70 text-white text-xs px-2 py-1 rounded">2:34</div>
            </div>

            <!-- Video Info -->
            <div class="py-4">
              <h3 class="font-medium text-secondary text-base mb-1">Testimoni : Sunset at Prambanan</h3>
            </div>
          </div>

          <!-- Video Card 3 -->
          <div class="video-card flex-shrink-0 w-[400px] bg-white overflow-hidden cursor-pointer" onclick="openVideo()">
            <div class="relative">
              <!-- Video Thumbnail -->
              <img
                src="https://images.unsplash.com/photo-1587474260584-136574528ed5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                alt="Prambanan Temple"
                class="w-full h-60 object-cover" />

              <!-- Play Button -->
              <div class="absolute inset-0 flex items-center justify-center">
                <button class="play-button bg-primary hover:bg-yellow-500 text-white rounded-full w-12 h-12 flex items-center justify-center">
                  <svg class="w-8 h-8 ml-1" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7z" />
                  </svg>
                </button>
              </div>

              <!-- Duration Badge -->
              <div class="absolute bottom-2 right-2 bg-black bg-opacity-70 text-white text-xs px-2 py-1 rounded">2:34</div>
            </div>

            <!-- Video Info -->
            <div class="py-4">
              <h3 class="font-medium text-secondary text-base mb-1">Testimoni : Sunset at Prambanan</h3>
            </div>
          </div>

          <!-- Video Card 4 -->
          <div class="video-card flex-shrink-0 w-[400px] bg-white overflow-hidden cursor-pointer" onclick="openVideo()">
            <div class="relative">
              <!-- Video Thumbnail -->
              <img
                src="https://images.unsplash.com/photo-1587474260584-136574528ed5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                alt="Prambanan Temple"
                class="w-full h-60 object-cover" />

              <!-- Play Button -->
              <div class="absolute inset-0 flex items-center justify-center">
                <button class="play-button bg-primary hover:bg-yellow-500 text-white rounded-full w-12 h-12 flex items-center justify-center">
                  <svg class="w-8 h-8 ml-1" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7z" />
                  </svg>
                </button>
              </div>

              <!-- Duration Badge -->
              <div class="absolute bottom-2 right-2 bg-black bg-opacity-70 text-white text-xs px-2 py-1 rounded">2:34</div>
            </div>

            <!-- Video Info -->
            <div class="py-4">
              <h3 class="font-medium text-secondary text-base mb-1">Testimoni : Sunset at Prambanan</h3>
            </div>
          </div>

          <!-- Video Card 5 -->
          <div class="video-card flex-shrink-0 w-[400px] bg-white overflow-hidden cursor-pointer" onclick="openVideo()">
            <div class="relative">
              <!-- Video Thumbnail -->
              <img
                src="https://images.unsplash.com/photo-1587474260584-136574528ed5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                alt="Prambanan Temple"
                class="w-full h-60 object-cover" />

              <!-- Play Button -->
              <div class="absolute inset-0 flex items-center justify-center">
                <button class="play-button bg-primary hover:bg-yellow-500 text-white rounded-full w-12 h-12 flex items-center justify-center">
                  <svg class="w-8 h-8 ml-1" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7z" />
                  </svg>
                </button>
              </div>

              <!-- Duration Badge -->
              <div class="absolute bottom-2 right-2 bg-black bg-opacity-70 text-white text-xs px-2 py-1 rounded">2:34</div>
            </div>

            <!-- Video Info -->
            <div class="py-4">
              <h3 class="font-medium text-secondary text-base mb-1">Testimoni : Sunset at Prambanan</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Photo Gallery Section -->
    <section class="main-container mx-auto">
      <!-- Header Section -->
      <div class="flex justify-between items-start mb-6">
        <div class="space-y-2">
          <h1 class="text-4xl font-bold text-gray-800">Moments to Remember - Pictures</h1>
          <p class="font-normal text-gray-600 max-w-2xl">Explore the beauty in every photo we share. From stunning landscapes to unforgettable moments, let's celebrate Yogyakarta's wonders together.</p>
        </div>

        <!-- Sort Dropdown -->
        <div class="flex items-center space-x-2">
          <span class="text-sm text-gray-600">Sort by:</span>
          <div class="relative">
            <select class="bg-white border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
              <option>Newest</option>
              <option>Oldest</option>
              <option>Most Popular</option>
              <option>Most Viewed</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Photo Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Borobudur Temple Card -->
        <div class="photo-card overflow-hidden cursor-pointer" onclick="openPhotoModal('borobudur')">
          <!-- Card Content -->
          <div class="p-4">
            <h3 class="font-semibold text-lg text-gray-800 mb-1">Borobudur Temple</h3>
            <p class="text-sm text-gray-500">11 Mar - 15 Apr 2024</p>
          </div>
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1587474260584-136574528ed5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Borobudur Temple" class="w-full h-[401px] object-cover" />

            <!-- Hover Overlay -->
            <div class="photo-overlay absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
              <span class="text-white font-medium text-lg">View All Photos</span>
            </div>

            <!-- Photo Count Badge -->
            <div class="absolute bottom-0 right-0 bg-primary text-secondary text-sm px-4 py-2.5 rounded-r-sm rounded-tl-lg font-medium flex items-center space-x-1.5">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path
                  d="M6.827 6.17496C6.64699 6.45987 6.40682 6.70194 6.12334 6.88419C5.83985 7.06645 5.51993 7.18446 5.186 7.22996C4.806 7.28396 4.429 7.34196 4.052 7.40496C2.999 7.57996 2.25 8.50696 2.25 9.57396V18C2.25 18.5967 2.48705 19.169 2.90901 19.591C3.33097 20.0129 3.90326 20.25 4.5 20.25H19.5C20.0967 20.25 20.669 20.0129 21.091 19.591C21.5129 19.169 21.75 18.5967 21.75 18V9.57396C21.75 8.50696 21 7.57996 19.948 7.40496C19.5707 7.3421 19.1927 7.28376 18.814 7.22996C18.4802 7.18432 18.1605 7.06624 17.8772 6.884C17.5939 6.70175 17.3539 6.45975 17.174 6.17496L16.352 4.85896C16.1674 4.55906 15.9132 4.30805 15.611 4.1272C15.3089 3.94634 14.9675 3.84095 14.616 3.81996C12.8733 3.72635 11.1267 3.72635 9.384 3.81996C9.03245 3.84095 8.69114 3.94634 8.38896 4.1272C8.08678 4.30805 7.83262 4.55906 7.648 4.85896L6.827 6.17496Z"
                  stroke="#202020"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M16.5 12.75C16.5 13.9435 16.0259 15.0881 15.182 15.932C14.3381 16.7759 13.1935 17.25 12 17.25C10.8065 17.25 9.66193 16.7759 8.81802 15.932C7.97411 15.0881 7.5 13.9435 7.5 12.75C7.5 11.5565 7.97411 10.4119 8.81802 9.56802C9.66193 8.72411 10.8065 8.25 12 8.25C13.1935 8.25 14.3381 8.72411 15.182 9.56802C16.0259 10.4119 16.5 11.5565 16.5 12.75ZM18.75 10.5H18.758V10.508H18.75V10.5Z"
                  stroke="#202020"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
              <span>23</span>
            </div>
          </div>
        </div>

        <!-- Prambanan Temple Card -->
        <div class="photo-card overflow-hidden cursor-pointer" onclick="openPhotoModal('prambanan')">
          <!-- Card Content -->
          <div class="p-4">
            <h3 class="font-semibold text-lg text-gray-800 mb-1">Prambanan Temple</h3>
            <p class="text-sm text-gray-500">18 Mar - 22 Apr 2024</p>
          </div>
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1587474260584-136574528ed5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Borobudur Temple" class="w-full h-[401px] object-cover" />

            <!-- Hover Overlay -->
            <div class="photo-overlay absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
              <span class="text-white font-medium text-lg">View All Photos</span>
            </div>

            <!-- Photo Count Badge -->
            <div class="absolute bottom-0 right-0 bg-primary text-secondary text-sm px-4 py-2.5 rounded-r-sm rounded-tl-lg font-medium flex items-center space-x-1.5">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path
                  d="M6.827 6.17496C6.64699 6.45987 6.40682 6.70194 6.12334 6.88419C5.83985 7.06645 5.51993 7.18446 5.186 7.22996C4.806 7.28396 4.429 7.34196 4.052 7.40496C2.999 7.57996 2.25 8.50696 2.25 9.57396V18C2.25 18.5967 2.48705 19.169 2.90901 19.591C3.33097 20.0129 3.90326 20.25 4.5 20.25H19.5C20.0967 20.25 20.669 20.0129 21.091 19.591C21.5129 19.169 21.75 18.5967 21.75 18V9.57396C21.75 8.50696 21 7.57996 19.948 7.40496C19.5707 7.3421 19.1927 7.28376 18.814 7.22996C18.4802 7.18432 18.1605 7.06624 17.8772 6.884C17.5939 6.70175 17.3539 6.45975 17.174 6.17496L16.352 4.85896C16.1674 4.55906 15.9132 4.30805 15.611 4.1272C15.3089 3.94634 14.9675 3.84095 14.616 3.81996C12.8733 3.72635 11.1267 3.72635 9.384 3.81996C9.03245 3.84095 8.69114 3.94634 8.38896 4.1272C8.08678 4.30805 7.83262 4.55906 7.648 4.85896L6.827 6.17496Z"
                  stroke="#202020"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M16.5 12.75C16.5 13.9435 16.0259 15.0881 15.182 15.932C14.3381 16.7759 13.1935 17.25 12 17.25C10.8065 17.25 9.66193 16.7759 8.81802 15.932C7.97411 15.0881 7.5 13.9435 7.5 12.75C7.5 11.5565 7.97411 10.4119 8.81802 9.56802C9.66193 8.72411 10.8065 8.25 12 8.25C13.1935 8.25 14.3381 8.72411 15.182 9.56802C16.0259 10.4119 16.5 11.5565 16.5 12.75ZM18.75 10.5H18.758V10.508H18.75V10.5Z"
                  stroke="#202020"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
              <span>23</span>
            </div>
          </div>
        </div>

        <!-- Ayam Kampung Jogja Card -->
        <div class="photo-card overflow-hidden cursor-pointer" onclick="openPhotoModal('ayamkampung')">
          <div class="p-4">
            <h3 class="font-semibold text-lg text-gray-800 mb-1">Kreasi Kuliner Jogja Istimewa"</h3>
            <p class="text-sm text-gray-500">25 Mar - 30 Apr 2024</p>
          </div>
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1587474260584-136574528ed5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Borobudur Temple" class="w-full h-[401px] object-cover" />

            <!-- Hover Overlay -->
            <div class="photo-overlay absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
              <span class="text-white font-medium text-lg">View All Photos</span>
            </div>

            <!-- Photo Count Badge -->
            <div class="absolute bottom-0 right-0 bg-primary text-secondary text-sm px-4 py-2.5 rounded-r-sm rounded-tl-lg font-medium flex items-center space-x-1.5">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path
                  d="M6.827 6.17496C6.64699 6.45987 6.40682 6.70194 6.12334 6.88419C5.83985 7.06645 5.51993 7.18446 5.186 7.22996C4.806 7.28396 4.429 7.34196 4.052 7.40496C2.999 7.57996 2.25 8.50696 2.25 9.57396V18C2.25 18.5967 2.48705 19.169 2.90901 19.591C3.33097 20.0129 3.90326 20.25 4.5 20.25H19.5C20.0967 20.25 20.669 20.0129 21.091 19.591C21.5129 19.169 21.75 18.5967 21.75 18V9.57396C21.75 8.50696 21 7.57996 19.948 7.40496C19.5707 7.3421 19.1927 7.28376 18.814 7.22996C18.4802 7.18432 18.1605 7.06624 17.8772 6.884C17.5939 6.70175 17.3539 6.45975 17.174 6.17496L16.352 4.85896C16.1674 4.55906 15.9132 4.30805 15.611 4.1272C15.3089 3.94634 14.9675 3.84095 14.616 3.81996C12.8733 3.72635 11.1267 3.72635 9.384 3.81996C9.03245 3.84095 8.69114 3.94634 8.38896 4.1272C8.08678 4.30805 7.83262 4.55906 7.648 4.85896L6.827 6.17496Z"
                  stroke="#202020"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M16.5 12.75C16.5 13.9435 16.0259 15.0881 15.182 15.932C14.3381 16.7759 13.1935 17.25 12 17.25C10.8065 17.25 9.66193 16.7759 8.81802 15.932C7.97411 15.0881 7.5 13.9435 7.5 12.75C7.5 11.5565 7.97411 10.4119 8.81802 9.56802C9.66193 8.72411 10.8065 8.25 12 8.25C13.1935 8.25 14.3381 8.72411 15.182 9.56802C16.0259 10.4119 16.5 11.5565 16.5 12.75ZM18.75 10.5H18.758V10.508H18.75V10.5Z"
                  stroke="#202020"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
              <span>23</span>
            </div>
          </div>

          <!-- Card Content -->
        </div>
        <!-- Borobudur Temple Card -->
        <div class="photo-card overflow-hidden cursor-pointer" onclick="openPhotoModal('borobudur')">
          <!-- Card Content -->
          <div class="p-4">
            <h3 class="font-semibold text-lg text-gray-800 mb-1">Borobudur Temple</h3>
            <p class="text-sm text-gray-500">11 Mar - 15 Apr 2024</p>
          </div>
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1587474260584-136574528ed5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Borobudur Temple" class="w-full h-[401px] object-cover" />

            <!-- Hover Overlay -->
            <div class="photo-overlay absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
              <span class="text-white font-medium text-lg">View All Photos</span>
            </div>

            <!-- Photo Count Badge -->
            <div class="absolute bottom-0 right-0 bg-primary text-secondary text-sm px-4 py-2.5 rounded-r-sm rounded-tl-lg font-medium flex items-center space-x-1.5">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path
                  d="M6.827 6.17496C6.64699 6.45987 6.40682 6.70194 6.12334 6.88419C5.83985 7.06645 5.51993 7.18446 5.186 7.22996C4.806 7.28396 4.429 7.34196 4.052 7.40496C2.999 7.57996 2.25 8.50696 2.25 9.57396V18C2.25 18.5967 2.48705 19.169 2.90901 19.591C3.33097 20.0129 3.90326 20.25 4.5 20.25H19.5C20.0967 20.25 20.669 20.0129 21.091 19.591C21.5129 19.169 21.75 18.5967 21.75 18V9.57396C21.75 8.50696 21 7.57996 19.948 7.40496C19.5707 7.3421 19.1927 7.28376 18.814 7.22996C18.4802 7.18432 18.1605 7.06624 17.8772 6.884C17.5939 6.70175 17.3539 6.45975 17.174 6.17496L16.352 4.85896C16.1674 4.55906 15.9132 4.30805 15.611 4.1272C15.3089 3.94634 14.9675 3.84095 14.616 3.81996C12.8733 3.72635 11.1267 3.72635 9.384 3.81996C9.03245 3.84095 8.69114 3.94634 8.38896 4.1272C8.08678 4.30805 7.83262 4.55906 7.648 4.85896L6.827 6.17496Z"
                  stroke="#202020"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M16.5 12.75C16.5 13.9435 16.0259 15.0881 15.182 15.932C14.3381 16.7759 13.1935 17.25 12 17.25C10.8065 17.25 9.66193 16.7759 8.81802 15.932C7.97411 15.0881 7.5 13.9435 7.5 12.75C7.5 11.5565 7.97411 10.4119 8.81802 9.56802C9.66193 8.72411 10.8065 8.25 12 8.25C13.1935 8.25 14.3381 8.72411 15.182 9.56802C16.0259 10.4119 16.5 11.5565 16.5 12.75ZM18.75 10.5H18.758V10.508H18.75V10.5Z"
                  stroke="#202020"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
              <span>23</span>
            </div>
          </div>
        </div>

        <!-- Prambanan Temple Card -->
        <div class="photo-card overflow-hidden cursor-pointer" onclick="openPhotoModal('prambanan')">
          <!-- Card Content -->
          <div class="p-4">
            <h3 class="font-semibold text-lg text-gray-800 mb-1">Prambanan Temple</h3>
            <p class="text-sm text-gray-500">18 Mar - 22 Apr 2024</p>
          </div>
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1587474260584-136574528ed5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Borobudur Temple" class="w-full h-[401px] object-cover" />

            <!-- Hover Overlay -->
            <div class="photo-overlay absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
              <span class="text-white font-medium text-lg">View All Photos</span>
            </div>

            <!-- Photo Count Badge -->
            <div class="absolute bottom-0 right-0 bg-primary text-secondary text-sm px-4 py-2.5 rounded-r-sm rounded-tl-lg font-medium flex items-center space-x-1.5">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path
                  d="M6.827 6.17496C6.64699 6.45987 6.40682 6.70194 6.12334 6.88419C5.83985 7.06645 5.51993 7.18446 5.186 7.22996C4.806 7.28396 4.429 7.34196 4.052 7.40496C2.999 7.57996 2.25 8.50696 2.25 9.57396V18C2.25 18.5967 2.48705 19.169 2.90901 19.591C3.33097 20.0129 3.90326 20.25 4.5 20.25H19.5C20.0967 20.25 20.669 20.0129 21.091 19.591C21.5129 19.169 21.75 18.5967 21.75 18V9.57396C21.75 8.50696 21 7.57996 19.948 7.40496C19.5707 7.3421 19.1927 7.28376 18.814 7.22996C18.4802 7.18432 18.1605 7.06624 17.8772 6.884C17.5939 6.70175 17.3539 6.45975 17.174 6.17496L16.352 4.85896C16.1674 4.55906 15.9132 4.30805 15.611 4.1272C15.3089 3.94634 14.9675 3.84095 14.616 3.81996C12.8733 3.72635 11.1267 3.72635 9.384 3.81996C9.03245 3.84095 8.69114 3.94634 8.38896 4.1272C8.08678 4.30805 7.83262 4.55906 7.648 4.85896L6.827 6.17496Z"
                  stroke="#202020"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M16.5 12.75C16.5 13.9435 16.0259 15.0881 15.182 15.932C14.3381 16.7759 13.1935 17.25 12 17.25C10.8065 17.25 9.66193 16.7759 8.81802 15.932C7.97411 15.0881 7.5 13.9435 7.5 12.75C7.5 11.5565 7.97411 10.4119 8.81802 9.56802C9.66193 8.72411 10.8065 8.25 12 8.25C13.1935 8.25 14.3381 8.72411 15.182 9.56802C16.0259 10.4119 16.5 11.5565 16.5 12.75ZM18.75 10.5H18.758V10.508H18.75V10.5Z"
                  stroke="#202020"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
              <span>23</span>
            </div>
          </div>
        </div>

        <!-- Ayam Kampung Jogja Card -->
        <div class="photo-card overflow-hidden cursor-pointer" onclick="openPhotoModal('ayamkampung')">
          <!-- Card Content -->
          <div class="p-4">
            <h3 class="font-semibold text-lg text-gray-800 mb-1">Kreasi Kuliner Jogja Istimewa</h3>
            <p class="text-sm text-gray-500">25 Mar - 30 Apr 2024</p>
          </div>
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1587474260584-136574528ed5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Borobudur Temple" class="w-full h-[401px] object-cover" />

            <!-- Hover Overlay -->
            <div class="photo-overlay absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
              <span class="text-white font-medium text-lg">View All Photos</span>
            </div>

            <!-- Photo Count Badge -->
            <div class="absolute bottom-0 right-0 bg-primary text-secondary text-sm px-4 py-2.5 rounded-r-sm rounded-tl-lg font-medium flex items-center space-x-1.5">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path
                  d="M6.827 6.17496C6.64699 6.45987 6.40682 6.70194 6.12334 6.88419C5.83985 7.06645 5.51993 7.18446 5.186 7.22996C4.806 7.28396 4.429 7.34196 4.052 7.40496C2.999 7.57996 2.25 8.50696 2.25 9.57396V18C2.25 18.5967 2.48705 19.169 2.90901 19.591C3.33097 20.0129 3.90326 20.25 4.5 20.25H19.5C20.0967 20.25 20.669 20.0129 21.091 19.591C21.5129 19.169 21.75 18.5967 21.75 18V9.57396C21.75 8.50696 21 7.57996 19.948 7.40496C19.5707 7.3421 19.1927 7.28376 18.814 7.22996C18.4802 7.18432 18.1605 7.06624 17.8772 6.884C17.5939 6.70175 17.3539 6.45975 17.174 6.17496L16.352 4.85896C16.1674 4.55906 15.9132 4.30805 15.611 4.1272C15.3089 3.94634 14.9675 3.84095 14.616 3.81996C12.8733 3.72635 11.1267 3.72635 9.384 3.81996C9.03245 3.84095 8.69114 3.94634 8.38896 4.1272C8.08678 4.30805 7.83262 4.55906 7.648 4.85896L6.827 6.17496Z"
                  stroke="#202020"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M16.5 12.75C16.5 13.9435 16.0259 15.0881 15.182 15.932C14.3381 16.7759 13.1935 17.25 12 17.25C10.8065 17.25 9.66193 16.7759 8.81802 15.932C7.97411 15.0881 7.5 13.9435 7.5 12.75C7.5 11.5565 7.97411 10.4119 8.81802 9.56802C9.66193 8.72411 10.8065 8.25 12 8.25C13.1935 8.25 14.3381 8.72411 15.182 9.56802C16.0259 10.4119 16.5 11.5565 16.5 12.75ZM18.75 10.5H18.758V10.508H18.75V10.5Z"
                  stroke="#202020"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
              <span>23</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-12 mx-auto main-container container mb-32">
      <!-- Show More Button Component -->
      <div class="relative flex items-center justify-center">
        <!-- Left line -->
        <div class="flex-1 h-[1.5px] bg-primary"></div>

        <!-- Button -->
        <div class="mx-6 sm:mx-8">
          <button
            class="inline-flex items-center justify-center px-6 py-3 sm:px-8 sm:py-3 text-sm sm:text-base font-medium text-secondary border-2 bg-primary border-primary rounded-full h hover:border-primary hover:text-secondary focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 transition-all duration-200 ease-in-out transform hover:scale-105 active:scale-95 shadow-sm hover:shadow-md">
            Show more
          </button>
        </div>

        <!-- Right line -->
        <div class="flex-1 h-[1.5px] bg-primary"></div>
      </div>
    </section>

    <!-- Video Modal -->
    <div id="videoModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 hidden">
      <div class="bg-white rounded-lg p-4 max-w-4xl w-full mx-4">
        <div class="flex justify-between items-center mb-4">
          <h3 class="text-xl font-semibold">Video Player</h3>
          <button onclick="closeVideo()" class="text-gray-500 hover:text-gray-700">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>
        <div class="aspect-video">
          <iframe id="videoFrame" src="" class="w-full h-full rounded-lg" frameborder="0" allowfullscreen> </iframe>
        </div>
      </div>
    </div>

    <!-- Photo Modal -->
    <div id="photoModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 hidden modal-backdrop">
      <div class="modal-content bg-white rounded-lg max-w-6xl w-full mx-4 max-h-[90vh] overflow-hidden" style="transition: all 0.3s; opacity: 1; transform: scale(1)">
        <!-- Modal Header -->
        <div class="flex justify-between items-center p-6 border-b border-gray-200">
          <div class="flex items-center space-x-4">
            <div class="w-6 h-6 bg-gray-300 rounded">
              <svg class="w-6 h-6 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
              </svg>
            </div>
            <div>
              <h3 id="modalTitle" class="text-xl font-semibold text-gray-800"></h3>
              <p id="modalDate" class="text-sm text-gray-500"></p>
            </div>
          </div>
          <button onclick="closePhotoModal()" class="text-gray-500 hover:text-gray-700 p-2">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <!-- Modal Content -->
        <div class="p-6">
          <!-- Photo Navigation -->
          <div class="relative mb-6">
            <div class="flex justify-center">
              <img id="currentPhoto" src="" alt="" class="max-w-full max-h-96 object-contain rounded-lg" />
            </div>

            <!-- Navigation Buttons -->
            <button
              id="prevBtn"
              onclick="previousPhoto()"
              class="absolute hover:bg-secondary hover:opacity-100 duration-300 left-4 top-1/2 transform -translate-y-1/2 bg-secondary bg-opacity-60 text-white rounded-full w-12 h-12 flex items-center justify-center">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
              </svg>
            </button>

            <button
              id="nextBtn"
              onclick="nextPhoto()"
              class="absolute hover:bg-secondary hover:opacity-100 duration-300 right-4 top-1/2 transform -translate-y-1/2 bg-secondary bg-opacity-60 text-white rounded-full w-12 h-12 flex items-center justify-center">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </button>
          </div>

          <!-- Photo Counter -->
          <div class="text-center mb-4">
            <span id="photoCounter" class="text-sm text-gray-600"></span>
          </div>

          <!-- Photo Tags -->
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="bg-blue-100 text-blue-800 text-sm px-3 py-1 rounded-full">Family Activity</span>
            <span class="bg-green-100 text-green-800 text-sm px-3 py-1 rounded-full" id="photoDate">4 April 2024</span>
            <span class="bg-purple-100 text-purple-800 text-sm px-3 py-1 rounded-full" id="photoLocation">Alun - Alun Kidul Yogyakarta</span>
          </div>

          <!-- Photo Description -->
          <div id="photoDescription" class="text-gray-700 leading-relaxed">
            <!-- Description will be dynamically loaded -->
          </div>
        </div>
      </div>
    </div>

    <script>
      // --- VIDEO MODAL FUNCTIONALITY ---

      // Daftar URL video Google Drive (format /preview)
      const videoUrls = [
        "https://streamable.com/pjv21h",
        "https://streamable.com/pjv21h",
        "https://streamable.com/pjv21h",
        "https://streamable.com/pjv21h",
        "https://streamable.com/pjv21h",
        // Ganti dengan link video lain jika ada
      ];

      // Tambahkan event listener ke setiap video card
      document.addEventListener("DOMContentLoaded", function () {
        const videoCards = document.querySelectorAll("#videoSlider .video-card");
        videoCards.forEach((card, idx) => {
          card.onclick = function () {
            openVideo(videoUrls[idx]);
          };
        });
      });

      function openVideo(url) {
        const modal = document.getElementById("videoModal");
        const iframe = document.getElementById("videoFrame");
        iframe.src = url;
        modal.classList.remove("hidden");
        document.body.style.overflow = "hidden";
      }

      function closeVideo() {
        const modal = document.getElementById("videoModal");
        const iframe = document.getElementById("videoFrame");
        iframe.src = "";
        modal.classList.add("hidden");
        document.body.style.overflow = "auto";
      }

      // Tutup modal jika klik backdrop
      document.getElementById("videoModal").addEventListener("click", function (e) {
        if (e.target === this) {
          closeVideo();
        }
      });

      // Tutup modal dengan tombol Escape
      document.addEventListener("keydown", function (e) {
        if (e.key === "Escape") {
          closeVideo();
        }
      });

      // --- PHOTO MODAL FUNCTIONALITY ---
      const photoData = {
        borobudur: {
          title: "Borobudur Temple",
          date: "11 Mar - 15 Apr 2024",
          photos: [
            "https://images.unsplash.com/photo-1587474260584-136574528ed5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1605106715994-18d3fecffb98?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1624132305149-8ec155c3ffb5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1540979388789-6cee28a1cdc9?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1590736969955-71cc94901144?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1551698618-1dfe5d97d256?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1520637836862-4d197d17c43a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1564507592333-c60657eea523?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1501594907352-04cda38ebc29?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1472214103451-9374bd1c798e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1497436072909-f5e4be542aa0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
          ],
        },
        prambanan: {
          title: "Prambanan Temple",
          date: "18 Mar - 22 Apr 2024",
          photos: [
            "https://images.unsplash.com/photo-1518684079-3c830dcef090?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1587474260584-136574528ed5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1605106715994-18d3fecffb98?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1624132305149-8ec155c3ffb5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1540979388789-6cee28a1cdc9?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1590736969955-71cc94901144?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1551698618-1dfe5d97d256?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1520637836862-4d197d17c43a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1564507592333-c60657eea523?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1501594907352-04cda38ebc29?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1472214103451-9374bd1c798e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1497436072909-f5e4be542aa0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
          ],
        },
        ayamkampung: {
          title: "Kreasi Kuliner 'Ayam Kampung Jogja Istimewa'",
          date: "25 Mar - 30 Apr 2024",
          photos: [
            "https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1587474260584-136574528ed5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1605106715994-18d3fecffb98?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1624132305149-8ec155c3ffb5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1540979388789-6cee28a1cdc9?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1590736969955-71cc94901144?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1551698618-1dfe5d97d256?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1520637836862-4d197d17c43a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1564507592333-c60657eea523?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1501594907352-04cda38ebc29?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1472214103451-9374bd1c798e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1497436072909-f5e4be542aa0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
          ],
        },
      };

      let currentPhotoIndex = 0;
      let currentPhotoGroup = [];

      // Pastikan event listener tidak bentrok dengan onclick di HTML
      document.addEventListener("DOMContentLoaded", function () {
        // Tambahkan event listener pada backdrop modal foto agar bisa klik luar untuk menutup
        document.getElementById("photoModal").addEventListener("click", function (e) {
          if (e.target === this) {
            closePhotoModal();
          }
        });
      });

      function openPhotoModal(group) {
        currentPhotoGroup = photoData[group].photos;
        currentPhotoIndex = 0;
        document.getElementById("modalTitle").innerText = photoData[group].title;
        document.getElementById("modalDate").innerText = photoData[group].date;
        updatePhotoModal();
        // Tambahkan class modal-active ke photoModal agar .modal-content tampil
        document.getElementById("photoModal").classList.remove("hidden");
        document.getElementById("photoModal").classList.add("modal-active");
        document.body.style.overflow = "hidden";
      }

      function closePhotoModal() {
        document.getElementById("photoModal").classList.add("hidden");
        document.getElementById("photoModal").classList.remove("modal-active");
        document.body.style.overflow = "auto";
      }

      function previousPhoto() {
        if (currentPhotoIndex > 0) {
          currentPhotoIndex--;
          updatePhotoModal();
        }
      }

      function nextPhoto() {
        if (currentPhotoIndex < currentPhotoGroup.length - 1) {
          currentPhotoIndex++;
          updatePhotoModal();
        }
      }

      function updatePhotoModal() {
        // Cek jika currentPhotoGroup ada dan tidak kosong
        if (currentPhotoGroup.length > 0) {
          const photoUrl = currentPhotoGroup[currentPhotoIndex];
          document.getElementById("currentPhoto").src = photoUrl;
          document.getElementById("photoCounter").innerText = `${currentPhotoIndex + 1} / ${currentPhotoGroup.length}`;
        } else {
          document.getElementById("currentPhoto").src = "";
          document.getElementById("photoCounter").innerText = "";
        }
      }

      // Tutup modal dengan tombol Escape
      document.addEventListener("keydown", function (e) {
        if (!document.getElementById("photoModal").classList.contains("hidden") && e.key === "Escape") {
          closePhotoModal();
        }
      });
    </script>
  </body>
@endsection

@push('scripts')
    <script>
      // --- VIDEO MODAL FUNCTIONALITY ---

      // Daftar URL video Google Drive (format /preview)
      const videoUrls = [
        "https://streamable.com/pjv21h",
        "https://streamable.com/pjv21h",
        "https://streamable.com/pjv21h",
        "https://streamable.com/pjv21h",
        "https://streamable.com/pjv21h",
        // Ganti dengan link video lain jika ada
      ];

      // Tambahkan event listener ke setiap video card
      document.addEventListener("DOMContentLoaded", function () {
        const videoCards = document.querySelectorAll("#videoSlider .video-card");
        videoCards.forEach((card, idx) => {
          card.onclick = function () {
            openVideo(videoUrls[idx]);
          };
        });
      });

      function openVideo(url) {
        const modal = document.getElementById("videoModal");
        const iframe = document.getElementById("videoFrame");
        iframe.src = url;
        modal.classList.remove("hidden");
        document.body.style.overflow = "hidden";
      }

      function closeVideo() {
        const modal = document.getElementById("videoModal");
        const iframe = document.getElementById("videoFrame");
        iframe.src = "";
        modal.classList.add("hidden");
        document.body.style.overflow = "auto";
      }

      // Tutup modal jika klik backdrop
      document.getElementById("videoModal").addEventListener("click", function (e) {
        if (e.target === this) {
          closeVideo();
        }
      });

      // Tutup modal dengan tombol Escape
      document.addEventListener("keydown", function (e) {
        if (e.key === "Escape") {
          closeVideo();
        }
      });

      // --- PHOTO MODAL FUNCTIONALITY ---
      const photoData = {
        borobudur: {
          title: "Borobudur Temple",
          date: "11 Mar - 15 Apr 2024",
          photos: [
            "https://images.unsplash.com/photo-1587474260584-136574528ed5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1605106715994-18d3fecffb98?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1624132305149-8ec155c3ffb5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1540979388789-6cee28a1cdc9?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1590736969955-71cc94901144?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1551698618-1dfe5d97d256?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1520637836862-4d197d17c43a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1564507592333-c60657eea523?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1501594907352-04cda38ebc29?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1472214103451-9374bd1c798e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1497436072909-f5e4be542aa0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
          ],
        },
        prambanan: {
          title: "Prambanan Temple",
          date: "18 Mar - 22 Apr 2024",
          photos: [
            "https://images.unsplash.com/photo-1518684079-3c830dcef090?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1587474260584-136574528ed5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1605106715994-18d3fecffb98?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1624132305149-8ec155c3ffb5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1540979388789-6cee28a1cdc9?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1590736969955-71cc94901144?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1551698618-1dfe5d97d256?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1520637836862-4d197d17c43a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1564507592333-c60657eea523?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1501594907352-04cda38ebc29?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1472214103451-9374bd1c798e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1497436072909-f5e4be542aa0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
          ],
        },
        ayamkampung: {
          title: "Kreasi Kuliner 'Ayam Kampung Jogja Istimewa'",
          date: "25 Mar - 30 Apr 2024",
          photos: [
            "https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1587474260584-136574528ed5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1605106715994-18d3fecffb98?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1624132305149-8ec155c3ffb5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1540979388789-6cee28a1cdc9?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1590736969955-71cc94901144?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1551698618-1dfe5d97d256?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1520637836862-4d197d17c43a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1564507592333-c60657eea523?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1501594907352-04cda38ebc29?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1472214103451-9374bd1c798e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
            "https://images.unsplash.com/photo-1497436072909-f5e4be542aa0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
          ],
        },
      };

      let currentPhotoIndex = 0;
      let currentPhotoGroup = [];

      // Pastikan event listener tidak bentrok dengan onclick di HTML
      document.addEventListener("DOMContentLoaded", function () {
        // Tambahkan event listener pada backdrop modal foto agar bisa klik luar untuk menutup
        document.getElementById("photoModal").addEventListener("click", function (e) {
          if (e.target === this) {
            closePhotoModal();
          }
        });
      });

      function openPhotoModal(group) {
        currentPhotoGroup = photoData[group].photos;
        currentPhotoIndex = 0;
        document.getElementById("modalTitle").innerText = photoData[group].title;
        document.getElementById("modalDate").innerText = photoData[group].date;
        updatePhotoModal();
        // Tambahkan class modal-active ke photoModal agar .modal-content tampil
        document.getElementById("photoModal").classList.remove("hidden");
        document.getElementById("photoModal").classList.add("modal-active");
        document.body.style.overflow = "hidden";
      }

      function closePhotoModal() {
        document.getElementById("photoModal").classList.add("hidden");
        document.getElementById("photoModal").classList.remove("modal-active");
        document.body.style.overflow = "auto";
      }

      function previousPhoto() {
        if (currentPhotoIndex > 0) {
          currentPhotoIndex--;
          updatePhotoModal();
        }
      }

      function nextPhoto() {
        if (currentPhotoIndex < currentPhotoGroup.length - 1) {
          currentPhotoIndex++;
          updatePhotoModal();
        }
      }

      function updatePhotoModal() {
        // Cek jika currentPhotoGroup ada dan tidak kosong
        if (currentPhotoGroup.length > 0) {
          const photoUrl = currentPhotoGroup[currentPhotoIndex];
          document.getElementById("currentPhoto").src = photoUrl;
          document.getElementById("photoCounter").innerText = `${currentPhotoIndex + 1} / ${currentPhotoGroup.length}`;
        } else {
          document.getElementById("currentPhoto").src = "";
          document.getElementById("photoCounter").innerText = "";
        }
      }

      // Tutup modal dengan tombol Escape
      document.addEventListener("keydown", function (e) {
        if (!document.getElementById("photoModal").classList.contains("hidden") && e.key === "Escape") {
          closePhotoModal();
        }
      });
    </script>
@endpush
