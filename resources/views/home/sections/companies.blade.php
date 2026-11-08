<section
    dir="{{ app()->getLocale() === 'fa' ? 'rtl' : 'ltr' }}"
    class="bg-[#FAFAF8] py-14 sm:py-16 lg:py-20"
>


    <div class="mx-auto">

        {{-- Header --}}
        <div class="flex justify-center items-end mb-14">

            <div>
                <h2 
                style="font-family :Georgia, 'Times New Roman', Times, serif"
                
                class="text-4xl md:text-5xl font-serif font-medium uppercase tracking-tight text-slate-900 leading-tight">
                    {{ __('messages.companies') }}
                </h2>
            </div>

            {{-- <div class="lg:max-w-lg lg:ms-auto">
                <p class="text-sm md:text-base leading-7 text-slate-500">
                    {{ __('messages.companies_description') }}
                </p>
            </div> --}}

        </div>


        {{-- Companies Grid --}}
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 border-t border-slate-200">

            @foreach ($companies as $company)

                @php
                    $companyTitle = app()->getLocale() === 'fa'
                        ? $company->name
                        : $company->slug;
                @endphp

                <div
                    class="
                        group
                        relative
                        min-h-[190px]
                        md:min-h-[210px]
                        flex
                        flex-col
                        items-center
                        justify-center
                        px-6
                        py-10
                        border-b
                        border-slate-200

                        lg:border-r

                        last:lg:border-r-0
                    "
                >

                    {{-- Logo --}}
                    @if ($company->logo)

                        <div class="h-20 md:h-24 w-full flex items-center justify-center mb-7">

                            <img
                                src="{{ asset('storage/' . $company->logo) }}"
                                alt="{{ $companyTitle }}"
                                class="
                                    max-h-20
                                    md:max-h-24
                                    max-w-[150px]
                                    object-contain
                                    grayscale
                                    opacity-80
                                    group-hover:grayscale-0
                                    group-hover:opacity-100
                                    group-hover:scale-105
                                    transition-all
                                    duration-500
                                "
                            >

                        </div>

                    @endif


                    {{-- Company Name --}}
                    <div class="text-center">

                        <h3
                            class="
                                text-[11px]
                                md:text-xs
                                font-semibold
                                tracking-[0.08em]
                                uppercase
                                text-slate-800
                                leading-5
                                transition-colors
                                duration-300
                                group-hover:text-teal-700
                            "
                        >
                            {{ $companyTitle }}
                        </h3>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>