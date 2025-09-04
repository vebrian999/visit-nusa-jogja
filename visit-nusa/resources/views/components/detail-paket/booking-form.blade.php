{{-- Participants and Date Selection Component --}}
@props(['paket', 'priceData'])

<div class="flex-col">
  <!-- Main Booking Section -->
  <div class="bg-secondary rounded-2xl p-6 w-full max-w-4xl shadow-xl">
    <h2 class="text-white text-2xl font-bold mb-4">Select participants and date</h2>

    <!-- Booking Form -->
    <div class="flex flex-col gap-3">
      <!-- Input Row: Adults, Children, Date -->
      <div class="flex flex-col md:flex-row gap-3">
        <!-- Adults Counter -->
        <div class="bg-white rounded-xl p-3 flex items-center justify-between min-h-[60px] flex-1">
          <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 25" fill="none">
              <g clip-path="url(#clip0_adults)">
                <path
                  d="M15 19.628C15.853 19.8757 16.7368 20.0009 17.625 20C19.0534 20.0021 20.4633 19.6764 21.746 19.048C21.7839 18.1517 21.5286 17.2675 21.0188 16.5293C20.509 15.7912 19.7724 15.2394 18.9207 14.9575C18.0691 14.6757 17.1487 14.6791 16.2992 14.9674C15.4497 15.2557 14.7173 15.813 14.213 16.555M15 19.628V19.625C15 18.512 14.714 17.465 14.213 16.555M15 19.628V19.734C13.0755 20.8931 10.8706 21.5038 8.62402 21.5C6.29302 21.5 4.11202 20.855 2.25002 19.734L2.24902 19.625C2.24826 18.2095 2.71864 16.8339 3.58601 15.7153C4.45338 14.5966 5.6684 13.7984 7.03951 13.4466C8.41063 13.0948 9.85985 13.2093 11.1587 13.7721C12.4575 14.3349 13.5321 15.314 14.213 16.555M12 6.875C12 7.77011 11.6444 8.62855 11.0115 9.26149C10.3786 9.89442 9.52013 10.25 8.62502 10.25C7.72992 10.25 6.87147 9.89442 6.23854 9.26149C5.6056 8.62855 5.25002 7.77011 5.25002 6.875C5.25002 5.97989 5.6056 5.12145 6.23854 4.48851C6.87147 3.85558 7.72992 3.5 8.62502 3.5C9.52013 3.5 10.3786 3.85558 11.0115 4.48851C11.6444 5.12145 12 5.97989 12 6.875ZM20.25 9.125C20.25 9.82119 19.9735 10.4889 19.4812 10.9812C18.9889 11.4734 18.3212 11.75 17.625 11.75C16.9288 11.75 16.2612 11.4734 15.7689 10.9812C15.2766 10.4889 15 9.82119 15 9.125C15 8.42881 15.2766 7.76113 15.7689 7.26884C16.2612 6.77656 16.9288 6.5 17.625 6.5C18.3212 6.5 18.9889 6.77656 19.4812 7.26884C19.9735 7.76113 20.25 8.42881 20.25 9.125Z"
                  stroke="#4B5563"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </g>
              <defs>
                <clipPath id="clip0_adults">
                  <rect width="24" height="24" fill="white" transform="translate(0 0.5)" />
                </clipPath>
              </defs>
            </svg>
            <span class="font-medium text-secondary text-sm">Adults</span>
          </div>
          <div class="flex items-center gap-2">
            <button onclick="decreaseCount('adults')" class="w-6 h-6 rounded-full border border-secondary-300 flex items-center justify-center hover:bg-gray-50 transition-colors">
              <svg class="w-3 h-3 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
              </svg>
            </button>
            <span id="adultsCount" class="font-semibold text-sm text-secondary w-4 text-center">1</span>
            <button onclick="increaseCount('adults')" class="w-6 h-6 rounded-full border border-secondary-300 flex items-center justify-center hover:bg-gray-50 transition-colors">
              <svg class="w-3 h-3 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
              </svg>
            </button>
          </div>
        </div>

        <!-- Children Counter -->
        <div class="bg-white rounded-xl p-3 flex items-center justify-between min-h-[60px] flex-1">
          <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#4B5563" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z" />
              <path d="M16 18v2a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2c0-1.1.9-2 2-2h8c1.1 0 2 .9 2 2z" />
              <path d="M18 8a3 3 0 1 1 0 6" />
              <path d="M22 18v2a2 2 0 0 1-2 2h-1" />
            </svg>
            <span class="font-medium text-secondary text-sm">Children</span>
          </div>
          <div class="flex items-center gap-2">
            <button onclick="decreaseCount('children')" class="w-6 h-6 rounded-full border border-secondary-300 flex items-center justify-center hover:bg-gray-50 transition-colors">
              <svg class="w-3 h-3 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
              </svg>
            </button>
            <span id="childrenCount" class="font-semibold text-sm text-secondary w-4 text-center">0</span>
            <button onclick="increaseCount('children')" class="w-6 h-6 rounded-full border border-secondary-300 flex items-center justify-center hover:bg-gray-50 transition-colors">
              <svg class="w-3 h-3 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
              </svg>
            </button>
          </div>
        </div>

        <!-- Date Selector -->
        <div class="bg-white rounded-xl p-3 min-h-[60px] flex items-center flex-1">
          <div class="flex items-center gap-2 flex-1 relative">
            <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <input type="text" id="dateInput" placeholder="Select date" class="flex-1 border-0 outline-none text-sm font-medium text-secondary bg-transparent cursor-pointer pr-8" readonly />
            <svg class="w-4 h-4 text-secondary absolute right-2 top-1/2 -translate-y-1/2 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </div>
        </div>
      </div>

      <!-- Button Row: Check Availability -->
      <div class="mt-3">
        <button onclick="checkAvailability()" class="bg-primary text-secondary font-semibold py-3 px-4 rounded-xl transition-all duration-300 hover:bg-yellow-500 text-sm w-full min-h-[60px]">Check Availability</button>
      </div>
    </div>

    <!-- Total Price Display (Mobile) -->
    <div id="totalPriceMobile" class="mt-4 bg-white rounded-xl p-3 hidden md:hidden">
      <div class="flex justify-between items-center">
        <div>
          <div class="text-sm text-secondary">Total for <span id="totalPeopleMobile">2</span> people</div>
        </div>
        <div class="text-lg font-bold text-secondary" id="priceAmountMobile">Rp 0</div>
      </div>
    </div>
  </div>

  <!-- Availability Result Section -->
  <div id="availabilityResult" class="mt-10 w-full max-w-4xl mx-auto hidden">
    <div class="bg-white rounded-2xl border-2 border-yellow-300 shadow-lg overflow-hidden">
      <!-- Tour Header -->
      <div class="p-4 border-b">
        <div class="flex justify-between items-start">
          <h3 class="text-lg font-semibold text-secondary mb-2">Day Tour with Guides at Temple and Hotel Pickup</h3>
          <button onclick="toggleDetails()" class="p-2 text-secondary hover:bg-gray-100 rounded-full transition-colors">
            <svg id="toggleIcon" class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
        </div>
        <p class="text-sm text-gray-600 mb-3">
          This option sharing tour includes all prambanan and borobudur guides, excluding temple tickets IDR 950,000 per person cash only, the driver will take care of all your tickets, The driver will collect your ticket money
          during the trip
        </p>

        <!-- Tour Details -->
        <div class="flex flex-wrap gap-4 text-sm">
          <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
              <path
                d="M10 3.78711V9.78711H14.5M19 9.78711C19 10.969 18.7672 12.1393 18.3149 13.2313C17.8626 14.3232 17.1997 15.3153 16.364 16.1511C15.5282 16.9868 14.5361 17.6497 13.4442 18.102C12.3522 18.5543 11.1819 18.7871 10 18.7871C8.8181 18.7871 7.64778 18.5543 6.55585 18.102C5.46392 17.6497 4.47177 16.9868 3.63604 16.1511C2.80031 15.3153 2.13738 14.3232 1.68508 13.2313C1.23279 12.1393 1 10.969 1 9.78711C1 7.40016 1.94821 5.11098 3.63604 3.42315C5.32387 1.73532 7.61305 0.787109 10 0.787109C12.3869 0.787109 14.6761 1.73532 16.364 3.42315C18.0518 5.11098 19 7.40016 19 9.78711Z"
                stroke="black"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
            <span class="text-secondary">11 hours</span>
          </div>
          <div class="flex items-center gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="18" viewBox="0 0 30 22" fill="none">
              <path
                d="M18.7468 0.918457L18.4006 1.76723M18.4006 1.76723L20.1034 2.00444C21.3847 2.18324 22.5554 2.82042 23.4039 3.80081L23.4516 3.85591C24.283 4.81631 25.4242 5.44787 26.6768 5.64074L28.578 5.93314C27.562 7.82179 26.7504 9.81411 26.1575 11.8751L24.2541 11.5818C23.0013 11.3892 21.8597 10.7577 21.028 9.7973L20.9804 9.74221C20.1319 8.76182 18.9612 8.12464 17.6799 7.94584L15.9771 7.70862M18.4006 1.76723L15.9771 7.70862M14.5922 11.1037L15.9771 7.70862"
                stroke="black"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round" />
              <path
                d="M12.75 5C12.75 5.99456 12.3549 6.94839 11.6516 7.65165C10.9484 8.35491 9.99454 8.75 8.99998 8.75C8.00541 8.75 7.05159 8.35491 6.34833 7.65165C5.64506 6.94839 5.24998 5.99456 5.24998 5C5.24998 4.00544 5.64506 3.05161 6.34833 2.34835C7.05159 1.64509 8.00541 1.25 8.99998 1.25C9.99454 1.25 10.9484 1.64509 11.6516 2.34835C12.3549 3.05161 12.75 4.00544 12.75 5ZM1.50098 19.118C1.53311 17.1504 2.33731 15.2742 3.74015 13.894C5.14299 12.5139 7.03206 11.7405 8.99998 11.7405C10.9679 11.7405 12.857 12.5139 14.2598 13.894C15.6626 15.2742 16.4668 17.1504 16.499 19.118C14.1464 20.1968 11.5881 20.7535 8.99998 20.75C6.32398 20.75 3.78398 20.166 1.50098 19.118Z"
                stroke="black"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
            <span class="text-secondary">Guide: English</span>
          </div>
        </div>

        <!-- Pickup Location -->
        <div class="mt-3">
          <button class="text-secondary underline text-sm flex items-center gap-2 hover:text-gray-800 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="24" viewBox="0 0 17 22" fill="none">
              <path
                d="M16 9.125C16 16.267 8.5 20.375 8.5 20.375C8.5 20.375 1 16.267 1 9.125C1 7.13588 1.79018 5.22822 3.1967 3.8217C4.60322 2.41518 6.51088 1.625 8.5 1.625C10.4891 1.625 12.3968 2.41518 13.8033 3.8217C15.2098 5.22822 16 7.13588 16 9.125Z"
                stroke="#202020"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round" />
              <path
                d="M5.99947 15V6.27273H9.27219C9.94265 6.27273 10.5051 6.39773 10.9597 6.64773C11.4171 6.89773 11.7623 7.24148 11.9952 7.67898C12.231 8.11364 12.3489 8.60795 12.3489 9.16193C12.3489 9.72159 12.231 10.2187 11.9952 10.6534C11.7594 11.0881 11.4114 11.4304 10.9512 11.6804C10.4909 11.9276 9.92418 12.0511 9.25089 12.0511H7.08185V10.7514H9.03782C9.42987 10.7514 9.75089 10.6832 10.0009 10.5469C10.2509 10.4105 10.4355 10.223 10.5549 9.98438C10.677 9.74574 10.7381 9.47159 10.7381 9.16193C10.7381 8.85227 10.677 8.57955 10.5549 8.34375C10.4355 8.10795 10.2495 7.92472 9.99663 7.79403C9.74663 7.66051 9.42418 7.59375 9.0293 7.59375H7.58043V15H5.99947Z"
                fill="#202020" />
            </svg>
            View pickup area
          </button>
          <p class="text-xs text-gray-500 mt-1">Check to see if your accommodation is within the eligible area for pickup.</p>
        </div>
      </div>

      <!-- Expandable Details Section -->
      <div id="detailsSection" class="hidden">
        <div class="p-4 bg-gray-50">
          <h4 class="font-semibold text-secondary mb-2">Starting time</h4>
          <div class="mb-4">
            <div class="text-secondary mb-2" id="selectedDateDisplay">Wednesday, August 20, 2025</div>
            <div class="text-secondary font-semibold">8:00 AM</div>
          </div>
          <div class="text-sm font-medium text-secondary flex items-center gap-2 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 15 15" fill="none">
              <path
                d="M6.84375 6.84375L6.87279 6.82958C6.96362 6.78421 7.06555 6.76581 7.16651 6.77657C7.26747 6.78733 7.36324 6.8268 7.44246 6.8903C7.52169 6.9538 7.58106 7.03867 7.61354 7.13487C7.64603 7.23106 7.65026 7.33455 7.62575 7.43308L7.12425 9.44192C7.09956 9.5405 7.10366 9.64409 7.13607 9.7404C7.16848 9.83672 7.22784 9.92172 7.3071 9.98532C7.38636 10.0489 7.4822 10.0885 7.58325 10.0992C7.6843 10.11 7.78632 10.0916 7.87721 10.0461L7.90625 10.0312M13.75 7.375C13.75 8.21218 13.5851 9.04116 13.2647 9.81461C12.9444 10.5881 12.4748 11.2908 11.8828 11.8828C11.2908 12.4748 10.5881 12.9444 9.81461 13.2647C9.04116 13.5851 8.21218 13.75 7.375 13.75C6.53782 13.75 5.70884 13.5851 4.93539 13.2647C4.16194 12.9444 3.45917 12.4748 2.86719 11.8828C2.27522 11.2908 1.80564 10.5881 1.48527 9.81461C1.16489 9.04116 1 8.21218 1 7.375C1 5.68424 1.67165 4.06274 2.86719 2.86719C4.06274 1.67165 5.68424 1 7.375 1C9.06576 1 10.6873 1.67165 11.8828 2.86719C13.0783 4.06274 13.75 5.68424 13.75 7.375ZM7.375 4.71875H7.38067V4.72442H7.375V4.71875Z"
                stroke="#202020"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
            Only 18 hour left to book
          </div>
          <div class="text-sm font-medium text-secondary flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 15 15" fill="none">
              <path
                d="M3.65625 1V2.59375M11.0937 1V2.59375M1 12.1562V4.1875C1 3.76481 1.16791 3.35943 1.4668 3.06055C1.76568 2.76166 2.17106 2.59375 2.59375 2.59375H12.1562C12.5789 2.59375 12.9843 2.76166 13.2832 3.06055C13.5821 3.35943 13.75 3.76481 13.75 4.1875V12.1562M1 12.1562C1 12.5789 1.16791 12.9843 1.4668 13.2832C1.76568 13.5821 2.17106 13.75 2.59375 13.75H12.1562C12.5789 13.75 12.9843 13.5821 13.2832 13.2832C13.5821 12.9843 13.75 12.5789 13.75 12.1562M1 12.1562V6.84375C1 6.42106 1.16791 6.01568 1.4668 5.7168C1.76568 5.41791 2.17106 5.25 2.59375 5.25H12.1562C12.5789 5.25 12.9843 5.41791 13.2832 5.7168C13.5821 6.01568 13.75 6.42106 13.75 6.84375V12.1562"
                stroke="#202020"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M5.5 9.375L7 10.875L9.25 7.5" stroke="#202020" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            Cancel before 8:00 AM on August 20 for a full refund
          </div>
        </div>
      </div>

      <!-- Price and Continue Section -->
      <div class="bg-secondary p-4 flex flex-col md:flex-row justify-between items-center gap-3">
        <div class="text-left">
          <div class="text-primary text-2xl font-bold" id="finalPrice">$4792</div>
          <div class="text-white text-sm" id="participantCount">1 adult</div>
          <div class="text-gray-300 text-xs">All taxes and fees included</div>
        </div>
        <button onclick="continuePurchase()" class="bg-primary text-secondary font-semibold px-8 py-3 rounded-xl transition-all duration-300 hover:bg-yellow-500 text-sm min-w-[120px]">Continue</button>
      </div>
    </div>
  </div>

  <!-- Booking script will be loaded from @push('scripts') section -->
  <script>
    // App State declaration - implementation moved to @push('scripts')
    let state;
    
    // Will be initialized in the @push('scripts') section
    // The booking form functionality is defined in the scripts section at the end of the file
    // This includes:
    // - Date picker initialization with Flatpickr
    // - Adults and children counter functionality
    // - Price calculation based on selected date and number of participants
    // - Availability checking and display
    // - Booking confirmation
  </script>
</div>
