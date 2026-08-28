{{-- resources/views/pages/project-single.blade.php --}}

@extends('layouts.app')

@section('title', $project->title)

@section('content')

    <!-- ========== HERO ========== -->
    <section class="relative bg-gradient-to-br from-teal-900 via-teal-800 to-emerald-900 py-16 lg:py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-3xl md:text-5xl font-black text-white mb-4">
                    {{ $project->title }}
                </h1>

                @if ($project->summary)
                    <p class="text-lg text-teal-100/80 max-w-2xl mx-auto">
                        {{ $project->summary }}
                    </p>
                @endif

                <div class="flex flex-wrap justify-center gap-3 mt-6">
                    @if ($project->service)
                        <span
                            class="px-4 py-2 rounded-full text-sm text-white bg-white/10 backdrop-blur border border-white/20">
                            {{ $project->service->title }}
                        </span>
                    @endif
                    @if ($project->style)
                        <span
                            class="px-4 py-2 rounded-full text-sm text-white bg-white/10 backdrop-blur border border-white/20">
                            {{ $project->style->title }}
                        </span>
                    @endif
                    @if ($project->year)
                        <span
                            class="px-4 py-2 rounded-full text-sm text-white bg-white/10 backdrop-blur border border-white/20">
                            {{ $project->year }}
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- ========== مشخصات پروژه ========== -->
    <section class="py-12 bg-white border-b border-slate-100">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

                    @if ($project->company)
                        <div
                            class="group text-center p-5 rounded-2xl bg-slate-50 hover:bg-white hover:shadow-lg transition-all duration-300">
                            <div
                                class="w-12 h-12 mx-auto mb-3 rounded-xl bg-slate-100 group-hover:bg-amber-500 transition flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-6 h-6 text-slate-700 group-hover:text-white transition" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 21h18M5 21V7l7-4 7 4v14M9 9h.01M15 9h.01M9 13h.01M15 13h.01M9 17h.01M15 17h.01" />
                                </svg>
                            </div>

                            <p class="text-xs text-slate-400 uppercase tracking-widest">
                                شرکت
                            </p>

                            <p class="font-bold text-slate-800 mt-2">
                                {{ $project->company->name }}
                            </p>
                        </div>
                    @endif


                    @if ($project->year)
                        <div
                            class="group text-center p-5 rounded-2xl bg-slate-50 hover:bg-white hover:shadow-lg transition-all duration-300">
                            <div
                                class="w-12 h-12 mx-auto mb-3 rounded-xl bg-slate-100 group-hover:bg-amber-500 transition flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-6 h-6 text-slate-700 group-hover:text-white transition" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8 7V3m8 4V3M4 11h16M5 5h14a1 1 0 011 1v13a1 1 0 01-1 1H5a1 1 0 01-1-1V6a1 1 0 011-1z" />
                                </svg>
                            </div>

                            <p class="text-xs text-slate-400 uppercase tracking-widest">
                                سال اجرا
                            </p>

                            <p class="font-bold text-slate-800 mt-2">
                                {{ $project->year }}
                            </p>
                        </div>
                    @endif


                    @if ($project->location)
                        <div
                            class="group text-center p-5 rounded-2xl bg-slate-50 hover:bg-white hover:shadow-lg transition-all duration-300">
                            <div
                                class="w-12 h-12 mx-auto mb-3 rounded-xl bg-slate-100 group-hover:bg-amber-500 transition flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-6 h-6 text-slate-700 group-hover:text-white transition" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 14c-4.418 0-8 2.015-8 4.5V21h16v-2.5c0-2.485-3.582-4.5-8-4.5z" />
                                </svg>
                            </div>

                            <p class="text-xs text-slate-400 uppercase tracking-widest">
                                کارفرما
                            </p>

                            <p class="font-bold text-slate-800 mt-2">
                                {{ $project->location }}
                            </p>
                        </div>
                    @endif


                    @if ($project->area)
                        <div
                            class="group text-center p-5 rounded-2xl bg-slate-50 hover:bg-white hover:shadow-lg transition-all duration-300">
                            <div
                                class="w-12 h-12 mx-auto mb-3 rounded-xl bg-slate-100 group-hover:bg-amber-500 transition flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-6 h-6 text-slate-700 group-hover:text-white transition" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4 4h6v6H4V4zm10 0h6v6h-6V4zM4 14h6v6H4v-6zm10 6v-6h6v6h-6z" />
                                </svg>
                            </div>

                            <p class="text-xs text-slate-400 uppercase tracking-widest">
                                مساحت
                            </p>

                            <p class="font-bold text-slate-800 mt-2">
                                {{ number_format($project->area) }} m²
                            </p>
                        </div>
                    @endif

                </div>

                @if ($project->description)
                    <div class="mt-8 p-6 md:p-8 bg-slate-50 rounded-3xl">
                        <h2 class="text-xl font-bold text-slate-800 mb-4">
                            توضیحات پروژه
                        </h2>

                        <div class="text-slate-600 leading-relaxed">
                            {!! nl2br(e($project->description)) !!}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    

    @if ($project->images->count())

        <section class="py-16 bg-slate-50">


            <div class="container mx-auto px-4">
                <div class="max-w-7xl mx-auto">



                    <div class="relative">

                        <div class="projectSwiper swiper rounded-[32px] overflow-hidden shadow-2xl">

                            <div class="swiper-wrapper">

                                @foreach ($project->images as $image)
                                    <div class="swiper-slide">

                                        <div class="relative h-[350px] md:h-[650px]">

                                            <img src="{{ asset('storage/' . $image->image_path) }}"
                                                alt="{{ $image->alt_text ?? $project->title }}"
                                                class="w-full h-full object-cover">

                                            <div
                                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent">
                                            </div>

                                            <div class="absolute bottom-0 left-0 right-0 p-8 md:p-12">

                                                <div class="max-w-2xl text-white">

                                                    @if ($image->title)
                                                        <h3 class="text-2xl md:text-4xl font-black mb-3">
                                                            {{ $image->title }}
                                                        </h3>
                                                    @endif

                                                    @if ($image->description)
                                                        <p class="text-slate-200 leading-8">
                                                            {{ $image->description }}
                                                        </p>
                                                    @endif

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                @endforeach

                            </div>

                        </div>

                        <button
                            class="project-prev absolute top-1/2 -translate-y-1/2 left-4 z-20 w-14 h-14 rounded-full bg-white shadow-xl hover:scale-110 transition">

                            <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>

                        </button>

                        <button
                            class="project-next absolute top-1/2 -translate-y-1/2 right-4 z-20 w-14 h-14 rounded-full bg-white shadow-xl hover:scale-110 transition">

                            <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>

                        </button>

                    </div>

                    <div class="projectThumbs swiper mt-6">

                        <div class="swiper-wrapper">

                            @foreach ($project->images as $image)
                                <div class="swiper-slide cursor-pointer">

                                    <div
                                        class="overflow-hidden rounded-2xl border-4 border-transparent transition-all duration-300">

                                        <img src="{{ asset('storage/' . $image->image_path) }}"
                                            class="h-24 md:h-28 w-full object-cover">

                                    </div>

                                </div>
                            @endforeach

                        </div>

                    </div>

                </div>

            </div>

        </section>

    @endif


    <!-- ========== اسلایدر عکس‌ها ========== -->
    @if ($project->images->count() > 0)



        <!-- ========== آلبوم عکس‌ها (شبکه‌ای) به سبک جدید ========== -->
        <section class="py-12 bg-white">
            <div class="container mx-auto px-4">
                <div class="max-w-7xl mx-auto">
                    <div class="flex items-center gap-3 mb-8">
                        <div class="w-1 h-8 bg-gradient-to-b from-teal-600 to-teal-400 rounded-full"></div>
                        <h2 class="text-2xl font-bold text-slate-800">🖼️ آلبوم تصاویر</h2>
                        <span class="mr-auto text-sm text-slate-400 bg-slate-100 px-4 py-2 rounded-xl">
                            برای بزرگنمایی کلیک کنید
                        </span>
                    </div>

                    <!-- شبکه تصاویر -->
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($project->images as $image)
                            <div class="group relative rounded-xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 cursor-pointer"
                                onclick="openLightbox('{{ asset('storage/' . $image->image_path) }}', '{{ $image->title ?? $project->title }}', '{{ $image->description ?? '' }}')">

                                <div class="relative h-56 md:h-64 overflow-hidden bg-slate-100">
                                    <img src="{{ asset('storage/' . $image->image_path) }}"
                                        alt="{{ $image->alt_text ?? $project->title }}"
                                        class="w-full h-full object-cover group-hover:scale-110 transition duration-700">

                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-500">
                                    </div>

                                    <!-- محتوای روی تصویر -->
                                    <div
                                        class="absolute inset-0 flex flex-col justify-end p-4 opacity-0 group-hover:opacity-100 transition duration-500">
                                        <div class="backdrop-blur-sm bg-black/30 rounded-lg p-3 text-white">
                                            @if ($image->title)
                                                <h4 class="text-sm font-bold">{{ $image->title }}</h4>
                                            @endif
                                            @if ($image->description)
                                                <p class="text-xs text-slate-200 line-clamp-1">{{ $image->description }}
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <!-- آیکون بزرگنمایی -->
                                <div
                                    class="absolute top-3 right-3 bg-black/50 backdrop-blur rounded-full p-2 opacity-0 group-hover:opacity-100 transition duration-300 z-10">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </div>

                                <!-- شماره تصویر -->
                                <div
                                    class="absolute bottom-3 left-3 bg-black/50 backdrop-blur rounded-full px-3 py-1 text-xs text-white opacity-0 group-hover:opacity-100 transition duration-300 z-10">
                                    {{ $loop->iteration }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- ========== دکمه بازگشت ========== -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4 text-center">
            <a href="/"
                class="inline-flex items-center gap-2 px-8 py-4 bg-amber-500 text-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 font-medium">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                بازگشت به لیست پروژه‌ها
            </a>
        </div>
    </section>

    <!-- ========== Lightbox برای بزرگنمایی ========== -->
    <div id="lightbox" class="fixed inset-0 z-[9999] bg-black/95 backdrop-blur-lg hidden items-center justify-center p-4"
        onclick="closeLightbox()">
        <div class="relative max-w-7xl w-full h-full flex items-center justify-center" onclick="event.stopPropagation()">
            <button onclick="closeLightbox()"
                class="absolute top-4 right-4 text-white/70 hover:text-white text-4xl transition z-10 bg-black/50 rounded-full w-14 h-14 flex items-center justify-center hover:bg-black/70">
                ✕
            </button>

            <img id="lightbox-image" src="" alt=""
                class="max-w-full max-h-[90vh] object-contain rounded-2xl shadow-2xl">

            <div id="lightbox-caption"
                class="absolute bottom-8 left-1/2 -translate-x-1/2 text-white text-center bg-black/50 backdrop-blur px-6 py-3 rounded-2xl">
            </div>
        </div>
    </div>

    <script>
        function openLightbox(imageUrl, caption) {
            const lightbox = document.getElementById('lightbox');
            const img = document.getElementById('lightbox-image');
            const captionEl = document.getElementById('lightbox-caption');

            img.src = imageUrl;
            img.alt = caption;
            captionEl.textContent = caption || '';

            lightbox.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            const lightbox = document.getElementById('lightbox');
            lightbox.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // بستن با کلید ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeLightbox();
            }
        });
    </script>

@endsection
