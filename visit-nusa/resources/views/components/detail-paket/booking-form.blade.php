{{-- Booking Form Component --}}
@props(['paket', 'priceData'])

<!-- Flatpickr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.css" />
<!-- Custom Flatpickr Style -->
<style>
.flatpickr-calendar {
    border-radius: 16px !important;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25) !important;
    z-index: 9999 !important;
}
.flatpickr-day.selected {
    background: #f59e0b !important;
    border-color: #f59e0b !important;
}
.flatpickr-day:hover {
    background: #fef3c7 !important;
}
.custom-select {
    background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6,9 12,15 18,9'%3e%3c/polyline%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right 12px center;
    background-size: 20px;
}
</style>

<div class="max-w-full rounded-2xl overflow-hidden bg-secondary shadow-md border border-gray-100">
  <div class="py-8 px-4 sm:px-8">
    <h2 class="text-white text-2xl font-bold mb-4">Pilih Peserta & Tanggal</h2>
    <div class="flex flex-col gap-6">
      <div class="flex flex-col md:flex-row gap-3">
        <!-- Adults Counter -->
        <div class="bg-white rounded-xl p-3 flex items-center justify-between min-h-[60px] flex-1">
          <span class="font-medium text-secondary text-sm">Adults</span>
          <div class="flex items-center gap-2">
            <button type="button" onclick="decreaseCount('adults')" class="w-6 h-6 rounded-full border border-secondary-300 flex items-center justify-center hover:bg-gray-50 transition-colors">
              <svg class="w-3 h-3 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
              </svg>
            </button>
            <span id="adultsCount" class="font-semibold text-sm text-secondary w-4 text-center">1</span>
            <button type="button" onclick="increaseCount('adults')" class="w-6 h-6 rounded-full border border-secondary-300 flex items-center justify-center hover:bg-gray-50 transition-colors">
              <svg class="w-3 h-3 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
              </svg>
            </button>
          </div>
        </div>
        <!-- Children Counter -->
        <div class="bg-white rounded-xl p-3 flex items-center justify-between min-h-[60px] flex-1">
          <span class="font-medium text-secondary text-sm">Children</span>
          <div class="flex items-center gap-2">
            <button type="button" onclick="decreaseCount('children')" class="w-6 h-6 rounded-full border border-secondary-300 flex items-center justify-center hover:bg-gray-50 transition-colors">
              <svg class="w-3 h-3 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
              </svg>
            </button>
            <span id="childrenCount" class="font-semibold text-sm text-secondary w-4 text-center">0</span>
            <button type="button" onclick="increaseCount('children')" class="w-6 h-6 rounded-full border border-secondary-300 flex items-center justify-center hover:bg-gray-50 transition-colors">
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
      <div id="totalPriceMobile" class="mt-4 bg-white rounded-xl p-3 hidden md:hidden">
        <div class="flex justify-between items-center">
          <div>
            <div class="text-sm text-secondary">Total for <span id="totalPeopleMobile">1</span> people</div>
          </div>
          <div class="text-lg font-bold text-secondary" id="priceAmountMobile">Rp 0</div>
        </div>
      </div>
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
        <div class="flex flex-wrap gap-4 text-sm">
          <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
              <path d="M10 3.78711V9.78711H14.5M19 9.78711C19 10.969 18.7672 12.1393 18.3149 13.2313C17.8626 14.3232 17.1997 15.3153 16.364 16.1511C15.5282 16.9868 14.5361 17.6497 13.4442 18.102C12.3522 18.5543 11.1819 18.7871 10 18.7871C8.8181 18.7871 7.64778 18.5543 6.55585 18.102C5.46392 17.6497 4.47177 16.9868 3.63604 16.1511C2.80031 15.3153 2.13738 14.3232 1.68508 13.2313C1.23279 12.1393 1 10.969 1 9.78711C1 7.40016 1.94821 5.11098 3.63604 3.42315C5.32387 1.73532 7.61305 0.787109 10 0.787109C12.3869 0.787109 14.6761 1.73532 16.364 3.42315C18.0518 5.11098 19 7.40016 19 9.78711Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="text-secondary">11 hours</span>
          </div>
          <div class="flex items-center gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="18" viewBox="0 0 30 22" fill="none">
              <path d="M18.7468 0.918457L18.4006 1.76723M18.4006 1.76723L20.1034 2.00444C21.3847 2.18324 22.5554 2.82042 23.4039 3.80081L23.4516 3.85591C24.283 4.81631 25.4242 5.44787 26.6768 5.64074L28.578 5.93314C27.562 7.82179 26.7504 9.81411 26.1575 11.8751L24.2541 11.5818C23.0013 11.3892 21.8597 10.7577 21.028 9.7973L20.9804 9.74221C20.1319 8.76182 18.9612 8.12464 17.6799 7.94584L15.9771 7.70862M18.4006 1.76723L15.9771 7.70862M14.5922 11.1037L15.9771 7.70862" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M12.75 5C12.75 5.99456 12.3549 6.94839 11.6516 7.65165C10.9484 8.35491 9.99454 8.75 8.99998 8.75C8.00541 8.75 7.05159 8.35491 6.34833 7.65165C5.64506 6.94839 5.24998 5.99456 5.24998 5C5.24998 4.00544 5.64506 3.05161 6.34833 2.34835C7.05159 1.64509 8.00541 1.25 8.99998 1.25C9.99454 1.25 10.9484 1.64509 11.6516 2.34835C12.3549 3.05161 12.75 4.00544 12.75 5ZM1.50098 19.118C1.53311 17.1504 2.33731 15.2742 3.74015 13.894C5.14299 12.5139 7.03206 11.7405 8.99998 11.7405C10.9679 11.7405 12.857 12.5139 14.2598 13.894C15.6626 15.2742 16.4668 17.1504 16.499 19.118C14.1464 20.1968 11.5881 20.7535 8.99998 20.75C6.32398 20.75 3.78398 20.166 1.50098 19.118Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="text-secondary">Guide: English</span>
          </div>
        </div>
        <div class="mt-3">
          <button class="text-secondary underline text-sm flex items-center gap-2 hover:text-gray-800 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="24" viewBox="0 0 17 22" fill="none">
              <path d="M16 9.125C16 16.267 8.5 20.375 8.5 20.375C8.5 20.375 1 16.267 1 9.125C1 7.13588 1.79018 5.22822 3.1967 3.8217C4.60322 2.41518 6.51088 1.625 8.5 1.625C10.4891 1.625 12.3968 2.41518 13.8033 3.8217C15.2098 5.22822 16 7.13588 16 9.125Z" stroke="#202020" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
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
              <path />
            </svg>
            Only 18 hour left to book
          </div>
          <div class="text-sm font-medium text-secondary flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 15 15" fill="none">
              <path stroke-linejoin="round" />
              <path d="M5.5 9.375L7 10.875L9.25 7.5" stroke="#202020" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            Cancel before 8:00 AM on August 20 for a full refund
          </div>
        </div>
      </div>
      <!-- Price and Continue Section -->
      <div class="bg-secondary p-4 flex flex-col md:flex-row justify-between items-center gap-3">
        <div class="text-left">
          <div class="text-primary text-2xl font-bold" id="finalPrice">Rp 0</div>
          <div class="text-white text-sm" id="participantCount">1 adult</div>
          <div class="text-gray-300 text-xs">All taxes and fees included</div>
        </div>
        <button onclick="continuePurchase()" class="bg-primary text-secondary font-semibold px-8 py-3 rounded-xl transition-all duration-300 hover:bg-yellow-500 text-sm min-w-[120px]">Continue</button>
      </div>
    </div>
  </div>

<!-- Flatpickr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  // State
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

  // Flatpickr setup
  flatpickr("#dateInput", {
    minDate: "today",
    dateFormat: "d F Y",
    locale: { firstDayOfWeek: 1 },
    clickOpens: true, // Kalender hanya muncul saat input diklik
    onChange: function (selectedDates) {
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
    if (holidays.includes(dateString)) return "holiday";
    else if (day === 0 || day === 6) return "weekend";
    else return "weekday";
  }

  function formatPrice(price) {
    return `Rp ${price.toLocaleString("id-ID")}`;
  }

  function updateTotalPrice() {
    const totalPeople = state.adultsCount + state.childrenCount;
    if (document.getElementById("totalPeopleMobile")) {
      document.getElementById("totalPeopleMobile").textContent = totalPeople;
    }
    if (state.selectedDate) {
      const dayType = getDayType(state.selectedDate);
      const basePrice = state.priceData[dayType];
      const totalPrice = state.adultsCount * basePrice + state.childrenCount * basePrice * 0.7;
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
    resultElement.classList.remove("hidden");
    resultElement.classList.add("slide-up", "bounce-in");

    // Scroll to booking form section
    const bookingFormSection = document.getElementById("bookingFormSection");
    if (bookingFormSection) {
      bookingFormSection.scrollIntoView({
        behavior: "smooth",
        block: "start"
      });
    } else {
      // Fallback: scroll to result section
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
    document.getElementById("selectedDateDisplay").textContent = formattedDate;

    // Update price display
    document.getElementById("finalPrice").textContent = formatPrice(totalPrice);

    // Update participant count
    let participantText = "";
    if (state.adultsCount > 0) {
      participantText += `${state.adultsCount} adult${state.adultsCount > 1 ? "s" : ""}`;
    }
    if (state.childrenCount > 0) {
      if (participantText) participantText += ", ";
      participantText += `${state.childrenCount} child${state.childrenCount > 1 ? "ren" : ""}`;
    }
    document.getElementById("participantCount").textContent = participantText;
  }

  function toggleDetails() {
    const detailsSection = document.getElementById("detailsSection");
    const toggleIcon = document.getElementById("toggleIcon");

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

  function continuePurchase() {
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
