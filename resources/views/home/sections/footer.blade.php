<footer dir="{{ app()->getLocale() === 'fa' ? 'rtl' : 'ltr' }}" class="relative overflow-hidden bg-[#06383c] text-white">
    {{-- Architectural Background --}}
    <div class="pointer-events-none absolute bottom-0 end-0  opacity-20">
        <svg viewBox="0 0 600 300" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-auto">
            <g stroke="#c9a86a" stroke-width="1" opacity="0.8">
                <path d="M360 300V135L410 105V300" />
                <path d="M410 300V105L455 135V300" />
                <path d="M360 135L410 105L455 135" />
                <path d="M430 300V95L480 65V300" />
                <path d="M480 300V65L530 100V300" />
                <path d="M430 95L480 65L530 100" />
                <path d="M500 300V125L545 95V300" />
                <path d="M545 300V95L580 120V300" />
                <path d="M500 125L545 95L580 120" />
                <path d="M380 135V300" />
                <path d="M395 120V300" />
                <path d="M445 120V300" />
                <path d="M465 80V300" />
                <path d="M495 75V300" />
                <path d="M520 85V300" />
                <path d="M555 110V300" />
                <path d="M360 165L455 165" />
                <path d="M360 190L455 190" />
                <path d="M360 215L455 215" />
                <path d="M430 125L530 125" />
                <path d="M430 150L530 150" />
                <path d="M430 175L530 175" />
                <path d="M500 150L580 150" />
                <path d="M500 180L580 180" />
                <path d="M500 210L580 210" />
            </g>
        </svg>
    </div>

    {{-- Main Footer --}}
    <div class="relative z-10 mx-auto px-4 lg:px-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-[1.5fr_1fr_1fr_1fr] gap-0 py-12 lg:py-16">
            {{-- BRAND --}}
            <div class="pb-10 sm:pe-8 lg:pe-12 lg:pb-0 border-b sm:border-e sm:border-b-0 border-white/15">
                <div class="flex items-start gap-4">
                    <span class="w-1 h-14 bg-[#c9a86a] shrink-0"></span>
                    <div>
                        <h2 class="font-serif text-xl sm:text-2xl uppercase leading-tight tracking-wide">AREZOO<br>RAZAVI TABAR</h2>
                    </div>
                </div>
                <p class="mt-5 ms-5 text-[16px] sm:text-xs uppercase tracking-[0.35em] text-[#c9a86a]">Architect</p>
                <p class="mt-5 ms-5 max-w-xs text-xs sm:text-sm leading-6 text-white/65">{{ __('footer.cta_desc') }}</p>
            </div>

            {{-- NAVIGATION --}}
            <div class="py-10 sm:ps-8 lg:px-10 lg:py-0 border-b lg:border-e border-white/15">
                <h3 class="text-[16px] uppercase tracking-[0.25em] text-white/90 mb-6">{{ __('footer.navigation') }}</h3>
                <nav class="flex flex-col gap-3">
                    <a href="/{{ app()->getLocale() }}" class="text-[15px] uppercase tracking-[0.12em] text-white/65 hover:text-[#c9a86a] transition">{{ __('footer.home') }}</a>
                    <a href="/{{ app()->getLocale() }}/about" class="text-[15px] uppercase tracking-[0.12em] text-white/65 hover:text-[#c9a86a] transition">{{ __('footer.about') }}</a>
                    <a href="/{{ app()->getLocale() }}/projects" class="text-[15px] uppercase tracking-[0.12em] text-white/65 hover:text-[#c9a86a] transition">{{ __('footer.projects') }}</a>
                    <a href="/{{ app()->getLocale() }}/contact" class="text-[15px] uppercase tracking-[0.12em] text-white/65 hover:text-[#c9a86a] transition">{{ __('footer.contact') }}</a>
                </nav>
            </div>

            {{-- FOLLOW --}}
            <div class="py-10 sm:pe-8 lg:px-10 lg:py-0 border-b sm:border-e lg:border-b-0 border-white/15">
                <h3 class="text-[16px] uppercase tracking-[0.25em] text-white/90 mb-6">{{ __('footer.follow') }}</h3>
                <div class="flex flex-col gap-4">
                    <a href="https://www.linkedin.com/in/arezoo-razavitabar" target="_blank" rel="noopener noreferrer" class="group flex items-center gap-3 text-white/65 hover:text-[#c9a86a] transition">
                        <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 1 1 0-4.124 2.062 2.062 0 0 1 0 4.124zM7.114 20.452H3.558V9h3.556v11.452z"/></svg>
                        <span class="text-[15px] uppercase tracking-[0.12em]">{{ __('footer.linkedin') }}</span>
                    </a>
                    <a href="https://instagram.com/arezoo.razavitabar" target="_blank" rel="noopener noreferrer" class="group flex items-center gap-3 text-white/65 hover:text-[#c9a86a] transition">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
                        <span class="text-[15px] uppercase tracking-[0.12em]">{{ __('footer.instagram') }}</span>
                    </a>
                    <a href="mailto:arezoo.razavitabar@gmail.com" class="group flex items-center gap-3 text-white/65 hover:text-[#c9a86a] transition">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="1.7" viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
                        <span class="text-[15px] uppercase tracking-[0.12em]">{{ __('footer.email') }}</span>
                    </a>
                </div>
            </div>

            {{-- COPYRIGHT --}}
            <div class="pt-10 lg:pt-0 lg:ps-10 flex flex-col justify-between min-h-[170px]">
                <div>
                    <p class="text-[14px] uppercase tracking-[0.15em] text-white/60 leading-5">© {{ date('Y') }} {{ __('footer.copyright') }}</p>
                    {{-- <p class="mt-1 text-[10px] text-white/45">All rights reserved.</p> --}}
                </div>
               
            </div>
        </div>
    </div>

    {{-- Bottom subtle line --}}
    <div class="relative z-10 border-t border-white/10"></div>
</footer>