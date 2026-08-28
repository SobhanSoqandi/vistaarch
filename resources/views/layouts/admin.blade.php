<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <link rel="stylesheet" href={{ asset("build/assets/app-BEEEs_qR.css") }}>
    <link rel="stylesheet" href={{ asset("build/assets/app-CsdTnicT.css") }}>
    <script src={{ asset("build/assets/app-B4Jkr9Ff.js") }}></script>  

</head>

<body class="bg-slate-100">

    <div x-data="{ open: false }" class="flex min-h-screen relative">

        <!-- Sidebar -->
        <aside :class="open ? 'w-64' : 'w-0'" class="bg-white text-block transition-all duration-300 overflow-hidden absolute top-0 right-0 h-full z-50 shadow-lg">
            
            <!-- Logo -->
            <a href="#">
                <img class="w-32 m-2 mr-28 items-end" src="{{ asset('img/logo-panel.png') }}" alt="">
            </a>

            <!-- Menu -->
            <hr>
            <nav class="p-2 space-y-2">

                <a href="/dashboard"
                    class="block p-2 rounded transition
                   {{ request()->is('dashboard') ? 'bg-slate-200 border-r-4' : 'hover:bg-slate-200' }}">
                    داشبورد
                </a>

                <a href="/companies"
                    class="block p-2 rounded transition
               {{ request()->is('companies*') ? 'bg-slate-200 border-r-4' : 'hover:bg-slate-200' }}">
                    شرکت‌ها
                </a>

                <a href="/styles"
                    class="block p-2 rounded transition
                 {{ request()->is('styles*') ? 'bg-slate-200 border-r-4' : 'hover:bg-slate-200' }}">
                    سبک ها
                </a>

                <a href="/services"
                    class="block p-2 rounded transition
               {{ request()->is('services*') ? 'bg-slate-200 border-r-4' : 'hover:bg-slate-200' }}">
                    نوع خدمات
                </a>

                <a href="/admin/projects"
                    class="block p-2 rounded transition
               {{ request()->is('admin/projects*') ? 'bg-slate-200 border-r-4' : 'hover:bg-slate-200' }}">
                    پروژه‌ها
                </a>

                <form method="POST" action="{{ route('logout') }}" id="logout-form">
                    @csrf
                    <button type="submit"
                        class="w-full text-right cursor-pointer p-2 rounded hover:border-r-4 border-rose-500 hover:bg-rose-100">
                        خروج
                    </button>
                </form>

            </nav>

        </aside>

        <!-- Main -->
        <div class="flex-1 w-full">

            <!-- Header -->
            <header class="bg-white shadow px-4 py-3 flex justify-between items-center">

                <button @click="open = !open" class="text-slate-900 text-2xl cursor-pointer z-50 relative">
                    ☰
                </button>

                <div class="text-slate-700">
                    👋 سلام خانم مهندس خوش اومدی
                </div>

                <a 
                href="/dashboard"
                class="border border-gray-300 shadow p-2 rounded-lg cursor-pointer" >
                    داشبورد
                </a>

            </header>

            <!-- Content -->
            <main class="p-6">

                {{ $slot }}

            </main>

        </div>

    </div>

</body>

</html>