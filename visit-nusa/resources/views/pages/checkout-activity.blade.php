@extends('layouts.app')

@push('styles')
<style>
    <style>
      .pickup-collapse {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
      }
      .pickup-collapse.active {
        max-height: 600px;
      }
      #map {
        height: 300px;
        width: 100%;
        border-radius: 8px;
        position: relative;
        z-index: 1;
      }
    </style>
@endpush

<head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.js"></script>
</head>

@section('content')
   <main class="my-32">
      <div class="main-container mx-auto">
        <!-- Progress Steps -->
        <div class="mb-8">
          <div class="relative w-full max-w-2xl mx-auto flex items-center justify-center" style="height: 70px">
            <!-- Connector Line (background, behind steps) -->
            <div class="absolute left-0 right-0 top-[18px] h-1 bg-[#FFD980] z-0" style="left: 14%; right: 14%"></div>
            <!-- Step 1 -->
            <div class="flex flex-col items-center flex-1 z-10">
              <div class="w-9 h-9 rounded-full flex items-center justify-center font-semibold text-sm bg-primary text-secondary shadow">1</div>
              <span class="text-sm font-medium text-center text-secondary mt-2">Activity</span>
            </div>
            <!-- Step 2 -->
            <div class="flex flex-col items-center flex-1 z-10">
              <div class="w-9 h-9 rounded-full flex items-center justify-center font-semibold text-sm bg-[#FFD980] text-secondary shadow">2</div>
              <span class="text-sm font-medium text-center text-secondary mt-2">Contact</span>
            </div>
            <!-- Step 3 -->
            <div class="flex flex-col items-center flex-1 z-10">
              <div class="w-9 h-9 rounded-full flex items-center justify-center font-semibold text-sm bg-[#FFD980] text-secondary shadow">3</div>
              <span class="text-sm font-medium text-center text-secondary mt-2">Payment</span>
            </div>
          </div>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
          <!-- Left Column - Activity Details -->
          <div class="lg:col-span-2">
            <!-- Security Message -->
            <div class="bg-[#05E959] bg-opacity-50 border rounded-lg p-4 mb-6 w-[335px]">
              <div class="flex items-center">
                <div class="flex-shrink-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 16 11" fill="none">
                    <path
                      d="M1 3H15M1 3.5H15M3.15385 7H7.46154M3.15385 8.5H5.30769M2.61538 10.5H13.3846C13.813 10.5 14.2239 10.342 14.5269 10.0607C14.8298 9.77936 15 9.39782 15 9V2C15 1.60218 14.8298 1.22064 14.5269 0.93934C14.2239 0.658035 13.813 0.5 13.3846 0.5H2.61538C2.18696 0.5 1.77608 0.658035 1.47314 0.93934C1.17019 1.22064 1 1.60218 1 2V9C1 9.39782 1.17019 9.77936 1.47314 10.0607C1.77608 10.342 2.18696 10.5 2.61538 10.5Z"
                      stroke="#016024"
                      stroke-width="0.8"
                      stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                </div>
                <div class="ml-3">
                  <p class="text-sm font-medium text-[#016024]">Secure your booking with 50% upfront.</p>
                </div>
              </div>
            </div>

            <!-- Fast Checkout Message -->
            <div class="flex items-center mb-6 space-x-1.5">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path
                  d="M16.5 10.5V6.75C16.5 5.55653 16.0259 4.41193 15.182 3.56802C14.3381 2.72411 13.1935 2.25 12 2.25C10.8065 2.25 9.66193 2.72411 8.81802 3.56802C7.97411 4.41193 7.5 5.55653 7.5 6.75V10.5M6.75 21.75H17.25C17.8467 21.75 18.419 21.5129 18.841 21.091C19.2629 20.669 19.5 20.0967 19.5 19.5V12.75C19.5 12.1533 19.2629 11.581 18.841 11.159C18.419 10.7371 17.8467 10.5 17.25 10.5H6.75C6.15326 10.5 5.58097 10.7371 5.15901 11.159C4.73705 11.581 4.5 12.1533 4.5 12.75V19.5C4.5 20.0967 4.73705 20.669 5.15901 21.091C5.58097 21.5129 6.15326 21.75 6.75 21.75Z"
                  stroke="#1A8567"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
              <span class="text-sm font-bold text-[#1A8567]">Fast and secure checkout.</span>
            </div>

            <!-- Activity Card -->
            <div class="bg-white rounded-lg border border-gray-200 p-4 mb-6">
              <div class="flex items-start space-x-4">
                <div class="flex-shrink-0">
                  <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&h=100&q=80" alt="Activity" class="w-16 h-16 rounded-lg object-cover" />
                </div>
                <div class="flex-1">
                  <h3 class="text-lg font-semibold text-secondary mb-1">Yogyakarta: Borobudur Sunset Climb Up Shared Guided Tour</h3>
                  <p class="text-sm text-gray-600">Wednesday, August 20, 2025 at 12:30 PM</p>
                </div>
              </div>
            </div>

            <div>
              <h2 class="text-xl font-semibold text-secondary mb-4">Have you decided where you'd like to be picked up?</h2>
            </div>
            <!-- Pickup Location Section -->
            <div class="bg-white rounded-lg border border-gray-200 space-y-10 p-6">
              <!-- Radio Options -->
              <div>
                <!-- Option 1: Yes, I can add pick-up location -->
                <div class="relative">
                  <label class="flex items-start cursor-pointer pb-4">
                    <input type="radio" name="pickup_option" value="yes" id="pickup_yes" class="mt-1 h-4 w-4 text-orange-500 focus:ring-orange-500 border-gray-300" />
                    <div class="ml-3 flex-1">
                      <span class="text-base font-medium text-secondary">Yes, I can add my pick-up location now</span>
                    </div>
                  </label>
                  <!-- Garis pembatas full width -->
                  <div class="absolute left-0 right-0 bottom-0 h-px bg-gray-200" style="margin-left: -24px; margin-right: -24px"></div>
                  <!-- Collapsible Content -->
                  <div id="pickup_details" class="pickup-collapse">
                    <div class="border-gray-200">
                      <p class="text-sm text-gray-600 mb-4 px-8">Please enter the location's name or address, or click on a spot within the highlighted area to select a location.</p>
                      <!-- Search Input -->
                      <div class="mb-4">
                        <div class="relative">
                          <svg class="absolute left-3 top-3 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                          </svg>
                          <input type="text" id="location_search" placeholder="Search for hotel, address, etc." class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent" />
                        </div>
                      </div>
                      <!-- Map Container -->
                      <div class="mb-4">
                        <div id="map" class="border border-gray-300 rounded-lg"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Option 2: Not sure about pick-up location -->
                <div>
                  <label class="flex items-start cursor-pointer pt-4">
                    <input type="radio" name="pickup_option" value="no" id="pickup_no" class="mt-1 h-4 w-4 text-orange-500 focus:ring-orange-500 border-gray-300" />
                    <div class="ml-3">
                      <span class="text-base font-medium text-secondary">I'm not sure about the pick-up location yet</span>
                    </div>
                  </label>
                </div>
              </div>
            </div>

            <!-- Continue Button -->
            <div class="mt-8 mb-8">
              <button class="w-full bg-primary hover:bg-primary/75 text-secondary text-base font-semibold py-4 px-6 rounded-full transition-colors duration-200">Continue to Personal Details</button>
            </div>
          </div>

          <!-- Right Column - Order Summary -->
          <div class="lg:col-span-1">
            <div class="bg-white rounded-lg border sticky top-8">
              <h2 class="text-lg md:text-xl font-semibold text-secondary mb-4 px-4 pt-4">Order summary</h2>

              <!-- Activity Card with Image and Rating -->
              <div class="border-t border-b p-3 md:p-4 mb-4">
                <div class="flex items-start space-x-3">
                  <div class="flex-shrink-0">
                    <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=80&h=80&q=80" alt="Borobudur Temple" class="w-16 h-16 md:w-20 md:h-20 rounded-lg object-cover" />
                  </div>
                  <div class="flex-1 min-w-0">
                    <h3 class="font-semibold text-secondary text-sm md:text-base leading-tight mb-2">Yogyakarta: Borobudur Sunset Climb Up Shared Guided Tour</h3>

                    <!-- Rating -->
                    <div class="flex items-center mb-2">
                      <div class="flex items-center">
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
                      </div>
                    </div>

                    <!-- Top rated badge -->
                    <span class="inline-block bg-secondary text-primary text-xs font-semibold px-2 py-1 rounded">Top rated</span>
                  </div>
                </div>
              </div>

              <!-- Activity Details -->
              <div class="space-y-4 mb-4 px-4">
                <div class="flex items-start text-sm space-x-2.5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="35" height="34" viewBox="0 0 25 24" fill="none">
                    <path
                      d="M17.1904 6V6.75M17.1904 9.75V10.5M17.1904 13.5V14.25M17.1904 17.25V18M8.19043 12.75H13.4404M8.19043 15H11.1904M4.06543 5.25C3.44443 5.25 2.94043 5.754 2.94043 6.375V9.401C3.39718 9.66398 3.77655 10.0427 4.04035 10.4989C4.30414 10.9552 4.44303 11.473 4.44303 12C4.44303 12.527 4.30414 13.0448 4.04035 13.5011C3.77655 13.9573 3.39718 14.336 2.94043 14.599V17.625C2.94043 18.246 3.44443 18.75 4.06543 18.75H21.3154C21.9364 18.75 22.4404 18.246 22.4404 17.625V14.599C21.9837 14.336 21.6043 13.9573 21.3405 13.5011C21.0767 13.0448 20.9378 12.527 20.9378 12C20.9378 11.473 21.0767 10.9552 21.3405 10.4989C21.6043 10.0427 21.9837 9.66398 22.4404 9.401V6.375C22.4404 5.754 21.9364 5.25 21.3154 5.25H4.06543Z"
                      stroke="#202020"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                  <div>
                    <div class="text-sm font-semibold text-secondary">Yogyakarta: Borobudur Sunset Climb Up Non Tickets <span class="text-sm font-semibold text-secondary">• Language: English</span></div>
                  </div>
                </div>

                <div class="flex items-center text-sm space-x-2.5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                    <path
                      d="M12.6904 6V12H17.1904M21.6904 12C21.6904 13.1819 21.4576 14.3522 21.0053 15.4442C20.5531 16.5361 19.8901 17.5282 19.0544 18.364C18.2187 19.1997 17.2265 19.8626 16.1346 20.3149C15.0427 20.7672 13.8723 21 12.6904 21C11.5085 21 10.3382 20.7672 9.24628 20.3149C8.15435 19.8626 7.1622 19.1997 6.32647 18.364C5.49074 17.5282 4.82781 16.5361 4.37551 15.4442C3.92322 14.3522 3.69043 13.1819 3.69043 12C3.69043 9.61305 4.63864 7.32387 6.32647 5.63604C8.0143 3.94821 10.3035 3 12.6904 3C15.0774 3 17.3666 3.94821 19.0544 5.63604C20.7422 7.32387 21.6904 9.61305 21.6904 12Z"
                      stroke="#202020"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                  <span class="text-sm font-semibold text-secondary">Wednesday, August 20, 2025 at 12:30 PM</span>
                </div>

                <div class="flex items-center space-x-2.5 text-sm">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                    <path
                      d="M15.6905 19.128C16.5434 19.3757 17.4273 19.5009 18.3155 19.5C19.7439 19.5021 21.1537 19.1764 22.4365 18.548C22.4744 17.6517 22.2191 16.7675 21.7092 16.0293C21.1994 15.2912 20.4628 14.7394 19.6112 14.4575C18.7595 14.1757 17.8391 14.1791 16.9896 14.4674C16.1401 14.7557 15.4077 15.313 14.9035 16.055M15.6905 19.128V19.125C15.6905 18.012 15.4045 16.965 14.9035 16.055M15.6905 19.128V19.234C13.7659 20.3931 11.5611 21.0038 9.31445 21C6.98345 21 4.80245 20.355 2.94045 19.234L2.93945 19.125C2.93869 17.7095 3.40907 16.3339 4.27644 15.2153C5.14381 14.0966 6.35883 13.2984 7.72994 12.9466C9.10106 12.5948 10.5503 12.7093 11.8491 13.2721C13.148 13.8349 14.2225 14.814 14.9035 16.055M12.6905 6.375C12.6905 7.27011 12.3349 8.12855 11.7019 8.76149C11.069 9.39442 10.2106 9.75 9.31545 9.75C8.42035 9.75 7.5619 9.39442 6.92897 8.76149C6.29603 8.12855 5.94045 7.27011 5.94045 6.375C5.94045 5.47989 6.29603 4.62145 6.92897 3.98851C7.5619 3.35558 8.42035 3 9.31545 3C10.2106 3 11.069 3.35558 11.7019 3.98851C12.3349 4.62145 12.6905 5.47989 12.6905 6.375ZM20.9405 8.625C20.9405 9.32119 20.6639 9.98887 20.1716 10.4812C19.6793 10.9734 19.0116 11.25 18.3155 11.25C17.6193 11.25 16.9516 10.9734 16.4593 10.4812C15.967 9.98887 15.6905 9.32119 15.6905 8.625C15.6905 7.92881 15.967 7.26113 16.4593 6.76884C16.9516 6.27656 17.6193 6 18.3155 6C19.0116 6 19.6793 6.27656 20.1716 6.76884C20.6639 7.26113 20.9405 7.92881 20.9405 8.625Z"
                      stroke="#202020"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                  <span class="text-sm font-semibold text-secondary">1 adult (Age 0 - 99)</span>
                </div>

                <!-- Change Details Button -->
                <div class="border-b border-gray-200 pb-4 mb-4">
                  <button class="text-sm text-secondary hover:text-primary underline space-x-2.5 flex items-center transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 14 14" fill="none">
                      <g clip-path="url(#clip0_2194_3231)">
                        <path
                          d="M9.83617 2.61756L10.8203 1.63289C11.0254 1.42775 11.3036 1.3125 11.5938 1.3125C11.8839 1.3125 12.1621 1.42775 12.3673 1.63289C12.5724 1.83804 12.6876 2.11628 12.6876 2.40639C12.6876 2.69651 12.5724 2.97475 12.3673 3.17989L3.98533 11.5618C3.67694 11.87 3.29663 12.0966 2.87875 12.221L1.3125 12.6876L1.77917 11.1214C1.90358 10.7035 2.13012 10.3232 2.43833 10.0148L9.83675 2.61756H9.83617ZM9.83617 2.61756L11.375 4.15639"
                          stroke="#202020"
                          stroke-linecap="round"
                          stroke-linejoin="round" />
                      </g>
                      <defs>
                        <clipPath id="clip0_2194_3231">
                          <rect width="14" height="14" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                    <span class="text-sm font-semibold underline-offset-2 text-secondary">Change date or participants</span>
                  </button>
                </div>
              </div>

              <!-- Payment Features -->
              <div class="space-y-3 mb-4 px-4">
                <!-- Pay Fully Option -->
                <div class="flex items-start">
                  <div class="flex items-center h-5 mt-0.5">
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                        <path
                          d="M9.69043 12.75L11.9404 15L15.6904 9.75M21.6904 12C21.6904 13.1819 21.4576 14.3522 21.0053 15.4442C20.5531 16.5361 19.8901 17.5282 19.0544 18.364C18.2187 19.1997 17.2265 19.8626 16.1346 20.3149C15.0427 20.7672 13.8723 21 12.6904 21C11.5085 21 10.3382 20.7672 9.24628 20.3149C8.15435 19.8626 7.1622 19.1997 6.32647 18.364C5.49074 17.5282 4.82781 16.5361 4.37551 15.4442C3.92322 14.3522 3.69043 13.1819 3.69043 12C3.69043 9.61305 4.63864 7.32387 6.32647 5.63604C8.0143 3.94821 10.3035 3 12.6904 3C15.0774 3 17.3666 3.94821 19.0544 5.63604C20.7422 7.32387 21.6904 9.61305 21.6904 12Z"
                          stroke="#1A8567"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round" />
                      </svg>
                    </div>
                  </div>
                  <div class="ml-3">
                    <div class="text-sm font-semibold text-secondary">Pay Fully or 50% Only</div>
                    <div class="text-xs text-gray-600">Book now and pay in full or 50% upfront.</div>
                  </div>
                </div>

                <!-- Free Cancellation -->
                <div class="flex items-start">
                  <div class="flex items-center h-5 mt-0.5">
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                        <path
                          d="M9.69043 12.75L11.9404 15L15.6904 9.75M21.6904 12C21.6904 13.1819 21.4576 14.3522 21.0053 15.4442C20.5531 16.5361 19.8901 17.5282 19.0544 18.364C18.2187 19.1997 17.2265 19.8626 16.1346 20.3149C15.0427 20.7672 13.8723 21 12.6904 21C11.5085 21 10.3382 20.7672 9.24628 20.3149C8.15435 19.8626 7.1622 19.1997 6.32647 18.364C5.49074 17.5282 4.82781 16.5361 4.37551 15.4442C3.92322 14.3522 3.69043 13.1819 3.69043 12C3.69043 9.61305 4.63864 7.32387 6.32647 5.63604C8.0143 3.94821 10.3035 3 12.6904 3C15.0774 3 17.3666 3.94821 19.0544 5.63604C20.7422 7.32387 21.6904 9.61305 21.6904 12Z"
                          stroke="#1A8567"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round" />
                      </svg>
                    </div>
                  </div>
                  <div class="ml-3">
                    <div class="text-sm font-semibold text-secondary">Free Cancellation</div>
                    <div class="text-xs text-gray-600">Cancel anytime until H-1 of your trip</div>
                  </div>
                </div>
              </div>

              <!-- Promo Code -->
              <div class="border-t border-gray-200 pt-4 mb-4">
                <button class="text-sm px-4 text-secondary hover:text-primary space-x-2.5 underline flex items-center transition-colors">
                  <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 15 15" fill="none">
                      <g clip-path="url(#clip0_2202_3429)">
                        <path
                          d="M12.75 7.0625V11.875C12.75 12.1071 12.6578 12.3296 12.4937 12.4937C12.3296 12.6578 12.1071 12.75 11.875 12.75H3.5625C3.33044 12.75 3.10788 12.6578 2.94378 12.4937C2.77969 12.3296 2.6875 12.1071 2.6875 11.875V7.0625M7.5 3.34375C7.5 3.0409 7.41019 2.74485 7.24194 2.49303C7.07368 2.24122 6.83453 2.04496 6.55473 1.92906C6.27493 1.81316 5.96705 1.78284 5.67002 1.84192C5.37298 1.90101 5.10014 2.04684 4.88599 2.26099C4.67184 2.47514 4.52601 2.74799 4.46692 3.04502C4.40784 3.34205 4.43816 3.64994 4.55406 3.92973C4.66996 4.20953 4.86622 4.44868 5.11803 4.61694C5.36985 4.78519 5.6659 4.875 5.96875 4.875H7.5M7.5 3.34375V4.875M7.5 3.34375C7.5 3.0409 7.58981 2.74485 7.75806 2.49303C7.92632 2.24122 8.16547 2.04496 8.44527 1.92906C8.72506 1.81316 9.03295 1.78284 9.32998 1.84192C9.62701 1.90101 9.89986 2.04684 10.114 2.26099C10.3282 2.47514 10.474 2.74799 10.5331 3.04502C10.5922 3.34205 10.5618 3.64994 10.4459 3.92973C10.33 4.20953 10.1338 4.44868 9.88197 4.61694C9.63015 4.78519 9.3341 4.875 9.03125 4.875H7.5M7.5 4.875V12.75M2.46875 7.0625H12.9687C13.331 7.0625 13.625 6.7685 13.625 6.40625V5.53125C13.625 5.169 13.331 4.875 12.9687 4.875H2.46875C2.1065 4.875 1.8125 5.169 1.8125 5.53125V6.40625C1.8125 6.7685 2.1065 7.0625 2.46875 7.0625Z"
                          stroke="#202020"
                          stroke-linecap="round"
                          stroke-linejoin="round" />
                      </g>
                      <defs>
                        <clipPath id="clip0_2202_3429">
                          <rect width="14" height="14" fill="white" transform="translate(0.5 0.5)" />
                        </clipPath>
                      </defs>
                    </svg>
                  </div>
                  <p class="text-sm font-semibold underline-offset-2 text-secondary">Enter promo, credit, or gift code</p>
                </button>
              </div>

              <!-- Total Section -->
              <div class="bg-secondary text-primary rounded-b-lg p-4">
                <div class="flex justify-between items-center">
                  <span class="text-xl font-semibold text-primary">Total</span>
                  <span class="text-xl font-semibold">$28.75</span>
                </div>
                <div class="text-xs text-primary mt-1 text-right">All taxes and fees included</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
<!-- Checkout Activity Page Content End -->
@push('scripts')


    <script>
      let map;
      let marker;
      let pickupArea = {
        // Batas area Yogyakarta (rectangle)
        minLat: -8.1,
        maxLat: -7.5,
        minLng: 110.2,
        maxLng: 110.7,
      };

      function initMap() {
        const defaultLocation = [-7.7956, 110.3695];
        map = L.map("map", {
          zoomControl: false,
          attributionControl: false,
        }).setView(defaultLocation, 11);

        L.tileLayer("https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}", {
          attribution: '<span style="background: #fff; padding: 2px 6px; border-radius: 4px; font-size: 12px;">Leaflet | © Google</span>',
          maxZoom: 20,
        }).addTo(map);

        L.control.zoom({ position: "bottomright" }).addTo(map);

        // Draw pickup area rectangle (Yogyakarta)
        const bounds = [
          [pickupArea.minLat, pickupArea.minLng],
          [pickupArea.maxLat, pickupArea.maxLng],
        ];
        L.rectangle(bounds, {
          color: "#FFB300",
          weight: 2,
          fillOpacity: 0.15,
          dashArray: "4",
        }).addTo(map);

        // Overlay gelap di luar area
        addDarkOverlay(bounds);

        marker = null;

        map.on("click", function (e) {
          const latLng = e.latlng;
          if (!isInsidePickupArea(latLng.lat, latLng.lng)) {
            showPickupError(true);
            setMarker(latLng, true);
          } else {
            showPickupError(false);
            setMarker(latLng, false);
            reverseGeocode(latLng.lat, latLng.lng);
          }
        });

        setupSearch();
      }

      // Overlay gelap di luar area
      function addDarkOverlay(bounds) {
        // Area luar: 4 polygon (atas, bawah, kiri, kanan)
        const minLat = -9.5,
          maxLat = -7.0,
          minLng = 109.5,
          maxLng = 111.5;
        const [areaMinLat, areaMinLng] = bounds[0];
        const [areaMaxLat, areaMaxLng] = bounds[1];

        // Atas
        L.polygon(
          [
            [minLat, minLng],
            [areaMinLat, minLng],
            [areaMinLat, maxLng],
            [minLat, maxLng],
          ],
          { color: null, fillColor: "#222", fillOpacity: 0.4, stroke: false }
        ).addTo(map);

        // Bawah
        L.polygon(
          [
            [areaMaxLat, minLng],
            [maxLat, minLng],
            [maxLat, maxLng],
            [areaMaxLat, maxLng],
          ],
          { color: null, fillColor: "#222", fillOpacity: 0.4, stroke: false }
        ).addTo(map);

        // Kiri
        L.polygon(
          [
            [areaMinLat, minLng],
            [areaMaxLat, minLng],
            [areaMaxLat, areaMinLng],
            [areaMinLat, areaMinLng],
          ],
          { color: null, fillColor: "#222", fillOpacity: 0.4, stroke: false }
        ).addTo(map);

        // Kanan
        L.polygon(
          [
            [areaMinLat, areaMaxLng],
            [areaMaxLat, areaMaxLng],
            [areaMaxLat, maxLng],
            [areaMinLat, maxLng],
          ],
          { color: null, fillColor: "#222", fillOpacity: 0.4, stroke: false }
        ).addTo(map);
      }

      function setMarker(latLng, isError) {
        if (!marker) {
          marker = L.marker(latLng, {
            draggable: true,
            icon: customPinIcon(isError),
          }).addTo(map);
          marker.on("dragend", function (e) {
            const pos = e.target.getLatLng();
            if (!isInsidePickupArea(pos.lat, pos.lng)) {
              showPickupError(true);
              marker.setIcon(customPinIcon(true));
            } else {
              showPickupError(false);
              marker.setIcon(customPinIcon(false));
              reverseGeocode(pos.lat, pos.lng);
            }
          });
        } else {
          marker.setLatLng(latLng);
          marker.setIcon(customPinIcon(isError));
        }
      }

      // Pin SVG custom
      function customPinIcon(isError) {
        const svg = isError
          ? `<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none"><path d="M19.5 10.5C19.5 17.642 12 21.75 12 21.75C12 21.75 4.5 17.642 4.5 10.5C4.5 8.51088 5.29018 6.60322 6.6967 5.1967C8.10322 3.79018 10.0109 3 12 3C13.9891 3 15.8968 3.79018 17.3033 5.1967C18.7098 6.60322 19.5 8.51088 19.5 10.5Z" fill="#F87171" stroke="#202020" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.8608 16V7.27273H13.1335C13.804 7.27273 14.3665 7.39773 14.821 7.64773C15.2784 7.89773 15.6236 8.24148 15.8565 8.67898C16.0923 9.11364 16.2102 9.60795 16.2102 10.1619C16.2102 10.7216 16.0923 11.2187 15.8565 11.6534C15.6207 12.0881 15.2727 12.4304 14.8125 12.6804C14.3523 12.9276 13.7855 13.0511 13.1122 13.0511H10.9432V11.7514H12.8991C13.2912 11.7514 13.6122 11.6832 13.8622 11.5469C14.1122 11.4105 14.2969 11.223 14.4162 10.9844C14.5384 10.7457 14.5994 10.4716 14.5994 10.1619C14.5994 9.85227 14.5384 9.57955 14.4162 9.34375C14.2969 9.10795 14.1108 8.92472 13.858 8.79403C13.608 8.66051 13.2855 8.59375 12.8906 8.59375H11.4418V16H9.8608Z" fill="#202020"/></svg>`
          : `<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none"><path d="M19.5 10.5C19.5 17.642 12 21.75 12 21.75C12 21.75 4.5 17.642 4.5 10.5C4.5 8.51088 5.29018 6.60322 6.6967 5.1967C8.10322 3.79018 10.0109 3 12 3C13.9891 3 15.8968 3.79018 17.3033 5.1967C18.7098 6.60322 19.5 8.51088 19.5 10.5Z" fill="#FFB300" stroke="#202020" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.8608 16V7.27273H13.1335C13.804 7.27273 14.3665 7.39773 14.821 7.64773C15.2784 7.89773 15.6236 8.24148 15.8565 8.67898C16.0923 9.11364 16.2102 9.60795 16.2102 10.1619C16.2102 10.7216 16.0923 11.2187 15.8565 11.6534C15.6207 12.0881 15.2727 12.4304 14.8125 12.6804C14.3523 12.9276 13.7855 13.0511 13.1122 13.0511H10.9432V11.7514H12.8991C13.2912 11.7514 13.6122 11.6832 13.8622 11.5469C14.1122 11.4105 14.2969 11.223 14.4162 10.9844C14.5384 10.7457 14.5994 10.4716 14.5994 10.1619C14.5994 9.85227 14.5384 9.57955 14.4162 9.34375C14.2969 9.10795 14.1108 8.92472 13.858 8.79403C13.608 8.66051 13.2855 8.59375 12.8906 8.59375H11.4418V16H9.8608Z" fill="#202020"/></svg>`;
        return L.divIcon({
          html: svg,
          iconSize: [35, 35],
          iconAnchor: [17, 35],
          className: "custom-pin",
        });
      }

      function isInsidePickupArea(lat, lng) {
        return lat >= pickupArea.minLat && lat <= pickupArea.maxLat && lng >= pickupArea.minLng && lng <= pickupArea.maxLng;
      }

      // Ubah showPickupError agar pesan muncul di bawah input search
      function showPickupError(show) {
        let errorDiv = document.getElementById("pickup-error");
        if (!errorDiv) {
          errorDiv = document.createElement("div");
          errorDiv.id = "pickup-error";
          errorDiv.className = "text-red-600 text-sm font-medium mt-3 flex items-center";

          errorDiv.innerHTML = ` <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
</svg>
    This location is outside of the activity provider's pickup area. Please select a pickup location inside the area indicated on the map.`;
          // Tempatkan di bawah input search
          const searchInput = document.getElementById("location_search");
          searchInput.parentNode.parentNode.appendChild(errorDiv);
        }
        errorDiv.style.display = show ? "flex" : "none";
      }

      // Search & dropdown mirip gambar
      function setupSearch() {
        const searchInput = document.getElementById("location_search");
        let searchTimeout;

        searchInput.addEventListener("input", function () {
          const query = this.value;
          clearTimeout(searchTimeout);
          searchTimeout = setTimeout(() => {
            if (query.length > 2) {
              searchLocation(query);
            } else {
              hideSearchResults();
            }
          }, 500);
        });

        searchInput.addEventListener("blur", function () {
          setTimeout(() => {
            hideSearchResults();
          }, 200);
        });
      }

      // Search lokasi di Yogyakarta saja
      async function searchLocation(query) {
        try {
          const response = await fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(query)}&viewbox=110.2,-8.1,110.7,-7.5&bounded=1&addressdetails=1&extratags=1&namedetails=1`);
          const results = await response.json();
          showSearchResults(results);
        } catch (error) {
          console.error("Search error:", error);
        }
      }

      // Dropdown hasil search
      function showSearchResults(results) {
        hideSearchResults();
        if (results.length === 0) return;

        const searchInput = document.getElementById("location_search");
        const dropdown = document.createElement("div");
        dropdown.id = "search-dropdown";
        dropdown.className = "absolute z-50 w-full bg-white border border-gray-300 rounded-b-lg shadow-lg max-h-64 overflow-y-auto";

        results.forEach((result) => {
          const iconType = result.type === "hotel" || result.type === "guest_house" ? "🏨" : result.type === "mall" ? "🏬" : "📍";
          const item = document.createElement("div");
          item.className = "px-4 py-2 hover:bg-gray-100 cursor-pointer border-b border-gray-100 last:border-b-0 flex flex-col";
          item.innerHTML = `
      <div class="flex items-center gap-2">
        <span>${iconType}</span>
        <span class="font-semibold text-sm">${result.display_name.split(",")[0]}</span>
      </div>
      <div class="text-xs text-gray-600">${result.display_name.replace(result.display_name.split(",")[0] + ",", "")}</div>
    `;
          item.addEventListener("click", () => {
            const lat = parseFloat(result.lat);
            const lng = parseFloat(result.lon);
            if (!isInsidePickupArea(lat, lng)) {
              showPickupError(true);
              setMarker({ lat, lng }, true);
            } else {
              showPickupError(false);
              setMarker({ lat, lng }, false);
              document.getElementById("location_search").value = result.display_name;
              map.setView([lat, lng], 16);
            }
            hideSearchResults();
          });
          dropdown.appendChild(item);
        });

        searchInput.parentNode.appendChild(dropdown);
      }

      // Hide dropdown
      function hideSearchResults() {
        const dropdown = document.getElementById("search-dropdown");
        if (dropdown) dropdown.remove();
      }

      // Reverse geocoding isi input
      async function reverseGeocode(lat, lng) {
        try {
          const response = await fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}&addressdetails=1`);
          const result = await response.json();
          if (result && result.display_name) {
            document.getElementById("location_search").value = result.display_name;
          }
        } catch (error) {
          console.error("Reverse geocoding error:", error);
        }
      }

      // Handle radio button changes
      document.addEventListener("DOMContentLoaded", function () {
        const pickupYes = document.getElementById("pickup_yes");
        const pickupNo = document.getElementById("pickup_no");
        const pickupDetails = document.getElementById("pickup_details");

        pickupYes.addEventListener("change", function () {
          if (this.checked) {
            pickupDetails.classList.add("active");
            // Initialize map if not already done
            setTimeout(() => {
              if (typeof L !== "undefined" && !map) {
                initMap();
              } else if (map) {
                map.invalidateSize();
              }
            }, 300);
          }
        });

        pickupNo.addEventListener("change", function () {
          if (this.checked) {
            pickupDetails.classList.remove("active");
          }
        });

        // Initialize map immediately if pickup option is already selected
        if (pickupYes.checked) {
          pickupDetails.classList.add("active");
          setTimeout(() => {
            initMap();
          }, 300);
        }
      });
    </script>

    <!-- Tambahkan di bagian paling bawah sebelum </body> -->
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const pickupNo = document.getElementById("pickup_no");
        const pickupNoLabel = pickupNo.closest("label");
        const pickupNoDiv = pickupNoLabel.parentNode;

        function showPickupSoonAlert(show) {
          let alertDiv = document.getElementById("pickup-soon-alert");
          if (show) {
            if (!alertDiv) {
              alertDiv = document.createElement("div");
              alertDiv.id = "pickup-soon-alert";
              alertDiv.className = "bg-primary bg-opacity-50 text-secondary rounded-lg px-6 py-4 text-base font-medium mt-4";
              alertDiv.innerText = "The activity is coming up soon. Your activity provider needs your pickup location to coordinate the activity. Please confirm your pick-up location as soon as possible.";
              pickupNoDiv.appendChild(alertDiv);
            }
            alertDiv.style.display = "block";
          } else {
            if (alertDiv) alertDiv.style.display = "none";
          }
        }

        pickupNo.addEventListener("change", function () {
          if (this.checked) {
            showPickupSoonAlert(true);
          } else {
            showPickupSoonAlert(false);
          }
        });

        // Tampilkan pesan jika sudah terpilih saat load
        if (pickupNo.checked) {
          showPickupSoonAlert(true);
        }
      });
    </script>
@endpush
@endsection
