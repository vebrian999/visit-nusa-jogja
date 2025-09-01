@extends('layouts.app')

@section('content')
    <main class="mt-16">
      <!-- Hero Section Start -->
      <section class="relative flex flex-col items-center justify-center h-[512px]" style="background: url('{{ asset('img/bg-hero-index.png') }}') center/cover no-repeat">
        <!-- Overlay warna primary dengan opacity 30% -->
        <div class="absolute inset-0 bg-primary opacity-10"></div>
        <!-- Konten utama hero -->
        <div class="relative w-full flex flex-col items-center">
          <!-- Search Bar Start -->
          <div class="main-container w-full mt-2 text-center space-y-5">
            <h1 class="text-6xl font-semibold text-white px-48">FAQ & Contact Us</h1>
            <p class="font-normal text-xl text-white px-60">Get answers to common questions and reach out to us</p>
          </div>
        </div>
      </section>

      <!-- FAQ & Contact Content -->
      <section class="main-container mx-auto px-4 md:px-8 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
          <!-- FAQ Section -->
          <div class="lg:col-span-2">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-8">Frequently asked questions</h2>

            <!-- FAQ Items -->
            <div class="space-y-4">
              <!-- FAQ Item 1 -->
              <div class="border border-gray-200 rounded-lg overflow-hidden">
                <button class="faq-toggle w-full px-6 py-4 text-left bg-white hover:bg-gray-50 flex justify-between items-center focus:outline-none transition-colors duration-200" data-target="faq1">
                  <span class="text-lg font-medium text-gray-800">The expense windows adapted sir. Wrong widen drawn.</span>
                  <svg class="faq-icon w-6 h-6 text-gray-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                  </svg>
                </button>
                <div id="faq1" class="faq-content px-6 pb-4 text-gray-600 leading-relaxed hidden">
                  <p>
                    Offending belonging promotion provision an be oh consulted ourselves it. Blessing welcomed ladyship she met humoured sir breeding her. This comprehensive guide covers all aspects of travel planning, from booking
                    accommodations to understanding local customs and regulations.
                  </p>
                </div>
              </div>

              <!-- FAQ Item 2 -->
              <div class="border border-gray-200 rounded-lg overflow-hidden">
                <button class="faq-toggle w-full px-6 py-4 text-left bg-white hover:bg-gray-50 flex justify-between items-center focus:outline-none transition-colors duration-200" data-target="faq2">
                  <span class="text-lg font-medium text-gray-800">Six curiosity day assurance bed necessary?</span>
                  <svg class="faq-icon w-6 h-6 text-gray-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                  </svg>
                </button>
                <div id="faq2" class="faq-content px-6 pb-4 text-gray-600 leading-relaxed hidden">
                  <p>Yes, our platform provides comprehensive travel insurance options and safety guidelines. We recommend booking at least 6 days in advance to ensure the best rates and availability for accommodations and activities.</p>
                </div>
              </div>

              <!-- FAQ Item 3 -->
              <div class="border border-gray-200 rounded-lg overflow-hidden">
                <button class="faq-toggle w-full px-6 py-4 text-left bg-white hover:bg-gray-50 flex justify-between items-center focus:outline-none transition-colors duration-200" data-target="faq3">
                  <span class="text-lg font-medium text-gray-800">Produce say the ten moments parties?</span>
                  <svg class="faq-icon w-6 h-6 text-gray-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                  </svg>
                </button>
                <div id="faq3" class="faq-content px-6 pb-4 text-gray-600 leading-relaxed hidden">
                  <p>
                    Our travel packages include various social activities and group experiences. We can arrange special events, cultural workshops, and networking opportunities that bring travelers together for memorable moments and
                    authentic local experiences.
                  </p>
                </div>
              </div>

              <!-- FAQ Item 4 -->
              <div class="border border-gray-200 rounded-lg overflow-hidden">
                <button class="faq-toggle w-full px-6 py-4 text-left bg-white hover:bg-gray-50 flex justify-between items-center focus:outline-none transition-colors duration-200" data-target="faq4">
                  <span class="text-lg font-medium text-gray-800">Simple innate summer fat appear basket his desire joy?</span>
                  <svg class="faq-icon w-6 h-6 text-gray-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                  </svg>
                </button>
                <div id="faq4" class="faq-content px-6 pb-4 text-gray-600 leading-relaxed hidden">
                  <p>
                    Summer travel packages offer unique experiences including beach destinations, mountain retreats, and cultural festivals. Our curated summer itineraries focus on outdoor activities, local cuisine experiences, and
                    comfortable accommodations suited for the season.
                  </p>
                </div>
              </div>

              <!-- FAQ Item 5 -->
              <div class="border border-gray-200 rounded-lg overflow-hidden">
                <button class="faq-toggle w-full px-6 py-4 text-left bg-white hover:bg-gray-50 flex justify-between items-center focus:outline-none transition-colors duration-200" data-target="faq5">
                  <span class="text-lg font-medium text-gray-800">Outward clothes promise at gravity do excited?</span>
                  <svg class="faq-icon w-6 h-6 text-gray-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                  </svg>
                </button>
                <div id="faq5" class="faq-content px-6 pb-4 text-gray-600 leading-relaxed hidden">
                  <p>
                    We provide detailed packing guides and clothing recommendations for different destinations and activities. Our travel experts can advise on appropriate attire for various climates, cultural requirements, and adventure
                    activities to ensure you're well-prepared for your journey.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Contact Us Section -->
          <div class="lg:col-span-1">
            <div class="bg-white rounded-lg shadow-lg p-8 sticky top-24">
              <!-- Mail Icon -->
              <div class="flex justify-center mb-6">
                <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center">
                  <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                  </svg>
                </div>
              </div>

              <!-- Title -->
              <h3 class="text-xl font-bold text-gray-800 text-center mb-4">Do you have more questions?</h3>

              <!-- Description -->
              <p class="text-gray-600 text-center mb-8 leading-relaxed">End-to-end payments and financial management in a single solution. Meet the right platform to help realize.</p>

              <!-- Chat Button -->
              <button id="chatUsBtn" class="w-full bg-yellow-400 hover:bg-yellow-500 text-gray-800 font-semibold py-3 px-6 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2">
                Chat Us
              </button>

              <!-- Contact Info -->
              <div class="mt-8 pt-6 border-t border-gray-200">
                <div class="space-y-4">
                  <div class="flex items-center">
                    <svg class="w-5 h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <span class="text-gray-600">support@workingo.com</span>
                  </div>
                  <div class="flex items-center">
                    <svg class="w-5 h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <span class="text-gray-600">+62 274 123 456</span>
                  </div>
                  <div class="flex items-center">
                    <svg class="w-5 h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="text-gray-600">Yogyakarta, Indonesia</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Contact Modal -->
    <div id="contactModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
      <!-- Modal Overlay -->
      <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        <!-- Background overlay -->
        <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" id="modalOverlay"></div>

        <!-- Modal Content -->
        <div class="inline-block w-full max-w-4xl my-8 overflow-hidden text-left align-middle transition-all transform bg-white shadow-xl rounded-lg">
          <!-- Close Button -->
          <button id="closeModal" class="absolute top-4 right-4 z-10 p-2 text-gray-400 hover:text-gray-600 transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>

          <div class="flex flex-col md:flex-row">
            <!-- Left Side - Contact Information -->
            <div class="bg-gray-800 text-white p-8 md:w-2/5 relative overflow-hidden">
              <!-- Background decoration -->
              <div class="absolute -bottom-10 -right-16 w-[269px] h-[269px] opacity-10">
                <div class="w-full h-full bg-white bg-opacity-30 rounded-full transform translate-x-8 translate-y-8"></div>
                <div class="absolute top-4 left-4 w-[138px] bg-opacity-25 h-[138px] bg-[#FFF9F9] rounded-full"></div>
              </div>

              <div class="relative z-10">
                <h3 class="text-2xl font-bold text-primary mb-2">Contact Information</h3>
                <p class="text-gray-300 mb-8">Say something to start a live chat!</p>

                <!-- Contact Details -->
                <div class="space-y-6">
                  <div class="flex items-center">
                    <div class="w-6 h-6 mr-4">
                      <svg class="w-full h-full text-primary" fill="currentColor" viewBox="0 0 20 20">
                        <path
                          d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                      </svg>
                    </div>
                    <span class="text-white">+1012 3456 789</span>
                  </div>

                  <div class="flex items-center">
                    <div class="w-6 h-6 mr-4">
                      <svg class="w-full h-full text-primary" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                      </svg>
                    </div>
                    <span class="text-white">demo@gmail.com</span>
                  </div>

                  <div class="flex items-start">
                    <div class="w-6 h-6 mr-4 mt-1">
                      <svg class="w-full h-full text-primary" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                      </svg>
                    </div>
                    <div class="text-white">
                      <div>132 Dartmouth Street Boston,</div>
                      <div>Massachusetts 02156 United States</div>
                    </div>
                  </div>
                </div>

                <!-- Social Media Icons -->
                <div class="flex space-x-4 mt-60">
                  <a href="#" class="w-8 h-8 bg-primary rounded-full flex items-center justify-center hover:bg-yellow-400 transition-colors">
                    <svg class="w-4 h-4 text-secondary" fill="currentColor" viewBox="0 0 24 24">
                      <path
                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                    </svg>
                  </a>
                  <a href="#" class="w-8 h-8 bg-primary rounded-full flex items-center justify-center hover:bg-yellow-400 transition-colors">
                    <svg class="w-4 h-4 text-secondary" fill="currentColor" viewBox="0 0 24 24">
                      <path
                        d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.162-1.499-.69-2.436-2.878-2.436-4.632 0-3.78 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.758-1.378l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.624 0 11.99-5.367 11.99-11.987C24.007 5.367 18.641.001.017.001z.017" />
                    </svg>
                  </a>
                  <a href="#" class="w-8 h-8 bg-primary rounded-full flex items-center justify-center hover:bg-yellow-400 transition-colors">
                    <svg class="w-4 h-4 text-secondary" fill="currentColor" viewBox="0 0 24 24">
                      <path
                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>

            <!-- Right Side - Contact Form -->
            <div class="p-8 md:w-3/5">
              <form id="contactForm" class="space-y-6">
                <!-- Name Fields -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                  <div>
                    <label class="block text-sm font-medium text-secondary mb-2">First Name</label>
                    <input type="text" id="firstName" class="w-full px-0 py-2 border-0 border-b-2 border-gray-300 focus:border-yellow-400 focus:outline-none focus:ring-0 transition-colors" />
                  </div>
                  <div>
                    <label class="block text-sm font-medium text-secondary mb-2">Last Name</label>
                    <input type="text" id="lastName" class="w-full px-0 py-2 border-0 border-b-2 border-gray-300 focus:border-yellow-400 focus:outline-none focus:ring-0 transition-colors" />
                  </div>
                </div>

                <!-- Email and Phone -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                  <div>
                    <label class="block text-sm font-medium text-secondary mb-2">Email</label>
                    <input type="email" id="email" class="w-full px-0 py-2 border-0 border-b-2 border-gray-300 focus:border-yellow-400 focus:outline-none focus:ring-0 transition-colors" />
                  </div>
                  <div>
                    <label class="block text-sm font-medium text-secondary mb-2">Phone Number</label>
                    <input type="tel" id="phone" placeholder="+1 012 3456 789" class="w-full px-0 py-2 border-0 border-b-2 border-gray-300 focus:border-yellow-400 focus:outline-none focus:ring-0 transition-colors" />
                  </div>
                </div>

                <!-- Select Subject -->
                <div>
                  <label class="block text-sm font-semibold text-secondary mb-4">Select Subject?</label>
                  <div class="flex flex-wrap space-x-4">
                    <label class="flex items-center">
                      <input type="radio" name="subject" value="booking" class="w-3 h-3 text-primary border-gray-300 focus:ring-yellow-400" />
                      <span class="ml-1 text-xs text-secondary">Booking Inquiry</span>
                    </label>
                    <label class="flex items-center">
                      <input type="radio" name="subject" value="custom" class="w-3 h-3 text-primary border-gray-300 focus:ring-yellow-400" />
                      <span class="ml-1 text-xs text-secondary">Custom Tour Request</span>
                    </label>
                    <label class="flex items-center">
                      <input type="radio" name="subject" value="payment" class="w-3 h-3 text-primary border-gray-300 focus:ring-yellow-400" />
                      <span class="ml-1 text-xs text-secondary">Payment & Refund</span>
                    </label>
                    <label class="flex items-center">
                      <input type="radio" name="subject" value="other" class="w-3 h-3 text-primary border-gray-300 focus:ring-yellow-400" />
                      <span class="ml-1 text-xs text-secondary">Other</span>
                    </label>
                  </div>
                </div>

                <!-- Message -->
                <div>
                  <label class="block text-sm font-medium text-secondary mb-2">Message</label>
                  <textarea id="message" rows="1" placeholder="Write your message.." class="w-full px-0 py-2 border-0 border-b-2 border-gray-300 focus:border-yellow-400 focus:outline-none focus:ring-0 transition-colors"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                  <button type="submit" class="bg-gray-800 hover:bg-gray-900 text-white font-semibold py-3 px-8 rounded-md transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2">
                    Send Message
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- Script FAQ & Modal -->
@push('scripts')
 <script>
      document.addEventListener("DOMContentLoaded", function () {
        const faqToggles = document.querySelectorAll(".faq-toggle");
        const chatUsBtn = document.getElementById("chatUsBtn");
        const contactModal = document.getElementById("contactModal");
        const closeModal = document.getElementById("closeModal");
        const modalOverlay = document.getElementById("modalOverlay");
        const contactForm = document.getElementById("contactForm");

        // FAQ Toggle Functionality
        faqToggles.forEach((toggle) => {
          toggle.addEventListener("click", function () {
            const targetId = this.getAttribute("data-target");
            const content = document.getElementById(targetId);
            const icon = this.querySelector(".faq-icon");

            // Close all other FAQ items
            faqToggles.forEach((otherToggle) => {
              if (otherToggle !== this) {
                const otherTargetId = otherToggle.getAttribute("data-target");
                const otherContent = document.getElementById(otherTargetId);
                const otherIcon = otherToggle.querySelector(".faq-icon");

                otherContent.classList.add("hidden");
                otherIcon.style.transform = "rotate(0deg)";
              }
            });

            // Toggle current FAQ item
            if (content.classList.contains("hidden")) {
              content.classList.remove("hidden");
              icon.style.transform = "rotate(45deg)";
            } else {
              content.classList.add("hidden");
              icon.style.transform = "rotate(0deg)";
            }
          });
        });

        // Modal Functions
        function openModal() {
          contactModal.classList.remove("hidden");
          document.body.style.overflow = "hidden";
        }

        function closeModalFunc() {
          contactModal.classList.add("hidden");
          document.body.style.overflow = "auto";
          // Reset form
          contactForm.reset();
        }

        // Event Listeners for Modal
        chatUsBtn.addEventListener("click", openModal);
        closeModal.addEventListener("click", closeModalFunc);
        modalOverlay.addEventListener("click", closeModalFunc);

        // Close modal on Escape key
        document.addEventListener("keydown", function (e) {
          if (e.key === "Escape" && !contactModal.classList.contains("hidden")) {
            closeModalFunc();
          }
        });

        // Form Submission
        contactForm.addEventListener("submit", function (e) {
          e.preventDefault();

          // Get form data
          const formData = {
            firstName: document.getElementById("firstName").value,
            lastName: document.getElementById("lastName").value,
            email: document.getElementById("email").value,
            phone: document.getElementById("phone").value,
            subject: document.querySelector('input[name="subject"]:checked')?.value || "",
            message: document.getElementById("message").value,
          };

          // Basic validation
          if (!formData.firstName || !formData.lastName || !formData.email || !formData.message) {
            alert("Please fill in all required fields.");
            return;
          }

          if (!isValidEmail(formData.email)) {
            alert("Please enter a valid email address.");
            return;
          }

          // Simulate form submission
          alert("Thank you for your message! We will get back to you soon.");
          closeModalFunc();
        });

        // Email validation helper
        function isValidEmail(email) {
          const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          return emailRegex.test(email);
        }
      });
    </script>
@endpush
@endsection
