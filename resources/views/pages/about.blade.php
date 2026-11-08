@extends('layouts.app')

@section('title', __('about.about_us_title'))

@section('content')

@php
    // Contact links (from the site header data)
    // LinkedIn: no address was provided, put your profile URL below.
    $links = [
        ['link_linkedin',  'https://www.linkedin.com/in/arezoo-razavitabar'],
        ['link_email',     'mailto:arezoorazavitabar@gmail.com'],
        ['link_whatsapp',  'https://wa.me/989151509347'],
        ['link_instagram', 'https://instagram.com/arezoo.razavitabar'],
        ['link_telegram',  'https://t.me/+989151509347'],
    ];

    $arrow = '<svg class="w-5 h-5 text-[#DDA24A] rtl:rotate-180" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3"><path d="M3 12h17M14 6l6 6-6 6"/></svg>';
@endphp

<section dir="{{ app()->getLocale() === 'fa' ? 'rtl' : 'ltr' }}" class="bg-[#F6F5F0] text-[#0B3B45] overflow-hidden">

    {{-- 01 — ABOUT --}}
    <div class="grid lg:grid-cols-2">

        <div class="px-1 sm:px-12 lg:px-14 py-14 lg:py-16 flex items-center">
            <div class="max-w-[430px]">
                
                <p class="mt-1 text-[13px] font-medium uppercase tracking-[0.2em] rtl:tracking-normal">{{ __('about.about_label') }}</p>

                <h2 class="mt-7 ltr:font-serif text-[40px] sm:text-5xl lg:text-[54px] leading-[1.12] rtl:leading-[1.4] rtl:font-bold">
                    {{ __('about.hero_title') }}
                </h2>

                <div class="mt-8 space-y-5 text-[15px] leading-[1.75] rtl:leading-[2]">
                    <p>{{ __('about.about_p1') }}</p>
                    <p>{{ __('about.about_p2') }}</p>
                    <p>{{ __('about.about_p3') }}</p>
                </div>
            </div>
        </div>

        <div class="relative min-h-[380px] lg:min-h-[505px]">
            <img src="{{ asset('img/about/about-arezoo.jpg') }}" alt="{{ __('about.about_label') }}"
                 class="absolute inset-0 w-full h-full object-cover">
        </div>

    </div>


    {{-- 02 — PROFESSIONAL JOURNEY --}}
    <div class="px-6 sm:px-12 lg:px-14 pt-14 lg:pt-16 pb-12">

       
        <p class="mt-1 text-[13px] font-medium uppercase tracking-[0.2em] rtl:tracking-normal">{{ __('about.journey_label') }}</p>

        <div class="relative mt-8 grid md:grid-cols-2 lg:grid-cols-4">

            <div class="hidden lg:block absolute top-0 inset-x-0 h-px bg-[#DDA24A]/60"></div>

            @foreach ([1, 2, 3, 4] as $n)
                <div class="relative border-s border-[#DDA24A]/60 ps-6 pb-8 lg:pb-0 lg:pt-7 {{ $n === 1 ? 'lg:border-s-0 lg:ps-0' : '' }}">

                    <span class="absolute top-1 -start-1 w-[8px] h-[8px] rounded-full bg-[#DDA24A]
                                 lg:-top-[3px] {{ $n === 1 ? 'lg:start-0' : '' }}"></span>

                    <h3 class="ltr:font-serif text-[30px] leading-none {{ $n === 4 ? 'text-[#DDA24A] uppercase' : '' }}">
                        {{ __("about.j{$n}_year") }}
                    </h3>

                    <h4 class="mt-5 max-w-[240px] text-[16px] font-medium uppercase leading-[1.6] tracking-[0.06em] rtl:tracking-normal">
                        {{ __("about.j{$n}_title") }}
                    </h4>

                    <p class="mt-4 max-w-[250px] text-[13px] leading-[1.85] rtl:leading-[2] text-[#0B3B45]/80">
                        {{ __("about.j{$n}_desc") }}
                    </p>
                </div>
            @endforeach

        </div>
    </div>


    {{-- 03 — OPEN TO WHAT'S NEXT --}}
  
<div class="grid lg:grid-cols-[51%_31%_18%]">

    {{-- Dark panel --}}
    <div class="bg-[#0B3D44] text-white px-6 sm:px-12 lg:px-14 py-12 lg:py-14">
        <div class="max-w-[430px]">

            <div class="mt-6 space-y-5 text-[14px] leading-[1.75] rtl:leading-[2] text-white/90">
                <p>{{ __('about.open_p1') }}</p>
                <p>{{ __('about.open_p2') }}</p>
            </div>

            <div class="w-9 h-px bg-[#DDA24A] mt-8 mb-5"></div>

            <h3 class="flex items-center gap-3 ltr:font-serif text-[28px] rtl:text-[24px] rtl:font-bold">
                {{ __('about.connect_title') }} {!! $arrow !!}
            </h3>

            {{-- Links --}}
            <div class="mt-7 grid grid-cols-2 gap-x-6 text-[15px]">
                @foreach (array_chunk($links, 3) as $i => $column)
                    <ul class="space-y-4 self-start {{ $i ? 'border-s border-white/60 ps-6 sm:ps-8 pb-4' : '' }}">
                        @foreach ($column as [$label, $href])
                            <li>
                                <a
                                    href="{{ $href }}"
                                    @if (!str_starts_with($href, 'mailto:'))
                                        target="_blank"
                                        rel="noopener noreferrer"
                                    @endif
                                    class="flex max-w-[150px] items-center justify-between hover:text-[#DDA24A] transition-colors"
                                >
                                    {{ __('about.' . $label) }} {!! $arrow !!}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endforeach
            </div>

        </div>
    </div>


    {{-- Image + Side labels --}}
    <div class="lg:contents">

        {{-- Image --}}
        <div class="relative h-[300px] sm:h-[380px] lg:h-full lg:min-h-[500px]">
            <img
                src="{{ asset('img/about/about-new.jfif') }}"
                alt=""
                class="absolute inset-0 w-full h-full object-cover"
            >
        </div>

        {{-- Side labels --}}
        <div class="flex items-center px-6 sm:px-12 py-8 lg:p-0 lg:ps-8">

            <div
                class="flex flex-wrap items-center gap-x-6 gap-y-3 text-[15px] uppercase leading-[1.9] tracking-[0.2em] rtl:tracking-normal
                       lg:flex-col lg:items-start lg:gap-0 lg:border-s lg:border-[#DDA24A]/70 lg:ps-6"
            >

                <span class="max-w-[130px]">
                    {{ __('about.tag_design') }}
                </span>

                <span class="hidden lg:block w-4 h-px bg-[#DDA24A] my-6"></span>

                <span class="max-w-[130px]">
                    {{ __('about.tag_technical') }}
                </span>

                <span class="hidden lg:block w-4 h-px bg-[#DDA24A] my-6"></span>

                <span class="max-w-[130px]">
                    {{ __('about.tag_reality') }}
                </span>

            </div>

        </div>

    </div>

</div>

</section>

@endsection