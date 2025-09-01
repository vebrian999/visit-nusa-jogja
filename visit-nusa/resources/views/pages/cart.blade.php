@extends('layouts.app')

@push('styles')
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet" />
@endpush

@section('content')
    <main class="pt-20">
      <div id="content" class="min-h-screen">
        <!-- Shopping Cart Section -->
        <section class="py-8 md:py-12">
          <div class="mx-auto main-container">
            <!-- Page Header -->
            <div class="space-y-6">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
                  <!-- Heart Icon Placeholder -->
                  <div class="text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#ffb300">
                      <path
                        d="M2.25 2.25C1.83579 2.25 1.5 2.58579 1.5 3C1.5 3.41421 1.83579 3.75 2.25 3.75H3.63568C3.80558 3.75 3.95425 3.86422 3.99803 4.02838L6.55576 13.6199C4.94178 14.0385 3.75 15.5051 3.75 17.25C3.75 17.6642 4.08579 18 4.5 18H20.25C20.6642 18 21 17.6642 21 17.25C21 16.8358 20.6642 16.5 20.25 16.5H5.37803C5.68691 15.6261 6.52034 15 7.5 15H18.7183C19.0051 15 19.2668 14.8364 19.3925 14.5785C20.5277 12.249 21.5183 9.83603 22.3527 7.35126C22.4191 7.15357 22.4002 6.93716 22.3005 6.75399C22.2008 6.57082 22.0294 6.43743 21.8273 6.38583C17.0055 5.15442 11.9536 4.5 6.75 4.5C6.39217 4.5 6.03505 4.5031 5.67868 4.50926L5.44738 3.64188C5.2285 2.82109 4.48515 2.25 3.63568 2.25H2.25Z"
                        fill="#ffb300" />
                      <path d="M3.75 20.25C3.75 19.4216 4.42157 18.75 5.25 18.75C6.07843 18.75 6.75 19.4216 6.75 20.25C6.75 21.0784 6.07843 21.75 5.25 21.75C4.42157 21.75 3.75 21.0784 3.75 20.25Z" fill="#ffb300" />
                      <path d="M16.5 20.25C16.5 19.4216 17.1716 18.75 18 18.75C18.8284 18.75 19.5 19.4216 19.5 20.25C19.5 21.0784 18.8284 21.75 18 21.75C17.1716 21.75 16.5 21.0784 16.5 20.25Z" fill="#ffb300" />
                    </svg>
                  </div>
                </div>
                <div>
                  <h1 class="text-2xl font-bold text-secondary">Shoppin cart</h1>
                  <p class="text-gray-600 text-sm font-normal"><span id="cart-count">2</span> activities</p>
                </div>
              </div>
              <div class="flex items-center gap-2 text-sm">
                <!-- Security Badge -->
                <div class="flex items-center gap-2 bg-[#05E959] bg-opacity-50 text-[#016024] px-3 py-1.5 rounded-lg">
                  <!-- Security Icon -->
                  <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="11" viewBox="0 0 16 11" fill="none">
                      <path
                        d="M1 3H15M1 3.5H15M3.15385 7H7.46154M3.15385 8.5H5.30769M2.61538 10.5H13.3846C13.813 10.5 14.2239 10.342 14.5269 10.0607C14.8298 9.77936 15 9.39782 15 9V2C15 1.60218 14.8298 1.22064 14.5269 0.93934C14.2239 0.658035 13.813 0.5 13.3846 0.5H2.61538C2.18696 0.5 1.77608 0.658035 1.47314 0.93934C1.17019 1.22064 1 1.60218 1 2V9C1 9.39782 1.17019 9.77936 1.47314 10.0607C1.77608 10.342 2.18696 10.5 2.61538 10.5Z"
                        stroke="#016024"
                        stroke-width="0.8"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </div>
                  <span class="font-medium">Secure your booking with 50% upfront.</span>
                </div>
              </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
              <!-- Cart Items - Left Side -->
              <div class="lg:col-span-2">
                <!-- Date Section -->
                <div class="mb-6">
                  <h2 class="text-xl font-semibold text-secondary my-4 text-opacity-70">Thursday, August 21</h2>
                </div>

                <!-- Cart Items -->
                <div class="space-y-4">
                  <!-- Cart Item 1 -->
                  <div class="bg-white rounded-lg border border-gray-200 p-6 shadow-sm">
                    <div class="flex gap-4">
                      <!-- Product Image -->
                      <div class="flex-shrink-0">
                        <img src="https://images.unsplash.com/photo-1537953773345-d172ccf13cf1?w=120&h=120&fit=crop&crop=center" alt="Bali Temple" class="w-20 h-20 md:w-24 md:h-24 object-cover rounded-lg" />
                      </div>

                      <!-- Product Details -->
                      <div class="flex-1 min-w-0">
                        <div class="mb-3">
                          <div>
                            <h3 class="text-xl font-semibold text-secondary mb-2">Bali: Full-Day Instagram Highlights Tour</h3>
                            <!-- Rating -->
                            <div class="flex items-center gap-2 mb-2">
                              <div class="flex items-center space-x-0.5">
                                <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                                <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                                <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                                <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                                <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                              </div>
                              <p class="text-sm text-secondary">4.9 <span class="text-[#6A6A6B]">(870)</span></p>
                            </div>

                            <!-- Badge -->
                            <div class="inline-block">
                              <span class="bg-primary text-secondary text-sm font-semibold px-3 py-1.5 rounded-md">DAY TRIP</span>
                            </div>
                          </div>
                        </div>

                        <!-- Tour Details -->
                        <div class="space-y-2 text-sm text-secondary mb-4">
                          <div class="flex items-center gap-2">
                            <!-- Group Icon -->
                            <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path
                                  d="M17.1904 6V6.75M17.1904 9.75V10.5M17.1904 13.5V14.25M17.1904 17.25V18M8.19043 12.75H13.4404M8.19043 15H11.1904M4.06543 5.25C3.44443 5.25 2.94043 5.754 2.94043 6.375V9.401C3.39718 9.66398 3.77655 10.0427 4.04035 10.4989C4.30414 10.9552 4.44303 11.473 4.44303 12C4.44303 12.527 4.30414 13.0448 4.04035 13.5011C3.77655 13.9573 3.39718 14.336 2.94043 14.599V17.625C2.94043 18.246 3.44443 18.75 4.06543 18.75H21.3154C21.9364 18.75 22.4404 18.246 22.4404 17.625V14.599C21.9837 14.336 21.6043 13.9573 21.3405 13.5011C21.0767 13.0448 20.9378 12.527 20.9378 12C20.9378 11.473 21.0767 10.9552 21.3405 10.4989C21.6043 10.0427 21.9837 9.66398 22.4404 9.401V6.375C22.4404 5.754 21.9364 5.25 21.3154 5.25H4.06543Z"
                                  stroke="#202020"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round" />
                              </svg>
                            </div>
                            <span class="text-sm font-semibold">Small-Group Tour</span>
                          </div>

                          <div class="flex items-center gap-2">
                            <!-- Clock Icon -->
                            <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path
                                  d="M12.6904 6V12H17.1904M21.6904 12C21.6904 13.1819 21.4576 14.3522 21.0053 15.4442C20.5531 16.5361 19.8901 17.5282 19.0544 18.364C18.2187 19.1997 17.2265 19.8626 16.1346 20.3149C15.0427 20.7672 13.8723 21 12.6904 21C11.5085 21 10.3382 20.7672 9.24628 20.3149C8.15435 19.8626 7.1622 19.1997 6.32647 18.364C5.49074 17.5282 4.82781 16.5361 4.37551 15.4442C3.92322 14.3522 3.69043 13.1819 3.69043 12C3.69043 9.61305 4.63864 7.32387 6.32647 5.63604C8.0143 3.94821 10.3035 3 12.6904 3C15.0774 3 17.3666 3.94821 19.0544 5.63604C20.7422 7.32387 21.6904 9.61305 21.6904 12Z"
                                  stroke="#202020"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round" />
                              </svg>
                            </div>
                            <span class="text-sm font-semibold">Thursday, August 21, 2025 • 8:00 AM</span>
                          </div>

                          <div class="flex items-center gap-2">
                            <!-- Person Icon -->
                            <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path
                                  d="M15.6905 19.128C16.5434 19.3757 17.4273 19.5009 18.3155 19.5C19.7439 19.5021 21.1537 19.1764 22.4365 18.548C22.4744 17.6517 22.2191 16.7675 21.7092 16.0293C21.1994 15.2912 20.4628 14.7394 19.6112 14.4575C18.7595 14.1757 17.8391 14.1791 16.9896 14.4674C16.1401 14.7557 15.4077 15.313 14.9035 16.055M15.6905 19.128V19.125C15.6905 18.012 15.4045 16.965 14.9035 16.055M15.6905 19.128V19.234C13.7659 20.3931 11.5611 21.0038 9.31445 21C6.98345 21 4.80245 20.355 2.94045 19.234L2.93945 19.125C2.93869 17.7095 3.40907 16.3339 4.27644 15.2153C5.14381 14.0966 6.35883 13.2984 7.72994 12.9466C9.10106 12.5948 10.5503 12.7093 11.8491 13.2721C13.148 13.8349 14.2225 14.814 14.9035 16.055M12.6905 6.375C12.6905 7.27011 12.3349 8.12855 11.7019 8.76149C11.069 9.39442 10.2106 9.75 9.31545 9.75C8.42035 9.75 7.5619 9.39442 6.92897 8.76149C6.29603 8.12855 5.94045 7.27011 5.94045 6.375C5.94045 5.47989 6.29603 4.62145 6.92897 3.98851C7.5619 3.35558 8.42035 3 9.31545 3C10.2106 3 11.069 3.35558 11.7019 3.98851C12.3349 4.62145 12.6905 5.47989 12.6905 6.375ZM20.9405 8.625C20.9405 9.32119 20.6639 9.98887 20.1716 10.4812C19.6793 10.9734 19.0116 11.25 18.3155 11.25C17.6193 11.25 16.9516 10.9734 16.4593 10.4812C15.967 9.98887 15.6905 9.32119 15.6905 8.625C15.6905 7.92881 15.967 7.26113 16.4593 6.76884C16.9516 6.27656 17.6193 6 18.3155 6C19.0116 6 19.6793 6.27656 20.1716 6.76884C20.6639 7.26113 20.9405 7.92881 20.9405 8.625Z"
                                  stroke="#202020"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round" />
                              </svg>
                            </div>
                            <span class="text-sm font-semibold">1 adult</span>
                          </div>

                          <div class="flex items-center gap-2">
                            <!-- Language Icon -->
                            <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path
                                  d="M12.6904 21C14.6854 20.9999 16.6239 20.3372 18.2015 19.116C19.779 17.8948 20.9064 16.1843 21.4064 14.253M12.6904 21C10.6954 20.9999 8.75697 20.3372 7.1794 19.116C5.60184 17.8948 4.47451 16.1843 3.97443 14.253M12.6904 21C15.1754 21 17.1904 16.97 17.1904 12C17.1904 7.03 15.1754 3 12.6904 3M12.6904 21C10.2054 21 8.19043 16.97 8.19043 12C8.19043 7.03 10.2054 3 12.6904 3M21.4064 14.253C21.5914 13.533 21.6904 12.778 21.6904 12C21.6929 10.4521 21.2943 8.92999 20.5334 7.582M21.4064 14.253C18.7396 15.7314 15.7396 16.5048 12.6904 16.5C9.52843 16.5 6.55743 15.685 3.97443 14.253M3.97443 14.253C3.78518 13.517 3.68976 12.76 3.69043 12C3.69043 10.395 4.11043 8.887 4.84743 7.582M12.6904 3C14.2867 2.99933 15.8544 3.42336 17.2326 4.22856C18.6109 5.03377 19.7501 6.19117 20.5334 7.582M12.6904 3C11.0942 2.99933 9.52651 3.42336 8.14824 4.22856C6.76997 5.03377 5.63074 6.19117 4.84743 7.582M20.5334 7.582C18.3561 9.46793 15.571 10.5041 12.6904 10.5C9.69243 10.5 6.95043 9.4 4.84743 7.582"
                                  stroke="#202020"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round" />
                              </svg>
                            </div>
                            <span class="text-sm font-semibold">Language: English</span>
                          </div>

                          <div class="flex items-center gap-2">
                            <!-- Check Icon -->
                            <div class="text-green-500">
                              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path
                                  d="M9.69043 12.75L11.9404 15L15.6904 9.75M21.6904 12C21.6904 13.1819 21.4576 14.3522 21.0053 15.4442C20.5531 16.5361 19.8901 17.5282 19.0544 18.364C18.2187 19.1997 17.2265 19.8626 16.1346 20.3149C15.0427 20.7672 13.8723 21 12.6904 21C11.5085 21 10.3382 20.7672 9.24628 20.3149C8.15435 19.8626 7.1622 19.1997 6.32647 18.364C5.49074 17.5282 4.82781 16.5361 4.37551 15.4442C3.92322 14.3522 3.69043 13.1819 3.69043 12C3.69043 9.61305 4.63864 7.32387 6.32647 5.63604C8.0143 3.94821 10.3035 3 12.6904 3C15.0774 3 17.3666 3.94821 19.0544 5.63604C20.7422 7.32387 21.6904 9.61305 21.6904 12Z"
                                  stroke="#1A8567"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round" />
                              </svg>
                            </div>
                            <span class="text-green-600 text-sm font-semibold">Free cancellation</span>
                          </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex space-x-3 items-center justify-between">
                          <div class="flex items-center space-x-3">
                            <button class="flex items-center space-x-2 px-6 py-2 border border-green-600 text-green-600 rounded-full hover:bg-green-300 transition-colors">
                              <!-- Edit Icon -->
                              <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                  <path
                                    d="M17.5524 4.98676L19.2394 3.29876C19.5911 2.94708 20.0681 2.74951 20.5654 2.74951C21.0628 2.74951 21.5398 2.94708 21.8914 3.29876C22.2431 3.65044 22.4407 4.12741 22.4407 4.62476C22.4407 5.12211 22.2431 5.59908 21.8914 5.95076L11.2724 16.5698C10.7438 17.0981 10.0918 17.4865 9.37543 17.6998L6.69043 18.4998L7.49043 15.8148C7.70371 15.0984 8.09206 14.4464 8.62043 13.9178L17.5524 4.98676ZM17.5524 4.98676L20.1904 7.62476M18.6904 14.4998V19.2498C18.6904 19.8465 18.4534 20.4188 18.0314 20.8407C17.6095 21.2627 17.0372 21.4998 16.4404 21.4998H5.94043C5.34369 21.4998 4.7714 21.2627 4.34944 20.8407C3.92748 20.4188 3.69043 19.8465 3.69043 19.2498V8.74976C3.69043 8.15302 3.92748 7.58073 4.34944 7.15877C4.7714 6.73681 5.34369 6.49976 5.94043 6.49976H10.6904"
                                    stroke="#1A8567"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                                </svg>
                              </div>
                              <span class="text-sm font-medium">Edit</span>
                            </button>

                            <button class="flex items-center space-x-2 px-4 py-2 text-red-600 border border-red-600 hover:bg-red-300 rounded-full transition-colors">
                              <!-- Delete Icon -->
                              <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                  <path
                                    d="M14.9304 9.50003L14.5844 18.5M9.79643 18.5L9.45043 9.50003M19.4184 6.29003C19.7604 6.34203 20.1004 6.39703 20.4404 6.45603M19.4184 6.29003L18.3504 20.173C18.3068 20.7383 18.0515 21.2662 17.6355 21.6513C17.2194 22.0364 16.6733 22.2502 16.1064 22.25H8.27443C7.70753 22.2502 7.16145 22.0364 6.74541 21.6513C6.32937 21.2662 6.07402 20.7383 6.03043 20.173L4.96243 6.29003M19.4184 6.29003C18.2643 6.11555 17.1042 5.98313 15.9404 5.89303M4.96243 6.29003C4.62043 6.34103 4.28043 6.39603 3.94043 6.45503M4.96243 6.29003C6.11656 6.11555 7.27666 5.98313 8.44043 5.89303M15.9404 5.89303V4.97703C15.9404 3.79703 15.0304 2.81303 13.8504 2.77603C12.744 2.74067 11.6368 2.74067 10.5304 2.77603C9.35043 2.81303 8.44043 3.79803 8.44043 4.97703V5.89303M15.9404 5.89303C13.4442 5.70011 10.9367 5.70011 8.44043 5.89303"
                                    stroke="#D52D2D"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                                </svg>
                              </div>
                              <span class="text-sm font-medium">Delete</span>
                            </button>
                          </div>
                          <!-- Price -->
                          <div class="text-right">
                            <p class="text-lg font-medium text-gray-900">$63.74</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Cart Item 2 -->
                  <div class="bg-white rounded-lg border border-gray-200 p-6 shadow-sm">
                    <div class="flex gap-4">
                      <!-- Product Image -->
                      <div class="flex-shrink-0">
                        <img src="https://images.unsplash.com/photo-1537953773345-d172ccf13cf1?w=120&h=120&fit=crop&crop=center" alt="Bali Temple" class="w-20 h-20 md:w-24 md:h-24 object-cover rounded-lg" />
                      </div>

                      <!-- Product Details -->
                      <div class="flex-1 min-w-0">
                        <div class="mb-3">
                          <div>
                            <h3 class="text-xl font-semibold text-secondary mb-2">Bali: Full-Day Instagram Highlights Tour</h3>
                            <!-- Rating -->
                            <div class="flex items-center gap-2 mb-2">
                              <div class="flex items-center space-x-0.5">
                                <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                                <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                                <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                                <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                                <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" /></svg>
                              </div>
                              <p class="text-sm text-secondary">4.9 <span class="text-[#6A6A6B]">(870)</span></p>
                            </div>

                            <!-- Badge -->
                            <div class="inline-block">
                              <span class="bg-primary text-secondary text-sm font-semibold px-3 py-1.5 rounded-sm">DAY TRIP</span>
                            </div>
                          </div>
                        </div>

                        <!-- Tour Details -->
                        <div class="space-y-2 text-sm text-secondary mb-4">
                          <div class="flex items-center gap-2">
                            <!-- Group Icon -->
                            <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path
                                  d="M17.1904 6V6.75M17.1904 9.75V10.5M17.1904 13.5V14.25M17.1904 17.25V18M8.19043 12.75H13.4404M8.19043 15H11.1904M4.06543 5.25C3.44443 5.25 2.94043 5.754 2.94043 6.375V9.401C3.39718 9.66398 3.77655 10.0427 4.04035 10.4989C4.30414 10.9552 4.44303 11.473 4.44303 12C4.44303 12.527 4.30414 13.0448 4.04035 13.5011C3.77655 13.9573 3.39718 14.336 2.94043 14.599V17.625C2.94043 18.246 3.44443 18.75 4.06543 18.75H21.3154C21.9364 18.75 22.4404 18.246 22.4404 17.625V14.599C21.9837 14.336 21.6043 13.9573 21.3405 13.5011C21.0767 13.0448 20.9378 12.527 20.9378 12C20.9378 11.473 21.0767 10.9552 21.3405 10.4989C21.6043 10.0427 21.9837 9.66398 22.4404 9.401V6.375C22.4404 5.754 21.9364 5.25 21.3154 5.25H4.06543Z"
                                  stroke="#202020"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round" />
                              </svg>
                            </div>
                            <span class="text-sm font-semibold">Small-Group Tour</span>
                          </div>

                          <div class="flex items-center gap-2">
                            <!-- Clock Icon -->
                            <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path
                                  d="M12.6904 6V12H17.1904M21.6904 12C21.6904 13.1819 21.4576 14.3522 21.0053 15.4442C20.5531 16.5361 19.8901 17.5282 19.0544 18.364C18.2187 19.1997 17.2265 19.8626 16.1346 20.3149C15.0427 20.7672 13.8723 21 12.6904 21C11.5085 21 10.3382 20.7672 9.24628 20.3149C8.15435 19.8626 7.1622 19.1997 6.32647 18.364C5.49074 17.5282 4.82781 16.5361 4.37551 15.4442C3.92322 14.3522 3.69043 13.1819 3.69043 12C3.69043 9.61305 4.63864 7.32387 6.32647 5.63604C8.0143 3.94821 10.3035 3 12.6904 3C15.0774 3 17.3666 3.94821 19.0544 5.63604C20.7422 7.32387 21.6904 9.61305 21.6904 12Z"
                                  stroke="#202020"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round" />
                              </svg>
                            </div>
                            <span class="text-sm font-semibold">Thursday, August 21, 2025 • 8:00 AM</span>
                          </div>

                          <div class="flex items-center gap-2">
                            <!-- Person Icon -->
                            <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path
                                  d="M15.6905 19.128C16.5434 19.3757 17.4273 19.5009 18.3155 19.5C19.7439 19.5021 21.1537 19.1764 22.4365 18.548C22.4744 17.6517 22.2191 16.7675 21.7092 16.0293C21.1994 15.2912 20.4628 14.7394 19.6112 14.4575C18.7595 14.1757 17.8391 14.1791 16.9896 14.4674C16.1401 14.7557 15.4077 15.313 14.9035 16.055M15.6905 19.128V19.125C15.6905 18.012 15.4045 16.965 14.9035 16.055M15.6905 19.128V19.234C13.7659 20.3931 11.5611 21.0038 9.31445 21C6.98345 21 4.80245 20.355 2.94045 19.234L2.93945 19.125C2.93869 17.7095 3.40907 16.3339 4.27644 15.2153C5.14381 14.0966 6.35883 13.2984 7.72994 12.9466C9.10106 12.5948 10.5503 12.7093 11.8491 13.2721C13.148 13.8349 14.2225 14.814 14.9035 16.055M12.6905 6.375C12.6905 7.27011 12.3349 8.12855 11.7019 8.76149C11.069 9.39442 10.2106 9.75 9.31545 9.75C8.42035 9.75 7.5619 9.39442 6.92897 8.76149C6.29603 8.12855 5.94045 7.27011 5.94045 6.375C5.94045 5.47989 6.29603 4.62145 6.92897 3.98851C7.5619 3.35558 8.42035 3 9.31545 3C10.2106 3 11.069 3.35558 11.7019 3.98851C12.3349 4.62145 12.6905 5.47989 12.6905 6.375ZM20.9405 8.625C20.9405 9.32119 20.6639 9.98887 20.1716 10.4812C19.6793 10.9734 19.0116 11.25 18.3155 11.25C17.6193 11.25 16.9516 10.9734 16.4593 10.4812C15.967 9.98887 15.6905 9.32119 15.6905 8.625C15.6905 7.92881 15.967 7.26113 16.4593 6.76884C16.9516 6.27656 17.6193 6 18.3155 6C19.0116 6 19.6793 6.27656 20.1716 6.76884C20.6639 7.26113 20.9405 7.92881 20.9405 8.625Z"
                                  stroke="#202020"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round" />
                              </svg>
                            </div>
                            <span class="text-sm font-semibold">1 adult</span>
                          </div>

                          <div class="flex items-center gap-2">
                            <!-- Language Icon -->
                            <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path
                                  d="M12.6904 21C14.6854 20.9999 16.6239 20.3372 18.2015 19.116C19.779 17.8948 20.9064 16.1843 21.4064 14.253M12.6904 21C10.6954 20.9999 8.75697 20.3372 7.1794 19.116C5.60184 17.8948 4.47451 16.1843 3.97443 14.253M12.6904 21C15.1754 21 17.1904 16.97 17.1904 12C17.1904 7.03 15.1754 3 12.6904 3M12.6904 21C10.2054 21 8.19043 16.97 8.19043 12C8.19043 7.03 10.2054 3 12.6904 3M21.4064 14.253C21.5914 13.533 21.6904 12.778 21.6904 12C21.6929 10.4521 21.2943 8.92999 20.5334 7.582M21.4064 14.253C18.7396 15.7314 15.7396 16.5048 12.6904 16.5C9.52843 16.5 6.55743 15.685 3.97443 14.253M3.97443 14.253C3.78518 13.517 3.68976 12.76 3.69043 12C3.69043 10.395 4.11043 8.887 4.84743 7.582M12.6904 3C14.2867 2.99933 15.8544 3.42336 17.2326 4.22856C18.6109 5.03377 19.7501 6.19117 20.5334 7.582M12.6904 3C11.0942 2.99933 9.52651 3.42336 8.14824 4.22856C6.76997 5.03377 5.63074 6.19117 4.84743 7.582M20.5334 7.582C18.3561 9.46793 15.571 10.5041 12.6904 10.5C9.69243 10.5 6.95043 9.4 4.84743 7.582"
                                  stroke="#202020"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round" />
                              </svg>
                            </div>
                            <span class="text-sm font-semibold">Language: English</span>
                          </div>

                          <div class="flex items-center gap-2">
                            <!-- Check Icon -->
                            <div class="text-green-500">
                              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path
                                  d="M9.69043 12.75L11.9404 15L15.6904 9.75M21.6904 12C21.6904 13.1819 21.4576 14.3522 21.0053 15.4442C20.5531 16.5361 19.8901 17.5282 19.0544 18.364C18.2187 19.1997 17.2265 19.8626 16.1346 20.3149C15.0427 20.7672 13.8723 21 12.6904 21C11.5085 21 10.3382 20.7672 9.24628 20.3149C8.15435 19.8626 7.1622 19.1997 6.32647 18.364C5.49074 17.5282 4.82781 16.5361 4.37551 15.4442C3.92322 14.3522 3.69043 13.1819 3.69043 12C3.69043 9.61305 4.63864 7.32387 6.32647 5.63604C8.0143 3.94821 10.3035 3 12.6904 3C15.0774 3 17.3666 3.94821 19.0544 5.63604C20.7422 7.32387 21.6904 9.61305 21.6904 12Z"
                                  stroke="#1A8567"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round" />
                              </svg>
                            </div>
                            <span class="text-green-600 text-sm font-semibold">Free cancellation</span>
                          </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex space-x-3 items-center justify-between">
                          <div class="flex items-center space-x-3">
                            <button class="flex items-center space-x-2 px-6 py-2 border border-green-600 text-green-600 rounded-full hover:bg-green-300 transition-colors">
                              <!-- Edit Icon -->
                              <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                  <path
                                    d="M17.5524 4.98676L19.2394 3.29876C19.5911 2.94708 20.0681 2.74951 20.5654 2.74951C21.0628 2.74951 21.5398 2.94708 21.8914 3.29876C22.2431 3.65044 22.4407 4.12741 22.4407 4.62476C22.4407 5.12211 22.2431 5.59908 21.8914 5.95076L11.2724 16.5698C10.7438 17.0981 10.0918 17.4865 9.37543 17.6998L6.69043 18.4998L7.49043 15.8148C7.70371 15.0984 8.09206 14.4464 8.62043 13.9178L17.5524 4.98676ZM17.5524 4.98676L20.1904 7.62476M18.6904 14.4998V19.2498C18.6904 19.8465 18.4534 20.4188 18.0314 20.8407C17.6095 21.2627 17.0372 21.4998 16.4404 21.4998H5.94043C5.34369 21.4998 4.7714 21.2627 4.34944 20.8407C3.92748 20.4188 3.69043 19.8465 3.69043 19.2498V8.74976C3.69043 8.15302 3.92748 7.58073 4.34944 7.15877C4.7714 6.73681 5.34369 6.49976 5.94043 6.49976H10.6904"
                                    stroke="#1A8567"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                                </svg>
                              </div>
                              <span class="text-sm font-medium">Edit</span>
                            </button>

                            <button class="flex items-center space-x-2 px-4 py-2 text-red-600 border border-red-600 hover:bg-red-300 rounded-full transition-colors">
                              <!-- Delete Icon -->
                              <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                  <path
                                    d="M14.9304 9.50003L14.5844 18.5M9.79643 18.5L9.45043 9.50003M19.4184 6.29003C19.7604 6.34203 20.1004 6.39703 20.4404 6.45603M19.4184 6.29003L18.3504 20.173C18.3068 20.7383 18.0515 21.2662 17.6355 21.6513C17.2194 22.0364 16.6733 22.2502 16.1064 22.25H8.27443C7.70753 22.2502 7.16145 22.0364 6.74541 21.6513C6.32937 21.2662 6.07402 20.7383 6.03043 20.173L4.96243 6.29003M19.4184 6.29003C18.2643 6.11555 17.1042 5.98313 15.9404 5.89303M4.96243 6.29003C4.62043 6.34103 4.28043 6.39603 3.94043 6.45503M4.96243 6.29003C6.11656 6.11555 7.27666 5.98313 8.44043 5.89303M15.9404 5.89303V4.97703C15.9404 3.79703 15.0304 2.81303 13.8504 2.77603C12.744 2.74067 11.6368 2.74067 10.5304 2.77603C9.35043 2.81303 8.44043 3.79803 8.44043 4.97703V5.89303M15.9404 5.89303C13.4442 5.70011 10.9367 5.70011 8.44043 5.89303"
                                    stroke="#D52D2D"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                                </svg>
                              </div>
                              <span class="text-sm font-medium">Delete</span>
                            </button>
                          </div>
                          <!-- Price -->
                          <div class="text-right">
                            <p class="text-lg font-medium text-gray-900">$63.74</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Order Summary - Right Side -->
              <div class="lg:col-span-1">
                <div class="bg-white rounded-lg border border-gray-200 p-6 shadow-sm sticky top-24">
                  <!-- Summary Header -->
                  <div class="mb-6 flex justify-between">
                    <div class=" ">
                      <h3 class="text-xl font-semibold text-gray-900">Subtotal <br /><span class="">(2 items)</span></h3>
                    </div>
                    <div class="text-end">
                      <p class="text-lg font-bold text-gray-900">$118.30</p>
                      <span class="text-sm text-[#016024]">All taxes and fees included</span>
                    </div>
                  </div>

                  <!-- Checkout Button -->
                  <button class="w-full bg-primary hover:bg-primary/90 text-secondary font-semibold py-4 text-lg rounded-full transition-colors mb-6">Go to checkout now</button>

                  <!-- Payment Info -->
                  <div class="space-y-4 mb-6">
                    <div class="flex items-start gap-3">
                      <!-- Check Icon -->
                      <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path
                            d="M9 12.75L11.25 15L15 9.75M21 12C21 13.1819 20.7672 14.3522 20.3149 15.4442C19.8626 16.5361 19.1997 17.5282 18.364 18.364C17.5282 19.1997 16.5361 19.8626 15.4442 20.3149C14.3522 20.7672 13.1819 21 12 21C10.8181 21 9.64778 20.7672 8.55585 20.3149C7.46392 19.8626 6.47177 19.1997 5.63604 18.364C4.80031 17.5282 4.13738 16.5361 3.68508 15.4442C3.23279 14.3522 3 13.1819 3 12C3 9.61305 3.94821 7.32387 5.63604 5.63604C7.32387 3.94821 9.61305 3 12 3C14.3869 3 16.6761 3.94821 18.364 5.63604C20.0518 7.32387 21 9.61305 21 12Z"
                            stroke="#1A8567"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        </svg>
                      </div>
                      <div>
                        <p class="font-medium text-gray-900 text-sm">Pay Fully or 50% Only</p>
                        <p class="text-sm text-gray-600">Book now and pay in full or 50% upfront.</p>
                      </div>
                    </div>

                    <div class="flex items-start gap-3">
                      <!-- Check Icon -->
                      <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path
                            d="M9 12.75L11.25 15L15 9.75M21 12C21 13.1819 20.7672 14.3522 20.3149 15.4442C19.8626 16.5361 19.1997 17.5282 18.364 18.364C17.5282 19.1997 16.5361 19.8626 15.4442 20.3149C14.3522 20.7672 13.1819 21 12 21C10.8181 21 9.64778 20.7672 8.55585 20.3149C7.46392 19.8626 6.47177 19.1997 5.63604 18.364C4.80031 17.5282 4.13738 16.5361 3.68508 15.4442C3.23279 14.3522 3 13.1819 3 12C3 9.61305 3.94821 7.32387 5.63604 5.63604C7.32387 3.94821 9.61305 3 12 3C14.3869 3 16.6761 3.94821 18.364 5.63604C20.0518 7.32387 21 9.61305 21 12Z"
                            stroke="#1A8567"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        </svg>
                      </div>
                      <div>
                        <p class="font-medium text-gray-900 text-sm">Free Cancellation</p>
                        <p class="text-sm text-gray-600">Cancel anytime until H-1 of your trip</p>
                      </div>
                    </div>
                  </div>

                  <!-- Why Book With Us -->
                  <div class="border-t pt-6">
                    <button id="why-book-toggle" class="w-full flex justify-between items-center font-semibold text-sm text-gray-900 mb-4 focus:outline-none">
                      <span>Why book with us?</span>
                      <svg id="why-book-arrow" class="transition-transform duration-200" width="20" height="20" fill="none" viewBox="0 0 20 20">
                        <path d="M6 8l4 4 4-4" stroke="#202020" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </button>
                    <div id="why-book-content" class="space-y-3 hidden">
                      <div class="flex items-center gap-3">
                        <!-- Check Icon -->
                        <div>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                              d="M9 12.75L11.25 15L15 9.75M21 12C21 13.1819 20.7672 14.3522 20.3149 15.4442C19.8626 16.5361 19.1997 17.5282 18.364 18.364C17.5282 19.1997 16.5361 19.8626 15.4442 20.3149C14.3522 20.7672 13.1819 21 12 21C10.8181 21 9.64778 20.7672 8.55585 20.3149C7.46392 19.8626 6.47177 19.1997 5.63604 18.364C4.80031 17.5282 4.13738 16.5361 3.68508 15.4442C3.23279 14.3522 3 13.1819 3 12C3 9.61305 3.94821 7.32387 5.63604 5.63604C7.32387 3.94821 9.61305 3 12 3C14.3869 3 16.6761 3.94821 18.364 5.63604C20.0518 7.32387 21 9.61305 21 12Z"
                              stroke="#202020"
                              stroke-opacity="0.8"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round" />
                          </svg>
                        </div>
                        <span class="text-sm text-secondary text-opacity-80 font-semibold">Trusted local service</span>
                      </div>

                      <div class="flex items-center gap-3">
                        <!-- Check Icon -->
                        <div>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                              d="M9 12.75L11.25 15L15 9.75M21 12C21 13.1819 20.7672 14.3522 20.3149 15.4442C19.8626 16.5361 19.1997 17.5282 18.364 18.364C17.5282 19.1997 16.5361 19.8626 15.4442 20.3149C14.3522 20.7672 13.1819 21 12 21C10.8181 21 9.64778 20.7672 8.55585 20.3149C7.46392 19.8626 6.47177 19.1997 5.63604 18.364C4.80031 17.5282 4.13738 16.5361 3.68508 15.4442C3.23279 14.3522 3 13.1819 3 12C3 9.61305 3.94821 7.32387 5.63604 5.63604C7.32387 3.94821 9.61305 3 12 3C14.3869 3 16.6761 3.94821 18.364 5.63604C20.0518 7.32387 21 9.61305 21 12Z"
                              stroke="#202020"
                              stroke-opacity="0.8"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round" />
                          </svg>
                        </div>
                        <span class="text-sm text-secondary text-opacity-80 font-semibold">Transparent pricing</span>
                      </div>

                      <div class="flex items-center gap-3">
                        <!-- Check Icon -->
                        <div>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                              d="M9 12.75L11.25 15L15 9.75M21 12C21 13.1819 20.7672 14.3522 20.3149 15.4442C19.8626 16.5361 19.1997 17.5282 18.364 18.364C17.5282 19.1997 16.5361 19.8626 15.4442 20.3149C14.3522 20.7672 13.1819 21 12 21C10.8181 21 9.64778 20.7672 8.55585 20.3149C7.46392 19.8626 6.47177 19.1997 5.63604 18.364C4.80031 17.5282 4.13738 16.5361 3.68508 15.4442C3.23279 14.3522 3 13.1819 3 12C3 9.61305 3.94821 7.32387 5.63604 5.63604C7.32387 3.94821 9.61305 3 12 3C14.3869 3 16.6761 3.94821 18.364 5.63604C20.0518 7.32387 21 9.61305 21 12Z"
                              stroke="#202020"
                              stroke-opacity="0.8"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round" />
                          </svg>
                        </div>
                        <span class="text-sm text-secondary text-opacity-80 font-semibold">No hidden fees*</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Card Section -->
        <section id="paket-wisata" class="pb-32 main-container">
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
@endsection

@push('scripts')
    <script>
      // Mobile menu functionality
      const mobileMenuButton = document.getElementById("mobile-menu-button");
      const mobileSidebar = document.getElementById("mobile-sidebar");
      const sidebarOverlay = document.getElementById("sidebar-overlay");
      const sidebarPanel = document.getElementById("sidebar-panel");
      const sidebarClose = document.getElementById("sidebar-close");

      function openSidebar() {
        mobileSidebar.classList.remove("pointer-events-none");
        sidebarOverlay.classList.remove("opacity-0");
        sidebarPanel.classList.remove("translate-x-full");
      }

      function closeSidebar() {
        mobileSidebar.classList.add("pointer-events-none");
        sidebarOverlay.classList.add("opacity-0");
        sidebarPanel.classList.add("translate-x-full");
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

      // Delete item functionality
      document.querySelectorAll("button").forEach((button) => {
        if (button.textContent.trim() === "Delete") {
          button.addEventListener("click", function () {
            if (confirm("Are you sure you want to remove this item from your cart?")) {
              const cartItem = this.closest(".bg-white.rounded-lg.border");
              if (cartItem) {
                cartItem.style.opacity = "0";
                cartItem.style.transform = "translateX(-100%)";
                cartItem.style.transition = "all 0.3s ease-out";
                setTimeout(() => {
                  cartItem.remove();
                  updateCartTotal();
                }, 300);
              }
            }
          });
        }
      });

      // Update cart total (simple example)
      function updateCartTotal() {
        const cartItems = document.querySelectorAll(".bg-white.rounded-lg.border");
        const remainingItems = cartItems.length;
        const subtotalElement = document.querySelector(".text-lg.font-bold.text-gray-900");
        const itemsCountElement = document.querySelector('span:contains("items")');

        if (remainingItems === 0) {
          // Handle empty cart
          if (subtotalElement) subtotalElement.textContent = "$0.00";
          if (itemsCountElement) itemsCountElement.textContent = "(0 items)";
        } else if (remainingItems === 1) {
          if (subtotalElement) subtotalElement.textContent = "$63.74";
          if (itemsCountElement) itemsCountElement.textContent = "(1 item)";
        }
      }

      // Collapse functionality for "Why book with us?"
      const whyBookToggle = document.getElementById("why-book-toggle");
      const whyBookContent = document.getElementById("why-book-content");
      const whyBookArrow = document.getElementById("why-book-arrow");

      if (whyBookToggle && whyBookContent && whyBookArrow) {
        whyBookToggle.addEventListener("click", function () {
          whyBookContent.classList.toggle("hidden");
          whyBookArrow.classList.toggle("rotate-180");
        });
        // Default: closed, add 'hidden'
        whyBookContent.classList.add("hidden");
      }
    </script>
@endpush
