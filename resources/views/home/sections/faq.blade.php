<section id="faq" class="max-w-4xl mx-auto py-20 px-4">

    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-slate-900">
            {{ __('faq.title') }}
        </h2>
    </div>

    <div x-data="{ open: 1 }" class="space-y-4">

        {{-- Item 1 --}}
        <div class="bg-white rounded-3xl shadow-sm overflow-hidden">

            <button
                @click="open === 1 ? open = null : open = 1"
                class="w-full px-6 py-5 flex items-center justify-between text-right">

                <span class="font-bold text-lg">
                    {{ __('faq.q1') }}
                </span>

                <span
                    class="text-2xl transition duration-300"
                    :class="open === 1 ? 'rotate-45' : ''">
                    +
                </span>

            </button>

            <div
                x-show="open === 1"
                x-collapse
                class="px-6 pb-6 text-slate-600 leading-8">

                {{ __('faq.a1') }}

            </div>

        </div>


        {{-- Item 2 --}}
        <div class="bg-white rounded-3xl shadow-sm overflow-hidden">

            <button
                @click="open === 2 ? open = null : open = 2"
                class="w-full px-6 py-5 flex items-center justify-between text-right">

                <span class="font-bold text-lg">
                    {{ __('faq.q2') }}
                </span>

                <span
                    class="text-2xl transition duration-300"
                    :class="open === 2 ? 'rotate-45' : ''">
                    +
                </span>

            </button>

            <div
                x-show="open === 2"
                x-collapse
                class="px-6 pb-6 text-slate-600 leading-8">

                {{ __('faq.a2') }}

            </div>

        </div>


        {{-- Item 3 --}}
        <div class="bg-white rounded-3xl shadow-sm overflow-hidden">

            <button
                @click="open === 3 ? open = null : open = 3"
                class="w-full px-6 py-5 flex items-center justify-between text-right">

                <span class="font-bold text-lg">
                    {{ __('faq.q3') }}
                </span>

                <span
                    class="text-2xl transition duration-300"
                    :class="open === 3 ? 'rotate-45' : ''">
                    +
                </span>

            </button>

            <div
                x-show="open === 3"
                x-collapse
                class="px-6 pb-6 text-slate-600 leading-8">

                {{ __('faq.a3') }}

            </div>

        </div>


        {{-- Item 4 --}}
        <div class="bg-white rounded-3xl shadow-sm overflow-hidden">

            <button
                @click="open === 4 ? open = null : open = 4"
                class="w-full px-6 py-5 flex items-center justify-between text-right">

                <span class="font-bold text-lg">
                    {{ __('faq.q4') }}
                </span>

                <span
                    class="text-2xl transition duration-300"
                    :class="open === 4 ? 'rotate-45' : ''">
                    +
                </span>

            </button>

            <div
                x-show="open === 4"
                x-collapse
                class="px-6 pb-6 text-slate-600 leading-8">

                {{ __('faq.a4') }}

            </div>

        </div>

    </div>

</section>