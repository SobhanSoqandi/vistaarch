@extends('layouts.app')

@section('title', __('contact.page_title'))

@section('content')


<!-- ================= CONTACT HERO ================= -->
<section
    dir="rtl"
    class="relative isolate overflow-hidden bg-gradient-to-b from-teal-950 via-teal-900 to-teal-800 pb-24 pt-16 [font-family:'Vazirmatn',sans-serif] sm:pb-28 sm:pt-20">

    <!-- گرید خط‌کشیِ نقشه (بلوپرینت) -->
    <div class="absolute inset-0 opacity-[0.06] [background-image:linear-gradient(#F6F2E7_1px,transparent_1px),linear-gradient(90deg,#F6F2E7_1px,transparent_1px)] [background-size:48px_48px]"></div>

    <!-- خط طلایی بالای سکشن -->
    <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-l from-transparent via-amber-300 to-transparent"></div>

    <!-- نور محیطی -->
    <div class="pointer-events-none absolute -top-32 -end-32 h-96 w-96 rounded-full bg-amber-300/10 blur-[100px]"></div>
    <div class="pointer-events-none absolute -bottom-40 -start-24 h-80 w-80 rounded-full bg-teal-400/10 blur-[100px]"></div>

    <div class="relative mx-auto max-w-7xl px-6">

        <div class="mt-8 text-center">

            <span class="inline-flex items-center gap-3 text-xs font-bold uppercase tracking-[0.35em] text-amber-300">
                <span class="h-px w-8 bg-amber-300"></span>
                {{ __('contact.contact_info') }}
                <span class="h-px w-8 bg-amber-300"></span>
            </span>

            <h1 class="mx-auto mt-6 max-w-3xl text-4xl font-black leading-[1.15] text-[#F6F2E7] md:text-6xl">
                {{ __('contact.hero_title') }}
            </h1>

            <p class="mx-auto mt-5 max-w-2xl leading-8 text-[#F6F2E7]/60">
                {{ __('contact.hero_desc') }}
            </p>

            <!-- چیپ‌های اطلاعات تماس -->
            <div class="mt-10 flex flex-wrap items-center justify-center gap-3">

                <a href="tel:{{ __('contact.phone') }}"
                    class="group flex items-center gap-3 rounded-full border border-[#F6F2E7]/10 bg-[#F6F2E7]/5 px-5 py-3 backdrop-blur transition hover:border-amber-300/40 hover:bg-amber-300/10">
                    <span class="flex h-8 w-8 items-center justify-center rounded-full bg-amber-300/15 text-amber-400 transition group-hover:bg-amber-300 group-hover:text-teal-950">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h1.5a2.25 2.25 0 002.25-2.25v-1.372a1 1 0 00-.804-.98l-4.334-.866a1 1 0 00-1.02.462l-.797 1.329a1 1 0 01-1.21.428 12.035 12.035 0 01-6.386-6.386 1 1 0 01.428-1.21l1.329-.797a1 1 0 00.462-1.02L7.902 3.054a1 1 0 00-.98-.804H5.25A2.25 2.25 0 003 4.5v.75"/>
                        </svg>
                    </span>
                    <span class="text-sm font-semibold text-[#F6F2E7]" dir="ltr">{{ __('contact.phone') }}</span>
                </a>

                <a href="mailto:{{ __('contact.email') }}"
                    class="group flex items-center gap-3 rounded-full border border-[#F6F2E7]/10 bg-[#F6F2E7]/5 px-5 py-3 backdrop-blur transition hover:border-amber-300/40 hover:bg-amber-300/10">
                    <span class="flex h-8 w-8 items-center justify-center rounded-full bg-amber-300/15 text-amber-400 transition group-hover:bg-amber-300 group-hover:text-teal-950">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0-.966.784-1.75 1.75-1.75h16c.966 0 1.75.784 1.75 1.75v10.5A1.75 1.75 0 0120 19H4a1.75 1.75 0 01-1.75-1.75V6.75z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 7l9 6 9-6"/>
                        </svg>
                    </span>
                    <span class="text-sm font-semibold text-[#F6F2E7]" dir="ltr">{{ __('contact.email') }}</span>
                </a>

                <span class="group flex items-center gap-3 rounded-full border border-[#F6F2E7]/10 bg-[#F6F2E7]/5 px-5 py-3 backdrop-blur">
                    <span class="flex h-8 w-8 items-center justify-center rounded-full bg-amber-300/15 text-amber-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                        </svg>
                    </span>
                    <span class="text-sm font-semibold text-[#F6F2E7]">{{ __('contact.address') }}</span>
                </span>

            </div>

        </div>
    </div>

    <!-- موج پایین برای اتصال به سکشن بعدی -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80" preserveAspectRatio="none" class="absolute inset-x-0 bottom-0 h-16 w-full">
        <path fill="#F6F2E7" d="M0,32 C240,80 480,0 720,16 C960,32 1200,80 1440,32 L1440,80 L0,80 Z"/>
    </svg>

</section>


@if(app()->getLocale() === 'fa')

<section class="py-20 bg-white">

    <div dir="ltr" class="max-w-7xl mx-auto">

        <div class="swiper contact overflow-hidden ">

            <div class="swiper-wrapper">

            
                <div class="swiper-slide">

                    <div>
                        <img src="{{ asset('img/landing/contact-1.jpg') }}"
                            class="w-full h-full object-cover">
                    </div>

                </div>

            
                <div class="swiper-slide">

                    <div>
                        <img src="{{ asset('img/landing/contact-2.jpg') }}"
                            class="w-full h-full object-cover">

                    </div>
                </div>

              
                <div class="swiper-slide">

                    <div>
                        <img src="{{ asset('img/landing/contact-3.jpg') }}"
                            class="w-full h-full object-cover">

                    </div>
                </div>


               
                <div class="swiper-slide">

                    <div>
                        <img src="{{ asset('img/landing/contact-4.jpg') }}"
                            class="w-full h-full object-cover">

                    </div>
                </div>

            </div>

        </div>

    </div>

</section>

@endif


    <!-- ================= CONTACT INFO ================= -->

<section class="py-24 bg-slate-50">

    <div class="max-w-7xl mx-auto px-4">

        <div class="text-center mb-16">

            <span class="text-slate-500">
                {{ __('contact.contact_info') }}
            </span>

            <h2 class="text-4xl font-bold mt-3">
                {{ __('contact.communication_title') }}
            </h2>

        </div>

        <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">

    <!-- Phone -->
    <div
        class="group rounded-3xl border border-slate-200 bg-white p-8 transition-all duration-500 hover:-translate-y-2 hover:border-slate-900 hover:shadow-2xl">

        <div
            class="mb-6 flex h-16 w-16 items-center justify-center rounded-2xl bg-slate-100 transition-all duration-500 group-hover:bg-teal-700">

            <svg xmlns="http://www.w3.org/2000/svg"
                class="h-7 w-7 text-slate-700 transition group-hover:text-white"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="1.8">
                <path stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M2.25 6.75c0 8.146 6.604 14.75 14.75 14.75h2.25a1 1 0 001-1v-3.273a1 1 0 00-.738-.965l-3.43-.858a1 1 0 00-.98.287l-.752.94a1 1 0 01-1.14.29 12.035 12.035 0 01-7.16-7.16 1 1 0 01.29-1.14l.94-.752a1 1 0 00.287-.98l-.858-3.43A1 1 0 006.523 3.75H3.25a1 1 0 00-1 1v2z" />
            </svg>

        </div>

        <h3 class="mb-4 text-xl font-bold text-slate-900">
            {{ __('contact.phone_title') }}
        </h3>

        <div class="space-y-2">

            <a href="tel:09151509347"
                class="block text-slate-600 transition hover:text-slate-900">
                09151509347
            </a>

            <a href="tel:09399101282"
                class="block text-slate-600 transition hover:text-slate-900">
                09399101282
            </a>

        </div>

    </div>

    <!-- Email -->
    <div
        class="group rounded-3xl border border-slate-200 bg-white p-8 transition-all duration-500 hover:-translate-y-2 hover:border-blue-600 hover:shadow-2xl">

        <div
            class="mb-6 flex h-16 w-16 items-center justify-center rounded-2xl bg-slate-100 transition-all duration-500 group-hover:bg-blue-600">

            <svg xmlns="http://www.w3.org/2000/svg"
                class="h-7 w-7 text-slate-700 transition group-hover:text-white"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="1.8">

                <path stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M21.75 7.5v9.75A2.25 2.25 0 0119.5 19.5h-15A2.25 2.25 0 012.25 17.25V7.5m19.5 0L12 13.5 2.25 7.5m19.5 0A2.25 2.25 0 0019.5 5.25h-15A2.25 2.25 0 002.25 7.5" />

            </svg>

        </div>

        <h3 class="mb-4 text-xl font-bold text-slate-900">
            {{ __('contact.email_title') }}
        </h3>

        <a href="mailto:Arezoorazavitabar@gmail.com"
            class="break-all text-slate-600 transition hover:text-slate-900">

            Arezoorazavitabar@gmail.com

        </a>

    </div>

    <!-- Instagram -->
    <div
        class="group rounded-3xl border border-slate-200 bg-white p-8 transition-all duration-500 hover:-translate-y-2 hover:border-rose-600 hover:shadow-2xl">

        <div
            class="mb-6 flex h-16 w-16 items-center justify-center rounded-2xl bg-slate-100 transition-all duration-500 group-hover:bg-rose-500">

            <svg xmlns="http://www.w3.org/2000/svg"
                class="h-7 w-7 text-slate-700 transition group-hover:text-white"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="1.8">

                <rect x="3" y="3" width="18" height="18" rx="5" />
                <circle cx="12" cy="12" r="4" />
                <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/>

            </svg>

        </div>

        <h3 class="mb-4 text-xl font-bold text-slate-900">
            {{ __('contact.instagram_title') }}
        </h3>

        <a href="https://instagram.com/arezoo.razavitabar"
            target="_blank"
            class="text-slate-600 transition hover:text-slate-900">

            @arezoo.razavitabar

        </a>

    </div>

    <!-- Address -->
    <div
        class="group rounded-3xl border border-slate-200 bg-white p-8 transition-all duration-500 hover:-translate-y-2 hover:border-amber-300 hover:shadow-2xl">

        <div
            class="mb-6 flex h-16 w-16 items-center justify-center rounded-2xl bg-slate-100 transition-all duration-500 group-hover:bg-amber-300">

            <svg xmlns="http://www.w3.org/2000/svg"
                class="h-7 w-7 text-slate-700 transition group-hover:text-white"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="1.8">

                <path stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 21s7-4.5 7-11a7 7 0 10-14 0c0 6.5 7 11 7 11z"/>

                <circle cx="12" cy="10" r="2.5"/>

            </svg>

        </div>

        <h3 class="mb-4 text-xl font-bold text-slate-900">
            {{ __('contact.address_title') }}
        </h3>

        <p class="leading-8 text-slate-600">
            {{ __('contact.address') }}
        </p>

    </div>

</div>
       
    </div>

</section>

    <!-- ================= MAP ================= -->

    <section class="pb-24 bg-slate-50">


        <div class="max-w-5xl mx-auto px-4">

            <div class="bg-white rounded-[40px] overflow-hidden shadow-2xl">

                <iframe src="https://maps.google.com/maps?q=36.2078372969294,58.79455155169288&z=15&output=embed"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">

                </iframe>

            </div>

        </div>


    </section>


    @include("home.sections.faq")


@endsection
