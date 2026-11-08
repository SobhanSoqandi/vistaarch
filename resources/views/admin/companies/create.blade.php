
<x-admin-layout>

    <h1 class="text-2xl font-bold text-slate-800 mb-7">
        افزودن شرکت
    </h1>

    <form
        action="{{ route('companies.store') }}"
        method="POST"
        enctype="multipart/form-data"
        class="bg-white border border-slate-200 p-7 rounded-2xl shadow-sm"
    >

        @csrf

        <div class="mb-6">

            <label class="block mb-2.5 text-sm font-semibold text-slate-700">
                نام شرکت (فارسی)
            </label>

            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                class="w-full border border-slate-200 bg-slate-50 rounded-xl px-4 py-3 text-sm text-slate-800 outline-none transition-all duration-200 placeholder:text-slate-400 focus:bg-white focus:border-slate-400 focus:ring-4 focus:ring-slate-100 @error('name') border-red-400 focus:border-red-400 focus:ring-red-50 @enderror"
            >

            @error('name')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">

            <label class="block mb-2.5 text-sm font-semibold text-slate-700">
                عنوان انگلیسی
            </label>

            <input
                type="text"
                name="slug"
                value="{{ old('slug') }}"
                class="w-full border border-slate-200 bg-slate-50 rounded-xl px-4 py-3 text-sm text-slate-800 outline-none transition-all duration-200 placeholder:text-slate-400 focus:bg-white focus:border-slate-400 focus:ring-4 focus:ring-slate-100 @error('slug') border-red-400 focus:border-red-400 focus:ring-red-50 @enderror"
            >

            @error('slug')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">

            <label class="block mb-2.5 text-sm font-semibold text-slate-700">
                توضیحات انگلیسی
            </label>

            <textarea
                name="address"
                class="w-full min-h-32 border border-slate-200 bg-slate-50 rounded-xl px-4 py-3 text-sm text-slate-800 outline-none resize-y transition-all duration-200 placeholder:text-slate-400 focus:bg-white focus:border-slate-400 focus:ring-4 focus:ring-slate-100 @error('address') border-red-400 focus:border-red-400 focus:ring-red-50 @enderror"
            >{{ old('address') }}</textarea>

            @error('address')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">

            <label class="block mb-2.5 text-sm font-semibold text-slate-700">
                توضیحات فارسی
            </label>

            <textarea
                name="description"
                class="w-full min-h-32 border border-slate-200 bg-slate-50 rounded-xl px-4 py-3 text-sm text-slate-800 outline-none resize-y transition-all duration-200 placeholder:text-slate-400 focus:bg-white focus:border-slate-400 focus:ring-4 focus:ring-slate-100 @error('description') border-red-400 focus:border-red-400 focus:ring-red-50 @enderror"
            >{{ old('description') }}</textarea>

            @error('description')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-7">

            <label class="block mb-2.5 text-sm font-semibold text-slate-700">
                لوگو شرکت
            </label>

            <input
                type="file"
                name="logo"
                accept="image/*"
                class="w-full border border-dashed border-slate-300 bg-slate-50 rounded-xl px-4 py-3 text-sm text-slate-600 cursor-pointer transition-all duration-200 hover:bg-slate-100 hover:border-slate-400 file:mr-4 file:rounded-lg file:border-0 file:bg-slate-900 file:px-4 file:py-2 file:text-sm file:font-medium file:text-white file:cursor-pointer @error('logo') border-red-400 @enderror"
            >

            <p class="text-xs text-slate-400 mt-2">
                فرمت‌های مجاز: JPEG، PNG، JPG، GIF، WebP (حداکثر 2 مگابایت)
            </p>

            @error('logo')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror

        </div>

        <button
            class="bg-emerald-800 hover:bg-emerald-800 active:bg-emerald-950 text-white px-6 py-3 rounded-xl w-40 text-sm font-semibold shadow-sm hover:shadow-md transition-all duration-200"
        >
            ذخیره
        </button>

    </form>

</x-admin-layout>

