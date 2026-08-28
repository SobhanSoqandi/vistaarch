@extends('layouts.app')

@section('title', 'پروژه های معماری')

@section('content')

    <!-- Hero -->

 <!-- ================= PROJECTS HERO ================= -->
<section
    dir="rtl"
    class="relative isolate overflow-hidden bg-gradient-to-b from-teal-950 via-teal-900 to-teal-800 py-20 [font-family:'Vazirmatn',sans-serif] sm:py-24">

    <!-- گرید خط‌کشیِ نقشه (بلوپرینت) -->
    <div class="absolute inset-0 opacity-[0.06] [background-image:linear-gradient(#F6F2E7_1px,transparent_1px),linear-gradient(90deg,#F6F2E7_1px,transparent_1px)] [background-size:48px_48px]"></div>

    <!-- خط طلایی بالای سکشن -->
    <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-l from-transparent via-amber-500 to-transparent"></div>

    <!-- نور محیطی -->
    <div class="pointer-events-none absolute -top-32 -end-32 h-96 w-96 rounded-full bg-amber-500/10 blur-[100px]"></div>
    <div class="pointer-events-none absolute -bottom-40 -start-24 h-80 w-80 rounded-full bg-teal-400/10 blur-[100px]"></div>

    <div class="relative container mx-auto px-4">
        <div class="text-center">

            <h1 class="mx-auto mt-6 max-w-3xl text-2xl font-black leading-[1.15] text-[#F6F2E7] md:text-5xl">
                {{ __('projects.hero_title') }}
            </h1>

            <p class="mx-auto mt-6 max-w-3xl leading-8 text-[#F6F2E7]/80">
                {{ __('projects.hero_desc') }}
            </p>

        </div>
    </div>

    <!-- موج پایین برای اتصال به سکشن بعدی -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80" preserveAspectRatio="none" class="absolute inset-x-0 bottom-0 h-16 w-full">
        <path fill="#F6F2E7" d="M0,32 C240,80 480,0 720,16 C960,32 1200,80 1440,32 L1440,80 L0,80 Z"/>
    </svg>

</section>
    <!-- Filters -->
 <!-- ================= PROJECTS FILTER ================= -->
<section dir="rtl" class="relative bg-[#F6F2E7] pb-16 pt-4 mt-40 [font-family:'Vazirmatn',sans-serif] sm:pb-20">

    <div class="container relative z-10 mx-auto -mt-16 px-4 sm:-mt-20">

        <form method="GET" class="rounded-[28px] border border-teal-900/5 bg-white p-5 shadow-[0_20px_60px_-15px_rgba(15,64,60,0.25)] sm:p-8">

            <div class="grid gap-4 md:grid-cols-4">

                <!-- Search -->
                <div class="relative md:col-span-1">
                    <span class="pointer-events-none absolute inset-y-0 start-4 flex items-center text-teal-900/40">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M18 11a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </span>
                    <input type="text" name="search" value="{{ request('search') }}"
                        placeholder="{{ __('projects.search_placeholder') }}"
                        class="w-full rounded-2xl border border-teal-900/10 bg-teal-900/[0.02] ps-11 pe-4 py-3 text-sm text-teal-950 placeholder:text-teal-900/40 transition focus:border-amber-500 focus:bg-white focus:outline-none focus:ring-4 focus:ring-amber-500/10">
                </div>

                <!-- Style -->
                <div class="relative">
                    <select name="style"
                        class="w-full appearance-none rounded-2xl border border-teal-900/10 bg-teal-900/[0.02] ps-4 pe-10 py-3 text-sm text-teal-950 transition focus:border-amber-500 focus:bg-white focus:outline-none focus:ring-4 focus:ring-amber-500/10">
                        <option value="">{{ __('projects.all_styles') }}</option>
                        @foreach ($styles as $style)
                            <option value="{{ $style->id }}" @selected(request('style') == $style->id)>
                                {{ $style->title }}
                            </option>
                        @endforeach
                    </select>
                    <span class="pointer-events-none absolute inset-y-0 end-4 flex items-center text-teal-900/40">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </span>
                </div>

                <!-- Service -->
                <div class="relative">
                    <select name="service"
                        class="w-full appearance-none rounded-2xl border border-teal-900/10 bg-teal-900/[0.02] ps-4 pe-10 py-3 text-sm text-teal-950 transition focus:border-amber-500 focus:bg-white focus:outline-none focus:ring-4 focus:ring-amber-500/10">
                        <option value="">{{ __('projects.all_services') }}</option>
                        @foreach ($services as $service)
                            <option value="{{ $service->id }}" @selected(request('service') == $service->id)>
                                {{ $service->title }}
                            </option>
                        @endforeach
                    </select>
                    <span class="pointer-events-none absolute inset-y-0 end-4 flex items-center text-teal-900/40">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </span>
                </div>

                <!-- Year -->
                <div class="relative">
                    <select name="year"
                        class="w-full appearance-none rounded-2xl border border-teal-900/10 bg-teal-900/[0.02] ps-4 pe-10 py-3 text-sm text-teal-950 transition focus:border-amber-500 focus:bg-white focus:outline-none focus:ring-4 focus:ring-amber-500/10">
                        <option value="">{{ __('projects.all_years') }}</option>
                        @foreach ($years as $year)
                            <option value="{{ $year }}" @selected(request('year') == $year)>
                                {{ $year }}
                            </option>
                        @endforeach
                    </select>
                    <span class="pointer-events-none absolute inset-y-0 end-4 flex items-center text-teal-900/40">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </span>
                </div>

            </div>

            <div class="mt-5 flex flex-wrap items-center gap-3 border-t border-teal-900/5 pt-5">

                <button type="submit"
                    class="inline-flex items-center gap-2 rounded-2xl bg-amber-500 px-6 py-3 text-sm font-bold text-teal-950 shadow-lg shadow-amber-500/25 transition hover:bg-amber-400 active:scale-[0.98]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M18 11a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    {{ __('projects.search_btn') }}
                </button>

                <a href="{{ route('projects.list', ['locale' => app()->getLocale()]) }}"
                    class="inline-flex items-center gap-2 rounded-2xl border border-teal-900/15 px-6 py-3 text-sm font-semibold text-teal-900/70 transition hover:border-teal-900/30 hover:bg-teal-900/[0.03] hover:text-teal-900">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                    {{ __('projects.clear_filters') }}
                </a>

            </div>

        </form>

    </div>

</section>
    <!-- Results Count -->

    <section class="py-4">

        <div class="container mx-auto px-4">

            <p class="text-slate-500">

                تعداد نتایج:
                <strong>{{ $projects->total() }}</strong>

            </p>

        </div>

    </section>

    <!-- Projects Grid -->

    <section class="pb-20">

        <div class="container mx-auto px-4">

            <div class="grid md:grid-cols-3 xl:grid-cols-4 gap-8">

                @forelse($projects as $project)
                    <a href="{{ route('projects.show', ['locale' => app()->getLocale(), 'slug' => $project->slug]) }}">
                        <div class="relative h-[280px] overflow-hidden rounded-xl group shadow-xl">
                            <img src="{{ asset('storage/' . $project->cover_image) }}" alt="{{ $project->title }}"
                                class="w-full h-full object-cover transition duration-700 group-hover:scale-110">

                            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent"></div>

                            <div class="absolute inset-0 flex items-end p-6">
                                <div
                                    class="w-full transform translate-y-24 group-hover:translate-y-0 transition duration-500">
                                    <div class="backdrop-blur-md bg-black/50 rounded-2xl p-5 text-white">
                                        <div class="flex gap-2 mb-3">
                                            @if ($project->service)
                                                <span class="px-3 py-1 bg-white/20 rounded-full text-xs">
                                                    {{ $project->service->title }}
                                                </span>
                                            @endif

                                            @if ($project->style)
                                                <span class="px-3 py-1 bg-white/20 rounded-full text-xs">
                                                    {{ $project->style->title }}
                                                </span>
                                            @endif
                                        </div>

                                        <h3 class="text-xl font-bold">{{ $project->title }}</h3>

                                        <div class="opacity-0 group-hover:opacity-100 transition duration-500 mt-3">
                                            <p class="text-sm text-slate-200 line-clamp-2">{{ $project->summary }}</p>
                                            <div class="flex justify-between mt-4 text-xs">
                                                <span>{{ $project->year }}</span>
                                                <span>{{ $project->location }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="col-span-full text-center py-20">
                        <h3 class="text-2xl font-bold">پروژه‌ای یافت نشد</h3>
                    </div>
                @endforelse


            </div>

            <!-- Pagination -->

            <div class="mt-12">

                {{ $projects->links() }}

            </div>

        </div>

    </section>

@endsection
