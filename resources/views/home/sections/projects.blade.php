<section dir="{{ in_array(app()->getLocale(), ['fa', 'ar']) ? 'rtl' : 'ltr' }}" class="mx-auto px-4 py-20">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 lg:gap-12">

        <div class="lg:col-span-1 flex flex-col justify-between">

            <div>
                <h2 class="font-serif [font-family:Georgia,'Times_New_Roman',Times,serif] rtl:[font-family:inherit] text-4xl xl:text-5xl leading-tight text-teal-900">
                    {{ __('projects.selected_projects_title') }}
                </h2>

                <p class="mt-5 text-teal-900/70 leading-relaxed text-sm xl:text-base">
                    {{ __('projects.selected_projects_description') }}
                </p>

               <a href="{{ url(app()->getLocale() . '/projects') }}"
    class="inline-flex items-center gap-3 mt-8 border border-[#A99772] text-[#A99772] tracking-[0.15em] rtl:tracking-normal text-xs font-medium px-7 py-3 hover:bg-[#A99772] hover:text-white transition duration-300">
    {{ __('projects.view_all_projects') }}
    <svg class="w-4 h-4 rtl:-scale-x-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 12h14M13 6l6 6-6 6" />
    </svg>
</a>
            </div>

            <div class="flex items-center gap-6 mt-10">
                <button class="project-prev w-9 h-9 flex items-center justify-center text-teal-900/70 hover:text-[#A99772] transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 rtl:-scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 12H5M11 6l-6 6 6 6" />
                    </svg>
                </button>

                <button class="project-next w-9 h-9 flex items-center justify-center text-teal-900/70 hover:text-[#A99772] transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 rtl:-scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 12h14M13 6l6 6-6 6" />
                    </svg>
                </button>
            </div>

        </div>

        <div class="lg:col-span-3 min-w-0">

            <div dir="{{ in_array(app()->getLocale(), ['fa', 'ar']) ? 'rtl' : 'ltr' }}" class="swiper projectSwiper overflow-hidden py-3 -my-3">
                <div class="swiper-wrapper">

                    @foreach ($latestProjects as $project)
                        @php $t = app()->getLocale() === 'fa' ? $project->title : $project->slug; @endphp

                        <div class="swiper-slide h-auto">
                            <a href="{{ route('projects.show', ['locale' => app()->getLocale(), 'slug' => $project->slug]) }}"
                                class="group flex flex-col h-full bg-white border border-teal-900/10 shadow-md hover:shadow-2xl transition-shadow duration-500 overflow-hidden">

                                <div class="overflow-hidden">
                                    <img src="{{ asset('storage/' . $project->cover_image) }}" alt="{{ $t }}"
                                        class="w-full h-56 object-cover transition duration-700 group-hover:scale-110">
                                </div>

                                <div class="p-5 flex flex-col flex-1">
                                    <h3 class="text-teal-900 font-semibold tracking-wide rtl:tracking-normal text-sm uppercase">{{ $t }}</h3>

                                    <div class="flex items-center gap-2 text-xs text-teal-900/50 mt-auto pt-4">
                                        <span>{{ $project->location }}</span>
                                        <span class="w-px h-3 bg-teal-900/20"></span>
                                        <span>{{ $project->year }}</span>
                                    </div>
                                </div>

                            </a>
                        </div>
                    @endforeach

                </div>
            </div>

            <div class="project-pagination flex justify-center gap-2 mt-8"></div>

        </div>

    </div>
</section>

<style>
    .project-bullet {
        width: 8px;
        height: 8px;
        border-radius: 9999px;
        background-color: #d4d4d4;
        display: inline-block;
        cursor: pointer;
        transition: background-color .3s, transform .3s;
    }

    .project-bullet-active {
        background-color: #134e4a;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.projectSwiper', {
            slidesPerView: 1,
            spaceBetween: 28,
            loop: false,
            pagination: {
                el: '.project-pagination',
                clickable: true,
                bulletClass: 'project-bullet',
                bulletActiveClass: 'project-bullet-active',
            },
            navigation: {
                nextEl: '.project-next',
                prevEl: '.project-prev',
            },
            breakpoints: {
                640: { slidesPerView: 2 },
                1024: { slidesPerView: 2 },
            },
        });
    });
</script>