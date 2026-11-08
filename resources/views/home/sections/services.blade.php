<section dir="{{ app()->getLocale() === 'fa' ? 'rtl' : 'ltr' }}" class="bg-[#FAFAF8]">

    <div class="mx-auto">

        {{-- Header --}}
        <div class="grid grid-cols-1 lg:grid-cols-1 gap-8 lg:gap-14 px-10">

            {{-- Introduction --}}
            <div
                class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-6 lg:gap-10 text-left rtl:text-right">

                {{-- Text --}}
                <div class="w-full min-w-0 lg:flex-1">

                    <h3
                        class="font-serif flex flex-wrap lg:flex-nowrap items-baseline gap-x-2 text-2xl sm:text-3xl md:text-4xl lg:text-[32px] xl:text-[38px] leading-tight text-[#202727]">
                        <span>{{ __('services.intro_title_line_1') }}</span>
                        <span>{{ __('services.intro_title_line_2') }}</span>
                        <span>{{ __('services.intro_title_line_3') }}</span>
                    </h3>

                    <p class="mt-7 text-[15px] sm:text-base leading-[1.9] text-[#555] max-w-[560px]">
                        {{ __('services.home_about_desc_1') }}
                    </p>

                    <p class="mt-3 text-[15px] sm:text-base leading-[1.9] text-[#555] max-w-[560px]">
                        {{ __('services.home_about_desc_2') }}
                    </p>

                </div>

                {{-- Button --}}
                {{-- <div class="w-full lg:w-[240px] lg:shrink-0 flex lg:justify-end">
                    <a href="/{{ app()->getLocale() }}/about"
                        class="group w-full sm:w-[240px] lg:w-full max-w-full min-h-[52px] border border-[#B8AD99] flex items-center justify-between gap-3 px-4 sm:px-5 text-[13px] lg:text-[14px] tracking-[0.08em] uppercase text-[#353B3A] transition-all duration-300 hover:bg-[#A99772] hover:text-white hover:border-[#A99772]">

                        <span>{{ __('services.home_about_button') }}</span>

                        <svg class="w-4 h-4 lg:w-5 lg:h-5 shrink-0 transition-transform duration-300 group-hover:translate-x-1 rtl:group-hover:-translate-x-1"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"
                                d="M5 12h14M13 6l6 6-6 6" />
                        </svg>

                    </a>
                </div> --}}

            </div>

        </div>


        {{-- Main Content --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 lg:gap-14 mt-10 mx-5 lg:mx-auto lg:mt-8 ">


            {{-- Image --}}
            <div class="col-span-1">

                <div class="relative w-full lg:h-full space-y-4">

                    <span
                        class="absolute -top-2 
                                 w-9 h-9 lg:w-10 lg:h-10
                                 border-t border-r rtl:border-r-0 rtl:border-l
                                 border-[#B9AA8B]">
                    </span>

                    <img src="{{ asset('img/about/2.png') }}" alt="{{ __('services.home_about_title') }}"
                        class=" w-full h-[390px] sm:h-[400px] lg:h-full bottom-10 object-cover object-center">

                    <a href="/{{ app()->getLocale() }}/about"
                        class="group w-full sm:w-[240px] lg:w-full max-w-full min-h-[52px] border border-[#B8AD99] flex items-center justify-between gap-3 px-4 sm:px-5 text-[13px] lg:text-[14px] tracking-[0.08em] uppercase text-[#353B3A] transition-all duration-300 hover:bg-[#A99772] hover:text-white hover:border-[#A99772]">

                        <span>{{ __('services.home_about_button') }}</span>

                        <svg class="w-4 h-4 lg:w-5 lg:h-5 shrink-0 transition-transform duration-300 group-hover:translate-x-1 rtl:group-hover:-translate-x-1"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"
                                d="M5 12h14M13 6l6 6-6 6" />
                        </svg>

                    </a>

                </div>

                {{-- Button
                <a href="/{{ app()->getLocale() }}/about"
                    class="group mt-6 lg:mt-7 w-full sm:w-[240px] max-w-full h-[52px] border border-[#B8AD99] flex items-center justify-between gap-3 px-4 sm:px-5 text-[13px] lg:text-[14px] tracking-[0.08em] uppercase text-[#353B3A] transition-all duration-300 hover:bg-[#A99772] hover:text-white hover:border-[#A99772]">
                    <span>
                        {{ __('services.home_about_button') }}
                    </span>

                    <svg class="w-4 h-4 lg:w-5 lg:h-5 shrink-0 transition-transform duration-300 group-hover:translate-x-1 rtl:group-hover:-translate-x-1"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"
                            d="M5 12h14M13 6l6 6-6 6" />
                    </svg>
                </a> --}}

            </div>


            {{-- Details --}}
            <div class="col-span-2 pt-0 lg:pt-1 text-left rtl:text-right">


                {{-- Project Spectrum --}}
                <div>

                    <div class="flex items-center gap-5">

                        <h3
                            class="text-[18px] lg:text-[20px] tracking-[0.18em] text-[#363C3B] uppercase whitespace-nowrap">
                            {{ __('services.project_spectrum') }}
                        </h3>

                        <div class="h-px bg-[#D8D2C6] flex-1"></div>

                    </div>


                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 mt-5">


                        {{-- Industrial --}}
                        <div
                            class="sm:border-r rtl:sm:border-r-0 rtl:sm:border-l border-[#E2DED5] px-0 sm:px-5 lg:px-4 py-2">

                            <div class="w-24 h-24 lg:w-16 lg:h-16 text-[#A99772] mb-5">

                                <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.2"
                                    class="w-full h-full">
                                    <path d="M6 42V22l8 5v-5l8 5v-5l8 5V14l8-6v34H6Z" />
                                    <path d="M12 34h4M20 34h4M28 34h4" />
                                    <path d="M32 8v4M38 8v4" />
                                </svg>

                            </div>

                            <h4 class="text-lg lg:text-xl font-semibold tracking-wider text-[#343A39] uppercase">
                                {{ __('services.feature_industrial_title') }}
                            </h4>

                            <p class="mt-3 text-[15px] lg:text-base leading-[1.9] text-[#686B68]">
                                {{ __('services.feature_industrial_desc') }}
                            </p>

                        </div>


                        {{-- Residential --}}
                        <div
                            class="mt-8 sm:mt-0 lg:border-r rtl:lg:border-r-0 rtl:lg:border-l border-[#E2DED5] px-0 sm:px-5 lg:px-4 py-2">

                            <div class="w-24 h-24 lg:w-16 lg:h-16 text-[#A99772] mb-5">

                                <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.2"
                                    class="w-full h-full">
                                    <path d="M8 24 24 9l16 15" />
                                    <path d="M12 21v20h24V21" />
                                    <path d="M19 41V29h10v12" />
                                </svg>

                            </div>

                            <h4 class="text-lg lg:text-xl font-semibold tracking-wider text-[#343A39] uppercase">
                                {{ __('services.feature_residential_title') }}
                            </h4>

                            <p class="mt-3 text-[15px] lg:text-base leading-[1.9] text-[#686B68]">
                                {{ __('services.feature_residential_desc') }}
                            </p>

                        </div>


                        {{-- Commercial --}}
                        <div
                            class="mt-8 lg:mt-0 lg:border-r rtl:lg:border-r-0 rtl:lg:border-l border-[#E2DED5] px-0 sm:px-5 lg:px-4 py-2">

                            <div class="w-24 h-24 lg:w-16 lg:h-16 text-[#A99772] mb-5">

                                <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.2"
                                    class="w-full h-full">
                                    <path d="M10 42V13l16-5v34" />
                                    <path d="M26 18h12v24" />
                                    <path d="M16 17h4M16 24h4M16 31h4" />
                                    <path d="M31 24h3M31 30h3M31 36h3" />
                                </svg>

                            </div>

                            <h4 class="text-lg lg:text-xl font-semibold tracking-wider text-[#343A39] uppercase">
                                {{ __('services.feature_commercial_title') }}
                            </h4>

                            <p class="mt-3 text-[15px] lg:text-base leading-[1.9] text-[#686B68]">
                                {{ __('services.feature_commercial_desc') }}
                            </p>

                        </div>


                        {{-- Educational --}}
                        <div class="mt-8 lg:mt-0 px-0 sm:px-5 lg:px-4 py-2">

                            <div class="w-24 h-24 lg:w-16 lg:h-16 text-[#A99772] mb-5">

                                <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.2"
                                    class="w-full h-full">
                                    <path d="M8 11h12c4 0 6 2 6 5v25c0-3-2-5-6-5H8V11Z" />
                                    <path d="M40 11H28c-4 0-6 2-6 5v25c0-3 2-5 6-5h12V11Z" />
                                </svg>

                            </div>

                            <h4 class="text-lg lg:text-xl font-semibold tracking-wider text-[#343A39] uppercase">
                                {{ __('services.feature_educational_title') }}
                            </h4>

                            <p class="mt-3 text-[15px] lg:text-base leading-[1.9] text-[#686B68]">
                                {{ __('services.feature_educational_desc') }}
                            </p>

                        </div>

                    </div>

                </div>


                {{-- Professional Approach --}}
                <div class="mt-12">

                    <div class="flex items-center gap-5">

                        <h3
                            class="text-[17px] lg:text-[19px] tracking-[0.18em] text-[#363C3B] uppercase whitespace-nowrap">
                            {{ __('services.professional_approach') }}
                        </h3>

                        <div class="h-px bg-[#D8D2C6] flex-1"></div>

                    </div>


                    <div class="grid grid-cols-1 sm:grid-cols-3">


                        {{-- Function --}}
                        <div
                            class="px-0 sm:px-5 lg:px-4 py-2 border-b sm:border-b-0 sm:border-r rtl:sm:border-r-0 rtl:sm:border-l border-[#E2DED5]">

                            <div class="w-20 h-20 lg:w-24 lg:h-24 mb-5 text-[#A99772]">

                                <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.2"
                                    class="w-full h-full">
                                    <circle cx="24" cy="24" r="15" />
                                    <circle cx="24" cy="24" r="5" />
                                    <path d="M24 4v8M24 36v8M4 24h8M36 24h8" />
                                    <path d="m30 18 8-8" />
                                    <path d="m38 10-1 6" />
                                    <path d="m38 10-6 1" />
                                </svg>

                            </div>

                            <h4 class="text-lg lg:text-xl font-semibold tracking-wider text-[#343A39] uppercase">
                                {{ __('services.approach_function_title') }}
                            </h4>

                            <p class="mt-3 text-[15px] lg:text-base leading-[1.9] text-[#686B68]">
                                {{ __('services.approach_function_desc') }}
                            </p>

                        </div>


                        {{-- Technical Precision --}}
                        <div
                            class="mt-7 sm:mt-0 px-0 sm:px-5 lg:px-6 py-2 border-b sm:border-b-0 sm:border-r rtl:sm:border-r-0 rtl:sm:border-l border-[#E2DED5]">

                            <div class="w-20 h-20 lg:w-24 lg:h-24 mb-5 text-[#A99772]">

                                <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.2"
                                    class="w-full h-full">
                                    <rect x="9" y="7" width="30" height="34" rx="1" />
                                    <path d="M16 14h16M16 20h10M16 27h16M16 33h9" />
                                </svg>

                            </div>

                            <h4 class="text-lg lg:text-xl font-semibold tracking-wider text-[#343A39] uppercase">
                                {{ __('services.approach_technical_title') }}
                            </h4>

                            <p class="mt-3 text-[15px] lg:text-base leading-[1.9] text-[#686B68]">
                                {{ __('services.approach_technical_desc') }}
                            </p>

                        </div>


                        {{-- Real World --}}
                        <div class="mt-7 sm:mt-0 px-0 sm:px-5 lg:px-6 py-2">

                            <div class="w-20 h-20 lg:w-24 lg:h-24 mb-5 text-[#A99772]">

                                <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.2"
                                    class="w-full h-full">
                                    <circle cx="17" cy="15" r="6" />
                                    <circle cx="32" cy="17" r="5" />
                                    <path d="M7 39c0-7 4-11 10-11s10 4 10 11" />
                                    <path d="M27 39c0-5 3-9 8-9s7 3 7 9" />
                                </svg>

                            </div>

                            <h4 class="text-lg lg:text-xl font-semibold tracking-wider text-[#343A39] uppercase">
                                {{ __('services.approach_real_world_title') }}
                            </h4>

                            <p class="mt-3 text-[15px] lg:text-base leading-[1.9] text-[#686B68]">
                                {{ __('services.approach_real_world_desc') }}
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
