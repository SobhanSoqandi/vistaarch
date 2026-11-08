
@extends('layouts.app')

@section('title', __('projects.page_title'))

@section('content')

@php
    $dir = app()->getLocale() === 'fa' ? 'rtl' : 'ltr';
    $field = 'w-full appearance-none rounded-[7px] border bg-white py-3.5 ps-12 pe-10 text-sm font-medium text-[#0A2A20] transition duration-300 hover:border-[#C9A45C] focus:border-[#C9A45C] focus:outline-none focus:ring-4 focus:ring-[#C9A45C]/20';
@endphp

<style>
    @keyframes pjUp { from { opacity: 0; transform: translateY(28px); } to { opacity: 1; transform: none; } }
    .pj-in { animation: pjUp .7s cubic-bezier(.2,.7,.2,1) both; }
    @media (prefers-reduced-motion: reduce) { .pj-in { animation: none; } }
</style>

<div dir="{{ $dir }}" class="bg-[#F4EFE6] [font-family:'Vazirmatn',sans-serif]">

    <section class="relative isolate overflow-hidden bg-gradient-to-b from-[#04180F] via-[#0A2A1F] to-[#0F3D2E] pb-44 pt-24 sm:pb-48 sm:pt-32">

        <div class="absolute inset-0 opacity-[0.08] [background-image:linear-gradient(#C9A45C_1px,transparent_1px),linear-gradient(90deg,#C9A45C_1px,transparent_1px)] [background-size:64px_64px] [mask-image:radial-gradient(ellipse_at_center,black_20%,transparent_75%)]"></div>

        <div class="absolute inset-x-0 top-0 h-[3px] bg-gradient-to-r from-transparent via-[#C9A45C] to-transparent"></div>
        <div class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-transparent via-[#C9A45C]/60 to-transparent"></div>

        <div class="pointer-events-none absolute inset-y-0 start-[12%] w-px bg-gradient-to-b from-transparent via-[#C9A45C]/30 to-transparent"></div>
        <div class="pointer-events-none absolute inset-y-0 end-[12%] w-px bg-gradient-to-b from-transparent via-[#C9A45C]/30 to-transparent"></div>

        <svg viewBox="0 0 400 400" fill="none" class="pointer-events-none absolute -top-20 -end-20 h-[26rem] w-[26rem] text-[#C9A45C]/25 sm:-end-8">
            <rect x="130" y="130" width="140" height="140" stroke="currentColor"/>
            <rect x="80" y="80" width="240" height="240" stroke="currentColor" stroke-dasharray="6 8" transform="rotate(45 200 200)"/>
            <rect x="40" y="40" width="320" height="320" stroke="currentColor"/>
            <rect x="8" y="8" width="384" height="384" stroke="currentColor" stroke-dasharray="2 10"/>
            <path d="M200 0V400M0 200H400M0 0L400 400M400 0L0 400" stroke="currentColor" stroke-width=".5"/>
        </svg>

        <div class="relative container mx-auto px-4">
            <div class="pj-in text-center">

                <div class="mx-auto mb-9 flex items-center justify-center gap-3">
                    <span class="h-px w-16 bg-gradient-to-r from-transparent to-[#C9A45C]"></span>
                    <span class="h-2 w-2 bg-[#C9A45C]"></span>
                    <span class="h-px w-16 bg-gradient-to-l from-transparent to-[#C9A45C]"></span>
                </div>

                <h1 class="mx-auto max-w-4xl bg-gradient-to-b from-[#F7EBCB] to-[#C9A45C] bg-clip-text text-4xl font-black leading-[1.2] text-transparent sm:text-5xl md:text-6xl">
                    {{ __('projects.hero_title') }}
                </h1>

                <p class="mx-auto mt-7 max-w-2xl text-base leading-9 text-[#F4EFE6]/75 sm:text-lg">
                    {{ __('projects.hero_desc') }}
                </p>

            </div>
        </div>

    </section>

    <section class="relative z-10 -mt-28 sm:-mt-32">
        <div class="container mx-auto px-4">

            <form method="GET" class="pj-in relative rounded-[7px] border border-[#0F3D2E]/10 bg-white p-5 shadow-[0_30px_70px_-25px_rgba(4,24,15,0.45)] sm:p-8" style="animation-delay:.12s">

                <div class="absolute inset-x-0 top-0 h-[3px] bg-gradient-to-r from-[#8A6A2F] via-[#E3C887] to-[#8A6A2F]"></div>

                <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-4">

                    <div class="relative">
                        <span class="pointer-events-none absolute inset-y-0 start-4 flex items-center text-[#A8843F]">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-5 w-5">
                                <path stroke-linecap="square" stroke-linejoin="miter" d="M21 21l-4.35-4.35M18 11a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </span>
                        <input type="text" name="search" value="{{ request('search') }}"
                            placeholder="{{ __('projects.search_placeholder') }}"
                            @class([$field, 'pe-4 placeholder:text-[#0A2A20]/40', 'border-[#C9A45C] bg-[#C9A45C]/10' => request('search'), 'border-[#0F3D2E]/15' => !request('search')])>
                    </div>

                    <div class="relative">
                        <span class="pointer-events-none absolute inset-y-0 start-4 flex items-center text-[#A8843F]">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-5 w-5">
                                <path stroke-linecap="square" stroke-linejoin="miter" d="M4 20h16M6 20V9l6-5 6 5v11M10 20v-5h4v5"/>
                            </svg>
                        </span>
                        <select name="style" @class([$field, 'border-[#C9A45C] bg-[#C9A45C]/10' => request('style'), 'border-[#0F3D2E]/15' => !request('style')])>
                            <option value="">{{ __('projects.all_styles') }}</option>
                            @foreach ($styles as $style)
                                <option value="{{ $style->id }}" @selected(request('style') == $style->id)>
                                    {{ app()->getLocale() === 'fa' ? $style->title : $style->slug }}
                                </option>
                            @endforeach
                        </select>
                        <span class="pointer-events-none absolute inset-y-0 end-4 flex items-center text-[#0F3D2E]/50">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-4 w-4">
                                <path stroke-linecap="square" stroke-linejoin="miter" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </span>
                    </div>

                    <div class="relative">
                        <span class="pointer-events-none absolute inset-y-0 start-4 flex items-center text-[#A8843F]">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-5 w-5">
                                <path stroke-linecap="square" stroke-linejoin="miter" d="M14.7 6.3a4 4 0 00-5.4 5.4L3 18l3 3 6.3-6.3a4 4 0 005.4-5.4l-2.4 2.4-2.6-.6-.6-2.6 2.4-2.4z"/>
                            </svg>
                        </span>
                        <select name="service" @class([$field, 'border-[#C9A45C] bg-[#C9A45C]/10' => request('service'), 'border-[#0F3D2E]/15' => !request('service')])>
                            <option value="">{{ __('projects.all_services') }}</option>
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}" @selected(request('service') == $service->id)>
                                    {{ app()->getLocale() === 'fa' ? $service->title : $service->slug }}
                                </option>
                            @endforeach
                        </select>
                        <span class="pointer-events-none absolute inset-y-0 end-4 flex items-center text-[#0F3D2E]/50">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-4 w-4">
                                <path stroke-linecap="square" stroke-linejoin="miter" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </span>
                    </div>

                    <div class="relative">
                        <span class="pointer-events-none absolute inset-y-0 start-4 flex items-center text-[#A8843F]">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-5 w-5">
                                <path stroke-linecap="square" stroke-linejoin="miter" d="M8 3v3M16 3v3M4 9h16M5 5h14a1 1 0 011 1v14a1 1 0 01-1 1H5a1 1 0 01-1-1V6a1 1 0 011-1z"/>
                            </svg>
                        </span>
                        <select name="year" @class([$field, 'border-[#C9A45C] bg-[#C9A45C]/10' => request('year'), 'border-[#0F3D2E]/15' => !request('year')])>
                            <option value="">{{ __('projects.all_years') }}</option>
                            @foreach ($years as $year)
                                <option value="{{ $year }}" @selected(request('year') == $year)>
                                    {{ $year }}
                                </option>
                            @endforeach
                        </select>
                        <span class="pointer-events-none absolute inset-y-0 end-4 flex items-center text-[#0F3D2E]/50">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-4 w-4">
                                <path stroke-linecap="square" stroke-linejoin="miter" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </span>
                    </div>

                </div>

                <div class="mt-6 flex flex-wrap items-center gap-3 border-t border-[#0F3D2E]/10 pt-6">

                    <button type="submit"
                        class="group inline-flex items-center gap-2 rounded-[7px] bg-gradient-to-b from-[#DDBE7C] to-[#B8923F] px-9 py-3.5 text-sm font-bold text-[#04180F] transition duration-300 hover:brightness-110 active:scale-[0.98]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" class="h-4 w-4 transition group-hover:scale-110">
                            <path stroke-linecap="square" stroke-linejoin="miter" d="M21 21l-4.35-4.35M18 11a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                        {{ __('projects.search_btn') }}
                    </button>

                    <a href="{{ route('projects.list', ['locale' => app()->getLocale()]) }}"
                        class="inline-flex items-center gap-2 rounded-[7px] border border-[#0F3D2E]/25 bg-white px-7 py-3.5 text-sm font-semibold text-[#0F3D2E]/75 transition duration-300 hover:border-[#0F3D2E] hover:bg-[#0F3D2E] hover:text-[#F4EFE6]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-4 w-4">
                            <path stroke-linecap="square" stroke-linejoin="miter" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                        {{ __('projects.clear_filters') }}
                    </a>

                </div>

            </form>

        </div>
    </section>

    <section class="pb-24 pt-14">
        <div class="container mx-auto px-4">

            <div class="mb-10 flex items-center gap-5">
                <div class="inline-flex shrink-0 items-center gap-3 rounded-[7px] border border-[#0F3D2E]/15 border-s-4 border-s-[#C9A45C] bg-white px-5 py-2.5 text-sm text-[#0F3D2E]/70">
                    <span>{{ __('projects.results_count') }}:</span>
                    <strong class="text-base font-black text-[#0A2A20]">{{ $projects->total() }}</strong>
                </div>
                <div class="h-px flex-1 bg-gradient-to-r from-[#C9A45C] to-transparent rtl:bg-gradient-to-l"></div>
            </div>

            <div class="grid gap-7 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

                @forelse($projects as $project)
                    <a href="{{ route('projects.show', ['locale' => app()->getLocale(), 'slug' => $project->slug]) }}"
                        class="pj-in group block focus-visible:outline-none"
                        style="animation-delay:{{ min($loop->index, 11) * 70 }}ms">

                        <article class="relative aspect-[4/5] overflow-hidden rounded-[7px] bg-[#04180F] shadow-[0_14px_30px_-14px_rgba(4,24,15,0.6)] transition duration-500 group-hover:-translate-y-2 group-hover:shadow-[0_35px_60px_-20px_rgba(4,24,15,0.75)]">

                            <img src="{{ asset('storage/' . $project->cover_image) }}" alt="{{ app()->getLocale() === 'fa' ? $project->title : $project->slug }}"
                                class="absolute inset-0 h-full w-full object-cover transition duration-[900ms] ease-out group-hover:scale-110" loading="lazy">

                            <div class="absolute inset-0 bg-gradient-to-t from-[#04180F] via-[#04180F]/45 to-transparent transition duration-500 group-hover:via-[#04180F]/70"></div>
                            <div class="absolute inset-x-0 top-0 h-24 bg-gradient-to-b from-black/45 to-transparent"></div>

                            <span class="absolute start-3 top-3 h-6 w-6 border-s-2 border-t-2 border-[#C9A45C] opacity-0 transition-all duration-500 group-hover:start-4 group-hover:top-4 group-hover:opacity-100"></span>
                            <span class="absolute bottom-3 end-3 h-6 w-6 border-b-2 border-e-2 border-[#C9A45C] opacity-0 transition-all duration-500 group-hover:bottom-4 group-hover:end-4 group-hover:opacity-100"></span>

                            <div class="absolute inset-x-5 top-5 flex items-center gap-2.5">
                                <span class="text-3xl font-black leading-none text-transparent [-webkit-text-stroke:1px_#E3C887]">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                                <span class="h-px w-6 bg-[#C9A45C]"></span>
                                <span class="text-xs font-bold tracking-widest text-white/90">{{ $project->year }}</span>
                            </div>

                            <div class="absolute inset-x-0 bottom-0 p-5 text-white">

                                <div class="mb-3 flex flex-wrap gap-2">
                                    @if ($project->service)
                                        <span class="rounded-[7px] border border-[#C9A45C]/60 bg-[#C9A45C]/20 px-3 py-1 text-[11px] font-semibold text-[#F3E3B8] backdrop-blur-md">
                                            {{ app()->getLocale() === 'fa' ? $project->service->title : $project->service->slug }}
                                        </span>
                                    @endif
                                    @if ($project->style)
                                        <span class="rounded-[7px] border border-white/30 bg-white/10 px-3 py-1 text-[11px] font-semibold text-white backdrop-blur-md">
                                            {{ app()->getLocale() === 'fa' ? $project->style->title : $project->style->slug }}
                                        </span>
                                    @endif
                                </div>

                                <h3 class="text-xl font-extrabold leading-snug">
                                    {{ app()->getLocale() === 'fa' ? $project->title : $project->slug }}
                                </h3>

                                <div class="grid grid-rows-[0fr] opacity-0 transition-all duration-500 ease-out group-hover:grid-rows-[1fr] group-hover:opacity-100">
                                    <div class="overflow-hidden">
                                        <div class="mt-3 h-px w-14 bg-[#C9A45C]"></div>
                                        <p class="mt-3 line-clamp-2 text-sm leading-7 text-white/80">
                                            {{ app()->getLocale() === 'fa' ? $project->description : $project->summary }}
                                        </p>
                                        <div class="mt-3 flex items-center justify-between gap-3">
                                            <div class="flex min-w-0 items-center gap-1.5 text-xs text-[#E3C887]">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-4 w-4 shrink-0">
                                                    <path stroke-linecap="square" stroke-linejoin="miter" d="M12 21s7-6.2 7-11a7 7 0 10-14 0c0 4.8 7 11 7 11z"/>
                                                    <circle cx="12" cy="10" r="2.5"/>
                                                </svg>
                                                <span class="truncate">{{ $project->location }}</span>
                                            </div>
                                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-[7px] bg-[#C9A45C] text-[#04180F]">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" class="h-4 w-4 rtl:-scale-x-100">
                                                    <path stroke-linecap="square" stroke-linejoin="miter" d="M5 12h14M13 6l6 6-6 6"/>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="absolute inset-x-0 bottom-0 h-[3px] origin-left scale-x-0 bg-gradient-to-r from-[#8A6A2F] via-[#E3C887] to-[#8A6A2F] transition duration-700 group-hover:scale-x-100 rtl:origin-right"></div>

                        </article>
                    </a>
                @empty
                    <div class="col-span-full">
                        <div class="mx-auto max-w-md rounded-[7px] border border-dashed border-[#0F3D2E]/30 bg-white/60 px-8 py-16 text-center">
                            <div class="mx-auto flex h-20 w-20 items-center justify-center border border-[#C9A45C] text-[#A8843F]">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" class="h-9 w-9">
                                    <path stroke-linecap="square" stroke-linejoin="miter" d="M21 21l-4.35-4.35M18 11a7 7 0 11-14 0 7 7 0 0114 0zM8.5 11h5"/>
                                </svg>
                            </div>
                            <h3 class="mt-8 text-2xl font-extrabold text-[#0A2A20]">{{ __('projects.no_results') }}</h3>
                        </div>
                    </div>
                @endforelse

            </div>

            <div class="mt-16 flex justify-center">
                {{ $projects->links() }}
            </div>

        </div>
    </section>

</div>

@endsection
