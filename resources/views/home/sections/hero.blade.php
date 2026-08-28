<section class="relative">

    <div class="swiper heroSwiper h-[70vh] xl:h-[80vh] relative">

        <div class="swiper-wrapper">

            <div class="swiper-slide relative">
                <img class="w-full h-full object-cover" src="{{ asset('img/Header/H1.jpg') }}" alt="">
            </div>

            <div class="swiper-slide">
                <img class="w-full h-full object-cover" src="{{ asset('img/Header/H2.jpg') }}" alt="">
            </div>

            <div class="swiper-slide">
                <img class="w-full h-full object-cover" src="{{ asset('img/Header/H3.jpg') }}" alt="">
            </div>

            <div class="swiper-slide">
                <img class="w-full h-full object-cover" src="{{ asset('img/Header/H4.jpg') }}" alt="">
            </div>

        </div>

        <!-- Overlay for text readability -->
        <div class="absolute inset-0 bg-gradient-to-r from-white/80 via-white/30 to-transparent pointer-events-none z-10">
        </div>

        <!-- Hero Text -->
        <div class="absolute inset-0 z-20 flex items-center pointer-events-none">
            <div class="max-w-7xl mx-auto px-4 w-full">
                <div class="max-w-xl pointer-events-auto">

                    <h1 class="font-serif text-5xl xl:text-6xl leading-tight text-teal-900">
                        {{ __('messages.hero_name_line1') }}<br>
                        {{ __('messages.hero_name_line2') }}
                    </h1>

                    <p class="mt-4 text-amber-300 tracking-[0.3em] text-sm xl:text-base uppercase">
                        {{ __('messages.hero_role') }}
                    </p>

                    <span class="block w-16 h-px bg-amber-300 mt-6 mb-6"></span>

                    <p class="text-teal-900/80 text-base xl:text-lg leading-relaxed">
                        {{ __('messages.hero_description') }}
                    </p>

                    <a href="/{{ app()->getLocale() }}/projects"
                        class="inline-flex items-center gap-2 mt-8 border border-amber-300 text-amber-300 tracking-widest text-sm px-6 py-3 hover:bg-amber-300 hover:text-white transition">
                        {{ __('messages.explore_projects') }}
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>

                </div>
            </div>
        </div>

        <!-- Scroll indicator -->
        {{-- <div class="absolute bottom-8 left-4 xl:left-8 z-20 flex flex-col items-center gap-2 pointer-events-none">
            <span class="block w-px h-10 bg-teal-900/40"></span>
            <span class="text-[10px] tracking-[0.3em] text-teal-900/60">{{ __('messages.scroll') }}</span>
        </div> --}}

    </div>

</section>