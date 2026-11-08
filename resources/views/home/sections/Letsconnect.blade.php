
@php
    $dir = app()->getLocale() === 'fa' ? 'rtl' : 'ltr';
    $display = $display ?? 'font-serif uppercase tracking-wide leading-tight text-[#0E2A2F]';
    $label = $label ?? 'font-medium uppercase tracking-[0.2em] text-[#0E2A2F]';
    $field = 'block w-full border border-[#1F5A5E]/25 bg-transparent px-4 py-3.5 text-sm text-[#0E2A2F] placeholder:text-[#0E2A2F]/50 transition focus:border-[#d8a676] focus:outline-none focus:ring-1 focus:ring-[#d8a676]';
    $wa = __('contact.whatsapp_number');
@endphp

<section dir="{{ $dir }}" class="container mx-auto grid gap-12 bg-[#FAFAF8] px-6 pb-24 pt-10 text-start lg:grid-cols-[0.8fr_1.3fr_0.8fr] lg:gap-0">

    <div class="lg:pe-10">

        <h2 class="text-4xl sm:text-5xl {{ $display }}">
            {{ __('contact.lc_title_1') }}
            <span class="block text-[#d8a676]">{{ __('contact.lc_title_2') }}</span>
        </h2>

        <span class="mt-8 block h-px w-14 bg-[#d8a676]"></span>

        <p class="mt-8 max-w-xs text-sm leading-7 text-[#0E2A2F]/80">
            {{ __('contact.lc_text') }}
        </p>

        <ul class="mt-10 space-y-6">

            <li class="flex items-start gap-4">
                <svg class="mt-0.5 h-6 w-6 shrink-0 text-[#d8a676]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 12 21 4l-5 16-4-6-9-2Zm9 2 9-10"/>
                </svg>
                <div class="min-w-0">
                    <p class="text-[0.65rem] {{ $label }}">{{ __('contact.email') }}</p>
                    <a href="mailto:{{ __('contact.email_address') }}" dir="ltr" class="mt-1 block break-all text-sm text-[#0E2A2F]/80 hover:text-[#d8a676] {{ $dir === 'rtl' ? 'text-right' : 'text-left' }}">
                        {{ __('contact.email_address') }}
                    </a>
                </div>
            </li>

            <li class="flex items-start gap-4">
                <svg class="mt-0.5 h-6 w-6 shrink-0 text-[#d8a676]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2Z"/>
                </svg>
                <div>
                    <p class="text-[0.65rem] {{ $label }}">{{ __('contact.lc_phone') }}</p>
                    <a href="tel:+{{ $wa }}" dir="ltr" class="mt-1 block text-sm text-[#0E2A2F]/80 hover:text-[#d8a676] {{ $dir === 'rtl' ? 'text-right' : 'text-left' }}">
                        {{ __('contact.phone') }}
                    </a>
                </div>
            </li>

            <li class="flex items-start gap-4">
                <svg class="mt-0.5 h-6 w-6 shrink-0 text-[#d8a676]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21s7-6.2 7-11.5a7 7 0 0 0-14 0C5 14.8 12 21 12 21Zm0-8.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                </svg>
                <div>
                    <p class="text-[0.65rem] {{ $label }}">{{ __('contact.lc_location') }}</p>
                    <p class="mt-1 text-sm leading-6 text-[#0E2A2F]/80">
                        {{ __('contact.address') }}
                    </p>
                    <p class="mt-1 text-xs text-[#0E2A2F]/60">
                        {{ __('contact.lc_note') }}
                    </p>
                </div>
            </li>

            @if(__('contact.instagram_url'))
                <li class="flex items-start gap-4">
                    <svg class="mt-0.5 h-6 w-6 shrink-0 text-[#d8a676]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2">
                        <rect x="3" y="3" width="18" height="18" rx="5"/>
                        <circle cx="12" cy="12" r="4"/>
                        <circle cx="17.5" cy="6.5" r=".7" fill="currentColor"/>
                    </svg>
                    <div class="min-w-0">
                        <p class="text-[0.65rem] {{ $label }}">{{ __('contact.instagram') }}</p>
                        <a href="{{ __('contact.instagram_url') }}" target="_blank" rel="noopener noreferrer" dir="ltr" class="mt-1 block break-all text-sm text-[#0E2A2F]/80 transition hover:text-[#d8a676] {{ $dir === 'rtl' ? 'text-right' : 'text-left' }}">
                            instagram.com/arezoo.razavitabar
                        </a>
                    </div>
                </li>
            @endif

            @if(__('contact.linkedin_url'))
                <li class="flex items-start gap-4">
                    <svg class="mt-0.5 h-6 w-6 shrink-0 text-[#d8a676]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 4h16v16H4z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 10v7m0-10v.01M12 17v-4a3 3 0 0 1 6 0v4m-6-7v7"/>
                    </svg>
                    <div class="min-w-0">
                        <p class="text-[0.65rem] {{ $label }}">{{ __('contact.linkedin') }}</p>
                        <a href="{{ __('contact.linkedin_url') }}" target="_blank" rel="noopener noreferrer" dir="ltr" class="mt-1 block break-all text-sm text-[#0E2A2F]/80 transition hover:text-[#d8a676] {{ $dir === 'rtl' ? 'text-right' : 'text-left' }}">
                            linkedin.com/in/arezoo-razavitabar
                        </a>
                    </div>
                </li>
            @endif

        </ul>

    </div>

    <div class="lg:border-x lg:border-[#1F5A5E]/20 lg:px-10">

        <p class="mb-6 text-xs {{ $label }}">{{ __('contact.lc_kicker') }}</p>

        <form id="contactForm" novalidate class="space-y-3">

            <div class="grid gap-3 sm:grid-cols-2">

                <label class="block">
                    <span class="sr-only">{{ __('contact.lc_name') }}</span>
                    <input
                        type="text"
                        name="name"
                        required
                        autocomplete="name"
                        placeholder="{{ __('contact.lc_name') }}"
                        class="{{ $field }}"
                    >
                </label>

                <label class="block">
                    <span class="sr-only">{{ __('contact.lc_email') }}</span>
                    <input
                        type="email"
                        name="email"
                        required
                        autocomplete="email"
                        dir="ltr"
                        placeholder="{{ __('contact.lc_email') }}"
                        class="{{ $field }} {{ $dir === 'rtl' ? 'text-right placeholder:text-right' : 'text-left' }}"
                    >
                </label>

            </div>

            <label class="block">
                <span class="sr-only">{{ __('contact.lc_subject') }}</span>
                <input
                    type="text"
                    name="project"
                    autocomplete="organization"
                    placeholder="{{ __('contact.lc_subject') }}"
                    class="{{ $field }}"
                >
            </label>

            <label class="block">
                <span class="sr-only">{{ __('contact.lc_message') }}</span>
                <textarea
                    name="message"
                    rows="8"
                    required
                    placeholder="{{ __('contact.lc_message') }}"
                    class="{{ $field }} h-[550px] resize-none"
                ></textarea>
            </label>

            <input type="checkbox" name="botcheck" class="hidden" tabindex="-1" autocomplete="off">

            <button
                type="submit"
                id="contactBtn"
                class="inline-flex w-full items-center justify-center gap-4 bg-[#0B3A3F] px-8 py-4 text-xs text-white transition hover:bg-[#0E2A2F] disabled:cursor-not-allowed disabled:opacity-60 sm:w-auto {{ $label }}"
            >
                <span id="contactBtnText">{{ __('contact.lc_send') }}</span>
                <svg class="h-5 w-5 text-white {{ $dir === 'rtl' ? '-scale-x-100' : '' }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 12h16m-6-6 6 6-6 6"/>
                </svg>
            </button>

            <p id="contactStatus" role="status" aria-live="polite" class="min-h-[1.5rem] text-sm"></p>

        </form>

    </div>

    <div class="relative hidden lg:block lg:ps-10">

        <span class="pointer-events-none absolute -top-4 end-0 h-14 w-14 border-e border-t border-[#d8a676]"></span>

        <img
            src="{{ asset('img/connect.jfif') }}"
            alt=""
            loading="lazy"
            class="h-full min-h-[28rem] w-full object-cover"
        >

    </div>

</section>

<script>
(function () {
    const form = document.getElementById('contactForm');

    if (!form) return;

    const status = document.getElementById('contactStatus');
    const button = document.getElementById('contactBtn');

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

        const recipient = @json(__('contact.email_address'));

        const subject = project
            ? `${@json(__('contact.mail_subject'))}: ${project}`
            : `${@json(__('contact.mail_subject'))}: ${name}`;

        const body = [
            `${@json(__('contact.mail_sender'))}: ${name}`,
            `${@json(__('contact.email'))}: ${email}`,
            `${@json(__('contact.lc_subject'))}: ${project || @json(__('contact.mail_not_registered'))}`,
            '',
            `${@json(__('contact.mail_message'))}:`,
            message
        ].join('\n');

        const mailto =
            `mailto:${recipient}` +
            `?subject=${encodeURIComponent(subject)}` +
            `&body=${encodeURIComponent(body)}`;

        status.textContent = @json(__('contact.opening_email'));
        status.className = 'min-h-[1.5rem] text-sm text-[#0E2A2F]';

        button.disabled = true;

        try {
            window.location.href = mailto;
        } finally {
            setTimeout(function () {
                button.disabled = false;
            }, 2000);
        }
    });
})();
</script>
