
@extends('layouts.app')

@section('title', __('contact.page_title'))

@section('content')

@php
    $isFa = app()->getLocale() === 'fa';
    $dir  = $isFa ? 'rtl' : 'ltr';

    $display = $isFa
        ? 'font-extrabold leading-[1.3]'
        : 'font-medium leading-[0.98] tracking-[-0.03em]';

    $body  = 'font-site';
    $label = $isFa ? 'font-bold' : 'font-semibold uppercase tracking-[0.18em]';

    $waNumber = __('contact.whatsapp_number');

    $rows = [
        [
            'key'   => 'email',
            'value' => __('contact.email_address'),
            'href'  => 'mailto:' . __('contact.email_address'),
            'ltr'   => true
        ],
        [
            'key'   => 'linkedin',
            'value' => __('contact.linkedin_value'),
            'href'  => __('contact.linkedin_url'),
            'ltr'   => true
        ],
        [
            'key'   => 'whatsapp',
            'value' => __('contact.phone'),
            'href'  => 'https://wa.me/' . $waNumber,
            'ltr'   => true
        ],
    ];

    $others = [
        ['key' => 'instagram', 'href' => __('contact.instagram_url')],
        ['key' => 'telegram',  'href' => __('contact.telegram_url')],
    ];
@endphp

<style>
    .font-site {
        font-family:
            Tahoma,
            Arial,
            "Segoe UI",
            sans-serif;
    }

    .font-site input,
    .font-site textarea,
    .font-site button {
        font-family: inherit;
    }

    .contact-image {
        width: 100%;
        height: auto;
        display: block;
        object-fit: cover;
    }
</style>

<div dir="{{ $dir }}" class="bg-[#FAFAF6] text-[#0E2A2F] {{ $body }}">

    <!-- ================= HERO ================= -->
    <section class="mx-auto grid px-10 items-center gap-10 pb-14 pt-14 sm:pt-20 lg:grid-cols-2 lg:gap-6 lg:pb-16">

        <div>
            <p class="text-lg {{ $label }}">
            

                {{ __('contact.eyebrow') }}
            </p>

            <h1 class="mt-3 {{ $isFa ? 'max-w-md' : 'max-w-[11ch]' }} text-[2.9rem] sm:text-4xl lg:text-[4.25rem] {{ $display }}">
                {{ __('contact.hero_title') }}
            </h1>

            <div class="mt-10 flex items-start gap-8">
                <span class="mt-3 h-px w-14 shrink-0 bg-[#ffb253]"></span>

                <p class="max-w-sm text-[0.95rem] leading-7 text-[#0E2A2F]/85">
                    {{ __('contact.hero_desc') }}
                </p>
            </div>
        </div>

        <!-- ================= IMAGE ================= -->
        <div class="overflow-hidden">
            <img
                src="{{ asset('img/contact-image.jfif') }}"
                alt="{{ __('contact.hero_title') }}"
                class="contact-image"
            >
        </div>

    </section>


    <!-- ================= CHANNELS ================= -->
    <section class="mx-auto max-w-6xl px-6">

        <div class="grid border-t border-[#ffb253] lg:grid-cols-[1.9fr_1fr]">

            <!-- Get in touch -->
            <div class="pb-10 pt-8 lg:pe-12">

                <h2 class="text-sm {{ $label }}">
                    {{ __('contact.get_in_touch') }}
                </h2>

                <ul class="mt-8">

                    @foreach($rows as $row)

                        @if(!empty($row['value']) && !empty($row['href']))

                            <li class="border-b border-[#ffb253]/40 last:border-b-0">

                                <a
                                    href="{{ $row['href'] }}"
                                    @if($row['key'] !== 'email')
                                        target="_blank"
                                        rel="noopener"
                                    @endif
                                    class="group flex items-center gap-4 py-5 sm:gap-8"
                                >

                                    <span class="w-24 shrink-0 text-xs {{ $label }} sm:w-28">
                                        {{ __('contact.' . $row['key']) }}
                                    </span>

                                    <span
                                        class="min-w-0 flex-1 truncate text-sm text-[#0E2A2F]/85"
                                        @if($row['ltr'])
                                            dir="ltr"
                                            style="text-align:start"
                                        @endif
                                    >
                                        {{ $row['value'] }}
                                    </span>

                                    <svg
                                        class="h-5 w-5 shrink-0 text-[#ffb253] transition group-hover:translate-x-1 rtl:-scale-x-100 rtl:group-hover:-translate-x-1"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M4 12h16m-6-6 6 6-6 6"
                                        />
                                    </svg>

                                </a>

                            </li>

                        @endif

                    @endforeach

                </ul>

            </div>


            <!-- Other channels -->
            <div class="relative border-t border-[#ffb253]/40 pb-10 pt-8 lg:border-s lg:border-t-0 lg:border-[#ffb253] lg:ps-10">

                <span class="absolute -top-[4px] hidden h-2 w-2 rounded-full bg-[#ffb253] lg:block ltr:-left-[4.5px] rtl:-right-[4.5px]"></span>

                <h2 class="text-sm {{ $label }}">
                    {{ __('contact.other_channels') }}
                </h2>

                <ul class="mt-8">

                    @foreach($others as $o)

                        @if(!empty($o['href']))

                            <li class="border-b border-[#ffb253]/40 last:border-b-0">

                                <a
                                    href="{{ $o['href'] }}"
                                    target="_blank"
                                    rel="noopener"
                                    class="group flex items-center justify-between gap-4 py-6"
                                >

                                    <span class="text-xs {{ $label }}">
                                        {{ __('contact.' . $o['key']) }}
                                    </span>

                                    <svg
                                        class="h-5 w-5 shrink-0 text-[#ffb253] transition group-hover:translate-x-1 rtl:-scale-x-100 rtl:group-hover:-translate-x-1"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M4 12h16m-6-6 6 6-6 6"
                                        />
                                    </svg>

                                </a>

                            </li>

                        @endif

                    @endforeach

                </ul>

            </div>

        </div>

    </section>


    <!-- ================= FORM ================= -->
    <section class="mx-auto grid max-w-6xl gap-10 px-6 pb-24 pt-10 lg:grid-cols-[1fr_1.35fr] lg:gap-16">

        <div>

            <p class="text-xs {{ $label }}">
                {{ __('contact.form_kicker') }}
            </p>

            <h2 class="mt-4 max-w-md text-[2rem] sm:text-4xl {{ $display }}">
                {{ __('contact.form_title') }}
            </h2>

            <span class="mt-10 block h-px w-14 bg-[#ffb253]"></span>

        </div>


        <form
            id="contactForm"
            novalidate
            class="space-y-3"
        >

            <div class="grid gap-3 sm:grid-cols-2">

                <label class="block border border-[#1F5A5E] px-4 pb-2.5 pt-3 focus-within:border-[#ffb253] focus-within:ring-1 focus-within:ring-[#ffb253]">

                    <span class="block text-[0.65rem] {{ $label }}">
                        {{ __('contact.f_name') }} *
                    </span>

                    <input
                        type="text"
                        name="name"
                        required
                        autocomplete="name"
                        placeholder="{{ __('contact.f_name_ph') }}"
                        class="mt-1 w-full border-0 bg-transparent p-0 text-sm text-[#0E2A2F] placeholder:text-[#0E2A2F]/60 focus:outline-none focus:ring-0"
                    >

                </label>


                <label class="block border border-[#1F5A5E] px-4 pb-2.5 pt-3 focus-within:border-[#ffb253] focus-within:ring-1 focus-within:ring-[#ffb253]">

                    <span class="block text-[0.65rem] {{ $label }}">
                        {{ __('contact.f_email') }} *
                    </span>

                    <input
                        type="email"
                        name="email"
                        required
                        autocomplete="email"
                        dir="ltr"
                        placeholder="{{ __('contact.f_email_ph') }}"
                        style="text-align:start"
                        class="mt-1 w-full border-0 bg-transparent p-0 text-sm text-[#0E2A2F] placeholder:text-[#0E2A2F]/60 focus:outline-none focus:ring-0 rtl:placeholder:text-right"
                    >

                </label>

            </div>


            <label class="block border border-[#1F5A5E] px-4 pb-3 pt-3 focus-within:border-[#ffb253] focus-within:ring-1 focus-within:ring-[#ffb253]">

                <span class="block text-[0.65rem] {{ $label }}">
                    {{ __('contact.f_project') }}
                </span>

                <input
                    type="text"
                    name="project"
                    autocomplete="organization"
                    placeholder="{{ __('contact.f_project_ph') }}"
                    class="mt-1 w-full border-0 bg-transparent p-0 text-sm text-[#0E2A2F] placeholder:text-[#0E2A2F]/60 focus:outline-none focus:ring-0"
                >

            </label>


            <label class="block border border-[#1F5A5E] px-4 pb-3 pt-3 focus-within:border-[#ffb253] focus-within:ring-1 focus-within:ring-[#ffb253]">

                <span class="block text-[0.65rem] {{ $label }}">
                    {{ __('contact.f_message') }} *
                </span>

                <textarea
                    name="message"
                    rows="5"
                    required
                    placeholder="{{ __('contact.f_message_ph') }}"
                    class="mt-1 w-full resize-none border-0 bg-transparent p-0 text-sm text-[#0E2A2F] placeholder:text-[#0E2A2F]/60 focus:outline-none focus:ring-0"
                ></textarea>

            </label>


            <!-- honeypot ضد اسپم -->
            <input
                type="checkbox"
                name="botcheck"
                class="hidden"
                tabindex="-1"
                autocomplete="off"
            >


            <button
                type="submit"
                id="contactBtn"
                class="flex w-full items-center justify-center gap-3 bg-[#0B3A3F] px-6 py-4 text-xs text-white transition hover:bg-[#0E2A2F] disabled:cursor-not-allowed disabled:opacity-60 {{ $label }}"
            >

                <span id="contactBtnText">
                    {{ __('contact.send') }}
                </span>

                <svg
                    class="h-5 w-5 text-[#ffb253] rtl:-scale-x-100"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.5"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4 12h16m-6-6 6 6-6 6"
                    />
                </svg>

            </button>


            <p
                id="contactStatus"
                role="status"
                aria-live="polite"
                class="min-h-[1.5rem] text-sm"
            ></p>

        </form>

    </section>

</div>



<script>
(function () {
    const form = document.getElementById('contactForm');

    if (!form) return;

    const status = document.getElementById('contactStatus');
    const button = document.getElementById('contactBtn');
    const buttonText = document.getElementById('contactBtnText');

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const name = form.querySelector('[name="name"]').value.trim();
        const email = form.querySelector('[name="email"]').value.trim();
        const project = form.querySelector('[name="project"]').value.trim();
        const message = form.querySelector('[name="message"]').value.trim();
        const botcheck = form.querySelector('[name="botcheck"]').checked;

        if (botcheck) return;

        if (
            !name ||
            !message ||
            !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
        ) {
            status.textContent = @json(__('contact.invalid'));
            status.className = 'min-h-[1.5rem] text-sm text-red-700';
            return;
        }

        const recipient = 'arezoorazavitabar@gmail.com';

        const subject = project
            ? `پیام جدید درباره ${project}`
            : `پیام جدید از ${name}`;

        const body = [
            `نام فرستنده: ${name}`,
            `ایمیل فرستنده: ${email}`,
            `نام پروژه: ${project || 'ثبت نشده'}`,
            '',
            'متن پیام:',
            message
        ].join('\n');

        const mailto =
            `mailto:${recipient}` +
            `?subject=${encodeURIComponent(subject)}` +
            `&body=${encodeURIComponent(body)}`;

        status.textContent = 'در حال باز کردن برنامه ایمیل...';
        status.className = 'min-h-[1.5rem] text-sm text-[#0E2A2F]';

        if (button) button.disabled = true;

        try {
            window.location.href = mailto;
        } finally {
            setTimeout(function () {
                if (button) button.disabled = false;
            }, 2000);
        }
    });
})();
</script>



@endsection

