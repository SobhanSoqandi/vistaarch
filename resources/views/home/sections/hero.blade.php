
@php
    $locale = app()->getLocale();
    $dir = in_array($locale, ['fa', 'ar']) ? 'rtl' : 'ltr';
    $isLatin = in_array($locale, ['en', 'de']);
@endphp

<section dir="{{ $dir }}" class="relative container mx-auto overflow-hidden">

    <div class="grid grid-cols-1 lg:grid-cols-2 min-h-[720px]">

        <div class="relative z-10 bg-[#F5F5F2] flex items-center px-7 sm:px-12 lg:px-16 xl:px-20 py-14 lg:py-20">

            <div class="w-full max-w-xl">

                <div class="flex items-center gap-4 mb-8">
                    <span class="text-[#082429] tracking-[0.35em] rtl:tracking-normal text-xs sm:text-sm lg:text-base uppercase font-medium">
                        {{ __('messages.hero_role') }}
                    </span>
                    <span class="w-10 h-px bg-[#B9A77B]"></span>
                </div>

                <h1 class="flex items-baseline gap-x-3 whitespace-nowrap leading-[1.05] text-[#082429] tracking-[-0.025em] rtl:tracking-normal font-normal {{ $isLatin ? 'font-hero-luxury' : '' }}">

                    <span class="text-[34px] sm:text-[48px] lg:text-[48px] xl:text-[64px]">
                        {{ __('messages.hero_name_line1') }}
                    </span>

                    <span class="text-[27px] sm:text-[38px] lg:text-[38px] xl:text-[50px]">
                        {{ __('messages.hero_name_line2') }}
                    </span>

                </h1>

                <p class="mt-7 text-[#082429] tracking-[0.28em] rtl:tracking-normal text-[11px] sm:text-[13px] lg:text-[15px] uppercase font-medium {{ $isLatin ? 'font-hero-luxury' : '' }}">
                    {{ __('messages.hero_tagline') }}
                </p>

                <p class="mt-12 max-w-md text-[#082429] text-[14px] sm:text-[16px] lg:text-[18px] leading-[1.8]">
                    {{ __('messages.hero_description') }}
                </p>

                <a href="/{{ $locale }}/projects" class="group inline-flex items-center gap-4 mt-10 text-[#082429] tracking-[0.2em] rtl:tracking-normal text-[11px] sm:text-[13px] lg:text-[15px] uppercase font-medium {{ $isLatin ? 'font-hero-luxury' : '' }}">

                    <span>{{ __('messages.explore_projects') }}</span>

                    <span class="flex items-center">
                        <span class="w-8 h-px bg-[#082429] transition-all duration-300 group-hover:w-12"></span>

                        <svg class="w-5 h-5 lg:w-6 lg:h-6 -ms-1 rtl:-scale-x-100 transition-transform duration-300 group-hover:translate-x-1 rtl:group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="M5 12h14M13 6l6 6-6 6"/>
                        </svg>
                    </span>

                </a>

            </div>
        </div>

        <div class="relative min-h-[520px] lg:min-h-full overflow-hidden">

            <img
                src="{{ asset('img/Header/HERO.jpg') }}"
                alt="{{ __('messages.hero_name_line1') }} {{ __('messages.hero_name_line2') }}"
                class="absolute inset-0 w-full h-full object-cover"
            >

            <div class="absolute inset-y-0 start-0 w-24 sm:w-32 lg:w-40 bg-gradient-to-r rtl:bg-gradient-to-l from-[#F5F5F2] via-[#F5F5F2]/45 to-transparent pointer-events-none"></div>

            <div class="absolute bottom-8 end-7 sm:end-10 lg:end-14 text-end">

                <p class="text-white/80 tracking-[0.28em] rtl:tracking-normal text-[8px] sm:text-[10px] uppercase {{ $isLatin ? 'font-hero-luxury' : '' }}">
                    {{ __('messages.hero_tag_1') }}
                </p>

                <p class="text-white/80 tracking-[0.28em] rtl:tracking-normal text-[8px] sm:text-[10px] uppercase mt-1 {{ $isLatin ? 'font-hero-luxury' : '' }}">
                    {{ __('messages.hero_tag_2') }}
                </p>

                <p class="text-white/80 tracking-[0.28em] rtl:tracking-normal text-[8px] sm:text-[10px] uppercase mt-1 {{ $isLatin ? 'font-hero-luxury' : '' }}">
                    {{ __('messages.hero_tag_3') }}
                </p>

            </div>

        </div>

    </div>

</section>
