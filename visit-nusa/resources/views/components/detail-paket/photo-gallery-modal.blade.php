{{-- Photo Gallery Modal Component --}}
@props(['paket'])

<!-- Photo Gallery Modal -->
<div id="galleryModal" class="fixed inset-0 bg-black bg-opacity-80 z-50 hidden modal-backdrop">
  <div class="flex items-center justify-center min-h-screen p-4">
    <div class="bg-white rounded-3xl max-w-6xl w-full max-h-[90vh] overflow-hidden modal-content">
      <!-- Modal Header -->
      <div class="flex items-center justify-between p-6 border-b border-gray-200">
        <h3 class="text-2xl font-bold text-gray-900">{{ $paket->nama }} - Photo Gallery</h3>
        <button id="closeModal" class="p-2 hover:bg-gray-100 rounded-full transition-colors">
          <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <!-- Modal Content -->
      <div class="p-6 custom-scrollbar overflow-y-auto max-h-[calc(90vh-120px)]">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
          <!-- Gallery Images -->
          @foreach($paket->gallery as $index => $image)
          <div class="group cursor-pointer">
            <img
              src="{{ asset($image) }}"
              alt="{{ $paket->nama }} - Image {{ $index + 1 }}"
              class="w-full h-48 object-cover rounded-xl group-hover:scale-105 transition-transform duration-300" />
          </div>
          @endforeach
          </div>
          </div>
          </div>
  </div>
</div>
