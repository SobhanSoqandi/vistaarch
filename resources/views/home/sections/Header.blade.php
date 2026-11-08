
<header x-data="{ open: false }" @keydown.escape.window="open = false" class="top-0 w-full z-50 bg-white shadow">

    <div class="max-w-7xl mx-auto px-6 lg:px-10 h-20 flex items-center justify-between">

        <!-- Logo | Desktop unchanged -->
        <a href="/{{ app()->getLocale() }}" class="flex items-center gap-2">
            <span class="h-12 w-0.75 bg-[#B8935A]"></span>
            <div class="leading-tight">
                <div class="text-[#1F3A3D] text-lg tracking-[0.15em] font-serif">
                    AREZOO
                </div>
                <div class="text-[#1F3A3D] text-lg tracking-[0.15em] font-serif">
                    RAZAVI TABAR
                </div>
            </div>
        </a>

        <!-- Desktop Menu | Unchanged -->
        <nav class="hidden md:flex items-center gap-10 text-[#1F3A3D] text-xs tracking-[0.2em] font-medium">

            <a href="/{{ app()->getLocale() }}"
                class="{{ request()->is(app()->getLocale()) ? 'text-[#B8935A] font-semibold border-b-2 border-[#B8935A] pb-1' : 'hover:text-[#B8935A]' }} transition text-[14px]">
                {{ __('messages.home') }}
            </a>

            <a href="/{{ app()->getLocale() }}/about"
                class="{{ request()->is(app()->getLocale() . '/about') ? 'text-[#B8935A] font-semibold border-b-2 border-[#B8935A] pb-1' : 'hover:text-[#B8935A]' }} transition text-[14px]">
                {{ __('messages.about') }}
            </a>

            <a href="/{{ app()->getLocale() }}/projects"
                class="{{ request()->is(app()->getLocale() . '/projects') ? 'text-[#B8935A] font-semibold border-b-2 border-[#B8935A] pb-1' : 'hover:text-[#B8935A]' }} transition text-[14px]">
                {{ __('messages.projects') }}
            </a>

            <a href="/{{ app()->getLocale() }}/contact"
                class="{{ request()->is(app()->getLocale() . '/contact') ? 'text-[#B8935A] font-semibold border-b-2 border-[#B8935A] pb-1' : 'hover:text-[#B8935A]' }} transition text-[14px]">
                {{ __('messages.contact') }}
            </a>

        </nav>

        <!-- Language | Desktop unchanged -->
        <div class="hidden md:flex items-center gap-3 text-xs tracking-[0.15em]">
            <a href="/en" class="{{ app()->getLocale() === 'en' ? 'text-[#1F3A3D] border-b border-[#B8935A] pb-0.5' : 'text-[#1F3A3D]/50' }} hover:text-[#B8935D] transition">EN</a>
            <span class="text-[#1F3A3D]/30">|</span>
            <a href="/de" class="{{ app()->getLocale() === 'de' ? 'text-[#1F3A3D] border-b border-[#B8935A] pb-0.5' : 'text-[#1F3A3D]/50' }} hover:text-[#B8935A] transition">DE</a>
            <span class="text-[#1F3A3D]/30">|</span>
            <a href="/fa" class="{{ app()->getLocale() === 'fa' ? 'text-[#1F3A3D] border-b border-[#B8935A] pb-0.5' : 'text-[#1F3A3D]/50' }} hover:text-[#B8935A] transition">FA</a>
        </div>

        <!-- Mobile Menu Button -->
        <button @click="open = true" type="button" aria-label="Open navigation menu" :aria-expanded="open.toString()" class="md:hidden flex items-center justify-center text-[#1F3A3D] transition hover:text-[#B8935A] active:scale-95">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-8 h-8">
                <path stroke-linecap="round" d="M3 7h18M3 12h12M3 17h18"/>
            </svg>
        </button>

    </div>

    <!-- Mobile Overlay -->
    <div x-cloak x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click="open = false" class="fixed inset-0 z-[60] bg-[#102526]/55 backdrop-blur-[3px] md:hidden"></div>

    <!-- Premium Mobile Sidebar -->
    <aside x-cloak x-show="open" x-trap.inert.noscroll="open" x-transition:enter="transition-transform ease-[cubic-bezier(0.22,1,0.36,1)] duration-500" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition-transform ease-in duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" dir="rtl" class="fixed top-0 right-0 z-[70] flex h-[100dvh] w-[min(88vw,380px)] flex-col overflow-y-auto bg-[#F8F6F0] text-[#1F3A3D] shadow-[-20px_0_60px_rgba(15,35,35,0.16)] md:hidden">

        <!-- Architectural Accent -->
        <div class="absolute right-0 top-0 h-36 w-full pointer-events-none overflow-hidden">
            <div class="absolute -right-16 -top-20 h-72 w-72 rounded-full border border-[#B8935A]/15"></div>
            <div class="absolute -right-7 -top-12 h-52 w-52 rounded-full border border-[#B8935A]/20"></div>
            <div class="absolute right-0 top-0 h-1 w-full bg-gradient-to-l from-[#B8935A] via-[#B8935A]/50 to-transparent"></div>
        </div>

        <!-- Sidebar Header -->
        <div class="relative flex min-h-[116px] items-center justify-between border-b border-[#1F3A3D]/10 px-6 py-5">

            <a href="/{{ app()->getLocale() }}" @click="open = false" class="relative flex min-w-0 items-center">
                <img src="{{ asset('img/landing/Signature.png') }}" alt="Arezoo Razavi Tabar Architecture" class="h-[300px] w-[200px] object-contain object-right">
            </a>

            <!-- Close Button: no circle, no border -->
            <button @click="open = false" type="button" aria-label="Close navigation menu" class="group relative z-10 flex h-11 w-11 shrink-0 items-center justify-center text-[#1F3A3D] transition-colors duration-300 hover:text-[#B8935A]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" class="h-7 w-7 transition-transform duration-300 group-hover:rotate-90">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6l12 12M18 6L6 18"/>
                </svg>
            </button>

        </div>

        <!-- Menu Heading -->
        <div class="px-7 pb-4">
           
            <h2 class="mt-3 text-xl font-medium tracking-tight text-[#1F3A3D]">در یک نگاه</h2>
            <p class="mt-1 text-xs leading-6 text-[#1F3A3D]/55">مسیر موردنظرتان را انتخاب کنید.</p>
        </div>

        <!-- Navigation Links -->
        <nav class="flex flex-col gap-2 px-0 pt-2">

            <!-- Home -->
            <a href="/{{ app()->getLocale() }}" @click="open = false" class="group relative flex min-h-[58px] items-center gap-4 overflow-hidden border-r-3 px-4 py-3 transition-all duration-300 {{ request()->is(app()->getLocale()) ? 'border-[#B8935A] bg-white text-[#1F3A3D] shadow-[0_4px_20px_rgba(31,58,61,0.05)]' : 'border-transparent text-[#1F3A3D]/65 hover:border-[#B8935A]/60 hover:bg-white/70 hover:text-[#1F3A3D]' }}">
                <span class="flex h-9 w-9 shrink-0 items-center justify-center {{ request()->is(app()->getLocale()) ? 'text-[#B8935A]' : 'text-[#1F3A3D]/45 group-hover:text-[#B8935A]' }} transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m3 10 9-7 9 7M5 9v11h14V9M9 20v-7h6v7"/>
                    </svg>
                </span>
                <span class="flex-1 text-sm font-medium">{{ __('messages.home') }}</span>
                @if(request()->is(app()->getLocale()))
                    <span class="text-[9px] font-medium tracking-[0.15em] text-[#B8935A]">HERE</span>
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-4 w-4 text-[#1F3A3D]/20 transition-all duration-300 group-hover:-translate-x-1 group-hover:text-[#B8935A]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m15 18-6-6 6-6"/>
                    </svg>
                @endif
            </a>

            <!-- About -->
            <a href="/{{ app()->getLocale() }}/about" @click="open = false" class="group relative flex min-h-[58px] items-center gap-4 overflow-hidden border-r-3 px-4 py-3 transition-all duration-300 {{ request()->is(app()->getLocale() . '/about') ? 'border-[#B8935A] bg-white text-[#1F3A3D] shadow-[0_4px_20px_rgba(31,58,61,0.05)]' : 'border-transparent text-[#1F3A3D]/65 hover:border-[#B8935A]/60 hover:bg-white/70 hover:text-[#1F3A3D]' }}">
                <span class="flex h-9 w-9 shrink-0 items-center justify-center {{ request()->is(app()->getLocale() . '/about') ? 'text-[#B8935A]' : 'text-[#1F3A3D]/45 group-hover:text-[#B8935A]' }} transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3 4 7v5c0 5 3.5 8 8 9 4.5-1 8-4 8-9V7l-8-4Z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6M12 9v6"/>
                    </svg>
                </span>
                <span class="flex-1 text-sm font-medium">{{ __('messages.about') }}</span>
                @if(request()->is(app()->getLocale() . '/about'))
                    <span class="text-[9px] font-medium tracking-[0.15em] text-[#B8935A]">HERE</span>
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-4 w-4 text-[#1F3A3D]/20 transition-all duration-300 group-hover:-translate-x-1 group-hover:text-[#B8935A]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m15 18-6-6 6-6"/>
                    </svg>
                @endif
            </a>

            <!-- Projects -->
            <a href="/{{ app()->getLocale() }}/projects" @click="open = false" class="group relative flex min-h-[58px] items-center gap-4 overflow-hidden border-r-3 px-4 py-3 transition-all duration-300 {{ request()->is(app()->getLocale() . '/projects') ? 'border-[#B8935A] bg-white text-[#1F3A3D] shadow-[0_4px_20px_rgba(31,58,61,0.05)]' : 'border-transparent text-[#1F3A3D]/65 hover:border-[#B8935A]/60 hover:bg-white/70 hover:text-[#1F3A3D]' }}">
                <span class="flex h-9 w-9 shrink-0 items-center justify-center {{ request()->is(app()->getLocale() . '/projects') ? 'text-[#B8935A]' : 'text-[#1F3A3D]/45 group-hover:text-[#B8935A]' }} transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 21h18M5 21V7l7-4 7 4v14M9 10h.01M15 10h.01M9 14h.01M15 14h.01M10 21v-4h4v4"/>
                    </svg>
                </span>
                <span class="flex-1 text-sm font-medium">{{ __('messages.projects') }}</span>
                @if(request()->is(app()->getLocale() . '/projects'))
                    <span class="text-[9px] font-medium tracking-[0.15em] text-[#B8935A]">HERE</span>
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-4 w-4 text-[#1F3A3D]/20 transition-all duration-300 group-hover:-translate-x-1 group-hover:text-[#B8935A]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m15 18-6-6 6-6"/>
                    </svg>
                @endif
            </a>

            <!-- Contact -->
            <a href="/{{ app()->getLocale() }}/contact" @click="open = false" class="group relative flex min-h-[58px] items-center gap-4 overflow-hidden border-r-3 px-4 py-3 transition-all duration-300 {{ request()->is(app()->getLocale() . '/contact') ? 'border-[#B8935A] bg-white text-[#1F3A3D] shadow-[0_4px_20px_rgba(31,58,61,0.05)]' : 'border-transparent text-[#1F3A3D]/65 hover:border-[#B8935A]/60 hover:bg-white/70 hover:text-[#1F3A3D]' }}">
                <span class="flex h-9 w-9 shrink-0 items-center justify-center {{ request()->is(app()->getLocale() . '/contact') ? 'text-[#B8935A]' : 'text-[#1F3A3D]/45 group-hover:text-[#B8935A]' }} transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 10.5a8.4 8.4 0 0 1-1 3.9 8.5 8.5 0 0 1-7.5 4.6 8.4 8.4 0 0 1-3.9-1l-5.1 1.5 1.5-5.1a8.4 8.4 0 0 1-1-3.9A8.5 8.5 0 0 1 12.5 2h.5a8.5 8.5 0 0 1 8 8v.5Z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01"/>
                    </svg>
                </span>
                <span class="flex-1 text-sm font-medium">{{ __('messages.contact') }}</span>
                @if(request()->is(app()->getLocale() . '/contact'))
                    <span class="text-[9px] font-medium tracking-[0.15em] text-[#B8935A]">HERE</span>
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-4 w-4 text-[#1F3A3D]/20 transition-all duration-300 group-hover:-translate-x-1 group-hover:text-[#B8935A]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m15 18-6-6 6-6"/>
                    </svg>
                @endif
            </a>

        </nav>

        <!-- Language Selector -->
        <div class="px-7 pt-8">
            <div class="mb-4 flex items-center gap-3">
                <span class="h-px w-8 bg-[#B8935A]"></span>
                <span class="text-[10px] font-medium tracking-[0.2em] text-[#1F3A3D]/45">LANGUAGE</span>
            </div>

            <div class="flex items-center gap-2">
                <a href="/en" class="flex-1 py-3 text-center text-xs tracking-[0.15em] transition {{ app()->getLocale() === 'en' ? 'bg-[#1F3A3D] text-white' : 'border border-[#1F3A3D]/10 text-[#1F3A3D]/55 hover:border-[#B8935A]/60 hover:text-[#B8935A]' }}">EN</a>
                <a href="/de" class="flex-1 py-3 text-center text-xs tracking-[0.15em] transition {{ app()->getLocale() === 'de' ? 'bg-[#1F3A3D] text-white' : 'border border-[#1F3A3D]/10 text-[#1F3A3D]/55 hover:border-[#B8935A]/60 hover:text-[#B8935A]' }}">DE</a>
                <a href="/fa" class="flex-1 py-3 text-center text-xs tracking-[0.15em] transition {{ app()->getLocale() === 'fa' ? 'bg-[#1F3A3D] text-white' : 'border border-[#1F3A3D]/10 text-[#1F3A3D]/55 hover:border-[#B8935A]/60 hover:text-[#B8935A]' }}">FA</a>
            </div>

            <button @click="$dispatch('open-language-modal')" type="button" class="mt-3 flex w-full items-center justify-center gap-2 border border-[#B8935A]/30 px-4 py-3 text-xs text-[#1F3A3D]/75 transition duration-300 hover:border-[#B8935A] hover:bg-white hover:text-[#1F3A3D]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-4 w-4">
                    <circle cx="12" cy="12" r="9"/>
                    <path stroke-linecap="round" d="M3 12h18M12 3a15 15 0 0 1 0 18M12 3a15 15 0 0 0 0 18"/>
                </svg>
                {{ strtoupper(app()->getLocale()) }}
                <span class="text-[#B8935A]">·</span>
                تغییر زبان
            </button>
        </div>

        <!-- Contact Information -->
        <div class="mt-auto px-7 pb-7 pt-9">
            <div class="mb-5 flex items-center gap-3">
                <span class="h-px w-8 bg-[#B8935A]"></span>
                <span class="text-[10px] font-medium tracking-[0.2em] text-[#1F3A3D]/45">GET IN TOUCH</span>
            </div>

            <div class="border-t border-[#1F3A3D]/10">

                <a href="tel:09151509347" class="group flex items-center gap-4 border-b border-[#1F3A3D]/10 py-4">
                    <span class="flex h-10 w-10 shrink-0 items-center justify-center bg-white text-[#B8935A] transition-colors duration-300 group-hover:bg-[#1F3A3D]">
                        <svg class="h-[18px] w-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 0 1 2-2h3.28a1 1 0 0 1 .948.684l1.498 4.493a1 1 0 0 1-.502 1.21l-2.257 1.13a11.042 11.042 0 0 0 5.516 5.516l1.13-2.257a1 1 0 0 1 1.21-.502l4.493 1.498a1 1 0 0 1 .684.949V19a2 2 0 0 1-2 2h-1C9.716 21 3 14.284 3 6V5Z"/>
                        </svg>
                    </span>
                    <span class="min-w-0">
                        <span class="mb-1 block text-[10px] text-[#1F3A3D]/40">شماره تماس</span>
                        <span dir="ltr" class="block text-xs tracking-wide text-[#1F3A3D]/80 transition-colors group-hover:text-[#B8935A]">09151509347</span>
                    </span>
                </a>

                <a href="mailto:arezoorazavitabar@gmail.com" class="group flex items-center gap-4 border-b border-[#1F3A3D]/10 py-4">
                    <span class="flex h-10 w-10 shrink-0 items-center justify-center bg-white text-[#B8935A] transition-colors duration-300 group-hover:bg-[#1F3A3D]">
                        <svg class="h-[18px] w-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 7a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7Zm0 1 7.89 5.26a2 2 0 0 0 2.22 0L21 8"/>
                        </svg>
                    </span>
                    <span class="min-w-0 flex-1">
                        <span class="mb-1 block text-[10px] text-[#1F3A3D]/40">ایمیل</span>
                        <span dir="ltr" class="block truncate text-[11px] text-[#1F3A3D]/80 transition-colors group-hover:text-[#B8935A]">arezoorazavitabar@gmail.com</span>
                    </span>
                </a>

                <a href="https://instagram.com/arezoo.razavitabar" target="_blank" rel="noopener noreferrer" class="group flex items-center gap-4 py-4">
                    <span class="flex h-10 w-10 shrink-0 items-center justify-center bg-white text-[#B8935A] transition-colors duration-300 group-hover:bg-[#1F3A3D]">
                        <svg class="h-[18px] w-[18px]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069ZM12 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324ZM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881Z"/>
                        </svg>
                    </span>
                    <span class="min-w-0">
                        <span class="mb-1 block text-[10px] text-[#1F3A3D]/40">اینستاگرام</span>
                        <span dir="ltr" class="block text-xs text-[#1F3A3D]/80 transition-colors group-hover:text-[#B8935A]">arezoo.razavitabar</span>
                    </span>
                </a>

            </div>

            <!-- Footer Signature -->
            <div class="mt-3 flex items-center justify-between border-t border-[#1F3A3D]/10 pt-5">
                <span class="text-[9px] tracking-[0.16em] text-[#1F3A3D]/35">ARCHITECTURE & DESIGN</span>
                <span class="h-px w-10 bg-[#B8935A]/50"></span>
            </div>
        </div>

    </aside>

</header>

<style>
    [x-cloak] {
        display: none !important;
    }
</style>
