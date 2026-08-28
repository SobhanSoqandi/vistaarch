<footer class="relative overflow-hidden bg-gradient-to-b from-teal-950 via-teal-900 to-teal-900 text-white">

    <!-- خط طلایی بالای فوتر -->
    <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-l from-transparent via-amber-500 to-transparent"></div>

    <!-- گرید خط‌کشیِ نقشه (بلوپرینت) -->
    <div class="absolute inset-0 opacity-[0.05] [background-image:linear-gradient(#F6F2E7_1px,transparent_1px),linear-gradient(90deg,#F6F2E7_1px,transparent_1px)] [background-size:48px_48px]"></div>

    <!-- امضای بصری: پرگار معماری، خیلی محو -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" class="pointer-events-none absolute -bottom-16 -start-16 h-[26rem] w-[26rem] text-white opacity-[0.04]">
        <g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="100" cy="30" r="8"/>
            <path d="M100 38 L60 170"/>
            <path d="M100 38 L140 170"/>
            <path d="M75 110 L125 110"/>
            <circle cx="60" cy="170" r="4" fill="currentColor"/>
            <circle cx="140" cy="170" r="4" fill="currentColor"/>
        </g>
    </svg>

    <div class="relative container mx-auto px-6 lg:px-8">

        <div class="h-px bg-white/10"></div>

        {{-- MAIN FOOTER --}}
        <div class="py-16">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">

                {{-- BRAND --}}
                <div>
                    <div class="mb-6 inline-flex rounded-2xl border border-white/10 bg-white/5 p-3">
                        <img src="{{ asset('img/logo-white.png') }}" alt="گروه معماری ویستاآرچ" class="w-14 rounded-lg">
                    </div>

                    <h3 class="mb-4 flex items-center gap-3 text-xl font-bold">
                        <span class="h-5 w-1 rounded-full bg-amber-500"></span>
                        {{ __('footer.brand_name') }}
                    </h3>

                    <p class="text-sm leading-8 text-zinc-300">
                        {{ __('footer.brand_desc') }}
                    </p>
                </div>

                {{-- SERVICES --}}
                <nav>
                    <h4 class="mb-6 flex items-center gap-3 text-lg font-bold">
                        <span class="h-5 w-1 rounded-full bg-amber-500"></span>
                        {{ __('footer.services') }}
                    </h4>

                    <ul class="space-y-4">
                        <li>
                            <a href="/projects" class="group flex items-center gap-2.5 text-sm text-zinc-300 transition hover:text-amber-400">
                                <span class="h-1 w-1 shrink-0 rounded-full bg-amber-500/60 transition group-hover:scale-125 group-hover:bg-amber-400"></span>
                                {{ __('footer.service_1') }}
                            </a>
                        </li>
                        <li>
                            <a href="/projects" class="group flex items-center gap-2.5 text-sm text-zinc-300 transition hover:text-amber-400">
                                <span class="h-1 w-1 shrink-0 rounded-full bg-amber-500/60 transition group-hover:scale-125 group-hover:bg-amber-400"></span>
                                {{ __('footer.service_2') }}
                            </a>
                        </li>
                        <li>
                            <a href="/projects" class="group flex items-center gap-2.5 text-sm text-zinc-300 transition hover:text-amber-400">
                                <span class="h-1 w-1 shrink-0 rounded-full bg-amber-500/60 transition group-hover:scale-125 group-hover:bg-amber-400"></span>
                                {{ __('footer.service_3') }}
                            </a>
                        </li>
                        <li>
                            <a href="/projects" class="group flex items-center gap-2.5 text-sm text-zinc-300 transition hover:text-amber-400">
                                <span class="h-1 w-1 shrink-0 rounded-full bg-amber-500/60 transition group-hover:scale-125 group-hover:bg-amber-400"></span>
                                {{ __('footer.service_4') }}
                            </a>
                        </li>
                        <li>
                            <a href="/projects" class="group flex items-center gap-2.5 text-sm text-zinc-300 transition hover:text-amber-400">
                                <span class="h-1 w-1 shrink-0 rounded-full bg-amber-500/60 transition group-hover:scale-125 group-hover:bg-amber-400"></span>
                                {{ __('footer.service_5') }}
                            </a>
                        </li>
                    </ul>
                </nav>

                {{-- PROJECTS --}}
                <nav>
                    <h4 class="mb-6 flex items-center gap-3 text-lg font-bold">
                        <span class="h-5 w-1 rounded-full bg-amber-500"></span>
                        {{ __('footer.featured_projects') }}
                    </h4>

                    <ul class="space-y-4">
                        <li>
                            <a href="/projects/aftab" class="group flex items-center gap-2.5 text-sm text-zinc-300 transition hover:text-amber-400">
                                <span class="h-1 w-1 shrink-0 rounded-full bg-amber-500/60 transition group-hover:scale-125 group-hover:bg-amber-400"></span>
                                {{ __('footer.project_aftab') }}
                            </a>
                        </li>
                        <li>
                            <a href="/projects/baghestan" class="group flex items-center gap-2.5 text-sm text-zinc-300 transition hover:text-amber-400">
                                <span class="h-1 w-1 shrink-0 rounded-full bg-amber-500/60 transition group-hover:scale-125 group-hover:bg-amber-400"></span>
                                {{ __('footer.project_baghestan') }}
                            </a>
                        </li>
                        <li>
                            <a href="/projects/raya" class="group flex items-center gap-2.5 text-sm text-zinc-300 transition hover:text-amber-400">
                                <span class="h-1 w-1 shrink-0 rounded-full bg-amber-500/60 transition group-hover:scale-125 group-hover:bg-amber-400"></span>
                                {{ __('footer.project_raya') }}
                            </a>
                        </li>
                        <li>
                            <a href="/projects/tasvir" class="group flex items-center gap-2.5 text-sm text-zinc-300 transition hover:text-amber-400">
                                <span class="h-1 w-1 shrink-0 rounded-full bg-amber-500/60 transition group-hover:scale-125 group-hover:bg-amber-400"></span>
                                {{ __('footer.project_tasvir') }}
                            </a>
                        </li>
                        <li>
                            <a href="/projects/dreamhouse" class="group flex items-center gap-2.5 text-sm text-zinc-300 transition hover:text-amber-400">
                                <span class="h-1 w-1 shrink-0 rounded-full bg-amber-500/60 transition group-hover:scale-125 group-hover:bg-amber-400"></span>
                                {{ __('footer.project_dreamhouse') }}
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 border-t border-white/10 pt-8">

                {{-- CONTACT --}}
                <div>
                    <h4 class="mb-6 flex items-center gap-3 text-lg font-bold">
                        <span class="h-5 w-1 rounded-full bg-amber-400"></span>
                        {{ __('footer.contact_info') }}
                    </h4>

                    <address class="not-italic space-y-4">
                        <div class="flex items-start gap-4">
                            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-white/10 bg-white/5 text-amber-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </span>
                            <span class="mt-2 text-sm leading-7 text-zinc-300">{{ __('footer.address') }}</span>
                        </div>

                        <a href="tel:09151509347" class="group flex items-center gap-4 text-sm text-zinc-300 transition hover:text-amber-400">
                            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-white/10 bg-white/5 text-amber-400 transition group-hover:bg-amber-400 group-hover:text-teal-950">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </span>
                            <span dir="ltr">09151509347</span>
                        </a>

                        <a href="mailto:arezoorazavitabar@gmail.com" class="group flex items-center gap-4 text-sm text-zinc-300 transition hover:text-amber-400">
                            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-white/10 bg-white/5 text-amber-400 transition group-hover:bg-amber-400 group-hover:text-teal-950">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </span>
                            <span dir="ltr">arezoorazavitabar@gmail.com</span>
                        </a>

                        <a href="https://instagram.com/arezoo.razavitabar" target="_blank" rel="noopener noreferrer" class="group flex items-center gap-4 text-sm text-zinc-300 transition hover:text-amber-400">
                            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-white/10 bg-white/5 text-amber-400 transition group-hover:bg-amber-400 group-hover:text-teal-950">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                                </svg>
                            </span>
                            <span dir="ltr">arezoo.razavitabar</span>
                        </a>

                        <a href="https://wa.me/989151509347?text=سلام%20من%20از%20سایت%20شما%20پیام%20می‌دهم" target="_blank" rel="noopener noreferrer" class="group flex items-center gap-4 text-sm text-zinc-300 transition hover:text-amber-400">
                            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-white/10 bg-white/5 text-amber-400 transition group-hover:bg-amber-400 group-hover:text-teal-950">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                        clip-rule="evenodd" />
                                    <path d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                                </svg>
                            </span>
                            <span dir="ltr">09151509347</span>
                        </a>
                    </address>
                </div>

                {{-- MAP --}}
                <div>
                    <h4 class="mb-6 flex items-center gap-3 text-lg font-bold">
                        <span class="h-5 w-1 rounded-full bg-amber-500"></span>
                        {{ __('footer.office_location') }}
                    </h4>

                    <div class="relative">
                        <div class="absolute -bottom-2 -end-2 h-full w-full rounded-2xl border-2 border-amber-500/50"></div>
                        <div class="relative overflow-hidden rounded-2xl border border-white/10 bg-teal-950">
                            <iframe title="موقعیت دفتر ویستاآرچ" loading="lazy" class="h-[280px] w-full grayscale-[0.3] contrast-[1.1]"
                                src="https://maps.google.com/maps?q=36.2078372969294,58.79455155169288&z=15&output=embed">
                            </iframe>
                        </div>
                    </div>

                    <p class="mt-5 text-xs leading-6 text-zinc-400">
                        {{ __('footer.office_name') }}
                    </p>
                </div>
            </div>

        </div>

        <div class="h-px bg-white/10"></div>

        {{-- BOTTOM --}}
        <div class="flex flex-col items-center justify-between gap-5 py-8 md:flex-row">
            <p class="text-center text-sm text-zinc-100 md:text-right">
                © {{ date('Y') }}
                {{ __('footer.copyright_1') }}
                {{ __('footer.copyright_2') }}
                {{ __('footer.copyright_3') }}
            </p>

            <div class="flex flex-wrap items-center justify-center gap-3">
                <a href="https://wa.me/989151509347?text=سلام%20من%20از%20سایت%20شما%20پیام%20می‌دهم"
                    class="flex h-11 w-11 items-center justify-center rounded-full border border-white/10 bg-white/5 text-zinc-300 transition hover:border-amber-400 hover:bg-amber-400 hover:text-teal-950">
                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                            clip-rule="evenodd" />
                        <path fill="currentColor"
                            d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                    </svg>
                </a>
                <a href="https://instagram.com/arezoo.razavitabar"
                    class="flex h-11 w-11 items-center justify-center rounded-full border border-white/10 bg-white/5 text-zinc-300 transition hover:border-amber-400 hover:bg-amber-400 hover:text-teal-950">
                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="mailto:Arezoorazavitabar@gmail.com"
                    class="flex h-11 w-11 items-center justify-center rounded-full border border-white/10 bg-white/5 text-zinc-300 transition hover:border-amber-400 hover:bg-amber-400 hover:text-teal-950">
                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                    </svg>
                </a>
                <a href="tel:09151509347"
                    class="flex h-11 w-11 items-center justify-center rounded-full border border-white/10 bg-white/5 text-zinc-300 transition hover:border-amber-400 hover:bg-amber-400 hover:text-teal-950">
                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z" />
                    </svg>
                </a>
            </div>
        </div>

    </div>

</footer>