<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Website')</title>

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    
    <link rel="stylesheet" href={{ asset("build/assets/app-BEEEs_qR.css") }}>
    <link rel="stylesheet" href={{ asset("build/assets/app-CwctoW-C.css") }}>
    <script src={{ asset("build/assets/app-xJpWWMB1.js") }}></script>  

    <div x-data="languageModal()" x-init="init()" @open-language-modal.window="open = true" x-cloak>

        <!-- Overlay -->
        <div x-show="open" x-transition.opacity @click="close()" class="fixed inset-0 bg-black/50 z-[9998]" x-cloak>
        </div>

        <!-- Modal -->
        <div x-show="open" x-transition x-cloak class="fixed inset-0 z-[9999] flex items-center justify-center p-5">
            <div @click.stop class="bg-white rounded-3xl p-8 w-full max-w-md shadow-2xl text-center">

                <!-- Close -->
                <button @click="close()" class="absolute top-5 left-5 text-3xl text-slate-300 hover:text-teal-500">
                    ×
                </button>

                <h2 class="text-2xl font-bold mb-3">
                    زبان خود را انتخاب کنید
                </h2>

                <p class="text-slate-500 mb-8">
                    Please select your language
                </p>

                <div class="space-y-4">

                    <button @click="choose('fa')" class="w-full py-3 rounded-xl bg-slate-100 hover:bg-slate-200">
                        🇮🇷 فارسی 
                    </button>

                    <button @click="choose('en')" class="w-full py-3 rounded-xl bg-slate-100 hover:bg-slate-200">
                        🇺🇸 English
                    </button>

                    <button @click="choose('de')" class="w-full py-3 rounded-xl bg-slate-100 hover:bg-slate-200">
                        🇩🇪 Deutsch
                    </button>

                </div>

            </div>
        </div>

    </div>

<body class="bg-slate-50 font-sans">

    {{-- HEADER --}}
    @include('home.sections.Header')

    {{-- MAIN CONTENT --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('home.sections.footer')

</body>

</html>
