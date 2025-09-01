@extends('layouts.app')

@section('content')
    <main>
      <div id="content">
        <!-- Hero Section Start -->
      <section class="relative flex flex-col items-center justify-center h-screen py-16" style="background: url('{{ asset('img/bg-hero-index.png') }}') center/cover no-repeat">
          <!-- Overlay warna primary dengan opacity 30% -->
          <div class="absolute inset-0 bg-primary opacity-10"></div>
          <!-- Konten utama hero -->
          <div class="relative w-full flex flex-col items-center mt-36">
            <div class="mx-auto max-w-3xl text-center pt-10">
              <h1 class="text-3xl md:text-5xl font-bold mb-4 text-white">Temukan Liburan Impianmu di Satu Tempat Terbaik</h1>
              <p class="text-lg text-white mb-8">Jelajahi ratusan destinasi dan paket wisata dari penyedia terpercaya, cocok untuk solo traveler, liburan keluarga, atau petualangan bersama teman.</p>
            </div>
            <!-- Search Bar Start -->
            <div class="main-container w-full mt-2  md:px-16">
              <form class="bg-white rounded-lg shadow flex flex-col md:flex-row items-center gap-2 md:gap-0 px-4 py-4 mb-6">
                <!-- Search Input -->
                <div class="flex items-center flex-1 border-r-2 border-gray-200 pr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="22" height="23" viewBox="0 0 22 23" fill="none">
                    <path
                      d="M8.32178 1.28577C10.3347 1.28588 12.227 2.06929 13.6489 3.49377C15.0718 4.91928 15.8569 6.80699 15.8569 8.8219C15.8568 10.5064 15.3094 12.1046 14.2983 13.4117L14.0288 13.7604L21.0972 20.8287L20.3267 21.5983L13.5688 14.8424L13.2573 14.5319L12.9097 14.8004C11.6021 15.8093 10.0062 16.357 8.32178 16.3571C6.30612 16.3571 4.41579 15.5737 2.99365 14.149C1.57132 12.7267 0.785753 10.8344 0.785645 8.8219C0.785645 6.93222 1.47398 5.15302 2.73389 3.76624L2.99365 3.49377C4.41613 2.0713 6.30909 1.28577 8.32178 1.28577ZM8.32178 2.3219C6.58717 2.3219 4.95422 2.99806 3.7251 4.22424V4.22522C2.49823 5.45209 1.82178 7.0876 1.82178 8.8219C1.82189 10.5563 2.49808 12.1886 3.72412 13.4176L3.7251 13.4186C4.95422 14.6448 6.58713 15.3219 8.32178 15.3219C10.0562 15.3218 11.6885 14.6447 12.9175 13.4186V13.4176C14.1442 12.1908 14.8217 10.556 14.8218 8.8219C14.8218 7.08726 14.1447 5.45435 12.9185 4.22522C11.6912 2.99501 10.0554 2.32201 8.32178 2.3219Z"
                      fill="#6E7175"
                      stroke="#25324B" />
                  </svg>
                  <input type="text" class="w-full bg-transparent outline-none text-gray-700" placeholder="Cari destinasi, kota, atau aktivitas yang kamu inginkan" />
                </div>
                <!-- Location Dropdown -->
                <div class="flex items-center border-r-2 border-gray-200 px-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="20" height="23" viewBox="0 0 20 23" fill="none">
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M13 9.75063C13 8.13915 11.6569 6.83337 10.0006 6.83337C8.34308 6.83337 7 8.13915 7 9.75063C7 11.3609 8.34308 12.6667 10.0006 12.6667C11.6569 12.6667 13 11.3609 13 9.75063Z"
                      stroke="#25324B"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M9.99941 22C8.56124 22 1 16.0481 1 9.82384C1 4.95108 5.02852 1 9.99941 1C14.9703 1 19 4.95108 19 9.82384C19 16.0481 11.4376 22 9.99941 22Z"
                      stroke="#25324B"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                  <select class="bg-transparent outline-none text-gray-700">
                    <option>Pilih Lokasi</option>
                    <option>Jakarta</option>
                    <option>Bandung</option>
                    <option>Surabaya</option>
                    <option>Yogyakarta</option>
                    <option>Bali</option>
                  </select>
                </div>
                <!-- Classification Dropdown -->
                <div class="flex items-center px-4 space-x-2 border-r-2 border-gray-200">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="19" viewBox="0 0 22 19" fill="none">
                    <path
                      d="M1.5 15.5537C6.96719 15.5537 12.2636 16.2849 17.2968 17.6549C18.0238 17.8528 18.75 17.3123 18.75 16.5588V15.5537M3 1.30371V2.05371C3 2.46792 2.66421 2.80371 2.25 2.80371H1.5M1.5 2.80371V2.42871C1.5 1.80739 2.00368 1.30371 2.625 1.30371H19.5M1.5 2.80371V11.8037M19.5 1.30371V2.05371C19.5 2.46792 19.8358 2.80371 20.25 2.80371H21M19.5 1.30371H19.875C20.4963 1.30371 21 1.80739 21 2.42871V12.1787C21 12.8 20.4963 13.3037 19.875 13.3037H19.5M21 11.8037H20.25C19.8358 11.8037 19.5 12.1395 19.5 12.5537V13.3037M19.5 13.3037H3M3 13.3037H2.625C2.00368 13.3037 1.5 12.8 1.5 12.1787V11.8037M3 13.3037V12.5537C3 12.1395 2.66421 11.8037 2.25 11.8037H1.5M14.25 7.30371C14.25 8.96057 12.9069 10.3037 11.25 10.3037C9.59315 10.3037 8.25 8.96057 8.25 7.30371C8.25 5.64686 9.59315 4.30371 11.25 4.30371C12.9069 4.30371 14.25 5.64686 14.25 7.30371ZM17.25 7.30371H17.2575V7.31121H17.25V7.30371ZM5.25 7.30371H5.2575V7.31121H5.25V7.30371Z"
                      stroke="#0F172A"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                  <select class="bg-transparent outline-none text-gray-700">
                    <option>Budget Perjalanan</option>
                    <option>Full Time</option>
                    <option>Part Time</option>
                    <option>Magang</option>
                    <option>Kontrak</option>
                    <option>Freelance</option>
                  </select>
                </div>
                <!-- Search Button -->
                <button type="submit" class="ml-4 px-6 py-2 rounded bg-primary text-white font-semibold hover:bg-primary-dark transition-colors">Cari</button>
              </form>
            </div>
            <!-- Search Bar End -->
            <div class="flex justify-center">
              <button id="scroll-down-btn" class="flex flex-col items-center animate-bounce focus:outline-none mt-32">
                <span class="text-white text-lg font-medium mb-2">Scroll Down</span>
                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
            </div>
          </div>
        </section>
        <!-- Hero Section End -->

        <!-- Card Section -->
        <section id="paket-wisata" class="container mx-auto py-16 main-container">
          <h1 class="text-4xl font-semibold mb-8">Pilihan Paket Wisata <span class="underline text-primary">Harian Terlaris</span> Traveler Tahun Ini</h1>
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

        <!-- Card Section -->
        <section class="container mx-auto pb-16 main-container">
          <h1 class="text-4xl font-semibold mb-8">Pilihan Paket Wisata <span class="underline text-primary">Beberapa Hari Terlaris</span> Tahun Ini</h1>
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

        <!-- banner -->
        <section class="py-12 mx-auto main-container container">
          <div class="relative overflow-hidden bg-white rounded-2xl" style="height: 568px">
            <!-- Background Image -->
            <img src="{{ asset('img/banner-index.png') }}" alt="" class="absolute inset-0 h-full w-full object-cover object-center rounded-2xl z-0" />

            <!-- Banner Content -->
            <div class="relative z-30 flex flex-col items-center justify-center h-full px-6 text-center">
              <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Booking Mudah, Bayar Setengah Dulu!</h2>
              <p class="text-lg md:text-xl text-gray-900 mb-6 max-w-2xl mx-auto">
                Rencanakan liburan impian Anda tanpa ribet!<br />
                Cukup bayar 50% di awal untuk mengamankan jadwal, dan lakukan pelunasan langsung saat bertemu sopir di hari keberangkatan.<br />
                Aman, praktis, dan tanpa khawatir.
              </p>
              <a href="#" class="inline-block rounded-full bg-black px-8 py-3 font-semibold text-[#FFB300] text-base shadow hover:opacity-90 transition"> Pesan Sekarang & Amankan Perjalanan </a>
            </div>
          </div>
        </section>

        <!-- section kategori -->
        <section class="container mx-auto py-16 main-container">
          <!-- Kategori Label -->
          <div class="flex justify-center mb-6">
            <span class="px-6 py-2 rounded-full bg-[#FFB300] text-black font-semibold text-sm shadow">Kategori Paket Wisata Jogja</span>
          </div>
          <!-- Judul -->
          <h2 class="text-3xl md:text-4xl font-bold text-center mb-10">Temukan <span class="text-[#FFB300] underline decoration-[#FFB300] decoration-2">Liburan Impian</span> Anda di Kota Budaya</h2>
          <!-- Grid Card -->
          <div class="flex flex-col gap-6 justify-center mb-10 items-center">
            <!-- Baris 1: 3 Card Besar -->
            <div class="flex gap-6">
              <!-- Card 1 -->
              <div class="group relative rounded-xl overflow-hidden shadow hover:shadow-lg transition-all duration-300 cursor-pointer bg-white" style="width: 420px; height: 281px">
                <img src="{{ asset('img/img-card.png') }}" alt="Paket Honeymoon Romantis" class="w-full h-full object-cover transition-all duration-300 group-hover:scale-105" />
                <div class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-0 transition-all duration-300"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                  <span class="text-white text-lg font-semibold group-hover:opacity-0 transition-all duration-300">Paket Honeymoon Romantis</span>
                </div>
              </div>
              <!-- Card 2 -->
              <div class="group relative rounded-xl overflow-hidden shadow hover:shadow-lg transition-all duration-300 cursor-pointer bg-white" style="width: 420px; height: 281px">
                <img src="{{ asset('img/img-card.png') }}" alt="Paket Tour Jogja Komplit" class="w-full h-full object-cover transition-all duration-300 group-hover:scale-105" />
                <div class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-0 transition-all duration-300"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                  <span class="text-white text-lg font-semibold group-hover:opacity-0 transition-all duration-300">Paket Tour Jogja Komplit</span>
                </div>
              </div>
              <!-- Card 3 -->
              <div class="group relative rounded-xl overflow-hidden shadow hover:shadow-lg transition-all duration-300 cursor-pointer bg-white" style="width: 420px; height: 281px">
                <img src="{{ asset('img/img-card.png') }}" alt="Paket Wisata Jogja Hemat" class="w-full h-full object-cover transition-all duration-300 group-hover:scale-105" />
                <div class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-0 transition-all duration-300"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                  <span class="text-white text-lg font-semibold group-hover:opacity-0 transition-all duration-300">Paket Wisata Jogja Hemat</span>
                </div>
              </div>
            </div>
            <!-- Baris 2: 4 Card Kecil -->
            <div class="flex gap-6 mt-6">
              <!-- Card 4 -->
              <div class="group relative rounded-xl overflow-hidden shadow hover:shadow-lg transition-all duration-300 cursor-pointer bg-white" style="width: 310px; height: 280px">
                <img src="{{ asset('img/img-card.png') }}" alt="Paket Wisata Jogja Sehari Penuh" class="w-full h-full object-cover transition-all duration-300 group-hover:scale-105" />
                <div class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-0 transition-all duration-300"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                  <span class="text-white text-lg font-semibold group-hover:opacity-0 transition-all duration-300">Paket Wisata Jogja Sehari Penuh</span>
                </div>
              </div>
              <!-- Card 5 -->
              <div class="group relative rounded-xl overflow-hidden shadow hover:shadow-lg transition-all duration-300 cursor-pointer bg-white" style="width: 310px; height: 280px">
                <img src="{{ asset('img/img-card.png') }}" alt="Paket Petualangan Alam Jogja" class="w-full h-full object-cover transition-all duration-300 group-hover:scale-105" />
                <div class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-0 transition-all duration-300"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                  <span class="text-white text-lg font-semibold group-hover:opacity-0 transition-all duration-300">Paket Petualangan Alam Jogja</span>
                </div>
              </div>
              <!-- Card 6 -->
              <div class="group relative rounded-xl overflow-hidden shadow hover:shadow-lg transition-all duration-300 cursor-pointer bg-white" style="width: 310px; height: 280px">
                <img src="{{ asset('img/img-card.png') }}" alt="Paket Kuliner & Belanja Jogja" class="w-full h-full object-cover transition-all duration-300 group-hover:scale-105" />
                <div class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-0 transition-all duration-300"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                  <span class="text-white text-lg font-semibold group-hover:opacity-0 transition-all duration-300">Paket Kuliner & Belanja Jogja</span>
                </div>
              </div>
              <!-- Card 7 -->
              <div class="group relative rounded-xl overflow-hidden shadow hover:shadow-lg transition-all duration-300 cursor-pointer bg-white" style="width: 310px; height: 280px">
                <img src="{{ asset('img/img-card.png') }}" alt="Paket Jogja & Candi Borobudur-Prambanan" class="w-full h-full object-cover transition-all duration-300 group-hover:scale-105" />
                <div class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-0 transition-all duration-300"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                  <span class="text-white text-lg text-center font-semibold group-hover:opacity-0 transition-all duration-300">Paket Jogja & Candi Borobudur-Prambanan</span>
                </div>
              </div>
            </div>
          </div>
          <!-- Button -->
          <div class="flex justify-center">
            <a href="#" class="px-8 py-3 rounded-full bg-[#FFB300] text-black font-semibold shadow hover:bg-[#FFB300] transition-all duration-300">Lihat Semua Paket Tour</a>
          </div>
        </section>

        <section class="w-full px-2 md:px-0 py-12">
          <div class="flex justify-between items-center main-container mx-auto">
            <div>
              <h1 class="md:text-4xl font-medium mb-4 text-secondary">
                Mengapa Memilih Platform <br />
                Travel Kami?
              </h1>
              <p class="text-base text-gray-700 max-w-xl mb-10">
                Temukan alasan mengapa ribuan traveler mempercayai layanan kami untuk merencanakan perjalanan mereka. Kami hadir dengan fitur unggulan yang membuat perjalanan lebih mudah, hemat, dan menyenangkan.
              </p>
              <div class="grid grid-cols-2 gap-6">
                <!-- Feature 1 -->
                <div class="flex items-center gap-3 bg-white border border-black rounded-lg px-4 py-3 shadow transition hover:border-[#FFB300] hover:shadow-lg hover:bg-[#FFFBEA] duration-300">
                  <!-- Icon here -->
                  <span class="inline-block w-8 h-8 bg-[#FFB300] rounded flex items-center justify-center">
                    <!-- Icon placeholder -->
                  </span>
                  <span class="font-medium text-gray-900">Destinasi Terlengkap</span>
                </div>
                <!-- Feature 2 -->
                <div class="flex items-center gap-3 bg-white border rounded-lg px-4 py-3 shadow transition border-black hover:border-[#FFB300] hover:shadow-lg hover:bg-[#FFFBEA] duration-300">
                  <span class="inline-block w-8 h-8 bg-[#FFB300] rounded flex items-center justify-center">
                    <!-- Icon placeholder -->
                  </span>
                  <span class="font-medium text-gray-900">Kemudahan Pemesanan</span>
                </div>
                <!-- Feature 3 -->
                <div class="flex items-center gap-3 bg-white border rounded-lg px-4 py-3 shadow transition border-black hover:border-[#FFB300] hover:shadow-lg hover:bg-[#FFFBEA] duration-300">
                  <span class="inline-block w-8 h-8 bg-[#FFB300] rounded flex items-center justify-center">
                    <!-- Icon placeholder -->
                  </span>
                  <span class="font-medium text-gray-900">Drive & Tour Guide Ramah</span>
                </div>
                <!-- Feature 4 -->
                <div class="flex items-center gap-3 bg-white border rounded-lg px-4 py-3 shadow transition border-black hover:border-[#FFB300] hover:shadow-lg hover:bg-[#FFFBEA] duration-300">
                  <span class="inline-block w-8 h-8 bg-[#FFB300] rounded flex items-center justify-center">
                    <!-- Icon placeholder -->
                  </span>
                  <span class="font-medium text-gray-900">Mudah Dihubungi</span>
                </div>
              </div>
            </div>
            <div class="relative">
              <!-- Badge 100% Trusted -->
              <span class="absolute top-10 -left-12 bg-secondary text-primary text-lg font-semibold px-4 py-3 rounded-lg z-20 shadow-lg flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32" fill="none">
                  <mask id="mask0_2051_395" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="32" height="32">
                    <rect width="32" height="32" fill="url(#pattern0_2051_395)" />
                  </mask>
                  <g mask="url(#mask0_2051_395)">
                    <rect x="-5" y="-5" width="42" height="46" fill="#FFB300" />
                  </g>
                  <defs>
                    <pattern id="pattern0_2051_395" patternContentUnits="objectBoundingBox" width="1" height="1">
                      <use xlink:href="#image0_2051_395" transform="scale(0.00195312)" />
                    </pattern>
                    <image
                      id="image0_2051_395"
                      width="512"
                      height="512"
                      preserveAspectRatio="none"
                      xlink:href="data:image/png;base64,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" />
                  </defs>
                </svg>
                100% Trusted
              </span>
      <img class="rounded-3xl" src="{{ asset('img/right side.png') }}" alt="" />
            </div>
          </div>
        </section>

        <!-- section testimoni -->
        <!-- awal komen -->
        <article id="testimoni" class="mb-28">
          <link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />

          <script type="module">
            import KeenSlider from "https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/+esm";

            const keenSlider = new KeenSlider(
              "#keen-slider",
              {
                loop: true,
                slides: {
                  origin: "center",
                  perView: 1.25,
                  spacing: 16,
                },
                breakpoints: {
                  "(min-width: 1024px)": {
                    slides: {
                      origin: "auto",
                      perView: 2.5,
                      spacing: 32,
                    },
                  },
                },
              },
              []
            );

            const keenSliderPrevious = document.getElementById("keen-slider-previous");
            const keenSliderNext = document.getElementById("keen-slider-next");

            keenSliderPrevious.addEventListener("click", () => keenSlider.prev());
            keenSliderNext.addEventListener("click", () => keenSlider.next());
          </script>

          <section class="w-full py-12 bg-white">
            <div class="main-container mx-auto flex flex-col items-center">
              <div class="w-full flex flex-col lg:flex-row items-end justify-between gap-8">
                <div>
                  <h2 class="text-3xl font-semibold mb-2 text-gray-900">Apa Kata Mereka?</h2>
                  <p class="text-base text-gray-600 max-w-lg">Kepuasan pelanggan adalah prioritas kami. Inilah pengalaman nyata dari mereka yang sudah menggunakan layanan kami.</p>
                </div>
                <div class="flex gap-4 mt-8 lg:mt-0">
                  <button aria-label="Previous slide" id="keen-slider-previous" class="rounded-full border border-primary p-3 text-primary transition hover:bg-primary hover:text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                    </svg>
                  </button>
                  <button aria-label="Next slide" id="keen-slider-next" class="rounded-full border border-primary p-3 text-primary transition hover:bg-primary hover:text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                  </button>
                </div>
              </div>
              <div class="w-full mt-12">
                <div id="keen-slider" class="keen-slider">
                  <!-- Slide 1 -->
                  <div class="keen-slider__slide">
                    <div class="flex flex-col items-center justify-center bg-white border rounded-xl shadow p-8 text-center">
                      <!-- Avatar Default -->
                      <div class="relative mb-4">
                        <img class="w-24 h-24 rounded-full object-cover mx-auto" src="https://i.pravatar.cc/150?img=47" alt="Profile" />
                        <div class="absolute bottom-0 right-0 border border-white bg-primary rounded-full px-2 py-2.5">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none">
                            <path
                              d="M9.00017 2.20287e-08C9.61237 -8.4042e-05 10.2001 0.240434 10.6366 0.66969C11.0731 1.09895 11.3234 1.68255 11.3335 2.29467C11.3935 2.87133 11.3848 3.722 10.9948 4.704C10.5962 5.708 9.81884 6.80267 8.40017 7.86667C8.33013 7.9192 8.25044 7.95742 8.16563 7.97914C8.08082 8.00087 7.99256 8.00568 7.90589 7.9933C7.73086 7.9683 7.57293 7.87478 7.46684 7.73333C7.36075 7.59189 7.3152 7.41409 7.34021 7.23905C7.36521 7.06402 7.45872 6.90609 7.60017 6.8C8.64284 6.018 9.24017 5.258 9.58217 4.59333C9.26153 4.67568 8.92704 4.68885 8.60092 4.63197C8.27479 4.5751 7.96451 4.44948 7.69067 4.26346C7.41683 4.07744 7.1857 3.83528 7.01265 3.55307C6.8396 3.27086 6.72858 2.95505 6.68697 2.62663C6.64535 2.29821 6.6741 1.9647 6.7713 1.64824C6.8685 1.33179 7.03192 1.03964 7.25071 0.791203C7.4695 0.542766 7.73866 0.343729 8.04029 0.207314C8.34192 0.0708994 8.66913 0.000229745 9.00017 2.20287e-08ZM3.00017 2.20287e-08C3.61237 -8.4042e-05 4.20008 0.240434 4.63657 0.66969C5.07306 1.09895 5.32336 1.68255 5.33351 2.29467C5.39351 2.87133 5.38484 3.722 4.99484 4.704C4.59684 5.708 3.81884 6.80267 2.40017 7.86667C2.33013 7.9192 2.25043 7.95742 2.16563 7.97914C2.08082 8.00087 1.99256 8.00568 1.90589 7.9933C1.73086 7.9683 1.57292 7.87478 1.46684 7.73333C1.36075 7.59189 1.3152 7.41409 1.3402 7.23905C1.36521 7.06402 1.45872 6.90609 1.60017 6.8C2.64284 6.018 3.24017 5.258 3.58217 4.59333C3.26153 4.67568 2.92704 4.68885 2.60092 4.63197C2.27479 4.5751 1.9645 4.44948 1.69066 4.26346C1.41682 4.07744 1.1857 3.83528 1.01265 3.55307C0.839597 3.27086 0.728577 2.95505 0.686965 2.62663C0.645352 2.29821 0.6741 1.9647 0.771297 1.64824C0.868495 1.33179 1.03192 1.03964 1.25071 0.791203C1.4695 0.542766 1.73865 0.343729 2.04029 0.207314C2.34192 0.0708994 2.66913 0.000229745 3.00017 2.20287e-08Z"
                              fill="white" />
                          </svg>
                        </div>
                      </div>

                      <div class="flex flex-col justify-center items-center space-y-1">
                        <!-- Isi Testimoni -->
                        <p class="text-gray-700 mb-4">
                          Platform Visit Nusa membuat perjalanan saya ke Yogyakarta menjadi lebih menyenangkan. Fitur pencariannya memudahkan saya menemukan destinasi wisata terbaik, dan sistem pemesanannya sangat efisien. Saya pasti akan
                          menggunakan platform ini lagi!
                        </p>

                        <!-- Titik indikator -->
                        <div class="flex items-center space-x-1">
                          <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                          <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                          <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                          <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                          <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                        </div>

                        <!-- Nama dan jabatan -->

                        <p class="font-bold text-gray-900 text-lg">Allison Adam</p>
                        <p class="text-sm text-gray-500">Pencari Kerja</p>
                      </div>
                    </div>
                  </div>

                  <!-- Slide 2 -->
                  <div class="keen-slider__slide">
                    <div class="flex flex-col items-center justify-center bg-white border rounded-xl shadow p-8 text-center">
                      <!-- Avatar Default -->
                      <div class="relative mb-4">
                        <img class="w-24 h-24 rounded-full object-cover mx-auto" src="https://i.pravatar.cc/150?img=24" alt="Profile" />
                        <div class="absolute bottom-0 right-0 border border-white bg-primary rounded-full px-2 py-2.5">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none">
                            <path
                              d="M9.00017 2.20287e-08C9.61237 -8.4042e-05 10.2001 0.240434 10.6366 0.66969C11.0731 1.09895 11.3234 1.68255 11.3335 2.29467C11.3935 2.87133 11.3848 3.722 10.9948 4.704C10.5962 5.708 9.81884 6.80267 8.40017 7.86667C8.33013 7.9192 8.25044 7.95742 8.16563 7.97914C8.08082 8.00087 7.99256 8.00568 7.90589 7.9933C7.73086 7.9683 7.57293 7.87478 7.46684 7.73333C7.36075 7.59189 7.3152 7.41409 7.34021 7.23905C7.36521 7.06402 7.45872 6.90609 7.60017 6.8C8.64284 6.018 9.24017 5.258 9.58217 4.59333C9.26153 4.67568 8.92704 4.68885 8.60092 4.63197C8.27479 4.5751 7.96451 4.44948 7.69067 4.26346C7.41683 4.07744 7.1857 3.83528 7.01265 3.55307C6.8396 3.27086 6.72858 2.95505 6.68697 2.62663C6.64535 2.29821 6.6741 1.9647 6.7713 1.64824C6.8685 1.33179 7.03192 1.03964 7.25071 0.791203C7.4695 0.542766 7.73866 0.343729 8.04029 0.207314C8.34192 0.0708994 8.66913 0.000229745 9.00017 2.20287e-08ZM3.00017 2.20287e-08C3.61237 -8.4042e-05 4.20008 0.240434 4.63657 0.66969C5.07306 1.09895 5.32336 1.68255 5.33351 2.29467C5.39351 2.87133 5.38484 3.722 4.99484 4.704C4.59684 5.708 3.81884 6.80267 2.40017 7.86667C2.33013 7.9192 2.25043 7.95742 2.16563 7.97914C2.08082 8.00087 1.99256 8.00568 1.90589 7.9933C1.73086 7.9683 1.57292 7.87478 1.46684 7.73333C1.36075 7.59189 1.3152 7.41409 1.3402 7.23905C1.36521 7.06402 1.45872 6.90609 1.60017 6.8C2.64284 6.018 3.24017 5.258 3.58217 4.59333C3.26153 4.67568 2.92704 4.68885 2.60092 4.63197C2.27479 4.5751 1.9645 4.44948 1.69066 4.26346C1.41682 4.07744 1.1857 3.83528 1.01265 3.55307C0.839597 3.27086 0.728577 2.95505 0.686965 2.62663C0.645352 2.29821 0.6741 1.9647 0.771297 1.64824C0.868495 1.33179 1.03192 1.03964 1.25071 0.791203C1.4695 0.542766 1.73865 0.343729 2.04029 0.207314C2.34192 0.0708994 2.66913 0.000229745 3.00017 2.20287e-08Z"
                              fill="white" />
                          </svg>
                        </div>
                      </div>

                      <!-- Isi Testimoni -->
                      <div class="flex flex-col justify-center items-center space-y-1">
                        <!-- Isi Testimoni -->
                        <p class="text-gray-700 mb-4">Visit Nusa sangat membantu saya dalam menemukan destinasi wisata menarik di Yogyakarta. Proses pencarian dan pemesanan tour sangat mudah dan cepat. Pengalaman wisata yang luar biasa!</p>

                        <!-- Titik indikator -->
                        <div class="flex items-center space-x-1">
                          <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                          <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                          <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                          <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                          <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                        </div>

                        <!-- Nama dan jabatan -->

                        <p class="font-bold text-gray-900 text-lg">Allison Adam</p>
                        <p class="text-sm text-gray-500">Pencari Kerja</p>
                      </div>
                    </div>
                  </div>
                  <!-- Slide 3 -->
                  <!-- Slide 1 -->
                  <div class="keen-slider__slide">
                    <div class="flex flex-col items-center justify-center bg-white border rounded-xl shadow p-8 text-center">
                      <!-- Avatar Default -->
                      <div class="relative mb-4">
                        <img class="w-24 h-24 rounded-full object-cover mx-auto" src="https://i.pravatar.cc/150?img=32" alt="Profile" />
                        <div class="absolute bottom-0 right-0 border border-white bg-primary rounded-full px-2 py-2.5">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none">
                            <path
                              d="M9.00017 2.20287e-08C9.61237 -8.4042e-05 10.2001 0.240434 10.6366 0.66969C11.0731 1.09895 11.3234 1.68255 11.3335 2.29467C11.3935 2.87133 11.3848 3.722 10.9948 4.704C10.5962 5.708 9.81884 6.80267 8.40017 7.86667C8.33013 7.9192 8.25044 7.95742 8.16563 7.97914C8.08082 8.00087 7.99256 8.00568 7.90589 7.9933C7.73086 7.9683 7.57293 7.87478 7.46684 7.73333C7.36075 7.59189 7.3152 7.41409 7.34021 7.23905C7.36521 7.06402 7.45872 6.90609 7.60017 6.8C8.64284 6.018 9.24017 5.258 9.58217 4.59333C9.26153 4.67568 8.92704 4.68885 8.60092 4.63197C8.27479 4.5751 7.96451 4.44948 7.69067 4.26346C7.41683 4.07744 7.1857 3.83528 7.01265 3.55307C6.8396 3.27086 6.72858 2.95505 6.68697 2.62663C6.64535 2.29821 6.6741 1.9647 6.7713 1.64824C6.8685 1.33179 7.03192 1.03964 7.25071 0.791203C7.4695 0.542766 7.73866 0.343729 8.04029 0.207314C8.34192 0.0708994 8.66913 0.000229745 9.00017 2.20287e-08ZM3.00017 2.20287e-08C3.61237 -8.4042e-05 4.20008 0.240434 4.63657 0.66969C5.07306 1.09895 5.32336 1.68255 5.33351 2.29467C5.39351 2.87133 5.38484 3.722 4.99484 4.704C4.59684 5.708 3.81884 6.80267 2.40017 7.86667C2.33013 7.9192 2.25043 7.95742 2.16563 7.97914C2.08082 8.00087 1.99256 8.00568 1.90589 7.9933C1.73086 7.9683 1.57292 7.87478 1.46684 7.73333C1.36075 7.59189 1.3152 7.41409 1.3402 7.23905C1.36521 7.06402 1.45872 6.90609 1.60017 6.8C2.64284 6.018 3.24017 5.258 3.58217 4.59333C3.26153 4.67568 2.92704 4.68885 2.60092 4.63197C2.27479 4.5751 1.9645 4.44948 1.69066 4.26346C1.41682 4.07744 1.1857 3.83528 1.01265 3.55307C0.839597 3.27086 0.728577 2.95505 0.686965 2.62663C0.645352 2.29821 0.6741 1.9647 0.771297 1.64824C0.868495 1.33179 1.03192 1.03964 1.25071 0.791203C1.4695 0.542766 1.73865 0.343729 2.04029 0.207314C2.34192 0.0708994 2.66913 0.000229745 3.00017 2.20287e-08Z"
                              fill="white" />
                          </svg>
                        </div>
                      </div>

                      <!-- Isi Testimoni -->
                      <div class="flex flex-col justify-center items-center space-y-1">
                        <!-- Isi Testimoni -->
                        <p class="text-gray-700 mb-4">
                          Visit Nusa memudahkan saya merencanakan liburan ke Yogyakarta. Dengan berbagai pilihan paket tour yang lengkap, saya dapat dengan mudah memilih yang sesuai dengan kebutuhan saya. Pengalaman pemesanan yang cepat dan
                          terpercaya!
                        </p>

                        <!-- Titik indikator -->
                        <div class="flex items-center space-x-1">
                          <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                          <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                          <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                          <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                          <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                        </div>

                        <!-- Nama dan jabatan -->

                        <p class="font-bold text-gray-900 text-lg">Allison Adam</p>
                        <p class="text-sm text-gray-500">Pencari Kerja</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </article>
        <!-- akhir komen -->
      </div>
    </main>
@endsection