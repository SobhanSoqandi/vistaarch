@extends('layouts.app')

@section('title', ' درباره ما ')

@section('content')


   <!-- ================= ABOUT HERO ================= -->
<section
    dir="rtl"
    class="relative isolate overflow-hidden bg-gradient-to-b from-teal-950 via-teal-900 to-teal-800 py-20 [font-family:'Vazirmatn',sans-serif] sm:py-24">

    <!-- گرید خط‌کشیِ نقشه (بلوپرینت) -->
    <div class="absolute inset-0 opacity-[0.06] [background-image:linear-gradient(#F6F2E7_1px,transparent_1px),linear-gradient(90deg,#F6F2E7_1px,transparent_1px)] [background-size:48px_48px]"></div>

    <!-- خط طلایی بالای سکشن -->
    <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-l from-transparent via-amber-400 to-transparent"></div>

    <!-- نور محیطی -->
    <div class="pointer-events-none absolute -top-32 -end-32 h-96 w-96 rounded-full bg-amber-400/10 blur-[100px]"></div>
    <div class="pointer-events-none absolute -bottom-40 -start-24 h-80 w-80 rounded-full bg-teal-400/10 blur-[100px]"></div>

    <div class="relative mx-auto max-w-7xl px-6">
        <div class="text-center">

          

            <h1 class="mx-auto mt-6 max-w-3xl text-4xl font-black leading-[1.15] text-[#F6F2E7] md:text-6xl">
                {{ __('about.hero_title') }}
            </h1>

            <p class="mx-auto mt-6 max-w-3xl leading-8 text-[#F6F2E7]/80">
                {{ __('about.hero_description') }}
            </p>

        </div>
    </div>

    <!-- موج پایین برای اتصال به سکشن بعدی -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80" preserveAspectRatio="none" class="absolute inset-x-0 bottom-0 h-16 w-full">
        <path fill="#F6F2E7" d="M0,32 C240,80 480,0 720,16 C960,32 1200,80 1440,32 L1440,80 L0,80 Z"/>
    </svg>

</section>




        <section class="py-20 bg-white">

            <div dir="ltr" class="max-w-7xl mx-auto">

                <div class="swiper contact overflow-hidden ">

                    <div class="swiper-wrapper">


                        <div class="swiper-slide">

                            <div>
                                <img src="{{ asset('img/about/about-2-1.jpg') }}" class="w-full h-full object-cover">
                            </div>

                        </div>


                        <div class="swiper-slide">

                            <div>
                                <img src="{{ asset('img/about/about-2-2.jpg') }}" class="w-full h-full object-cover">

                            </div>
                        </div>


                        <div class="swiper-slide">

                            <div>
                                <img src="{{ asset('img/about/about-2-3.jpg') }}" class="w-full h-full object-cover">

                            </div>
                        </div>



                        <div class="swiper-slide">

                            <div>
                                <img src="{{ asset('img/about/about-2-4.jpg') }}" class="w-full h-full object-cover">

                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>










    <!-- ================= ABOUT ================= -->

    <!-- ================= ABOUT ================= -->
    <section dir="rtl" class="relative isolate overflow-hidden bg-teal-800 py-28 ">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;500;700;800;900&display=swap"
            rel="stylesheet">
        {{-- پیشنهاد: این سه خط فونت رو به head.blade.php منتقل کن، ولی همین‌جا هم کار می‌کنه --}}

        <!-- نور محیطی -->
        <div
            class="pointer-events-none absolute -top-40 -end-40 h-[26rem] w-[26rem] rounded-full bg-[#c9a13b]/10 blur-[100px]">
        </div>
        <div
            class="pointer-events-none absolute -bottom-32 -start-32 h-[22rem] w-[22rem] rounded-full bg-[#5c6b45]/10 blur-[100px]">
        </div>

        <!-- واترمارک تزئینی -->
        <span aria-hidden="true"
            class="pointer-events-none absolute top-4 start-1/2 -translate-x-1/2 select-none whitespace-nowrap text-[9rem] font-black leading-none text-[#F6F2E7]/[0.03] sm:text-[13rem]">
            مربی شما
        </span>

        <div class="relative mx-auto max-w-7xl px-6">
            <div class="grid items-center gap-16 lg:grid-cols-12">

                <!-- کولاژ تصاویر -->
                <div class="relative h-[420px] sm:h-[480px] lg:col-span-5 lg:h-[620px]">

                    <!-- دایره تزئینی -->
                    <div
                        class="absolute -top-8 -start-8 hidden h-56 w-56 rounded-full border border-dashed border-[#F6F2E7]/25 sm:block">
                    </div>

                    <!-- عکس اصلی -->
                    <div
                        class="absolute inset-y-0 start-0 w-[72%] overflow-hidden rounded-[28px] shadow-2xl ring-1 ring-black/10">
                        <img src="{{ asset('img/about/me.jpg') }}" alt="{{ __('about.about_us') }}"
                            class="h-full w-full object-cover">
                    </div>

                    <!-- عکس کوچک بالا -->
                    <div
                        class="absolute top-0 end-4 z-30 hidden aspect-square w-[32%] -rotate-6 overflow-hidden rounded-2xl shadow-xl ring-4 ring-[#101d17] transition duration-500 hover:rotate-0 md:block">
                        <img src="{{ asset('img/about/me3.jpg') }}" alt="{{ __('about.about_us') }}"
                            class="h-full w-full object-cover">
                    </div>

                    <!-- عکس کوچک پایین -->
                    <div
                        class="absolute bottom-0 end-0 z-20 aspect-[4/5] w-[46%] rotate-6 overflow-hidden rounded-2xl shadow-xl ring-4 ring-[#F6F2E7] transition duration-500 hover:rotate-0">
                        <img src="{{ asset('img/about/me2.jpg') }}" alt="{{ __('about.about_us') }}"
                            class="h-full w-full object-cover">
                    </div>

                    <!-- مهرِ چرخان (امضای بصری بخش) -->
                    <div class="absolute -bottom-6 -start-6 z-40 flex h-28 w-28 items-center justify-center">
                        <svg viewBox="0 0 200 200"
                            class="absolute h-28 w-28 animate-[spin_20s_linear_infinite] motion-reduce:animate-none">
                            <defs>
                                <path id="aboutSealPath" d="M 100,100 m -78,0 a 78,78 0 1,1 156,0 a 78,78 0 1,1 -156,0"
                                    fill="none" />
                            </defs>
                            <text font-size="13" letter-spacing="3" fill="#F6F2E7" fill-opacity="0.9">
                                <textPath href="#aboutSealPath">
                                    تعهد • تخصص • نتیجه • تعهد • تخصص • نتیجه •
                                </textPath>
                            </text>
                        </svg>
                        <span
                            class="flex h-14 w-14 items-center justify-center rounded-full bg-[#c9a13b] text-[#101d17] shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 3l2.5 5.5L20 9l-4 4 1 6-5-3-5 3 1-6-4-4 5.5-.5L12 3z" />
                            </svg>
                        </span>
                    </div>

                </div>

                <!-- محتوا -->
                <div class="relative lg:col-span-7">
                    <div class="relative rounded-[32px] bg-[#F6F2E7] p-10 shadow-2xl ring-1 ring-black/5 sm:p-14 xl:-ms-20">

                        <span
                            class="inline-flex items-center gap-3 text-xs font-bold uppercase tracking-[0.35em] text-[#101d17]/60">
                            <span class="h-px w-10 bg-[#c9a13b]"></span>
                            {{ __('about.about_us') }}
                        </span>

                        <h2 class="mt-6 max-w-xl text-3xl font-black leading-[1.15] text-[#101d17] xl:text-5xl">
                            {{ __('about.coach_title') }}
                        </h2>

                        <div class="mt-8 h-1 w-20 rounded-full bg-gradient-to-l from-[#c9a13b] to-[#c9a13b]/20"></div>

                        <p class="mt-8 max-w-2xl text-[17px] leading-9 text-[#101d17]/70">
                            {!! __('about.coach_description') !!}
                        </p>

                        <a href="#contact"
                            class="group mt-10 inline-flex items-center gap-3 rounded-full bg-teal-700 px-8 py-4 text-sm font-bold text-[#F6F2E7] transition hover:bg-[#ffc430] hover:text-[#101d17]">
                            {{ __('about.cta_button') }}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" class="h-4 w-4 transition group-hover:-translate-x-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l-7 7 7 7" />
                            </svg>
                        </a>

                    </div>
                </div>

            </div>
        </div>

    </section>






    <!-- ================= FEATURES ================= -->
    <section class="py-24 bg-slate-50">

        <div class="max-w-7xl mx-auto px-4">

            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold">
                    {{ __('about.why_us') }}
                </h2>
            </div>

            <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">

                {{-- Card 1 --}}
                <div
                    class="group rounded-3xl border border-slate-200 bg-white p-8 transition-all duration-500 hover:-translate-y-2 hover:border-slate-300 hover:shadow-xl">

                    <div
                        class="mb-6 flex h-16 w-16 items-center justify-center rounded-2xl bg-slate-100 transition group-hover:bg-amber-400">

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-8 w-8 text-slate-700 transition group-hover:text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">

                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 21h18M5 21V7l7-4 7 4v14M9 9h.01M15 9h.01M9 13h.01M15 13h.01M9 17h.01M15 17h.01" />

                        </svg>

                    </div>

                    <h3 class="mb-4 text-xl font-bold">
                        {{ __('about.feature1_title') }}
                    </h3>

                    <p class="leading-8 text-slate-600">
                        {{ __('about.feature1_desc') }}
                    </p>

                </div>



                {{-- Card 2 --}}
                <div
                    class="group rounded-3xl border border-slate-200 bg-white p-8 transition-all duration-500 hover:-translate-y-2 hover:border-slate-300 hover:shadow-xl">

                    <div
                        class="mb-6 flex h-16 w-16 items-center justify-center rounded-2xl bg-slate-100 transition group-hover:bg-amber-400">

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-8 w-8 text-slate-700 transition group-hover:text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">

                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4 19h16M5 19V9l7-5 7 5v10M9 19v-5h6v5" />

                        </svg>

                    </div>

                    <h3 class="mb-4 text-xl font-bold">
                        {{ __('about.feature2_title') }}
                    </h3>

                    <p class="leading-8 text-slate-600">
                        {{ __('about.feature2_desc') }}
                    </p>

                </div>



                {{-- Card 3 --}}
                <div
                    class="group rounded-3xl border border-slate-200 bg-white p-8 transition-all duration-500 hover:-translate-y-2 hover:border-slate-300 hover:shadow-xl">

                    <div
                        class="mb-6 flex h-16 w-16 items-center justify-center rounded-2xl bg-slate-100 transition group-hover:bg-amber-400">

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-8 w-8 text-slate-700 transition group-hover:text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">

                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 4h16v16H4zM4 10h16M10 4v16" />

                        </svg>

                    </div>

                    <h3 class="mb-4 text-xl font-bold">
                        {{ __('about.feature3_title') }}
                    </h3>

                    <p class="leading-8 text-slate-600">
                        {{ __('about.feature3_desc') }}
                    </p>

                </div>



                {{-- Card 4 --}}
                <div
                    class="group rounded-3xl border border-slate-200 bg-white p-8 transition-all duration-500 hover:-translate-y-2 hover:border-slate-300 hover:shadow-xl">

                    <div
                        class="mb-6 flex h-16 w-16 items-center justify-center rounded-2xl bg-slate-100 transition group-hover:bg-amber-400">

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-8 w-8 text-slate-700 transition group-hover:text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">

                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8 12h8M12 8v8M4 12a8 8 0 1116 0 8 8 0 01-16 0z" />

                        </svg>

                    </div>

                    <h3 class="mb-4 text-xl font-bold">
                        {{ __('about.feature4_title') }}
                    </h3>

                    <p class="leading-8 text-slate-600">
                        {{ __('about.feature4_desc') }}
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- ================= STATS ================= -->

    <section class="py-28 bg-gradient-to-b from-white to-slate-50">

        <div class="max-w-7xl mx-auto px-4">

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">

                {{-- پروژه ها --}}
                <div
                    class="group rounded-3xl border border-slate-200 bg-white p-10 text-center transition-all duration-500 hover:-translate-y-2 hover:border-teal-700 hover:shadow-2xl">



                    <div class="text-6xl font-black tracking-tight text-teal-700">
                        + 40
                    </div>

                    <p class="mt-5 text-sm uppercase tracking-[0.25em] text-slate-400">
                        {{ __('about.projects') }}
                    </p>

                </div>



                {{-- کارفرما --}}
                <div
                    class="group rounded-3xl border border-slate-200 bg-white p-10 text-center transition-all duration-500 hover:-translate-y-2 hover:border-teal-700 hover:shadow-2xl">


                    <div class="text-6xl font-black tracking-tight text-teal-700">
                        + 30
                    </div>

                    <p class="mt-5 text-sm uppercase tracking-[0.25em] text-slate-400">
                        {{ __('about.clients') }}
                    </p>

                </div>



                {{-- تجربه --}}
                <div
                    class="group rounded-3xl border border-slate-200 bg-white p-10 text-center transition-all duration-500 hover:-translate-y-2 hover:border-teal-700 hover:shadow-2xl">



                    <div class="text-6xl font-black tracking-tight text-teal-700">
                        + 10
                    </div>

                    <p class="mt-5 text-sm uppercase tracking-[0.25em] text-slate-400">
                        {{ __('about.experience') }}
                    </p>

                </div>



                {{-- همکاران --}}
                <div
                    class="group rounded-3xl border border-slate-200 bg-white p-10 text-center transition-all duration-500 hover:-translate-y-2 hover:border-teal-700 hover:shadow-2xl">



                    <div class="text-6xl font-black tracking-tight text-teal-700">
                        + 20
                    </div>

                    <p class="mt-5 text-sm uppercase tracking-[0.25em] text-slate-400">
                        {{ __('about.partners') }}
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- ================= CTA ================= -->

    <section class="py-10 bg-[#eaa700] ">

        <div class="max-w-5xl mx-auto px-4 text-center">

            <h2 class="text-2xl md:text-3xl font-black text-white">
                {{ __('about.cta_title') }}
            </h2>

            <p class="text-white mt-6 leading-8 max-w-xl mx-auto">
                {{ __('about.cta_desc') }}
            </p>

            <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}"
                class="inline-block mt-8 bg-white text-slate-900 px-8 py-3 rounded-xl font-bold hover:bg-slate-100 transition">

                {{ __('about.cta_button') }}

            </a>

        </div>

    </section>
@endsection
