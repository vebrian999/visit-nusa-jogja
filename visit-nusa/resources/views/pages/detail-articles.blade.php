@extends('layouts.app')

@section('content')
    <main class="pt-16 bg-white">
      <section id="content" class="pt-14 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
          <!-- Gambar Header -->
          <img src="{{ asset('img/bg-hero-index.png') }}" alt="Header Artikel" class="w-full h-64 object-cover mb-8 rounded-lg" />

          <!-- Metadata -->
          <div class="flex justify-between items-center text-sm text-gray-500 mb-4">
            <span class="bg-primary text-secondary px-3 py-1 rounded-md text-sm font-medium">Travel & Adventure</span>
            <span class="font-normal text-sm">24 Juli 2025</span>
          </div>

          <!-- Judul Artikel -->
          <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-6">10 Must-Visit Destinations in Yogyakarta</h1>

          <!-- Isi Artikel -->
          <div class="space-y-6 text-gray-700 leading-relaxed text-justify">
            <p>
              Yogyakarta is a treasure trove of culture, history, and natural beauty. From the majestic Borobudur and Prambanan temples to serene beaches and hidden waterfalls, the city offers experiences for every type of traveler.
              Exploring these destinations allows you to immerse yourself in the rich heritage and vibrant local life.
            </p>
            <p>
              Among the top must-visit spots are Malioboro Street, with its bustling markets and street performances; Parangtritis Beach, famous for breathtaking sunsets; and the mystical Jomblang Cave for adventurous souls. Each location
              tells a unique story and offers incredible photo opportunities, making Yogyakarta an unforgettable travel destination.
            </p>
            <h2 class="text-xl font-semibold text-gray-800 mt-4">Mengapa Visual Branding Penting?</h2>
            <p>Visual yang konsisten memberikan rasa profesionalisme dan kredibilitas. Selain itu, desain yang menarik dapat menyampaikan pesan dan nilai brand hanya melalui tampilan visual — tanpa kata-kata.</p>
            <p>
              Beyond the well-known landmarks, discovering hidden gems such as the tranquil villages around Mount Merapi or the enchanting Taman Sari Water Castle adds depth to your journey. With careful planning and an open mind, visiting
              these 10 destinations in Yogyakarta guarantees unforgettable memories, cultural insights, and countless moments worth capturing.
            </p>
            <blockquote class="border-l-4 border-primary pl-4 italic text-gray-600 bg-gray-50 py-3 px-4 rounded">"Desain bukan hanya bagaimana sesuatu terlihat dan terasa. Desain adalah bagaimana sesuatu bekerja." — Steve Jobs</blockquote>
            <p>Oleh karena itu, penting bagi setiap bisnis, besar maupun kecil, untuk berinvestasi dalam visual branding yang profesional. Hal ini akan menjadi investasi jangka panjang dalam membangun citra dan nilai perusahaan.</p>
          </div>
        </div>
      </section>
      <hr class="my-16 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8" />
      <!-- Artikel Terkait Section -->
      <section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
        <h2 class="text-2xl font-semibold text-gray-900 mb-6">Related Articles</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          <!-- Card Artikel Terkait Start -->
          <div class="bg-white overflow-hidden transition-transform hover:scale-[1.02] group">
            <a href="#">
              <div class="overflow-hidden">
                <img src="{{ asset('img/bg-hero-index.png') }}" alt="Gambar Artikel" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300" />
              </div>
            </a>
            <div class="py-4 space-y-2">
              <div class="flex justify-between items-center text-sm text-gray-500">
                <span class="bg-primary text-secondary px-2 py-1 rounded text-sm mb-2 font-medium">Travel & Adventure</span>
                <span>22 Juli 2025</span>
              </div>
              <a href="#">
                <h3 class="text-base font-semibold text-gray-800 hover:text-primary transition-colors">Hidden Gems in Yogyakarta You Must Visit...</h3>
              </a>
              <p class="text-sm text-gray-600 leading-relaxed">Yogyakarta is full of hidden gems waiting to be discovered beyond the usual tourist spots. From serene temples....</p>
            </div>
          </div>
          <!-- Card Artikel Terkait End -->

          <!-- Duplikat card jika ingin tambah -->
          <!-- Card Artikel Terkait Start -->
          <div class="bg-white overflow-hidden transition-transform hover:scale-[1.02] group">
            <a href="#">
              <div class="overflow-hidden">
                <img src="{{ asset('img/bg-hero-index.png') }}" alt="Gambar Artikel" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300" />
              </div>
            </a>
            <div class="py-4 space-y-2">
              <div class="flex justify-between items-center text-sm text-gray-500">
                <span class="bg-primary text-secondary px-2 py-1 rounded text-sm mb-2 font-medium">Travel & Adventure</span>
                <span>22 Juli 2025</span>
              </div>
              <a href="#">
                <h3 class="text-base font-semibold text-gray-800 hover:text-primary transition-colors">Hidden Gems in Yogyakarta You Must Visit...</h3>
              </a>
              <p class="text-sm text-gray-600 leading-relaxed">Yogyakarta is full of hidden gems waiting to be discovered beyond the usual tourist spots. From serene temples.....</p>
            </div>
          </div>
          <!-- Card Artikel Terkait End -->

          <!-- Card Artikel Terkait Start -->
          <div class="bg-white overflow-hidden transition-transform hover:scale-[1.02] group">
            <a href="#">
              <div class="overflow-hidden">
                <img src="{{ asset('img/bg-hero-index.png') }}" alt="Gambar Artikel" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300" />
              </div>
            </a>
            <div class="py-4 space-y-2">
              <div class="flex justify-between items-center text-sm text-gray-500">
                <span class="bg-primary text-secondary px-2 py-1 rounded text-sm mb-2 font-medium">Travel & Adventure</span>
                <span>22 Juli 2025</span>
              </div>
              <a href="#">
                <h3 class="text-base font-semibold text-gray-800 hover:text-primary transition-colors">Hidden Gems in Yogyakarta You Must Visit...</h3>
              </a>
              <p class="text-sm text-gray-600 leading-relaxed">Yogyakarta is full of hidden gems waiting to be discovered beyond the usual tourist spots. From serene temples....</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Comments Section -->
      <section class="main-container mx-auto px-56 mb-16">
        <div class="p-6 sm:p-8 rounded-lg">
          <!-- Header Komentar -->
          <div class="mb-8">
            <h2 class="text-xl sm:text-2xl font-semibold text-gray-900 mb-2">Article Comments</h2>
            <p class="text-gray-600 text-sm sm:text-base">Join the conversation and share your thoughts</p>
          </div>

          <!-- Form Komentar -->
          <div class="mb-8 bg-white rounded-lg p-4 sm:p-6 shadow-sm border border-gray-200">
            <form id="commentForm" class="space-y-4">
              <div class="space-y-2">
                <label for="commentInput" class="block text-sm font-medium text-gray-700">Write your comment</label>
                <textarea
                  id="commentInput"
                  name="comment"
                  rows="4"
                  class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-primary focus:border-primary resize-none text-sm sm:text-base placeholder-gray-500"
                  placeholder="Share your thoughts about this article..."
                  required></textarea>
              </div>

              <!-- Name Input (Optional) -->
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="space-y-2">
                  <label for="nameInput" class="block text-sm font-medium text-gray-700">Name (Optional)</label>
                  <input type="text" id="nameInput" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-primary focus:border-primary text-sm sm:text-base" placeholder="Your name" />
                </div>
                <div class="space-y-2">
                  <label for="emailInput" class="block text-sm font-medium text-gray-700">Email (Optional)</label>
                  <input
                    type="email"
                    id="emailInput"
                    name="email"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-primary focus:border-primary text-sm sm:text-base"
                    placeholder="your@email.com" />
                </div>
              </div>

              <div class="flex justify-end">
                <button type="submit" class="bg-primary hover:bg-yellow-500 text-white px-6 py-2 rounded-md font-medium transition-colors duration-200 focus:ring-2 focus:ring-primary focus:ring-offset-2 text-sm sm:text-base">
                  Submit Comment
                </button>
              </div>
            </form>
          </div>

          <!-- Daftar Komentar -->
          <div id="commentsContainer" class="space-y-6">
            <!-- Komentar Sample -->
            <div class="bg-white rounded-lg p-4 sm:p-6 shadow-sm border border-gray-200">
              <div class="flex items-start space-x-3 sm:space-x-4">
                <!-- Avatar -->
                <div class="flex-shrink-0">
                  <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center text-white font-bold text-lg">T</div>
                </div>

                <!-- Konten Komentar -->
                <div class="flex-1 min-w-0">
                  <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-2">
                    <h4 class="font-semibold text-gray-900 text-sm sm:text-base">Theresia</h4>
                    <span class="text-xs sm:text-sm text-gray-500 mt-1 sm:mt-0">2 minutes ago</span>
                  </div>
                  <p class="text-gray-700 text-sm sm:text-base leading-relaxed">hello there!</p>

                  <!-- Action Buttons -->
                  <div class="flex items-center space-x-4 mt-3">
                    <button class="flex items-center space-x-1 text-gray-500 hover:text-primary transition-colors text-xs sm:text-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                      </svg>
                      <span>Like</span>
                    </button>
                    <button class="flex items-center space-x-1 text-gray-500 hover:text-primary transition-colors text-xs sm:text-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                      </svg>
                      <span>Reply</span>
                    </button>
                    <button class="text-gray-400 hover:text-gray-600 transition-colors">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Komentar Sample 2 -->
            <div class="bg-white rounded-lg p-4 sm:p-6 shadow-sm border border-gray-200">
              <div class="flex items-start space-x-3 sm:space-x-4">
                <!-- Avatar -->
                <div class="flex-shrink-0">
                  <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold text-lg">A</div>
                </div>

                <!-- Konten Komentar -->
                <div class="flex-1 min-w-0">
                  <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-2">
                    <h4 class="font-semibold text-gray-900 text-sm sm:text-base">Anonymous</h4>
                    <span class="text-xs sm:text-sm text-gray-500 mt-1 sm:mt-0">5 minutes ago</span>
                  </div>
                  <p class="text-gray-700 text-sm sm:text-base leading-relaxed">
                    Great article! I've been to some of these places in Yogyakarta and they're absolutely amazing. The cultural richness and natural beauty make it a perfect destination for travelers. Thanks for sharing this comprehensive
                    guide!
                  </p>

                  <!-- Action Buttons -->
                  <div class="flex items-center space-x-4 mt-3">
                    <button class="flex items-center space-x-1 text-gray-500 hover:text-primary transition-colors text-xs sm:text-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                      </svg>
                      <span>Like</span>
                    </button>
                    <button class="flex items-center space-x-1 text-gray-500 hover:text-primary transition-colors text-xs sm:text-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                      </svg>
                      <span>Reply</span>
                    </button>
                    <button class="text-gray-400 hover:text-gray-600 transition-colors">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Komentar Sample 3 dengan Reply -->
            <div class="bg-white rounded-lg p-4 sm:p-6 shadow-sm border border-gray-200">
              <div class="flex items-start space-x-3 sm:space-x-4">
                <!-- Avatar -->
                <div class="flex-shrink-0">
                  <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold text-lg">M</div>
                </div>

                <!-- Konten Komentar -->
                <div class="flex-1 min-w-0">
                  <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-2">
                    <h4 class="font-semibold text-gray-900 text-sm sm:text-base">Maya Sari</h4>
                    <span class="text-xs sm:text-sm text-gray-500 mt-1 sm:mt-0">10 minutes ago</span>
                  </div>
                  <p class="text-gray-700 text-sm sm:text-base leading-relaxed">I'm planning to visit Yogyakarta next month. This article is very helpful! Could you recommend which places are best for photography?</p>

                  <!-- Action Buttons -->
                  <div class="flex items-center space-x-4 mt-3">
                    <button class="flex items-center space-x-1 text-gray-500 hover:text-primary transition-colors text-xs sm:text-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                      </svg>
                      <span>Like</span>
                    </button>
                    <button class="flex items-center space-x-1 text-gray-500 hover:text-primary transition-colors text-xs sm:text-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                      </svg>
                      <span>Reply</span>
                    </button>
                    <button class="text-gray-400 hover:text-gray-600 transition-colors">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                      </svg>
                    </button>
                  </div>

                  <!-- Reply to comment -->
                  <div class="mt-4 ml-0 sm:ml-6 pl-4 border-l-2 border-gray-100">
                    <div class="flex items-start space-x-3">
                      <div class="flex-shrink-0">
                        <div class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold text-sm">A</div>
                      </div>
                      <div class="flex-1">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-1">
                          <h5 class="font-semibold text-gray-900 text-sm">Admin</h5>
                          <span class="text-xs text-gray-500 mt-1 sm:mt-0">8 minutes ago</span>
                        </div>
                        <p class="text-gray-700 text-sm leading-relaxed">
                          @Maya Sari For photography, I highly recommend Borobudur Temple at sunrise, Prambanan Temple during golden hour, and Parangtritis Beach for sunset shots. Don't miss the Sultan Palace and Malioboro Street for
                          cultural photography!
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Load More Button -->
            <div class="text-center pt-4">
              <button id="loadMoreComments" class="px-6 py-2 border-2 border-primary text-primary hover:bg-primary hover:text-white rounded-md font-medium transition-colors duration-200 text-sm sm:text-base">Load More Comments</button>
            </div>
          </div>

          <!-- Empty State (Hidden by default) -->
          <div id="emptyCommentsState" class="hidden text-center py-12">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-300 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
            </svg>
            <h3 class="text-lg font-medium text-gray-900 mb-2">No comments yet</h3>
            <p class="text-gray-600">Be the first to share your thoughts on this article!</p>
          </div>
        </div>
      </section>
    </main>
@endsection

@push('scripts')
 <script>
      // Mobile menu functionality
      document.addEventListener("DOMContentLoaded", function () {
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
          sidebarOverlay.classList.add("opacity-0");
          sidebarPanel.classList.add("translate-x-full");
          setTimeout(() => {
            mobileSidebar.classList.add("pointer-events-none");
          }, 300);
        }

        mobileMenuButton.addEventListener("click", openSidebar);
        sidebarClose.addEventListener("click", closeSidebar);
        sidebarOverlay.addEventListener("click", closeSidebar);

        // Comment system functionality
        const commentForm = document.getElementById("commentForm");
        const commentInput = document.getElementById("commentInput");
        const nameInput = document.getElementById("nameInput");
        const emailInput = document.getElementById("emailInput");
        const commentsContainer = document.getElementById("commentsContainer");
        const loadMoreButton = document.getElementById("loadMoreComments");
        const emptyState = document.getElementById("emptyCommentsState");

        // Generate avatar letter from name
        function getAvatarLetter(name) {
          if (!name || name.trim() === "") {
            return "A";
          }
          return name.trim().charAt(0).toUpperCase();
        }

        // Generate random avatar color
        function getRandomAvatarColor() {
          const colors = ["bg-primary", "bg-blue-500", "bg-green-500", "bg-purple-500", "bg-red-500", "bg-indigo-500", "bg-pink-500", "bg-teal-500"];
          return colors[Math.floor(Math.random() * colors.length)];
        }

        // Format time ago
        function formatTimeAgo(date) {
          const now = new Date();
          const diffInSeconds = Math.floor((now - date) / 1000);

          if (diffInSeconds < 60) {
            return "just now";
          } else if (diffInSeconds < 3600) {
            const minutes = Math.floor(diffInSeconds / 60);
            return `${minutes} minute${minutes > 1 ? "s" : ""} ago`;
          } else if (diffInSeconds < 86400) {
            const hours = Math.floor(diffInSeconds / 3600);
            return `${hours} hour${hours > 1 ? "s" : ""} ago`;
          } else {
            const days = Math.floor(diffInSeconds / 86400);
            return `${days} day${days > 1 ? "s" : ""} ago`;
          }
        }

        // Create comment HTML
        function createCommentHTML(name, comment, timestamp) {
          const displayName = name.trim() === "" ? "Anonymous" : name;
          const avatarLetter = getAvatarLetter(displayName);
          const avatarColor = getRandomAvatarColor();
          const timeAgo = formatTimeAgo(timestamp);

          return `
            <div class="bg-white rounded-lg p-4 sm:p-6 shadow-sm border border-gray-200 comment-item">
              <div class="flex items-start space-x-3 sm:space-x-4">
                <div class="flex-shrink-0">
                  <div class="w-10 h-10 ${avatarColor} rounded-full flex items-center justify-center text-white font-bold text-lg">
                    ${avatarLetter}
                  </div>
                </div>
                
                <div class="flex-1 min-w-0">
                  <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-2">
                    <h4 class="font-semibold text-gray-900 text-sm sm:text-base">${displayName}</h4>
                    <span class="text-xs sm:text-sm text-gray-500 mt-1 sm:mt-0">${timeAgo}</span>
                  </div>
                  <p class="text-gray-700 text-sm sm:text-base leading-relaxed">
                    ${comment.replace(/\n/g, "<br>")}
                  </p>
                  
                  <div class="flex items-center space-x-4 mt-3">
                    <button class="flex items-center space-x-1 text-gray-500 hover:text-primary transition-colors text-xs sm:text-sm like-btn">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                      </svg>
                      <span>Like</span>
                    </button>
                    <button class="flex items-center space-x-1 text-gray-500 hover:text-primary transition-colors text-xs sm:text-sm reply-btn">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                      </svg>
                      <span>Reply</span>
                    </button>
                    <button class="text-gray-400 hover:text-gray-600 transition-colors more-btn">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          `;
        }

        // Add new comment to the top
        function addNewComment(name, comment) {
          const timestamp = new Date();
          const commentHTML = createCommentHTML(name, comment, timestamp);

          // Remove empty state if visible
          emptyState.classList.add("hidden");

          // Insert new comment at the beginning, before the first comment
          const firstComment = commentsContainer.querySelector(".comment-item");
          const loadMoreButtonContainer = commentsContainer.querySelector("#loadMoreComments").parentElement;

          if (firstComment) {
            firstComment.insertAdjacentHTML("beforebegin", commentHTML);
          } else {
            loadMoreButtonContainer.insertAdjacentHTML("beforebegin", commentHTML);
          }

          // Add animation to new comment
          const newComment = commentsContainer.querySelector(".comment-item");
          newComment.style.opacity = "0";
          newComment.style.transform = "translateY(-10px)";

          setTimeout(() => {
            newComment.style.transition = "opacity 0.3s ease, transform 0.3s ease";
            newComment.style.opacity = "1";
            newComment.style.transform = "translateY(0)";
          }, 100);

          // Add event listeners to new comment buttons
          addCommentEventListeners(newComment);
        }

        // Add event listeners to comment buttons
        function addCommentEventListeners(commentElement) {
          const likeBtn = commentElement.querySelector(".like-btn");
          const replyBtn = commentElement.querySelector(".reply-btn");
          const moreBtn = commentElement.querySelector(".more-btn");

          likeBtn.addEventListener("click", function (e) {
            e.preventDefault();
            const span = this.querySelector("span");
            const svg = this.querySelector("svg");

            if (this.classList.contains("liked")) {
              this.classList.remove("liked", "text-red-500");
              this.classList.add("text-gray-500");
              span.textContent = "Like";
              svg.setAttribute("fill", "none");
            } else {
              this.classList.add("liked", "text-red-500");
              this.classList.remove("text-gray-500");
              span.textContent = "Liked";
              svg.setAttribute("fill", "currentColor");
            }
          });

          replyBtn.addEventListener("click", function (e) {
            e.preventDefault();
            // Simple reply functionality - focus on comment input and add @mention
            const commentElement = this.closest(".comment-item");
            const nameElement = commentElement.querySelector("h4, h5");
            const userName = nameElement.textContent;

            commentInput.focus();
            commentInput.value = `@${userName} `;
            commentInput.setSelectionRange(commentInput.value.length, commentInput.value.length);
          });

          moreBtn.addEventListener("click", function (e) {
            e.preventDefault();
            // Simple more options - could be expanded with dropdown menu
            alert("More options coming soon!");
          });
        }

        // Handle comment form submission
        commentForm.addEventListener("submit", function (e) {
          e.preventDefault();

          const comment = commentInput.value.trim();
          const name = nameInput.value.trim();
          const email = emailInput.value.trim();

          if (comment === "") {
            commentInput.focus();
            return;
          }

          // Add the new comment
          addNewComment(name || "Anonymous", comment);

          // Reset form
          commentForm.reset();

          // Show success message
          const submitButton = commentForm.querySelector('button[type="submit"]');
          const originalText = submitButton.textContent;
          submitButton.textContent = "Comment Added!";
          submitButton.classList.add("bg-green-500");
          submitButton.classList.remove("bg-primary");

          setTimeout(() => {
            submitButton.textContent = originalText;
            submitButton.classList.remove("bg-green-500");
            submitButton.classList.add("bg-primary");
          }, 2000);
        });

        // Handle load more comments (simulate)
        loadMoreButton.addEventListener("click", function (e) {
          e.preventDefault();

          // Simulate loading
          const originalText = this.textContent;
          this.textContent = "Loading...";
          this.disabled = true;

          setTimeout(() => {
            // Add some sample comments
            const sampleComments = [
              { name: "John Doe", comment: "This is very informative! Thank you for sharing these insights about Yogyakarta." },
              { name: "Sarah Johnson", comment: "I visited Borobudur last year and it was absolutely breathtaking. Highly recommend going there at sunrise!" },
              { name: "Ahmad Rizki", comment: "As a local from Yogyakarta, I can confirm these are indeed the best places to visit. Great article!" },
            ];

            sampleComments.forEach((comment, index) => {
              setTimeout(() => {
                const timestamp = new Date(Date.now() - Math.random() * 86400000); // Random time within last day
                const commentHTML = createCommentHTML(comment.name, comment.comment, timestamp);
                this.parentElement.insertAdjacentHTML("beforebegin", commentHTML);

                // Add event listeners to the new comment
                const newComment = this.parentElement.previousElementSibling;
                addCommentEventListeners(newComment);
              }, index * 200);
            });

            this.textContent = originalText;
            this.disabled = false;
          }, 1500);
        });

        // Add event listeners to existing comments
        document.querySelectorAll(".comment-item").forEach((comment) => {
          addCommentEventListeners(comment);
        });

        // Auto-resize textarea
        commentInput.addEventListener("input", function () {
          this.style.height = "auto";
          this.style.height = this.scrollHeight + "px";
        });

        // Character counter (optional)
        const maxLength = 500;
        commentInput.addEventListener("input", function () {
          const remaining = maxLength - this.value.length;
          let counter = document.getElementById("charCounter");

          if (!counter) {
            counter = document.createElement("div");
            counter.id = "charCounter";
            counter.className = "text-xs text-gray-500 mt-1 text-right";
            this.parentElement.appendChild(counter);
          }

          counter.textContent = `${remaining} characters remaining`;

          if (remaining < 50) {
            counter.classList.add("text-red-500");
            counter.classList.remove("text-gray-500");
          } else {
            counter.classList.remove("text-red-500");
            counter.classList.add("text-gray-500");
          }

          if (remaining < 0) {
            this.value = this.value.substring(0, maxLength);
            counter.textContent = "0 characters remaining";
          }
        });
      });
    </script>
@endpush
