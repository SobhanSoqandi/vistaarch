
@extends('layouts.app')

@section('title', app()->getLocale() === 'fa' ? $project->title : $project->slug)

@section('content')

@php
    $fa = app()->getLocale() === 'fa';
    $dir = $fa ? 'rtl' : 'ltr';
    $t = $fa ? $project->title : $project->slug;
    $desc = $fa ? $project->description : $project->summary;
    $projectNumber = str_pad((string) $project->id, 3, '0', STR_PAD_LEFT);
    $projectImages = $project->images;
@endphp

{{-- =========================================================
     HERO SECTION
========================================================= --}}

<section dir="{{ $dir }}" class="relative isolate overflow-hidden bg-[#071D19] text-white">

    @if ($project->cover_image)
        <img
            src="{{ asset('storage/' . $project->cover_image) }}"
            alt="{{ $t }}"
            fetchpriority="high"
            class="absolute inset-0 h-full w-full object-cover object-center"
        >
    @endif

    <div class="absolute inset-0 bg-[#041713]/75"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-[#041713]/95 via-[#06251E]/80 to-[#06251E]/35"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-[#041713] via-transparent to-[#041713]/40"></div>

    {{-- Architectural Grid --}}
    <div class="pointer-events-none absolute inset-0 opacity-[0.09] [background-image:linear-gradient(rgba(220,190,124,0.5)_1px,transparent_1px),linear-gradient(90deg,rgba(220,190,124,0.5)_1px,transparent_1px)] [background-size:64px_64px]"></div>

    {{-- Decorative Elements --}}
    <div class="pointer-events-none absolute inset-y-0 start-[6%] hidden w-px bg-gradient-to-b from-transparent via-[#D8BB79]/40 to-transparent lg:block"></div>
    <div class="pointer-events-none absolute inset-y-0 end-[6%] hidden w-px bg-gradient-to-b from-transparent via-[#D8BB79]/25 to-transparent lg:block"></div>
    <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-[#D8BB79] to-transparent"></div>

    <div class="relative container mx-auto px-4 pb-12 pt-24 sm:px-6 sm:pb-16 sm:pt-28 lg:px-8 lg:pb-20 lg:pt-36">

        <div class="mx-auto max-w-7xl">

            {{-- Breadcrumb / Eyebrow --}}
            <div class="mb-10 flex flex-wrap items-center gap-3 sm:mb-14">
                <a
                    href="{{ route('projects.list', ['locale' => app()->getLocale()]) }}"
                    class="inline-flex items-center gap-2 text-xs font-medium text-white/65 transition-colors duration-300 hover:text-[#E6D3A6]"
                >
                    <svg class="h-4 w-4 {{ $fa ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M15 19l-7-7 7-7"/>
                    </svg>
                    {{ $fa ? 'همه پروژه‌ها' : 'All Projects' }}
                </a>

                <span class="h-1 w-1 rounded-full bg-[#D8BB79]/70"></span>

                <span class="text-[10px] font-semibold uppercase tracking-[0.2em] text-[#E6D3A6] sm:text-xs sm:tracking-[0.28em]">
                    {{ $fa ? 'پروژه‌های منتخب معماری' : 'SELECTED ARCHITECTURE PROJECTS' }}
                </span>
            </div>

            <div class="grid items-end gap-10 lg:grid-cols-[minmax(0,1fr)_220px] lg:gap-16">

                {{-- Main Content --}}
                <div class="min-w-0">

                    <div class="mb-5 flex items-center gap-3 text-[#E6D3A6] sm:mb-7">
                        <span class="h-px w-8 bg-[#D8BB79] sm:w-12"></span>

                        <span class="text-[10px] font-semibold uppercase tracking-[0.2em] sm:text-xs sm:tracking-[0.25em]">
                            {{ $fa ? 'شناسه پروژه' : 'PROJECT REFERENCE' }}
                        </span>

                        <span class="font-mono text-xs tracking-[0.2em] sm:text-sm">
                            {{ $projectNumber }}
                        </span>
                    </div>

                    <h1 class="max-w-5xl break-words text-3xl font-black leading-[1.7] tracking-tight text-white sm:text-5xl sm:leading-[1.45] lg:text-7xl lg:leading-[1.35]">
                        {{ $t }}
                    </h1>

                    <div class="mt-7 flex items-center gap-2 sm:mt-9">
                        <span class="h-1 w-14 rounded-full bg-[#D8BB79] sm:w-20"></span>
                        <span class="h-1 w-5 rounded-full bg-[#D8BB79]/50"></span>
                        <span class="h-1 w-2 rounded-full bg-[#D8BB79]/25"></span>
                    </div>

                    {{-- Project Tags --}}
                    <div class="mt-8 flex flex-wrap items-center gap-2.5 sm:gap-3">

                        @if ($project->service)
                            <span class="inline-flex items-center gap-2.5 rounded-xl border border-[#D8BB79]/35 bg-[#D8BB79]/10 px-3.5 py-2.5 text-xs font-semibold text-[#F3E7C7] shadow-lg backdrop-blur-xl transition-colors duration-300 hover:bg-[#D8BB79]/20 sm:px-4 sm:text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" class="h-4 w-4 shrink-0 text-[#D8BB79]" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 21h18M5 21V9l7-5 7 5v12M9 21v-6h6v6"/>
                                </svg>
                                {{ $fa ? $project->service->title : $project->service->slug }}
                            </span>
                        @endif

                        @if ($project->style)
                            <span class="inline-flex items-center gap-2.5 rounded-xl border border-white/15 bg-white/[0.07] px-3.5 py-2.5 text-xs font-medium text-white/90 backdrop-blur-xl transition-colors duration-300 hover:bg-white/[0.12] sm:px-4 sm:text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" class="h-4 w-4 shrink-0 text-[#D8BB79]" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m12 3 8 4.5v9L12 21l-8-4.5v-9L12 3Z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 7.8 7.5 4.4 7.5-4.4M12 12.2V21"/>
                                </svg>
                                {{ $fa ? $project->style->title : $project->style->slug }}
                            </span>
                        @endif

                        @if ($project->year)
                            <span class="inline-flex items-center gap-2.5 rounded-xl border border-white/10 bg-black/20 px-3.5 py-2.5 text-xs font-medium text-white/85 backdrop-blur-xl sm:px-4 sm:text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" class="h-4 w-4 shrink-0 text-[#D8BB79]" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 3v3m8-3v3M4 9h16M5 5h14a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z"/>
                                </svg>
                                {{ $project->year }}
                            </span>
                        @endif

                    </div>
                </div>

                {{-- Project Number Accent --}}
                <div class="hidden border-s border-white/15 pb-2 ps-7 lg:block">
                    <span class="block font-mono text-8xl font-light leading-none tracking-tighter text-white/15">
                        {{ str_pad((string) $project->id, 2, '0', STR_PAD_LEFT) }}
                    </span>

                    <span class="mt-5 block text-[10px] font-semibold uppercase leading-6 tracking-[0.22em] text-[#D8BB79]/80">
                        {{ $fa ? 'معماری و طراحی' : 'ARCHITECTURE & DESIGN' }}
                    </span>

                    <span class="mt-6 block h-px w-16 bg-[#D8BB79]/60"></span>
                </div>

            </div>

            {{-- Hero Footer --}}
            <div class="mt-14 flex items-center gap-4 border-t border-white/15 pt-5 sm:mt-20 sm:pt-6">
                <span class="h-2 w-2 shrink-0 rotate-45 bg-[#D8BB79]"></span>

                <span class="text-[10px] font-medium uppercase tracking-[0.16em] text-white/50 sm:text-xs sm:tracking-[0.22em]">
                    {{ $fa ? 'نگاهی دقیق‌تر به جزئیات پروژه' : 'EXPLORE THE PROJECT DETAILS' }}
                </span>

                <span class="h-px flex-1 bg-gradient-to-r from-white/15 to-transparent"></span>

                @if ($projectImages->count())
                    <span class="shrink-0 font-mono text-xs tracking-widest text-white/60">
                        {{ str_pad((string) $projectImages->count(), 2, '0', STR_PAD_LEFT) }}
                        <span class="mx-1 text-[#D8BB79]">/</span>
                        <span class="text-white/40">{{ $fa ? 'تصویر' : 'IMAGES' }}</span>
                    </span>
                @endif
            </div>

        </div>
    </div>
</section>


{{-- =========================================================
     PROJECT INFORMATION
========================================================= --}}

<section dir="{{ $dir }}" class="relative overflow-hidden border-b border-slate-200/70 bg-[#FAFAF8] py-14 sm:py-20 lg:py-24">

    <div class="pointer-events-none absolute -end-32 top-0 h-80 w-80 rounded-full bg-teal-900/[0.035] blur-3xl"></div>

    <div class="relative container mx-auto px-4 sm:px-6 lg:px-8">

        <div class="mx-auto max-w-7xl">

            {{-- Section Heading --}}
            <div class="mb-8 flex flex-col gap-3 sm:mb-10 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <span class="mb-3 block text-[10px] font-bold uppercase tracking-[0.25em] text-teal-800/65 sm:text-xs">
                        {{ $fa ? 'شناسنامه پروژه' : 'PROJECT OVERVIEW' }}
                    </span>

                    <h2 class="text-2xl font-black tracking-tight text-[#18352E] sm:text-3xl">
                        {{ $fa ? 'مشخصات پروژه' : 'Project Information' }}
                    </h2>
                </div>

                <span class="hidden h-px max-w-xs flex-1 bg-gradient-to-r from-teal-900/20 to-transparent sm:block"></span>
            </div>

            {{-- Information Cards --}}
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-4">

               
@if ($project->company)
    <div class="group rounded-2xl border border-slate-200/80 bg-white p-5 text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-xl sm:p-6">
        <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-[#EAF1EE] text-[#24584A] transition-colors duration-300 group-hover:bg-[#183F34] group-hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 21h18M5 21V7l7-4 7 4v14M9 9h.01M15 9h.01M9 13h.01M15 13h.01M9 17h.01M15 17h.01"/>
            </svg>
        </div>
        <p class="text-xs uppercase tracking-widest text-slate-400">{{ $fa ? 'شرکت' : 'Company' }}</p>
        <p class="mt-2 break-words font-bold leading-7 text-slate-800">{{ $project->company->name }}</p>
    </div>
@endif

@if ($project->year)
    <div class="group rounded-2xl border border-slate-200/80 bg-white p-5 text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-xl sm:p-6">
        <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-[#EAF1EE] text-[#24584A] transition-colors duration-300 group-hover:bg-[#183F34] group-hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3M4 11h16M5 5h14a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1z"/>
            </svg>
        </div>
        <p class="text-xs uppercase tracking-widest text-slate-400">{{ $fa ? 'سال اجرا' : 'Year' }}</p>
        <p class="mt-2 font-bold leading-7 text-slate-800">{{ $project->year }}</p>
    </div>
@endif

@if ($project->area)
    <div class="group rounded-2xl border border-slate-200/80 bg-white p-5 text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-xl sm:p-6">
        <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-[#EAF1EE] text-[#24584A] transition-colors duration-300 group-hover:bg-[#183F34] group-hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 14c-4.418 0-8 2.015-8 4.5V21h16v-2.5c0-2.485-3.582-4.5-8-4.5z"/>
            </svg>
        </div>
        <p class="text-xs uppercase tracking-widest text-slate-400">{{ $fa ? 'کارفرما' : 'Client' }}</p>
        <p class="mt-2 break-words font-bold leading-7 text-slate-800">{{ $project->area }}</p>
    </div>
@endif

@if ($project->location)
    <div class="group rounded-2xl border border-slate-200/80 bg-white p-5 text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-xl sm:p-6">
        <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-[#EAF1EE] text-[#24584A] transition-colors duration-300 group-hover:bg-[#183F34] group-hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
        </div>
        <p class="text-xs uppercase tracking-widest text-slate-400">{{ $fa ? 'موقعیت' : 'Location' }}</p>
        <p class="mt-2 break-words font-bold leading-7 text-slate-800">{{ $project->location }}</p>
    </div>
@endif


            </div>

            {{-- Project Description --}}
            @if ($desc)
                <div class="mt-6 overflow-hidden rounded-3xl border border-slate-200/80 bg-white shadow-sm sm:mt-8">
                    <div class="grid lg:grid-cols-[220px_minmax(0,1fr)]">

                        <div class="relative overflow-hidden bg-[#153D32] px-6 py-7 text-white sm:px-8 lg:px-7">
                            <div class="pointer-events-none absolute -end-10 -top-10 h-32 w-32 rounded-full border border-white/10"></div>
                            <div class="pointer-events-none absolute -end-4 -top-4 h-20 w-20 rounded-full border border-[#D8BB79]/25"></div>

                            <div class="relative">
                                <span class="mb-5 flex h-10 w-10 items-center justify-center rounded-xl border border-[#D8BB79]/30 bg-white/5 text-[#D8BB79]">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.6" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01"/>
                                    </svg>
                                </span>

                                <p class="text-[10px] font-semibold uppercase tracking-[0.2em] text-[#D8BB79]">
                                    {{ $fa ? 'درباره پروژه' : 'ABOUT PROJECT' }}
                                </p>

                                <h2 class="mt-3 text-xl font-bold leading-9 text-white">
                                    {{ $fa ? 'توضیحات پروژه' : 'Project Description' }}
                                </h2>

                                <span class="mt-5 block h-px w-12 bg-[#D8BB79]/70"></span>
                            </div>
                        </div>

                        <div class="min-w-0 px-6 py-7 sm:px-8 sm:py-9 lg:px-10">
                            <div class="text-sm leading-8 text-slate-600 sm:text-base sm:leading-9">
                                {!! nl2br(e($desc)) !!}
                            </div>
                        </div>

                    </div>
                </div>
            @endif

        </div>
    </div>
</section>


{{-- =========================================================
     PROJECT IMAGE SLIDER
========================================================= --}}

@if ($projectImages->count())

    <section dir="{{ $dir }}" class="relative overflow-hidden bg-[#F3F5F2] py-14 sm:py-20 lg:py-24">

        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-7xl">

                {{-- Gallery Heading --}}
                <div class="mb-7 flex flex-col gap-4 sm:mb-10 sm:flex-row sm:items-end sm:justify-between">

                    <div>
                        <span class="mb-3 block text-[10px] font-bold uppercase tracking-[0.25em] text-teal-800/65 sm:text-xs">
                            {{ $fa ? 'روایت تصویری' : 'VISUAL STORY' }}
                        </span>

                        <h2 class="text-2xl font-black tracking-tight text-[#18352E] sm:text-3xl lg:text-4xl">
                            {{ $fa ? 'نگاهی از نزدیک' : 'A Closer Look' }}
                        </h2>

                        <p class="mt-3 max-w-xl text-sm leading-7 text-slate-500 sm:text-base">
                            {{ $fa ? 'جزئیات و نماهای مختلف این پروژه را در تصاویر زیر مشاهده کنید.' : 'Explore the details and different views of this project through the images below.' }}
                        </p>
                    </div>

                    <div class="flex items-center gap-3 self-start rounded-2xl border border-slate-200/80 bg-white px-4 py-3 sm:self-auto">
                        <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#EAF1EE] text-[#24584A]">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.6" aria-hidden="true">
                                <rect x="3" y="3" width="7" height="7" rx="1"/>
                                <rect x="14" y="3" width="7" height="7" rx="1"/>
                                <rect x="3" y="14" width="7" height="7" rx="1"/>
                                <rect x="14" y="14" width="7" height="7" rx="1"/>
                            </svg>
                        </span>

                        <div>
                            <p class="text-xs text-slate-400">
                                {{ $fa ? 'تعداد تصاویر' : 'Total Images' }}
                            </p>
                            <p class="mt-1 font-mono text-lg font-bold text-[#18352E]">
                                {{ str_pad((string) $projectImages->count(), 2, '0', STR_PAD_LEFT) }}
                            </p>
                        </div>
                    </div>

                </div>

                {{-- Main Slider --}}
                <div class="group relative">

                    <div class="projectSwiper swiper overflow-hidden rounded-2xl border border-white shadow-xl shadow-slate-900/10 sm:rounded-3xl lg:rounded-[2rem]">
                        <div class="swiper-wrapper">

                            @foreach ($projectImages as $image)
                                <div class="swiper-slide">
                                    <div class="relative h-[300px] overflow-hidden bg-[#142923] sm:h-[450px] lg:h-[650px]">

                                        <img
                                            src="{{ asset('storage/' . $image->image_path) }}"
                                            alt="{{ $image->alt_text ?? $t }}"
                                            loading="{{ $loop->first ? 'eager' : 'lazy' }}"
                                            class="h-full w-full object-cover"
                                        >

                                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/10 to-transparent"></div>
                                        <div class="absolute inset-0 bg-gradient-to-r from-black/20 via-transparent to-transparent"></div>

                                        {{-- Slide Number --}}
                                        <div class="absolute top-5 start-5 flex items-center gap-3 rounded-xl border border-white/20 bg-black/25 px-3.5 py-2.5 text-white backdrop-blur-md sm:top-7 sm:start-7 sm:px-4">
                                            <span class="font-mono text-sm font-semibold">
                                                {{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}
                                            </span>
                                            <span class="h-4 w-px bg-white/30"></span>
                                            <span class="font-mono text-xs text-white/65">
                                                {{ str_pad((string) $projectImages->count(), 2, '0', STR_PAD_LEFT) }}
                                            </span>
                                        </div>

                                        {{-- Image Caption --}}
                                        @if ($image->title || $image->description)
                                            <div class="absolute inset-x-0 bottom-0 p-5 sm:p-8 lg:p-12">
                                                <div class="max-w-3xl text-white">

                                                    @if ($image->title)
                                                        <h3 class="text-xl font-bold leading-9 sm:text-3xl sm:leading-[1.7] lg:text-4xl">
                                                            {{ $image->title }}
                                                        </h3>
                                                    @endif

                                                    @if ($image->description)
                                                        <p class="mt-2 max-w-2xl text-xs leading-7 text-white/75 sm:mt-3 sm:text-sm sm:leading-8 lg:text-base">
                                                            {{ $image->description }}
                                                        </p>
                                                    @endif

                                                    <span class="mt-5 block h-0.5 w-12 bg-[#D8BB79] sm:mt-7"></span>
                                                </div>
                                            </div>
                                        @endif

                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    {{-- Slider Controls --}}
                    <button
                        type="button"
                        class="project-prev absolute start-3 top-1/2 z-20 flex h-10 w-10 -translate-y-1/2 items-center justify-center rounded-xl border border-white/60 bg-white/90 text-[#18352E] shadow-lg backdrop-blur transition-all duration-300 hover:scale-105 hover:bg-[#183F34] hover:text-white focus:outline-none focus:ring-2 focus:ring-[#D8BB79] sm:start-5 sm:h-12 sm:w-12 sm:rounded-2xl lg:start-7 lg:h-14 lg:w-14"
                        aria-label="{{ $fa ? 'تصویر قبلی' : 'Previous image' }}"
                    >
                        <svg class="h-5 w-5 {{ $fa ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m15 18-6-6 6-6"/>
                        </svg>
                    </button>

                    <button
                        type="button"
                        class="project-next absolute end-3 top-1/2 z-20 flex h-10 w-10 -translate-y-1/2 items-center justify-center rounded-xl border border-white/60 bg-white/90 text-[#18352E] shadow-lg backdrop-blur transition-all duration-300 hover:scale-105 hover:bg-[#183F34] hover:text-white focus:outline-none focus:ring-2 focus:ring-[#D8BB79] sm:end-5 sm:h-12 sm:w-12 sm:rounded-2xl lg:end-7 lg:h-14 lg:w-14"
                        aria-label="{{ $fa ? 'تصویر بعدی' : 'Next image' }}"
                    >
                        <svg class="h-5 w-5 {{ $fa ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6"/>
                        </svg>
                    </button>

                </div>

                {{-- Thumbnail Slider --}}
                @if ($projectImages->count() > 1)
                    <div class="mt-4 rounded-2xl border border-slate-200/80 bg-white p-2.5 sm:mt-5 sm:rounded-3xl sm:p-3">
                        <div class="projectThumbs swiper">
                            <div class="swiper-wrapper">

                                @foreach ($projectImages as $image)
                                    <div class="swiper-slide cursor-pointer">
                                        <div class="group/thumb relative overflow-hidden rounded-xl border-2 border-transparent bg-slate-100 transition-all duration-300">
                                            <img
                                                src="{{ asset('storage/' . $image->image_path) }}"
                                                alt="{{ $image->alt_text ?? $t }}"
                                                loading="lazy"
                                                class="h-16 w-full object-cover transition duration-500 group-hover/thumb:scale-110 sm:h-24 lg:h-28"
                                            >
                                            <div class="absolute inset-0 bg-[#153D32]/10 transition-colors duration-300 group-hover/thumb:bg-transparent"></div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </section>


    {{-- =====================================================
         IMAGE GALLERY
    ====================================================== --}}

    <section dir="{{ $dir }}" class="bg-white py-14 sm:py-20 lg:py-24">

        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-7xl">

                {{-- Gallery Header --}}
                <div class="mb-8 flex flex-col gap-5 sm:mb-10 sm:flex-row sm:items-end sm:justify-between">

                    <div>
                        <span class="mb-3 block text-[10px] font-bold uppercase tracking-[0.25em] text-teal-800/65 sm:text-xs">
                            {{ $fa ? 'آرشیو پروژه' : 'PROJECT ARCHIVE' }}
                        </span>

                        <h2 class="text-2xl font-black tracking-tight text-[#18352E] sm:text-3xl lg:text-4xl">
                            {{ $fa ? 'گالری تصاویر' : 'Image Gallery' }}
                        </h2>

                        <p class="mt-3 text-sm leading-7 text-slate-500 sm:text-base">
                            {{ $fa ? 'برای مشاهده جزئیات هر تصویر، آن را انتخاب کنید.' : 'Select an image to explore it in detail.' }}
                        </p>
                    </div>

                    <div class="inline-flex items-center gap-2.5 self-start rounded-xl bg-[#F3F5F2] px-4 py-3 text-xs font-medium text-slate-600 sm:self-auto">
                        <svg class="h-4 w-4 text-[#A88B4D]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.7" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 3h6v6M14 10l7-7M5 7H3v14h14v-2"/>
                        </svg>
                        {{ $fa ? 'بزرگ‌نمایی تصاویر' : 'Explore images' }}
                    </div>

                </div>

                {{-- Gallery Grid --}}
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 xl:grid-cols-4">

                    @foreach ($projectImages as $image)
                        <button
                            type="button"
                            class="group relative block w-full overflow-hidden rounded-2xl border border-slate-200/70 bg-[#F3F5F2] text-start shadow-sm transition-all duration-500 hover:-translate-y-1 hover:shadow-xl hover:shadow-slate-900/10 focus:outline-none focus:ring-2 focus:ring-[#C6A96C] focus:ring-offset-4"
                            onclick="openLightbox(@js(asset('storage/' . $image->image_path)), @js($image->title ?? $t))"
                            aria-label="{{ $fa ? 'نمایش تصویر ' . $loop->iteration : 'View image ' . $loop->iteration }}"
                        >

                            <div class="relative aspect-[4/3] overflow-hidden sm:aspect-[5/4]">

                                <img
                                    src="{{ asset('storage/' . $image->image_path) }}"
                                    alt="{{ $image->alt_text ?? $t }}"
                                    loading="lazy"
                                    class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                                >

                                <div class="absolute inset-0 bg-gradient-to-t from-[#061C17]/80 via-[#061C17]/0 to-transparent opacity-70 transition-opacity duration-500 group-hover:opacity-100"></div>

                                {{-- Image Index --}}
                                <div class="absolute top-3 start-3 flex h-9 min-w-9 items-center justify-center rounded-lg border border-white/25 bg-black/30 px-2 font-mono text-xs text-white backdrop-blur-md">
                                    {{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}
                                </div>

                                {{-- Zoom Icon --}}
                                <div class="absolute top-3 end-3 flex h-9 w-9 translate-y-1 items-center justify-center rounded-lg border border-white/20 bg-black/30 text-white opacity-0 backdrop-blur-md transition-all duration-300 group-hover:translate-y-0 group-hover:opacity-100">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8" aria-hidden="true">
                                        <circle cx="10.5" cy="10.5" r="6.5"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16 16 5 5M10.5 8v5m-2.5-2.5h5"/>
                                    </svg>
                                </div>

                                {{-- Image Details --}}
                                @if ($image->title || $image->description)
                                    <div class="absolute inset-x-0 bottom-0 p-4 sm:p-5">
                                        @if ($image->title)
                                            <h3 class="line-clamp-2 text-sm font-bold leading-7 text-white sm:text-base">
                                                {{ $image->title }}
                                            </h3>
                                        @endif

                                        @if ($image->description)
                                            <p class="mt-1 line-clamp-2 text-xs leading-6 text-white/70">
                                                {{ $image->description }}
                                            </p>
                                        @endif

                                        <span class="mt-3 block h-0.5 w-0 bg-[#D8BB79] transition-all duration-500 group-hover:w-10"></span>
                                    </div>
                                @endif

                            </div>
                        </button>
                    @endforeach

                </div>

            </div>
        </div>
    </section>

@endif


{{-- =========================================================
     BACK TO PROJECTS
========================================================= --}}

<section dir="{{ $dir }}" class="relative overflow-hidden border-t border-slate-200/70 bg-[#F3F5F2] py-14 sm:py-20">

    <div class="pointer-events-none absolute -start-20 -top-24 h-64 w-64 rounded-full border border-teal-900/[0.06]"></div>
    <div class="pointer-events-none absolute -start-10 -top-14 h-44 w-44 rounded-full border border-teal-900/[0.06]"></div>

    <div class="relative container mx-auto px-4 text-center sm:px-6">

        <span class="mx-auto mb-5 flex h-12 w-12 items-center justify-center rounded-2xl border border-[#D8BB79]/40 bg-white text-[#A88B4D] shadow-sm">
            <svg class="h-5 w-5 {{ $fa ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.7" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 18l-6-6 6-6"/>
            </svg>
        </span>

        <h2 class="text-xl font-black text-[#18352E] sm:text-2xl">
            {{ $fa ? 'به دنبال پروژه‌ای دیگر هستید؟' : 'Looking for another project?' }}
        </h2>

        <p class="mx-auto mt-3 max-w-lg text-sm leading-7 text-slate-500 sm:text-base">
            {{ $fa ? 'به مجموعه پروژه‌های معماری بازگردید و نمونه‌های دیگر را بررسی کنید.' : 'Return to our architecture projects and discover more work.' }}
        </p>

        <a
            href="{{ route('projects.list', ['locale' => app()->getLocale()]) }}"
            class="group mt-7 inline-flex items-center justify-center gap-3 rounded-xl bg-[#183F34] px-6 py-3.5 text-sm font-semibold text-white shadow-lg shadow-teal-950/10 transition-all duration-300 hover:-translate-y-1 hover:bg-[#24584A] hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-[#C6A96C] focus:ring-offset-4 sm:px-8 sm:py-4"
        >
            <svg class="h-5 w-5 transition-transform duration-300 group-hover:-translate-x-1 {{ $fa ? 'rotate-180 group-hover:translate-x-1' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0 7-7m-7 7h18"/>
            </svg>

            {{ $fa ? 'بازگشت به لیست پروژه‌ها' : 'Back to Projects' }}

            <span class="ms-1 h-1.5 w-1.5 rounded-full bg-[#D8BB79] transition-transform duration-300 group-hover:scale-150"></span>
        </a>

    </div>
</section>


{{-- =========================================================
     LIGHTBOX
========================================================= --}}

<div
    id="lightbox"
    class="fixed inset-0 z-[9999] hidden items-center justify-center bg-[#030807]/95 p-3 backdrop-blur-xl sm:p-6"
    onclick="closeLightbox()"
    role="dialog"
    aria-modal="true"
    aria-label="{{ $fa ? 'نمایش تصویر بزرگ' : 'Image viewer' }}"
>
    <div
        class="relative flex h-full max-h-[95vh] w-full max-w-7xl flex-col items-center justify-center"
        onclick="event.stopPropagation()"
    >

        {{-- Close Button --}}
        <button
            type="button"
            onclick="closeLightbox()"
            class="absolute end-1 top-1 z-20 flex h-11 w-11 items-center justify-center rounded-xl border border-white/15 bg-white/10 text-white/80 backdrop-blur-md transition-all duration-300 hover:rotate-90 hover:bg-white/20 hover:text-white focus:outline-none focus:ring-2 focus:ring-[#D8BB79] sm:end-3 sm:top-3 sm:h-12 sm:w-12"
            aria-label="{{ $fa ? 'بستن تصویر' : 'Close image' }}"
        >
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="m6 6 12 12M18 6 6 18"/>
            </svg>
        </button>

        {{-- Image Counter / Label --}}
        <div class="absolute start-1 top-1 z-20 rounded-xl border border-white/15 bg-white/10 px-3 py-2 text-[10px] font-medium tracking-[0.15em] text-white/70 backdrop-blur-md sm:start-3 sm:top-3 sm:px-4 sm:text-xs">
            {{ $fa ? 'گالری پروژه' : 'PROJECT GALLERY' }}
        </div>

        {{-- Full Image --}}
        <div class="flex min-h-0 w-full flex-1 items-center justify-center pb-20 pt-16 sm:pb-24 sm:pt-20">
            <img
                id="lightbox-image"
                src=""
                alt=""
                class="max-h-full max-w-full rounded-lg object-contain shadow-2xl shadow-black/40 sm:rounded-2xl"
            >
        </div>

        {{-- Caption --}}
        <div
            id="lightbox-caption"
            class="absolute inset-x-2 bottom-2 max-w-3xl rounded-xl border border-white/10 bg-black/40 px-4 py-3 text-center text-sm leading-7 text-white backdrop-blur-xl sm:inset-x-auto sm:bottom-4 sm:min-w-72 sm:px-7 sm:py-4"
        ></div>

    </div>
</div>


{{-- =========================================================
     LIGHTBOX SCRIPT
========================================================= --}}

<script>
    function openLightbox(imageUrl, caption) {
        const lightbox = document.getElementById('lightbox');
        const img = document.getElementById('lightbox-image');
        const captionElement = document.getElementById('lightbox-caption');

        if (!lightbox || !img || !captionElement) {
            return;
        }

        img.src = imageUrl;
        img.alt = caption || '';
        captionElement.textContent = caption || '';

        lightbox.classList.remove('hidden');
        lightbox.classList.add('flex');

        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        const lightbox = document.getElementById('lightbox');

        if (!lightbox) {
            return;
        }

        lightbox.classList.add('hidden');
        lightbox.classList.remove('flex');

        document.body.style.overflow = '';
    }

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            closeLightbox();
        }
    });
</script>

@endsection
