{{-- Description Sections Component (Highlights, Full Description, Includes, Important Information) --}}
@props(['paket'])

<section class="">
  <div class="mt-10">
    <!-- Highlights Section -->
    <div class="mb-12">
      <div class="flex flex-col md:flex-row border-t-2 pt-10 gap-8">
        <!-- Left Column - Title -->
        <div class="md:w-1/4">
          <h2 class="section-title text-base font-bold mb-0">Highlights</h2>
        </div>

        <!-- Right Column - Content -->
        <div class="md:w-3/4">
          <ul class="space-y-3">
            @forelse($paket->highlightPoints as $highlight)
            <li class="flex items-start gap-3">
              <span class="bullet-point text-base">•</span>
              <span class="description-text text-base">{{ $highlight }}</span>
            </li>
            @empty
            @if($paket->highlights)
            @foreach(explode('|', $paket->highlights) as $highlight)
            <li class="flex items-start gap-3">
              <span class="bullet-point text-base">•</span>
              <span class="description-text text-base">{{ $highlight }}</span>
            </li>
            @endforeach
            @else
            <li class="flex items-start gap-3">
              <span class="bullet-point text-base">•</span>
              <span class="description-text text-base">Enjoy temples with a guarantee of full access to all temples and climb up</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="bullet-point text-base">•</span>
              <span class="description-text text-base">Explore the highest Hindu temple and largest buddha temple structure</span>
            </li>
            @endif
            @endforelse
          </ul>
        </div>
      </div>
    </div>

    <!-- Full Description Section -->
    <div class="mb-12">
      <div class="flex flex-col md:flex-row gap-8 border-t-2 pt-10">
        <!-- Left Column - Title -->
        <div class="md:w-1/4">
          <h2 class="section-title text-base font-bold mb-0">Full description</h2>
        </div>

        <!-- Right Column - Content -->
        <div class="md:w-3/4">
          <div class="space-y-4">
            @if($paket->full_description)
            <div class="mt-6">
              <p class="description-text text-base full-description-short">{{ Str::limit($paket->full_description, 150) }}</p>
              <p class="description-text text-base full-description-full hidden">{{ $paket->full_description }}</p>
              <button class="see-more-link text-base mt-2 hover:text-secondary hover:font-medium underline" data-expanded="false">See more</button>
            </div>
            @else
            <p class="description-text text-base">Start your adventure with pick-up from your accommodation in Yogyakarta.</p>
            <p class="description-text text-base">Head to the largest and most complex Hindu temple.</p>
            <div class="mt-6">
              <p class="description-text text-base full-description-short">The narrative unfolds at the majestic Prambanan Temple. Built between the 8th and...</p>
              <p class="description-text text-base full-description-full hidden">The narrative unfolds at the majestic Prambanan Temple. Built between the 8th and 10th centuries, this UNESCO World Heritage site stands as a testament to the grandeur of Hindu architecture in Indonesia. As you explore its towering spires and intricate reliefs, you'll be transported back in time to an era of spiritual devotion and artistic mastery.</p>
              <button class="see-more-link text-base mt-2 hover:text-secondary hover:font-medium underline" data-expanded="false">See more</button>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>

    <!-- Includes Section -->
    <div class="mb-12">
      <div class="flex flex-col md:flex-row gap-8 border-t-2 pt-10">
        <!-- Left Column - Title -->
        <div class="md:w-1/4">
          <h2 class="section-title text-base font-bold mb-0">Includes</h2>
        </div>

        <!-- Right Column - Content -->
        <div class="md:w-3/4">
          <ul class="space-y-3">
            @forelse($paket->includes as $include)
            <li class="flex items-start gap-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                <path d="M4.47263 12.1199L9.50855 18.9492L20.425 6.94585" stroke="#1A8567" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <span class="description-text text-base">{{ $include }}</span>
            </li>
            @empty
            <li class="flex items-start gap-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                <path d="M4.47263 12.1199L9.50855 18.9492L20.425 6.94585" stroke="#1A8567" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <span class="description-text text-base">Transportation</span>
            </li>
            <li class="flex items-start gap-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                <path d="M4.47263 12.1199L9.50855 18.9492L20.425 6.94585" stroke="#1A8567" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <span class="description-text text-base">English-speaking guide</span>
            </li>
            <li class="flex items-start gap-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                <path d="M4.47263 12.1199L9.50855 18.9492L20.425 6.94585" stroke="#1A8567" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <span class="description-text text-base">Hotel pickup and drop-off</span>
            </li>
            @endforelse
          </ul>
        </div>
      </div>
    </div>

    <!-- Excludes Section -->
    <div class="mb-12">
      <div class="flex flex-col md:flex-row gap-8 border-t-2 pt-10">
        <!-- Left Column - Title -->
        <div class="md:w-1/4">
          <h2 class="section-title text-base font-bold mb-0">Excludes</h2>
        </div>

        <!-- Right Column - Content -->
        <div class="md:w-3/4">
          <ul class="space-y-3">
            @forelse($paket->excludes as $exclude)
            <li class="flex items-start gap-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                <path d="M6 6L18 18M6 18L18 6" stroke="#E53E3E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <span class="description-text text-base">{{ $exclude }}</span>
            </li>
            @empty
            <li class="flex items-start gap-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                <path d="M6 6L18 18M6 18L18 6" stroke="#E53E3E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <span class="description-text text-base">Personal expenses</span>
            </li>
            <li class="flex items-start gap-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                <path d="M6 6L18 18M6 18L18 6" stroke="#E53E3E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <span class="description-text text-base">Lunch and dinner</span>
            </li>
            <li class="flex items-start gap-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                <path d="M6 6L18 18M6 18L18 6" stroke="#E53E3E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <span class="description-text text-base">Travel insurance</span>
            </li>
            @endforelse
          </ul>
        </div>
      </div>
    </div>

    <!-- Important Information Section -->
    <div class="mb-0">
      <div class="flex flex-col md:flex-row gap-8 border-t-2 border-b-2 py-10">
        <!-- Left Column - Title -->
        <div class="md:w-1/4">
          <h2 class="section-title text-base font-bold mb-0">Important information</h2>
        </div>

        <!-- Right Column - Content -->
        <div class="md:w-3/4">
          <div class="space-y-6">
            <!-- What to bring -->
            <div>
              <h3 class="description-text text-base font-semibold mb-3">What to bring</h3>
              <ul class="space-y-2">
                <li class="flex items-start gap-3">
                  <span class="bullet-point text-base">•</span>
                  <span class="description-text text-base">Comfortable shoes</span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="bullet-point text-base">•</span>
                  <span class="description-text text-base">Sunscreen</span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="bullet-point text-base">•</span>
                  <span class="description-text text-base">Comfortable clothes</span>
                </li>
              </ul>
            </div>

            <!-- Know before you go -->
            <div>
              <h3 class="description-text text-base font-semibold mb-3">Know before you go</h3>
              <ul class="space-y-2">
                <li class="flex items-start gap-3">
                  <span class="bullet-point text-base">•</span>
                  <span class="description-text text-base">There are several tour package options, please read the description of the options carefully.</span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="bullet-point text-base">•</span>
                  <span class="description-text text-base">Student cards can only be used for ground temple tickets</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Add interactive behavior for "See more" button
    document.addEventListener('DOMContentLoaded', function() {
      document.querySelectorAll(".see-more-link").forEach(function(button) {
        button.addEventListener("click", function (e) {
        e.preventDefault();

        // Toggle expanded content
          const shortDesc = this.parentElement.querySelector('.full-description-short');
          const fullDesc = this.parentElement.querySelector('.full-description-full');
        const isExpanded = this.dataset.expanded === "true";

        if (!isExpanded) {
            shortDesc.classList.add('hidden');
            fullDesc.classList.remove('hidden');
          this.textContent = "See less";
          this.dataset.expanded = "true";
        } else {
            shortDesc.classList.remove('hidden');
            fullDesc.classList.add('hidden');
          this.textContent = "See more";
          this.dataset.expanded = "false";
        }
        });
      });

      // Responsive behavior
      function handleResize() {
        const sections = document.querySelectorAll(".flex.flex-col.md\\:flex-row");
        const isMobile = window.innerWidth < 768;

        sections.forEach((section) => {
          if (isMobile) {
            section.classList.add("space-y-4");
          } else {
            section.classList.remove("space-y-4");
          }
        });
      }

      window.addEventListener("resize", handleResize);
      handleResize(); // Initial call
    });
  </script>
</section>
