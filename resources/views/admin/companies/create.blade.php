<x-admin-layout>

    <h1 class="text-2xl font-bold mb-6">
        افزودن شرکت
    </h1>

    <form
        action="{{ route('companies.store') }}"
        method="POST"
        enctype="multipart/form-data"
        class="bg-white p-6 rounded-xl shadow"
    >

        @csrf

        <div class="mb-5">

            <label class="block mb-2">
                نام شرکت
            </label>

            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                class="w-full border rounded-lg p-3 @error('name') border-red-500 @enderror"
            >

            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-5">

            <label class="block mb-2">
                آدرس
            </label>

            <textarea
                name="address"
                class="w-full border rounded-lg p-3 @error('address') border-red-500 @enderror"
            >{{ old('address') }}</textarea>

            @error('address')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-5">

            <label class="block mb-2">
                توضیحات
            </label>

            <textarea
                name="description"
                class="w-full border rounded-lg p-3 @error('description') border-red-500 @enderror"
            >{{ old('description') }}</textarea>

            @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-5">

            <label class="block mb-2">
                لوگو شرکت
            </label>

            <input
                type="file"
                name="logo"
                accept="image/*"
                class="w-full border rounded-lg p-3 @error('logo') border-red-500 @enderror"
            >

            <p class="text-sm text-gray-500 mt-1">
                فرمت‌های مجاز: JPEG، PNG، JPG، GIF، WebP (حداکثر 2 مگابایت)
            </p>

            @error('logo')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

        </div>

        <button
            class="bg-slate-900 text-white px-5 py-3 rounded-lg w-40"
        >
            ذخیره
        </button>

    </form>

</x-admin-layout>