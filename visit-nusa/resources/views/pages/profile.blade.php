@extends('layouts.app')

@push('styles')
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet" />
@endpush

@section('content')
    <main class="pt-24 min-h-screen bg-gray-50">
      <div class="main-container py-8">
        <div class="flex flex-col lg:flex-row gap-8">
          <!-- Sidebar -->
          <div class="lg:w-80 w-full">
            <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200 lg:sticky lg:top-28">
              <!-- Profile Header -->
              <div class="bg-primary px-8 py-10 text-center">
                <div class="w-20 h-20 bg-secondary rounded-full mx-auto mb-4 flex items-center justify-center text-2xl font-bold text-primary">F</div>
                <h2 class="text-2xl font-bold text-secondary mb-1">febrian</h2>
                <p class="text-secondary text-sm">Account</p>
              </div>

              <!-- Navigation Menu -->
              <nav class="px-6 py-6 space-y-2">
                <a href="#profile" class="sidebar-menu-item flex items-center px-4 py-3 rounded-lg transition-all duration-200 bg-primary text-secondary sidebar-active">
                  <div class="w-5 h-5 mr-4"></div>
                  <span class="font-medium">Profile</span>
                </a>

                <a href="#notifications" class="sidebar-menu-item flex items-center px-4 py-3 rounded-lg transition-all duration-200 text-secondary hover:bg-gray-100 hover:text-secondary">
                  <div class="w-5 h-5 mr-4"></div>
                  <span class="font-medium">Notifications</span>
                </a>

                <a href="#saved-cards" class="sidebar-menu-item flex items-center px-4 py-3 rounded-lg transition-all duration-200 text-secondary hover:bg-gray-100 hover:text-secondary">
                  <div class="w-5 h-5 mr-4"></div>
                  <span class="font-medium">Saved Cards</span>
                </a>
              </nav>
            </div>
          </div>

          <!-- Main Content -->
          <div class="flex-1">
            <!-- Profile Section -->
            <div id="profile-section" class="content-section bg-white rounded-lg shadow-sm border border-gray-200 p-8">
              <div class="border-b border-gray-200 pb-6 mb-8">
                <h3 class="text-2xl font-bold text-secondary mb-2">Profile Details</h3>
                <p class="text-secondary">Update your account information and preferences</p>
              </div>

              <form class="space-y-8">
                <!-- Personal Information -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                  <div>
                    <label class="block text-sm font-medium text-secondary mb-2">First Name</label>
                    <input type="text" value="febrian" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-colors outline-none" placeholder="Enter your first name" />
                  </div>
                  <div>
                    <label class="block text-sm font-medium text-secondary mb-2">Last Name</label>
                    <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-colors outline-none" placeholder="Enter your last name" />
                  </div>
                </div>

                <!-- Contact Details -->
                <div class="border-t border-gray-200 pt-8">
                  <h4 class="text-lg font-semibold text-secondary mb-6">Contact Details</h4>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                      <label class="block text-sm font-medium text-secondary mb-2">Email</label>
                      <input
                        type="email"
                        value="febrianten01100@gmail.com"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-colors outline-none"
                        placeholder="Enter your email" />
                    </div>
                    <div>
                      <label class="block text-sm font-medium text-secondary mb-2">Mobile Phone</label>
                      <input type="tel" class="w-full px-4 py-3 border-2 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-colors outline-none" placeholder="Enter your phone number" />
                    </div>
                  </div>
                </div>

                <!-- Date of Birth -->
                <div class="border-t border-gray-200 pt-8">
                  <h4 class="text-lg font-semibold text-secondary mb-6">Date of Birth</h4>
                  <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                      <label class="block text-sm font-medium text-secondary mb-2">Day</label>
                      <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-colors outline-none bg-white cursor-pointer">
                        <option>Select Day</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
                    </div>
                    <div>
                      <label class="block text-sm font-medium text-secondary mb-2">Month</label>
                      <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-colors outline-none bg-white cursor-pointer">
                        <option>Select Month</option>
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                      </select>
                    </div>
                    <div>
                      <label class="block text-sm font-medium text-secondary mb-2">Year</label>
                      <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-colors outline-none bg-white cursor-pointer">
                        <option>Select Year</option>
                        <option>2000</option>
                        <option>2001</option>
                        <option>2002</option>
                      </select>
                    </div>
                  </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row justify-between items-center pt-8 border-t border-gray-200">
                  <button type="submit" class="bg-primary hover:bg-yellow-500 text-white px-8 py-3 rounded-lg font-medium transition-colors duration-200 mb-4 sm:mb-0 w-full sm:w-auto">Save</button>
                  <button type="button" class="text-red-500 hover:text-red-700 font-medium transition-colors duration-200">Delete Account</button>
                </div>
              </form>
            </div>

            <!-- Notifications Section -->
            <div id="notifications-section" class="content-section bg-white rounded-lg shadow-sm border border-gray-200 p-8 hidden">
              <div class="border-b border-gray-200 pb-6 mb-8">
                <h3 class="text-2xl font-bold text-secondary mb-2">Notifications</h3>
                <p class="text-secondary">Recent notifications and updates</p>
              </div>

              <div class="space-y-4">
                <!-- Notification Item 1 -->
                <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 hover:border-primary transition-colors">
                  <div class="flex items-start justify-between">
                    <div class="flex-1">
                      <div class="flex items-center mb-2">
                        <div class="w-3 h-3 bg-primary rounded-full mr-3"></div>
                        <h4 class="font-semibold text-secondary">New Travel Package Available</h4>
                        <span class="ml-auto text-xs text-secondary">2 hours ago</span>
                      </div>
                      <p class="text-secondary text-sm mb-3">Discover our latest travel package to Bali with exclusive discounts up to 30% off. Limited time offer!</p>
                      <div class="flex items-center space-x-4 text-xs">
                        <button class="text-primary hover:text-yellow-600 font-medium">View Details</button>
                        <button class="text-secondary hover:text-gray-700">Dismiss</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Notification Item 2 -->
                <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 hover:border-primary transition-colors">
                  <div class="flex items-start justify-between">
                    <div class="flex-1">
                      <div class="flex items-center mb-2">
                        <div class="w-3 h-3 bg-blue-500 rounded-full mr-3"></div>
                        <h4 class="font-semibold text-secondary">Booking Confirmation</h4>
                        <span class="ml-auto text-xs text-secondary">1 day ago</span>
                      </div>
                      <p class="text-secondary text-sm mb-3">Your booking for Yogyakarta Cultural Tour has been confirmed. Check your email for details.</p>
                      <div class="flex items-center space-x-4 text-xs">
                        <button class="text-primary hover:text-yellow-600 font-medium">View Booking</button>
                        <button class="text-secondary hover:text-gray-700">Dismiss</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Notification Item 3 -->
                <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 hover:border-primary transition-colors">
                  <div class="flex items-start justify-between">
                    <div class="flex-1">
                      <div class="flex items-center mb-2">
                        <div class="w-3 h-3 bg-green-500 rounded-full mr-3"></div>
                        <h4 class="font-semibold text-secondary">Payment Successful</h4>
                        <span class="ml-auto text-xs text-secondary">3 days ago</span>
                      </div>
                      <p class="text-secondary text-sm mb-3">Payment of Rp 2,500,000 for your travel package has been successfully processed.</p>
                      <div class="flex items-center space-x-4 text-xs">
                        <button class="text-primary hover:text-yellow-600 font-medium">View Receipt</button>
                        <button class="text-secondary hover:text-gray-700">Dismiss</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Notification Item 4 -->
                <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 hover:border-primary transition-colors">
                  <div class="flex items-start justify-between">
                    <div class="flex-1">
                      <div class="flex items-center mb-2">
                        <div class="w-3 h-3 bg-red-500 rounded-full mr-3"></div>
                        <h4 class="font-semibold text-secondary">Weather Alert</h4>
                        <span class="ml-auto text-xs text-secondary">5 days ago</span>
                      </div>
                      <p class="text-secondary text-sm mb-3">Weather update for your upcoming trip: Heavy rain expected in Jakarta area. Plan accordingly.</p>
                      <div class="flex items-center space-x-4 text-xs">
                        <button class="text-primary hover:text-yellow-600 font-medium">More Info</button>
                        <button class="text-secondary hover:text-gray-700">Dismiss</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Load More Button -->
                <div class="text-center pt-4">
                  <button class="text-primary hover:text-yellow-600 font-medium text-sm border border-primary hover:bg-primary hover:text-white px-6 py-2 rounded-lg transition-colors">Load More Notifications</button>
                </div>
              </div>
            </div>

            <!-- Saved Cards Section -->
            <div id="saved-cards-section" class="content-section bg-white rounded-lg shadow-sm border border-gray-200 p-8 hidden">
              <div class="border-b border-gray-200 pb-6 mb-8">
                <h3 class="text-2xl font-bold text-secondary mb-2">Saved Payment Cards</h3>
                <p class="text-secondary">Manage your saved payment methods securely</p>
              </div>

              <div class="space-y-6">
                <!-- Credit Card 1 -->
                <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg p-6 text-white relative overflow-hidden border-2 border-transparent hover:border-primary transition-colors">
                  <div class="flex justify-between items-start mb-8">
                    <div class="text-xl font-bold">VISA</div>
                    <button class="text-white hover:text-red-300 transition-colors">
                      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path
                          fill-rule="evenodd"
                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                          clip-rule="evenodd" />
                      </svg>
                    </button>
                  </div>
                  <div class="text-lg font-mono mb-6 tracking-widest">**** **** **** 4532</div>
                  <div class="flex justify-between items-end">
                    <div>
                      <p class="text-xs text-blue-100 mb-1">CARD HOLDER</p>
                      <p class="font-semibold">FEBRIAN ANTENGGARA</p>
                    </div>
                    <div>
                      <p class="text-xs text-blue-100 mb-1">EXPIRES</p>
                      <p class="font-semibold">12/26</p>
                    </div>
                  </div>
                </div>

                <!-- Credit Card 2 -->
                <div class="bg-secondary rounded-lg p-6 text-white relative overflow-hidden border-2 border-transparent hover:border-primary transition-colors">
                  <div class="flex justify-between items-start mb-8">
                    <div class="text-xl font-bold">MASTERCARD</div>
                    <button class="text-white hover:text-red-300 transition-colors">
                      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path
                          fill-rule="evenodd"
                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                          clip-rule="evenodd" />
                      </svg>
                    </button>
                  </div>
                  <div class="text-lg font-mono mb-6 tracking-widest">**** **** **** 8901</div>
                  <div class="flex justify-between items-end">
                    <div>
                      <p class="text-xs text-gray-400 mb-1">CARD HOLDER</p>
                      <p class="font-semibold">FEBRIAN ANTENGGARA</p>
                    </div>
                    <div>
                      <p class="text-xs text-gray-400 mb-1">EXPIRES</p>
                      <p class="font-semibold">08/25</p>
                    </div>
                  </div>
                </div>

                <!-- Add New Card -->
                <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center hover:border-primary transition-colors cursor-pointer">
                  <div class="w-12 h-12 bg-gray-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                  </div>
                  <h4 class="text-lg font-semibold text-secondary mb-2">Add New Card</h4>
                  <p class="text-secondary text-sm">Add a new payment method to your account</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection

@push('scripts')
      <script>
      // Tab Navigation Functionality
      document.addEventListener("DOMContentLoaded", function () {
        const menuItems = document.querySelectorAll(".sidebar-menu-item");
        const contentSections = document.querySelectorAll(".content-section");

        menuItems.forEach((item) => {
          item.addEventListener("click", function (e) {
            e.preventDefault();

            // Remove active class from all menu items
            menuItems.forEach((mi) => {
              mi.classList.remove("sidebar-active", "bg-primary", "text-secondary");
              mi.classList.add("text-secondary", "hover:bg-gray-100", "hover:text-secondary");
            });

            // Hide all content sections
            contentSections.forEach((section) => {
              section.classList.add("hidden");
            });

            // Add active class to clicked item
            this.classList.add("sidebar-active", "bg-primary", "text-secondary");
            this.classList.remove("text-secondary", "hover:bg-gray-100", "hover:text-secondary");

            // Show corresponding content section
            const targetId = this.getAttribute("href").substring(1) + "-section";
            const targetSection = document.getElementById(targetId);
            if (targetSection) {
              targetSection.classList.remove("hidden");
            }
          });
        });
      });
    </script>
@endpush
