
@php
    $locale = app()->getLocale();
    $isRtl = $locale === 'fa';
@endphp

<section
    id="faq"
    dir="{{ $isRtl ? 'rtl' : 'ltr' }}"
    class="max-w-4xl mx-auto py-20 px-4"
>
    <!-- Heading -->
    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-slate-900">
            {{ __('faq.title') }}
        </h2>
    </div>

    <!-- FAQ Items -->
    <div x-data="{ open: 1 }" class="space-y-4">

        @foreach ([1, 2, 3, 4] as $i)
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">

                <!-- Question -->
                <button
                    type="button"
                    @click="open === {{ $i }} ? open = null : open = {{ $i }}"
                    :aria-expanded="open === {{ $i }} ? 'true' : 'false'"
                    class="w-full px-6 py-5 flex items-center justify-between gap-4 text-start"
                >
                    <span class="font-bold text-base sm:text-lg text-slate-900">
                        {{ __("faq.q{$i}") }}
                    </span>

                    <!-- Chevron -->
                    <svg
                        class="w-5 h-5 shrink-0 text-slate-500 transition-transform duration-300"
                        :class="open === {{ $i }} ? 'rotate-180' : ''"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="m6 9 6 6 6-6"
                        />
                    </svg>
                </button>

                <!-- Answer -->
                <div
                    x-show="open === {{ $i }}"
                    x-collapse
                    id="faq-answer-{{ $i }}"
                    class="px-6 pb-6 text-slate-600 leading-8 text-start"
                >
                    {{ __("faq.a{$i}") }}
                </div>

            </div>
        @endforeach

    </div>
</section>
