{{-- Itinerary and Map Component --}}
@props(['paket'])

<div class="">
  <div class="rounded-2xl overflow-hidden">
    <div class="mb-6">
      <h2 class="text-2xl font-bold text-gray-900 m-6">Itinerary</h2>
    </div>
  <div class="flex flex-col lg:flex-row">
    <!-- Left Panel - Itinerary -->
    <div class="w-full lg:w-2/5 px-6">
      @include('pages.itinerary-section')
    </div>

    <!-- Right Panel - Map -->
    <div class="w-full lg:w-3/5">
      <div class="h-96 lg:h-[400px]">
        <div id="map" class="relative z-10 w-full h-[400px]"></div>

        <!-- Map Controls -->
        <div class="absolute top-10 right-28 z-20">
          <button id="recenterBtn" class="bg-gray-800 text-white px-4 py-2 rounded-lg shadow-lg hover:bg-gray-700 transition-colors">Re-center</button>
        </div>

        <!-- Legend - Below Map -->
        <div class="mt-5">
          <div class="flex items-center space-x-5 text-sm">
            <div class="legend-item flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none">
                <path
                  d="M19.5 10.5C19.5 17.642 12 21.75 12 21.75C12 21.75 4.5 17.642 4.5 10.5C4.5 8.51088 5.29018 6.60322 6.6967 5.1967C8.10322 3.79018 10.0109 3 12 3C13.9891 3 15.8968 3.79018 17.3033 5.1967C18.7098 6.60322 19.5 8.51088 19.5 10.5Z"
                  fill="#FFB300"
                  stroke="#202020"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M9.8608 16V7.27273H13.1335C13.804 7.27273 14.3665 7.39773 14.821 7.64773C15.2784 7.89773 15.6236 8.24148 15.8565 8.67898C16.0923 9.11364 16.2102 9.60795 16.2102 10.1619C16.2102 10.7216 16.0923 11.2187 15.8565 11.6534C15.6207 12.0881 15.2727 12.4304 14.8125 12.6804C14.3523 12.9276 13.7855 13.0511 13.1122 13.0511H10.9432V11.7514H12.8991C13.2912 11.7514 13.6122 11.6832 13.8622 11.5469C14.1122 11.4105 14.2969 11.223 14.4162 10.9844C14.5384 10.7457 14.5994 10.4716 14.5994 10.1619C14.5994 9.85227 14.5384 9.57955 14.4162 9.34375C14.2969 9.10795 14.1108 8.92472 13.858 8.79403C13.608 8.66051 13.2855 8.59375 12.8906 8.59375H11.4418V16H9.8608Z"
                  fill="#202020" />
              </svg>
              <span class="text-secondary font-medium text-sm">Pickup Location</span>
            </div>
            <div class="legend-item">
              <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none">
                <path
                  d="M19.5 10.5C19.5 17.642 12 21.75 12 21.75C12 21.75 4.5 17.642 4.5 10.5C4.5 8.51088 5.29018 6.60322 6.6967 5.1967C8.10322 3.79018 10.0109 3 12 3C13.9891 3 15.8968 3.79018 17.3033 5.1967C18.7098 6.60322 19.5 8.51088 19.5 10.5Z"
                  fill="#FFB300"
                  stroke="black"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M15 10.5C15 11.2956 14.6839 12.0587 14.1213 12.6213C13.5587 13.1839 12.7956 13.5 12 13.5C11.2044 13.5 10.4413 13.1839 9.87868 12.6213C9.31607 12.0587 9 11.2956 9 10.5C9 9.70435 9.31607 8.94129 9.87868 8.37868C10.4413 7.81607 11.2044 7.5 12 7.5C12.7956 7.5 13.5587 7.81607 14.1213 8.37868C14.6839 8.94129 15 9.70435 15 10.5Z"
                  stroke="black"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
              <span class="text-secondary font-medium text-sm">Destinations</span>
            </div>
            <div class="legend-item">
              <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none">
                <path
                  d="M19.5 10.5C19.5 17.642 12 21.75 12 21.75C12 21.75 4.5 17.642 4.5 10.5C4.5 8.51088 5.29018 6.60322 6.6967 5.1967C8.10322 3.79018 10.0109 3 12 3C13.9891 3 15.8968 3.79018 17.3033 5.1967C18.7098 6.60322 19.5 8.51088 19.5 10.5Z"
                  fill="#FFB300"
                  stroke="#202020"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M11.8182 16H8.8608V7.27273H11.8778C12.7443 7.27273 13.4886 7.44744 14.1108 7.79688C14.7358 8.14347 15.2159 8.64205 15.5511 9.29261C15.8864 9.94318 16.054 10.7216 16.054 11.6278C16.054 12.5369 15.8849 13.3182 15.5469 13.9716C15.2116 14.625 14.7273 15.1264 14.0938 15.4759C13.4631 15.8253 12.7045 16 11.8182 16ZM10.4418 14.6321H11.7415C12.3494 14.6321 12.8565 14.5213 13.2628 14.2997C13.669 14.0753 13.9744 13.7415 14.179 13.2983C14.3835 12.8523 14.4858 12.2955 14.4858 11.6278C14.4858 10.9602 14.3835 10.4062 14.179 9.96591C13.9744 9.52273 13.6719 9.19176 13.2713 8.97301C12.8736 8.75142 12.3793 8.64062 11.7884 8.64062H10.4418V14.6321Z"
                  fill="#202020" />
              </svg>
              <span class="text-secondary font-medium text-sm">Drop-off Location</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Map will be initialized in @push('scripts') section -->
<div id="mapLoadingIndicator" class="flex items-center justify-center h-full bg-gray-100">
  <div class="text-center">
    <div class="animate-spin rounded-full h-12 w-12 border-t-2 border-b-2 border-primary mx-auto mb-2"></div>
    <p class="text-gray-600">Loading map...</p>
  </div>
</div>
