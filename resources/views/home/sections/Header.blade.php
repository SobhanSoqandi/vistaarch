<header x-data="{ open: false }" class="top-0 w-full z-50 bg-white shadow">

    <div class="max-w-7xl mx-auto px-4 h-20 flex items-center justify-between">

        <!-- Logo -->
        <a href="/{{ app()->getLocale() }}">
            <img src="{{ asset('img/logo-white.png') }}" alt="{{ __('messages.site_title') }}" class="h-14">
        </a>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex items-center gap-10 font-medium text-teal-900 text-sm tracking-wide">

            <a href="/{{ app()->getLocale() }}" class="hover:text-amber-600 transition">
                {{ __('messages.home') }}
            </a>

            <a href="/{{ app()->getLocale() }}/about" class="hover:text-amber-600 transition">
                {{ __('messages.about') }}
            </a>

            <a href="/{{ app()->getLocale() }}/projects" class="hover:text-amber-600 transition">
                {{ __('messages.projects') }}
            </a>

            <a href="/{{ app()->getLocale() }}/contact" class="hover:text-amber-600 transition">
                {{ __('messages.contact') }}
            </a>

        </nav>

        <!-- Language -->
        <div class="hidden md:flex items-center gap-4 text-sm">

            {{-- <span class="h-6 w-px bg-teal-900/15"></span> --}}

            {{-- <button @click="$dispatch('open-language-modal')"
                class="flex items-center gap-1 text-teal-900/70 hover:text-amber-600 transition tracking-wide">
                {{ __('messages.change_language') }}
            </button> --}}

            <span class="h-6 w-px bg-teal-900/15"></span>

            <div class="flex items-center gap-3">
                <a href="/en"
                    class="{{ app()->getLocale() === 'en' ? 'text-amber-600 font-semibold' : 'text-teal-900/50' }} hover:text-amber-600 transition">
                    EN
                </a>
                <a href="/fa"
                    class="{{ app()->getLocale() === 'fa' ? 'text-amber-600 font-semibold' : 'text-teal-900/50' }} hover:text-amber-600 transition">
                    FA
                </a>
                <a href="/de"
                    class="{{ app()->getLocale() === 'de' ? 'text-amber-600 font-semibold' : 'text-teal-900/50' }} hover:text-amber-600 transition">
                    DE
                </a>
            </div>

        </div>

        <!-- Mobile Button -->
        <button @click="open = true" class="md:hidden text-3xl text-teal-900">
            ☰
        </button>

    </div>

    <!-- Overlay -->
    <div x-show="open" x-transition.opacity @click="open = false" class="fixed inset-0 bg-black/50 z-40"></div>

    <!-- Sidebar -->
    <aside x-show="open" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full" dir="rtl"
        class="fixed top-0 right-0 z-50 h-screen w-72 overflow-y-auto bg-[#F6F2E7] shadow-2xl md:hidden ">

        <!-- خط طلایی کنارِ پنل -->
        <div class="absolute inset-y-0 start-0 w-1 bg-gradient-to-b from-transparent via-amber-500 to-transparent">
        </div>

        <!-- Header -->
        <div class="flex h-20 items-center justify-between border-b border-teal-900/10 px-6">

            <img src="{{ asset('img/logo-panel.png') }}" alt="logo" class="h-12 rounded-xl">

            <button @click="open = false"
                class="flex h-9 w-9 items-center justify-center rounded-full border border-teal-800 text-teal-800">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" class="h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

        </div>

        <!-- Links -->
        <nav class="flex flex-col gap-1 p-6">

            <a href="/{{ app()->getLocale() }}"
                class="group flex items-center gap-3 rounded-xl px-3 py-3 text-sm  text-teal-700 transition ">
                <span
                    class="h-1.5 w-1.5 shrink-0 rounded-full bg-amber-500/0 transition group-hover:bg-amber-500"></span>
                {{ __('messages.home') }}
            </a>

            <a href="/{{ app()->getLocale() }}/about"
                class="group flex items-center gap-3 rounded-xl px-3 py-3 text-sm  text-teal-700 transition ">
                <span
                    class="h-1.5 w-1.5 shrink-0 rounded-full bg-amber-500/0 transition group-hover:bg-amber-500"></span>
                {{ __('messages.about') }}
            </a>

            <a href="/{{ app()->getLocale() }}/projects"
                class="group flex items-center gap-3 rounded-xl px-3 py-3 text-sm  text-teal-700 transition ">
                <span
                    class="h-1.5 w-1.5 shrink-0 rounded-full bg-amber-500/0 transition group-hover:bg-amber-500"></span>
                {{ __('messages.projects') }}
            </a>

            <a href="/{{ app()->getLocale() }}/contact"
                class="group flex items-center gap-3 rounded-xl px-3 py-3 text-sm  text-teal-700 transition ">
                <span
                    class="h-1.5 w-1.5 shrink-0 rounded-full bg-amber-500/0 transition group-hover:bg-amber-500"></span>
                {{ __('messages.contact') }}
            </a>

            <button @click="$dispatch('open-language-modal')"
                class="mt-4 flex items-center justify-center gap-2 rounded-xl border border-teal-900/10 px-4 py-2.5 text-sm font-semibold text-teal-900/70 transition hover:border-amber-500/40 hover:bg-amber-500/10 hover:text-teal-950">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" class="h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 12h18M12 3a15.3 15.3 0 010 18M12 3a15.3 15.3 0 000 18" />
                </svg>
                {{ strtoupper(app()->getLocale()) }}
            </button>

            {{-- CONTACT --}}
            <address class="not-italic">
                <div class="mt-6 space-y-3 border-t border-teal-900/10 pt-6">

                    <a href="tel:09151509347"
                        class="group flex items-center gap-3 text-xs text-teal-900/60 transition hover:text-amber-600">
                        <span
                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-teal-900/[0.04] text-teal-900/50 transition group-hover:bg-amber-500 group-hover:text-teal-950">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </span>
                        <span dir="ltr">09151509347</span>
                    </a>

                    <a href="mailto:arezoorazavitabar@gmail.com"
                        class="group flex items-center gap-3 text-xs text-teal-900/60 transition hover:text-amber-600">
                        <span
                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-teal-900/[0.04] text-teal-900/50 transition group-hover:bg-amber-500 group-hover:text-teal-950">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </span>
                        <span dir="ltr" class="truncate">arezoorazavitabar@gmail.com</span>
                    </a>

                    <a href="https://instagram.com/arezoo.razavitabar" target="_blank" rel="noopener noreferrer"
                        class="group flex items-center gap-3 text-xs text-teal-900/60 transition hover:text-amber-600">
                        <span
                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-teal-900/[0.04] text-teal-900/50 transition group-hover:bg-amber-500 group-hover:text-teal-950">
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                            </svg>
                        </span>
                        <span dir="ltr">arezoo.razavitabar</span>
                    </a>

                </div>
            </address>

        </nav>

    </aside>

</header>