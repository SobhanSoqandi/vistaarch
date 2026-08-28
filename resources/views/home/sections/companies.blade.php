<section class="py-16">

    <div class="max-w-7xl mx-auto px-4">

        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold mt-2">
                {{ __('messages.companies') }}
            </h2>
        </div>

        <div class="relative">

            <!-- دکمه قبلی -->
            <div class="partner-prev absolute left-0 top-1/2 -translate-y-1/2 z-20">
                <button
                    class="w-10 h-10 rounded-full bg-white shadow-xl hover:bg-teal-700 hover:text-white transition flex items-center justify-center text-2xl">
                            ❯
                </button>
            </div>

            <!-- دکمه بعدی -->
            <div class="partner-next absolute right-0 top-1/2 -translate-y-1/2 z-20">
                <button
                    class="w-10 h-10 rounded-full bg-white shadow-xl hover:bg-teal-700 hover:text-white transition flex items-center justify-center text-2xl">
                     ❮ 
                </button>
            </div>

            <div class="swiper partnerSwiper">

                <div class="swiper-wrapper">

                    @foreach ($companies as $company)

                        <div class="swiper-slide">

                            <div class="h-40 md:h-48 lg:h-52 flex items-center justify-center group transition-all duration-500">

                                @if ($company->logo)

                                    <img
                                        src="{{ asset('storage/' . $company->logo) }}"
                                        alt="company logo"
                                        class="max-h-48 md:max-h-60 lg:max-h-72 object-contain grayscale group-hover:grayscale-0 group-hover:scale-105 transition duration-300">

                                @endif

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

        </div>

    </div>

</section>