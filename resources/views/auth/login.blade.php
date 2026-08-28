<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود به پنل مدیریت</title>

  {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    
    <link rel="stylesheet" href={{ asset("build/assets/app-BEEEs_qR.css") }}>
    <link rel="stylesheet" href={{ asset("build/assets/app-CsdTnicT.css") }}>
    <script src={{ asset("build/assets/app-B4Jkr9Ff.js") }}></script>  


</head>

<body class="bg-slate-100 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md">

        <div class="bg-white shadow-xl rounded-2xl p-8">

            <div class="text-center mb-8">

                <img 
                class="w-24 mx-auto"
                src={{ asset('img/logo-white.png') }} alt="">

                <p class="text-slate-500 mt-2">
                    ورود به پنل مدیریت
                </p>

            </div>

            @if ($errors->any())
                <div class="mb-4 bg-red-100 border border-red-200 text-red-700 px-4 py-3 rounded-lg">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="/login" method="POST" class="space-y-5">

                @csrf

                <div>
                    <label class="block mb-2 text-sm text-slate-700">
                        ایمیل
                    </label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        class="w-full border border-slate-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-slate-800"
                        placeholder="example@gmail.com">
                </div>

                <div>
                    <label class="block mb-2 text-sm text-slate-700">
                        رمز عبور
                    </label>

                    <input
                        type="password"
                        name="password"
                        class="w-full border border-slate-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-slate-800"
                        placeholder="********">
                </div>

                <button
                    type="submit"
                    class="w-full bg-slate-900 hover:bg-slate-800 text-white py-3 rounded-lg transition">

                    ورود

                </button>

            </form>

        </div>

    </div>

</body>

</html>