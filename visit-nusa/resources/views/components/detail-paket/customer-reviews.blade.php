{{-- Customer Reviews Component --}}
@props(['paket'])

<section class="">
  <div class="">
    <!-- Header Section -->
    <div class="mb-8">
      <div class="flex items-center gap-2 mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Customer reviews</h2>
        <div class="flex items-center gap-1 text-sm text-gray-500">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
          </svg>
          <span>(Only customers who made bookings can review this experience)</span>
        </div>
      </div>

      <!-- Review Summary Section -->
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
        <!-- Overall Rating -->
        <div>
          <h3 class="text-lg font-semibold text-gray-900 mb-4">Overall rating</h3>
          <div class="flex items-center gap-2 mb-2">
            <span class="text-4xl font-bold text-gray-900">4.9</span>
            <span class="text-gray-500">/5</span>
          </div>
          <div class="flex items-center gap-2 mb-2">
            <div class="flex text-primary">
              <!-- Star icons will be added here -->
              <span class="text-2xl">★★★★★</span>
            </div>
          </div>
          <p class="text-sm text-gray-500">based on 910 reviews</p>
        </div>

        <!-- Review Summary -->
        <div>
          <h3 class="text-lg font-semibold text-gray-900 mb-4">Review summary</h3>
          <div class="space-y-3">
            <div class="flex items-center justify-between">
              <span class="text-sm text-gray-700 min-w-[100px]">Guide</span>
              <div class="flex items-center gap-3 flex-1 max-w-[200px]">
                <div class="flex-1 bg-gray-200 rounded-full h-2">
                  <div class="bg-gray-800 h-2 rounded-full" style="width: 98%"></div>
                </div>
                <span class="text-sm text-gray-700 min-w-[30px]">4.9/5</span>
              </div>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-sm text-gray-700 min-w-[100px]">Transportation</span>
              <div class="flex items-center gap-3 flex-1 max-w-[200px]">
                <div class="flex-1 bg-gray-200 rounded-full h-2">
                  <div class="bg-gray-800 h-2 rounded-full" style="width: 98%"></div>
                </div>
                <span class="text-sm text-gray-700 min-w-[30px]">4.9/5</span>
              </div>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-sm text-gray-700 min-w-[100px]">Experience</span>
              <div class="flex items-center gap-3 flex-1 max-w-[200px]">
                <div class="flex-1 bg-gray-200 rounded-full h-2">
                  <div class="bg-gray-800 h-2 rounded-full" style="width: 92%"></div>
                </div>
                <span class="text-sm text-gray-700 min-w-[30px]">4.6/5</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Write Review Button -->
        <div class="flex justify-end">
          <button class="bg-primary hover:bg-yellow-600 text-white px-6 py-3 rounded-full font-medium transition-colors duration-200">Write a Review</button>
        </div>
      </div>
    </div>

    <!-- Customer Photos Section -->
    <div class="mb-8">
      <h3 class="text-lg font-semibold text-gray-900 mb-4">Customer photos</h3>
      <div class="hidden lg:grid grid-cols-4 grid-rows-2 gap-4 h-96">
        <div class="col-span-2 row-span-2 rounded-2xl overflow-hidden group cursor-pointer">
          <img
            src="https://images.unsplash.com/photo-1583900985737-6d0495555783?q=80&w=764&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Borobudur Temple"
            class="w-full h-full object-cover gallery-image group-hover:scale-105 transition-transform duration-500" />
        </div>
        <div class="rounded-2xl overflow-hidden group cursor-pointer">
          <img
            src="https://images.unsplash.com/photo-1515161318750-781d6122e367?q=80&w=676&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Sunrise at Borobudur"
            class="w-full h-full object-cover gallery-image group-hover:scale-105 transition-transform duration-500" />
        </div>
        <div class="rounded-2xl overflow-hidden group cursor-pointer">
          <img
            src="https://images.unsplash.com/photo-1574539602047-548bf9557352?q=80&w=765&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Prambanan Temple"
            class="w-full h-full object-cover gallery-image group-hover:scale-105 transition-transform duration-500" />
        </div>
        <div class="rounded-2xl overflow-hidden group cursor-pointer">
          <img
            src="https://images.unsplash.com/photo-1568819317551-31051b37f69f?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Temple Architecture"
            class="w-full h-full object-cover gallery-image group-hover:scale-105 transition-transform duration-500" />
        </div>
        <div class="relative rounded-2xl overflow-hidden group cursor-pointer" id="openGallery">
          <img
            src="https://images.unsplash.com/photo-1627007636205-2e2d3e2f9e6d?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="More Photos"
            class="w-full h-full object-cover gallery-image" />
          <div class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center group-hover:bg-opacity-70">
            <div class="text-white text-center">
              <div class="text-2xl font-bold mb-1">+999</div>
              <div class="text-sm opacity-90">More Photos</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Reviews and Filters Section -->
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
      <!-- Filters Column -->
      <div class="lg:col-span-1">
        <h4 class="text-lg font-semibold text-gray-900 mb-4">Filter by</h4>

        <!-- Guest Type Filters -->
        <div class="mb-6">
          <div class="space-y-2">
            <label class="flex items-center cursor-pointer">
              <input type="checkbox" class="sr-only peer" checked />
              <div class="bg-primary text-white px-3 py-2 rounded-full text-sm peer-checked:bg-primary peer-checked:text-white bg-gray-100 text-gray-700 hover:bg-gray-200 transition-colors">All Guests</div>
            </label>
            <label class="flex items-center cursor-pointer">
              <input type="checkbox" class="sr-only peer" />
              <div class="bg-gray-100 text-gray-700 px-3 py-2 rounded-full text-sm peer-checked:bg-primary peer-checked:text-white hover:bg-gray-200 transition-colors">Couple Travelers</div>
            </label>
            <label class="flex items-center cursor-pointer">
              <input type="checkbox" class="sr-only peer" />
              <div class="bg-gray-100 text-gray-700 px-3 py-2 rounded-full text-sm peer-checked:bg-primary peer-checked:text-white hover:bg-gray-200 transition-colors">Friend Groups</div>
            </label>
            <label class="flex items-center cursor-pointer">
              <input type="checkbox" class="sr-only peer" />
              <div class="bg-gray-100 text-gray-700 px-3 py-2 rounded-full text-sm peer-checked:bg-primary peer-checked:text-white hover:bg-gray-200 transition-colors">Solo Guests</div>
            </label>
            <label class="flex items-center cursor-pointer">
              <input type="checkbox" class="sr-only peer" />
              <div class="bg-gray-100 text-gray-700 px-3 py-2 rounded-full text-sm peer-checked:bg-primary peer-checked:text-white hover:bg-gray-200 transition-colors">Family Visitors</div>
            </label>
          </div>
        </div>

        <!-- Star Rating Filters -->
        <div>
          <h5 class="text-sm font-semibold text-gray-900 mb-3">By star rating</h5>
          <div class="space-y-2">
            <label class="flex items-center cursor-pointer">
              <input type="checkbox" class="sr-only peer" checked />
              <div class="bg-primary text-white px-3 py-2 rounded-full text-sm peer-checked:bg-primary peer-checked:text-white bg-gray-100 text-gray-700 hover:bg-gray-200 transition-colors">All star ratings</div>
            </label>
            <label class="flex items-center cursor-pointer">
              <input type="checkbox" class="sr-only peer" />
              <div class="bg-gray-100 text-gray-700 px-3 py-2 rounded-full text-sm peer-checked:bg-primary peer-checked:text-white hover:bg-gray-200 transition-colors flex items-center gap-2">
                5 stars <span class="text-primary">★★★★★</span>
              </div>
            </label>
            <label class="flex items-center cursor-pointer">
              <input type="checkbox" class="sr-only peer" />
              <div class="bg-gray-100 text-gray-700 px-3 py-2 rounded-full text-sm peer-checked:bg-primary peer-checked:text-white hover:bg-gray-200 transition-colors flex items-center gap-2">
                4 stars <span class="text-primary">★★★★☆</span>
              </div>
            </label>
            <label class="flex items-center cursor-pointer">
              <input type="checkbox" class="sr-only peer" />
              <div class="bg-gray-100 text-gray-700 px-3 py-2 rounded-full text-sm peer-checked:bg-primary peer-checked:text-white hover:bg-gray-200 transition-colors flex items-center gap-2">
                3 stars <span class="text-primary">★★★☆☆</span>
              </div>
            </label>
            <label class="flex items-center cursor-pointer">
              <input type="checkbox" class="sr-only peer" />
              <div class="bg-gray-100 text-gray-700 px-3 py-2 rounded-full text-sm peer-checked:bg-primary peer-checked:text-white hover:bg-gray-200 transition-colors flex items-center gap-2">
                2 stars <span class="text-primary">★★☆☆☆</span>
              </div>
            </label>
            <label class="flex items-center cursor-pointer">
              <input type="checkbox" class="sr-only peer" />
              <div class="bg-gray-100 text-gray-700 px-3 py-2 rounded-full text-sm peer-checked:bg-primary peer-checked:text-white hover:bg-gray-200 transition-colors flex items-center gap-2">
                1 stars <span class="text-primary">★☆☆☆☆</span>
              </div>
            </label>
          </div>
        </div>
      </div>

      <!-- Reviews Column -->
      <div class="lg:col-span-3">
        <!-- Search and Sort -->
        <div class="flex flex-col sm:flex-row gap-4 mb-6">
          <div class="flex-1">
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
              </div>
              <input
                type="text"
                class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg leading-5 bg-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500"
                placeholder="Search reviews (e.g. guide)" />
            </div>
          </div>
          <div class="flex items-center gap-2">
            <span class="text-sm text-gray-700 whitespace-nowrap">Sort by:</span>
            <select class="border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 bg-white">
              <option>Recommended</option>
              <option>Newest</option>
              <option>Oldest</option>
              <option>Highest Rating</option>
              <option>Lowest Rating</option>
            </select>
          </div>
        </div>

        @forelse($paket->reviewPakets as $review)
        <!-- Single Review -->
        <div class="border border-gray-200 rounded-lg p-6 mb-6">
          <!-- Review Header -->
          <div class="flex text-primary mb-3">
            <div class="flex">
              @for ($i = 0; $i < floor($review->rating); $i++)
              <span class="text-lg">★</span>
              @endfor
              @if ($review->rating - floor($review->rating) >= 0.5)
              <span class="text-lg">★</span>
              @endif
              @for ($i = 0; $i < 5 - ceil($review->rating); $i++)
              <span class="text-lg text-gray-300">★</span>
              @endfor
            </div>
            <span class="ml-2 text-sm font-medium text-gray-900">{{ $review->rating }}</span>
          </div>

          <!-- Reviewer Info -->
          <div class="flex items-start gap-3 mb-4">
            <img class="w-12 h-12 rounded-full object-cover" 
                 src="{{ $review->user_avatar ? asset($review->user_avatar) : 'https://ui-avatars.com/api/?name=' . urlencode($review->user_name) . '&background=random' }}" 
                 alt="{{ $review->user_name }}" />
            <div>
              <div class="flex items-center gap-2 mb-1">
                <span class="font-semibold text-gray-900">{{ $review->user_name }}</span>
                @if($review->user_country)
                <span class="text-gray-400">-</span>
                <span class="text-gray-600">{{ $review->user_country }}</span>
                @endif
              </div>
              <div class="flex items-center gap-2 text-sm text-gray-500">
                <span>{{ \Carbon\Carbon::parse($review->created_at)->format('F d, Y') }}</span>
                <span>-</span>
                <span class="flex items-center gap-1">
                  <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                  </svg>
                  Verified booking
                </span>
              </div>
            </div>
          </div>

          <!-- Review Text -->
          <p class="text-gray-700 leading-relaxed mb-4">
            {{ $review->ulasan }}
          </p>

          <!-- Review Photos -->
          @if($review->galeriReviews && $review->galeriReviews->count() > 0)
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
            @foreach($review->galeriReviews as $photo)
            <div class="aspect-square overflow-hidden rounded-lg">
              <img src="{{ asset($photo->gambar) }}" 
                   alt="Review photo by {{ $review->user_name }}" 
                   class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" />
            </div>
            @endforeach
          </div>
          @endif
        </div>
        @empty
        <!-- Single Review (Default) -->
        <div class="border border-gray-200 rounded-lg p-6 mb-6">
          <!-- Review Header -->
          <div class="flex text-primary mb-3">
            <span class="text-lg">★★★★★</span>
            <span class="ml-2 text-sm font-medium text-gray-900">5</span>
          </div>

          <!-- Reviewer Info -->
          <div class="flex items-start gap-3 mb-4">
            <img class="w-12 h-12 rounded-full object-cover" src="https://images.unsplash.com/photo-1494790108755-2616c0672015?w=100&h=100&fit=crop&crop=face" alt="Nicolas" />
            <div>
              <div class="flex items-center gap-2 mb-1">
                <span class="font-semibold text-gray-900">Nicolas</span>
                <span class="text-gray-400">-</span>
                <span class="text-gray-600">France</span>
              </div>
              <div class="flex items-center gap-2 text-sm text-gray-500">
                <span>August 16, 2025</span>
                <span>-</span>
                <span class="flex items-center gap-1">
                  <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                  </svg>
                  Verified booking
                </span>
              </div>
            </div>
          </div>

          <!-- Review Text -->
          <p class="text-gray-700 leading-relaxed mb-4">
            This tour was amazing! The guide was very knowledgeable and friendly. We had a great time exploring the temples and learning about their history. The transportation was comfortable and the schedule was well-planned. Highly recommended for anyone visiting Yogyakarta!
          </p>

          <!-- Review Photos -->
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
            <div class="aspect-square overflow-hidden rounded-lg">
              <img src="https://images.unsplash.com/photo-1515536765-9b2a70c4b333?w=300&h=300&fit=crop" alt="Review photo 1" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" />
            </div>
            <div class="aspect-square overflow-hidden rounded-lg">
              <img src="https://images.unsplash.com/photo-1541051595295-e7d4ae8b845f?w=300&h=300&fit=crop" alt="Review photo 2" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" />
            </div>
            <div class="aspect-square overflow-hidden rounded-lg">
              <img src="https://images.unsplash.com/photo-1574539602047-548bf9557352?w=300&h=300&fit=crop" alt="Review photo 3" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" />
            </div>
            <div class="aspect-square overflow-hidden rounded-lg">
              <img src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=300&h=300&fit=crop" alt="Review photo 4" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" />
            </div>
          </div>
        </div>
        @endforelse

        <!-- See More Reviews Button -->
        <div class="flex justify-center">
          <button class="bg-primary hover:bg-yellow-600 text-white px-8 py-3 rounded-full font-medium transition-colors duration-200">See more reviews</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Filter functionality with improved styling
    document.addEventListener('DOMContentLoaded', function() {
      document.querySelectorAll('input[type="checkbox"]').forEach((checkbox) => {
        checkbox.addEventListener("change", function () {
          const label = this.nextElementSibling;

          if (this.checked) {
            label.className = label.className.replace("bg-gray-100 text-gray-700", "bg-primary text-white");
          } else {
            label.className = label.className.replace("bg-primary text-white", "bg-gray-100 text-gray-700");
          }
        });
      });
    });
  </script>
</section>
