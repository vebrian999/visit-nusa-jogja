@extends('layouts.app')

@push('styles')
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.css" />
@endpush

@section('content')
    <main class="pt-16">
      <div class="container mx-auto main-container md:py-16">
        <!-- Title & Rating -->
        <div class="mb-8">
          <h1 class="text-3xl sm:text-4xl lg:text-4xl font-bold mb-4 text-secondary leading-tight">{{ $paket->nama }}</h1>
          <div>
            <div class="flex flex-col items-center justify-between sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
              <!-- Kiri: Info Paket & Rating -->
              <div class="flex items-center gap-2">
                <span class="bg-primary text-secondary px-4 py-2 rounded-md font-semibold text-sm w-fit"> {{ $paket->tipe ?? 'DAY TRIP' }} </span>
                <div class="flex items-center star-rating">
                  @for ($i = 0; $i < 5; $i++)
                  <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20" style="color: #ffb300; fill: #ffb300">
                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                  </svg>
                  @endfor
                </div>
                <span class="text-sm font-semibold text-secondary">{{ number_format($paket->rating ?? 4.9, 1) }}</span>
                <a href="#reviews" class="underline text-secondary text-sm font-semibold">{{ $paket->total_review ?? 910 }} reviews</a>
              </div>

              <!-- Kanan: Action Buttons -->
              <div class="flex space-x-4">
                <button class="flex items-center gap-2 underline text-secondary text-sm font-semibold hover:text-red-500 py-2 rounded-lg transition-colors">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                  </svg>
                  Add to wishlist
                </button>
                <button class="flex items-center gap-2 hover:text-blue-500 py-2 rounded-lg underline text-secondary text-sm font-semibold transition-colors">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z" />
                  </svg>
                  Share
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modern Gallery Layout -->
        <div class="mb-8">
          <!-- Desktop Gallery -->
          <div class="mb-8">
            <div class="hidden lg:grid grid-cols-4 grid-rows-2 gap-3 h-96">
              <!-- Gambar besar kiri (2 baris x 2 kolom) -->
              <div class="col-span-2 row-span-2 rounded-xl overflow-hidden group cursor-pointer">
                <div class="w-full h-full relative">
                  <img src="{{ asset($paket->gallery[0] ?? 'img/bg-hero-index.png') }}" alt="{{ $paket->nama }}" class="w-full h-full object-cover gallery-image group-hover:scale-105 transition-transform duration-500" style="aspect-ratio: 3/2" />
                </div>
              </div>
              <!-- Gambar kanan atas -->
              <div class="col-span-1 row-span-2 rounded-xl overflow-hidden group cursor-pointer">
                <div class="w-full h-full relative">
                  <img src="{{ asset($paket->gallery[1] ?? 'img/bg-hero-index.png') }}" alt="{{ $paket->nama }}" class="w-full h-full object-cover gallery-image group-hover:scale-105 transition-transform duration-500" style="aspect-ratio: 3/4" />
                </div>
              </div>
              <!-- Gambar kanan bawah kiri -->
              <div class="rounded-xl overflow-hidden group cursor-pointer">
                <div class="w-full h-full relative">
                  <img src="{{ asset($paket->gallery[2] ?? 'img/bg-hero-index.png') }}" alt="{{ $paket->nama }}" class="w-full h-full object-cover gallery-image group-hover:scale-105 transition-transform duration-500" style="aspect-ratio: 5/3" />
                </div>
              </div>
              <!-- Gambar kanan bawah kanan dengan overlay +10 -->
              <div class="relative rounded-xl overflow-hidden group cursor-pointer" id="viewMoreBtn">
                <div class="w-full h-full relative">
                  <img src="{{ asset($paket->gallery[3] ?? 'img/bg-hero-index.png') }}" alt="{{ $paket->nama }}" class="w-full h-full object-cover gallery-image" style="aspect-ratio: 5/3" />
                  <div class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center group-hover:bg-opacity-70 transition-all duration-300">
                    <div class="text-white text-center">
                      <div class="text-2xl font-bold mb-1">+10</div>
                      <div class="text-sm opacity-90">More Photos</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Mobile Gallery -->
          <div class="lg:hidden space-y-4">
            <div class="rounded-2xl overflow-hidden">
              <img src="{{ asset($paket->gallery[0] ?? 'img/bg-hero-index.png') }}" alt="{{ $paket->nama }}" class="w-full h-64 sm:h-80 object-cover" />
            </div>
            <div class="grid grid-cols-2 gap-4">
              <img src="{{ asset($paket->gallery[1] ?? 'img/bg-hero-index.png') }}" alt="{{ $paket->nama }}" class="rounded-2xl h-32 sm:h-40 w-full object-cover" />
              <div class="relative rounded-2xl overflow-hidden cursor-pointer" id="viewMoreBtnMobile">
                <img src="{{ asset($paket->gallery[2] ?? 'img/bg-hero-index.png') }}" alt="{{ $paket->nama }}" class="w-full h-32 sm:h-40 object-cover" />
                <div class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center">
                  <div class="text-white text-center">
                    <div class="text-xl font-bold">+12</div>
                    <div class="text-xs">Photos</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@push('scripts')
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <!-- Flatpickr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js"></script>

    <script>
      // Modal functionality
      document.addEventListener('DOMContentLoaded', function() {
        const galleryModal = document.getElementById("galleryModal");
        const viewMoreBtn = document.getElementById("viewMoreBtn");
        const viewMoreBtnMobile = document.getElementById("viewMoreBtnMobile");
        const closeModal = document.getElementById("closeModal");

        // Open modal function
        function openModal() {
          if (galleryModal) {
            galleryModal.classList.remove("hidden");
            document.body.style.overflow = "hidden";
          }
        }

        // Close modal function
        function closeModalFunc() {
          if (galleryModal) {
            galleryModal.classList.add("hidden");
            document.body.style.overflow = "auto";
          }
        }

        // Event listeners
        if (viewMoreBtn) {
          viewMoreBtn.addEventListener("click", openModal);
        }

        if (viewMoreBtnMobile) {
          viewMoreBtnMobile.addEventListener("click", openModal);
        }

        if (closeModal) {
          closeModal.addEventListener("click", closeModalFunc);
        }

        // Close modal when clicking outside
        if (galleryModal) {
          galleryModal.addEventListener("click", function (e) {
            if (e.target === galleryModal) {
              closeModalFunc();
            }
          });
        }

        // Close modal with Escape key
        document.addEventListener("keydown", function (e) {
          if (e.key === "Escape" && galleryModal && !galleryModal.classList.contains("hidden")) {
            closeModalFunc();
          }
        });
      });
    </script>
    
    <script>
      // Map Functionality
      document.addEventListener('DOMContentLoaded', function() {
        if (document.getElementById("map")) {
          const map = L.map("map").setView([-7.8014, 110.3644], 10);

          // Add Google Maps-style tiles (satellite/hybrid view)
          L.tileLayer("https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}", {
            attribution: "© Google",
            maxZoom: 18,
          }).addTo(map);

          // Define locations
          const locations = {
            pickupLocations: [
              { name: "Yogyakarta Center", lat: -7.7956, lng: 110.3695, type: "pickup" },
              { name: "Adisucipto Airport", lat: -7.7886, lng: 110.4317, type: "pickup" },
              { name: "Tugu Station", lat: -7.7892, lng: 110.3639, type: "pickup" },
            ],
            destinations: [
              { name: "Prambanan Temple", lat: -7.752, lng: 110.4915, type: "destination", number: 1 },
              { name: "Borobudur Temple", lat: -7.6079, lng: 110.2038, type: "destination", number: 2 },
            ],
            dropoffLocations: [
              { name: "Yogyakarta Center", lat: -7.7956, lng: 110.3695, type: "dropoff" },
              { name: "Malioboro Street", lat: -7.7926, lng: 110.3656, type: "dropoff" },
              { name: "Kraton Yogyakarta", lat: -7.8053, lng: 110.3642, type: "dropoff" },
            ],
          };

          // Custom SVG icons as Leaflet DivIcons
          function createSVGIcon(svgString) {
            return L.divIcon({
              html: svgString,
              className: "",
              iconSize: [35, 35],
              iconAnchor: [17, 35],
              popupAnchor: [0, -35],
            });
          }

          // SVG for pickup
          const pickupSVG = `
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none">
              <path d="M19.5 10.5C19.5 17.642 12 21.75 12 21.75C12 21.75 4.5 17.642 4.5 10.5C4.5 8.51088 5.29018 6.60322 6.6967 5.1967C8.10322 3.79018 10.0109 3 12 3C13.9891 3 15.8968 3.79018 17.3033 5.1967C18.7098 6.60322 19.5 8.51088 19.5 10.5Z" fill="#FFB300" stroke="#202020" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M9.8608 16V7.27273H13.1335C13.804 7.27273 14.3665 7.39773 14.821 7.64773C15.2784 7.89773 15.6236 8.24148 15.8565 8.67898C16.0923 9.11364 16.2102 9.60795 16.2102 10.1619C16.2102 10.7216 16.0923 11.2187 15.8565 11.6534C15.6207 12.0881 15.2727 12.4304 14.8125 12.6804C14.3523 12.9276 13.7855 13.0511 13.1122 13.0511H10.9432V11.7514H12.8991C13.2912 11.7514 13.6122 11.6832 13.8622 11.5469C14.1122 11.4105 14.2969 11.223 14.4162 10.9844C14.5384 10.7457 14.5994 10.4716 14.5994 10.1619C14.5994 9.85227 14.5384 9.57955 14.4162 9.34375C14.2969 9.10795 14.1108 8.92472 13.858 8.79403C13.608 8.66051 13.2855 8.59375 12.8906 8.59375H11.4418V16H9.8608Z" fill="#202020"/>
            </svg>
          `;

          // SVG for destination
          const destinationSVG = `
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none">
              <path d="M19.5 10.5C19.5 17.642 12 21.75 12 21.75C12 21.75 4.5 17.642 4.5 10.5C4.5 8.51088 5.29018 6.60322 6.6967 5.1967C8.10322 3.79018 10.0109 3 12 3C13.9891 3 15.8968 3.79018 17.3033 5.1967C18.7098 6.60322 19.5 8.51088 19.5 10.5Z" fill="#FFB300" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M15 10.5C15 11.2956 14.6839 12.0587 14.1213 12.6213C13.5587 13.1839 12.7956 13.5 12 13.5C11.2044 13.5 10.4413 13.1839 9.87868 12.6213C9.31607 12.0587 9 11.2956 9 10.5C9 9.70435 9.31607 8.94129 9.87868 8.37868C10.4413 7.81607 11.2044 7.5 12 7.5C12.7956 7.5 13.5587 7.81607 14.1213 8.37868C14.6839 8.94129 15 9.70435 15 10.5Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          `;

          // SVG for dropoff
          const dropoffSVG = `
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none">
              <path d="M19.5 10.5C19.5 17.642 12 21.75 12 21.75C12 21.75 4.5 17.642 4.5 10.5C4.5 8.51088 5.29018 6.60322 6.6967 5.1967C8.10322 3.79018 10.0109 3 12 3C13.9891 3 15.8968 3.79018 17.3033 5.1967C18.7098 6.60322 19.5 8.51088 19.5 10.5Z" fill="#FFB300" stroke="#202020" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M11.8182 16H8.8608V7.27273H11.8778C12.7443 7.27273 13.4886 7.44744 14.1108 7.79688C14.7358 8.14347 15.2159 8.64205 15.5511 9.29261C15.8864 9.94318 16.054 10.7216 16.054 11.6278C16.054 12.5369 15.8849 13.3182 15.5469 13.9716C15.2116 14.625 14.7273 15.1264 14.0938 15.4759C13.4631 15.8253 12.7045 16 11.8182 16ZM10.4418 14.6321H11.7415C12.3494 14.6321 12.8565 14.5213 13.2628 14.2997C13.669 14.0753 13.9744 13.7415 14.179 13.2983C14.3835 12.8523 14.4858 12.2955 14.4858 11.6278C14.4858 10.9602 14.3835 10.4062 14.179 9.96591C13.9744 9.52273 13.6719 9.19176 13.2713 8.97301C12.8736 8.75142 12.3793 8.64062 11.7884 8.64062H10.4418V14.6321Z" fill="#202020"/>
            </svg>
          `;

          // Create Leaflet icons
          const pickupIcon = createSVGIcon(pickupSVG);
          const destinationIcon = createSVGIcon(destinationSVG);
          const dropoffIcon = createSVGIcon(dropoffSVG);

          // Pastikan array allMarkers sudah didefinisikan sebelum digunakan
          const allMarkers = [];

          // Add pickup locations
          locations.pickupLocations.forEach((location, index) => {
            const marker = L.marker([location.lat, location.lng], { icon: pickupIcon })
              .addTo(map)
              .bindPopup(`<strong>Pickup Location ${index + 1}</strong><br>${location.name}`);
            allMarkers.push(marker);
          });

          // Add destinations
          locations.destinations.forEach((location, index) => {
            const marker = L.marker([location.lat, location.lng], { icon: destinationIcon })
              .addTo(map)
              .bindPopup(`<strong>Destination ${index + 1}</strong><br>${location.name}`);
            allMarkers.push(marker);
          });

          // Add drop-off locations
          locations.dropoffLocations.forEach((location, index) => {
            const marker = L.marker([location.lat, location.lng], { icon: dropoffIcon })
              .addTo(map)
              .bindPopup(`<strong>Drop-off Location ${index + 1}</strong><br>${location.name}`);
            allMarkers.push(marker);
          });

          // Create route lines (simplified)
          const routeCoordinates = [
            [locations.pickupLocations[0].lat, locations.pickupLocations[0].lng],
            [locations.destinations[0].lat, locations.destinations[0].lng],
            [locations.destinations[1].lat, locations.destinations[1].lng],
            [locations.dropoffLocations[0].lat, locations.dropoffLocations[0].lng],
          ];

          const polyline = L.polyline(routeCoordinates, {
            color: "#f59e0b",
            weight: 2,
            opacity: 0.8,
            dashArray: "8, 8",
          }).addTo(map);

          // Re-center button functionality
          const recenterBtn = document.getElementById("recenterBtn");
          if (recenterBtn) {
            recenterBtn.addEventListener("click", function () {
              const group = new L.featureGroup(allMarkers);
              map.fitBounds(group.getBounds().pad(0.1));
            });
          }

          // Initial fit to bounds
          setTimeout(() => {
            const group = new L.featureGroup(allMarkers);
            map.fitBounds(group.getBounds().pad(0.1));
          }, 100);

          // Hide loading indicator
          const mapLoadingIndicator = document.getElementById("mapLoadingIndicator");
          if (mapLoadingIndicator) {
            mapLoadingIndicator.style.display = "none";
          }
        }
      });
    </script>
    
    <script>
      // Booking Form Functionality
      document.addEventListener('DOMContentLoaded', function() {
        // App State
        const state = {
          adultsCount: 1,
          childrenCount: 0,
          selectedDate: null,
          priceData: {
            weekday: {{ $priceData['weekday'] ?? 250000 }},
            weekend: {{ $priceData['weekend'] ?? 350000 }},
            holiday: {{ $priceData['holiday'] ?? 450000 }},
          },
        };

        // Initialize Flatpickr
        if (document.getElementById("dateInput")) {
          const fp = flatpickr("#dateInput", {
            minDate: "today",
            dateFormat: "d F Y",
            locale: {
              firstDayOfWeek: 1,
            },
            onChange: function (selectedDates, dateStr, instance) {
              if (selectedDates.length > 0) {
                state.selectedDate = selectedDates[0];
                updateTotalPrice();
              }
            },
            onDayCreate: function (dObj, dStr, fp, dayElem) {
              const date = dayElem.dateObj;
              if (date >= new Date().setHours(0, 0, 0, 0)) {
                const dayType = getDayType(date);
                const price = state.priceData[dayType];
                const priceEl = document.createElement("div");
                priceEl.className = "text-xs font-bold text-orange-600 mt-1";
                priceEl.textContent = `${price / 1000}k`;
                dayElem.appendChild(priceEl);
              }
            },
          });
        }

        // Counter Functions
        window.increaseCount = function(type) {
          if (type === "adults") {
            state.adultsCount++;
            document.getElementById("adultsCount").textContent = state.adultsCount;
          } else if (type === "children") {
            state.childrenCount++;
            document.getElementById("childrenCount").textContent = state.childrenCount;
          }
          updateTotalPrice();
        }

        window.decreaseCount = function(type) {
          if (type === "adults" && state.adultsCount > 1) {
            state.adultsCount--;
            document.getElementById("adultsCount").textContent = state.adultsCount;
          } else if (type === "children" && state.childrenCount > 0) {
            state.childrenCount--;
            document.getElementById("childrenCount").textContent = state.childrenCount;
          }
          updateTotalPrice();
        }

        // Utility Functions
        function getDayType(date) {
          const day = date.getDay();
          const holidays = ["2024-12-25", "2025-01-01", "2025-08-17"];
          const dateString = date.toISOString().split("T")[0];

          if (holidays.includes(dateString)) {
            return "holiday";
          } else if (day === 0 || day === 6) {
            return "weekend";
          } else {
            return "weekday";
          }
        }

        function formatPrice(price) {
          return `Rp ${price.toLocaleString("id-ID")}`;
        }

        function formatPriceUSD(price) {
          // Convert IDR to USD (approximate rate 1 USD = 15000 IDR)
          const usdPrice = Math.round(price / 15000);
          return `$${usdPrice}`;
        }

        function updatePriceDisplay() {
          if (state.selectedDate) {
            const dayType = getDayType(state.selectedDate);
            const price = state.priceData[dayType];
            if (document.getElementById("selectedPrice")) {
              document.getElementById("selectedPrice").textContent = formatPrice(price);
              document.getElementById("selectedPrice").classList.remove("hidden");
            }
          } else {
            if (document.getElementById("selectedPrice")) {
              document.getElementById("selectedPrice").classList.add("hidden");
            }
          }
        }

        function updateTotalPrice() {
          const totalPeople = state.adultsCount + state.childrenCount;

          if (document.getElementById("totalPeople")) {
            document.getElementById("totalPeople").textContent = totalPeople;
          }
          if (document.getElementById("totalPeopleMobile")) {
            document.getElementById("totalPeopleMobile").textContent = totalPeople;
          }

          if (state.selectedDate) {
            const dayType = getDayType(state.selectedDate);
            const basePrice = state.priceData[dayType];
            const totalPrice = state.adultsCount * basePrice + state.childrenCount * basePrice * 0.7;

            if (document.getElementById("priceAmount")) {
              document.getElementById("priceAmount").textContent = formatPrice(totalPrice);
            }
            if (document.getElementById("priceAmountMobile")) {
              document.getElementById("priceAmountMobile").textContent = formatPrice(totalPrice);
            }
          }
        }

        window.checkAvailability = function() {
          if (state.adultsCount < 1) {
            alert("Minimal 1 adult harus dipilih!");
            return;
          }
          if (!state.selectedDate) {
            alert("Please select a date first!");
            return;
          }

          const dayType = getDayType(state.selectedDate);
          const basePrice = state.priceData[dayType];
          const totalPrice = state.adultsCount * basePrice + state.childrenCount * basePrice * 0.7;

          // Update availability result display
          updateAvailabilityDisplay(totalPrice);

          // Show availability result with animation
          const resultElement = document.getElementById("availabilityResult");
          if (resultElement) {
            resultElement.classList.remove("hidden");
            resultElement.classList.add("slide-up", "bounce-in");

            // Scroll to result smoothly
            setTimeout(() => {
              resultElement.scrollIntoView({
                behavior: "smooth",
                block: "nearest",
              });
            }, 100);
          }
        }

        function updateAvailabilityDisplay(totalPrice) {
          // Update selected date display
          const options = { weekday: "long", year: "numeric", month: "long", day: "numeric" };
          const formattedDate = state.selectedDate.toLocaleDateString("en-US", options);
          if (document.getElementById("selectedDateDisplay")) {
            document.getElementById("selectedDateDisplay").textContent = formattedDate;
          }

          // Update price display
          if (document.getElementById("finalPrice")) {
            document.getElementById("finalPrice").textContent = formatPriceUSD(totalPrice);
          }

          // Update participant count
          let participantText = "";
          if (state.adultsCount > 0) {
            participantText += `${state.adultsCount} adult${state.adultsCount > 1 ? "s" : ""}`;
          }
          if (state.childrenCount > 0) {
            if (participantText) participantText += ", ";
            participantText += `${state.childrenCount} child${state.childrenCount > 1 ? "ren" : ""}`;
          }
          if (document.getElementById("participantCount")) {
            document.getElementById("participantCount").textContent = participantText;
          }
        }

        window.toggleDetails = function() {
          const detailsSection = document.getElementById("detailsSection");
          const toggleIcon = document.getElementById("toggleIcon");

          if (detailsSection && toggleIcon) {
            if (detailsSection.classList.contains("hidden")) {
              detailsSection.classList.remove("hidden");
              detailsSection.classList.add("slide-up");
              toggleIcon.classList.add("rotate-180");
            } else {
              detailsSection.classList.add("slide-down");
              toggleIcon.classList.remove("rotate-180");
              setTimeout(() => {
                detailsSection.classList.add("hidden");
                detailsSection.classList.remove("slide-down");
              }, 300);
            }
          }
        }

        window.continuePurchase = function() {
          const dayType = getDayType(state.selectedDate);
          const basePrice = state.priceData[dayType];
          const totalPrice = state.adultsCount * basePrice + state.childrenCount * basePrice * 0.7;

          const options = { year: "numeric", month: "long", day: "numeric" };
          const formattedDate = state.selectedDate.toLocaleDateString("id-ID", options);

          alert(`Proceeding to payment...
  
          Date: ${formattedDate}
          Adults: ${state.adultsCount}
          Children: ${state.childrenCount}
          Total Price: ${formatPrice(totalPrice)}

          Thank you for your booking!`);
        }

        // Initialize
        updateTotalPrice();
      });
    </script>
@endpush