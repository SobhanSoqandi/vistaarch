
<section
    dir="{{ app()->getLocale() === 'fa' ? 'rtl' : 'ltr' }}"
    class="bg-[#f8fafa] overflow-hidden"
>
    <div class="grid grid-cols-1 lg:grid-cols-2 min-h-[570px]">
        <div class="px-6 sm:px-10 lg:px-14 xl:px-16 py-14 lg:py-16 flex flex-col justify-center">
            <div class="max-w-[470px]">
                <h2 class="mt-4 font-serif text-3xl sm:text-4xl lg:text-[42px] leading-[1.05] text-[#172526] uppercase">
                    {{ __('messages.architect_title_line_1') }}
                    <span class="block text-[#A99772]">
                        {{ __('messages.architect_title_line_2') }}
                    </span>
                </h2>

                <div class="w-10 h-px bg-[#A99772] mt-7 mb-7"></div>

                <p class="text-sm sm:text-base leading-[1.9] text-[#4E5553]">
                    {{ __('messages.architect_description') }}
                </p>
            </div>
        </div>

        <div class="relative min-h-[420px] lg:min-h-[570px] overflow-hidden">
            <div class="absolute inset-0 overflow-hidden">
                <img
                    src="{{ asset('img/landing/about-raya.png') }}"
                    alt="{{ __('messages.architect_title_line_1') }}"
                    class="absolute inset-0 w-[200%] h-full object-cover object-center"
                >
            </div>

            <div class="absolute inset-y-0 left-1/2 w-16 -translate-x-1/2 bg-gradient-to-r from-[#FAFAF8]/20 via-transparent to-transparent pointer-events-none"></div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 items-stretch gap-0">
        <div class="grid grid-cols-1 sm:grid-cols-3 border-t border-[#E0DDD5] min-w-0">
            <div class="px-7 sm:px-6 lg:px-5 xl:px-8 py-8 border-b sm:border-b-0 sm:border-r rtl:sm:border-r-0 rtl:sm:border-l border-[#E0DDD5]">
                <div class="w-20 h-20 lg:w-20 lg:h-20 xl:w-24 xl:h-24 text-[#B5A37E] mb-7">
                    <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.2" class="w-full h-full">
                        <path d="M24 5 39 14v18L24 41 9 32V14L24 5Z"/>
                        <path d="M9 14 24 23l15-9"/>
                        <path d="M24 23v18"/>
                    </svg>
                </div>

                <h3 class="text-lg xl:text-xl font-semibold tracking-[0.12em] uppercase text-[#293231]">
                    {{ __('messages.approach_function_title') }}
                </h3>

                <div class="w-10 h-px bg-[#C6B99F] my-5"></div>

                <p class="text-sm xl:text-base leading-[1.9] text-[#606562]">
                    {{ __('messages.approach_function_desc') }}
                </p>
            </div>

            <div class="px-7 sm:px-6 lg:px-5 xl:px-8 py-8 border-b sm:border-b-0 sm:border-r rtl:sm:border-r-0 rtl:sm:border-l border-[#E0DDD5]">
                <div class="w-20 h-20 lg:w-20 lg:h-20 xl:w-24 xl:h-24 text-[#B5A37E] mb-7">
                    <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.2" class="w-full h-full">
                        <path d="M24 6v36M6 24h36"/>
                        <circle cx="24" cy="24" r="12"/>
                        <path d="M20 24h8M24 20v8"/>
                        <path d="M34 14l5-5"/>
                    </svg>
                </div>

                <h3 class="text-lg xl:text-xl font-semibold tracking-[0.12em] uppercase text-[#293231]">
                    {{ __('messages.approach_precision_title') }}
                </h3>

                <div class="w-10 h-px bg-[#C6B99F] my-5"></div>

                <p class="text-sm xl:text-base leading-[1.9] text-[#606562]">
                    {{ __('messages.approach_precision_desc') }}
                </p>
            </div>

            <div class="px-7 sm:px-6 lg:px-5 xl:px-8 py-8">
                <div class="w-20 h-20 lg:w-20 lg:h-20 xl:w-24 xl:h-24 text-[#B5A37E] mb-7">
                    <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.2" class="w-full h-full">
                        <circle cx="17" cy="16" r="6"/>
                        <circle cx="32" cy="18" r="5"/>
                        <path d="M7 40c0-7 4-11 10-11s10 4 10 11"/>
                        <path d="M27 40c0-6 3-9 8-9s7 3 7 9"/>
                    </svg>
                </div>

                <h3 class="text-lg xl:text-xl font-semibold tracking-[0.12em] uppercase text-[#293231]">
                    {{ __('messages.approach_experience_title') }}
                </h3>

                <div class="w-10 h-px bg-[#C6B99F] my-5"></div>

                <p class="text-sm xl:text-base leading-[1.9] text-[#606562]">
                    {{ __('messages.approach_experience_desc') }}
                </p>
            </div>
        </div>

        <div class="bg-[#073D3D] text-white px-7 sm:px-10 lg:px-7 xl:px-12 py-9 sm:py-10 min-w-0">
            <span class="text-xs tracking-[0.2em] uppercase text-[#B8A77F]">
                {{ __('messages.action_label') }}
            </span>

            <h3 class="mt-4 font-serif text-2xl sm:text-3xl text-white">
                {{ __('messages.action_title') }}
            </h3>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-7 mt-9">
                <div>
                    <div class="flex items-center gap-3 mb-3">
                        <h4 class="text-sm tracking-[0.15em] uppercase text-white font-semibold">
                            {{ __('messages.action_challenge_title') }}
                        </h4>
                        <span class="hidden sm:block flex-1 h-px bg-white/20"></span>
                    </div>

                    <p class="text-sm leading-[1.9] text-white/70">
                        {{ __('messages.action_challenge_desc') }}
                    </p>
                </div>

                <div>
                    <div class="flex items-center gap-3 mb-3">
                        <h4 class="text-sm tracking-[0.15em] uppercase text-white font-semibold">
                            {{ __('messages.action_approach_title') }}
                        </h4>
                        <span class="hidden sm:block flex-1 h-px bg-white/20"></span>
                    </div>

                    <p class="text-sm leading-[1.9] text-white/70">
                        {{ __('messages.action_approach_desc') }}
                    </p>
                </div>

                <div>
                    <div class="flex items-center gap-3 mb-3">
                        <h4 class="text-sm tracking-[0.15em] uppercase text-white font-semibold">
                            {{ __('messages.action_result_title') }}
                        </h4>
                    </div>

                    <p class="text-sm leading-[1.9] text-white/70">
                        {{ __('messages.action_result_desc') }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-[42%_58%] border-t border-[#E0DDD5]">
        <div class="hidden lg:block min-h-[150px] overflow-hidden">
            <img
                src="{{ asset('img/landing/about-new.png') }}"
                alt=""
                class="w-full h-full object-cover opacity-25 grayscale"
            >
        </div>

        <div class="px-1 sm:px-12 lg:px-20 py-10 sm:py-12 flex items-center">
            <div class="flex gap-5 max-w-[700px]">
                <span class="font-serif text-6xl leading-none text-[#B59F73]">
                    “
                </span>

                <p class="font-serif italic text-xl sm:text-2xl leading-[1.6] text-[#303635]">
                    {{ __('messages.architect_quote') }}
                </p>
            </div>
        </div>
    </div>
</section>
