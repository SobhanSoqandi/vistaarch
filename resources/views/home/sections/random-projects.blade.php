    <div class="swiper randomSwiper mt-16 max-w-7xl">

        <div class="swiper-wrapper">

            @foreach ($latestProjects as $project)
                <div class="swiper-slide">

                    <div class="relative h-[280px] overflow-hidden group shadow-xl">

                        <img src="{{ asset('storage/' . $project->cover_image) }}" alt="{{ $project->title }}"
                            class="w-full h-full object-cover transition duration-700 group-hover:scale-110">

                    </div>

                </div>
            @endforeach

        </div>

    </div>