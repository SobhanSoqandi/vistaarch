<x-admin-layout>

    <h1 class="text-2xl font-bold mb-6">
        ویرایش شرکت
    </h1>

    <form
        action="{{ route('companies.update', $company) }}"
        method="POST"
        enctype="multipart/form-data"
        class="bg-white p-6 rounded-xl shadow"
    >

        @csrf
        @method('PUT')

        <div class="mb-5">

            <label class="block mb-2">
                نام شرکت
            </label>

            <input
                type="text"
                name="name"
                value="{{ old('name', $company->name) }}"
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
            >{{ old('address', $company->address) }}</textarea>

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
            >{{ old('description', $company->description) }}</textarea>

            @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-5">

            <label class="block mb-2">
                لوگو شرکت
            </label>

            @if($company->logo)

                <div class="mb-3">

                    <img 
                        src="{{ Storage::url($company->logo) }}" 
                        alt="لوگو"
                        class="w-24 h-24 object-cover rounded-lg border"
                    >

                    <p class="text-sm text-gray-500 mt-1">
                        لوگوی فعلی
                    </p>

                </div>

            @endif

            <input
                type="file"
                name="logo"
                accept="image/*"
                class="w-full border rounded-lg p-3 @error('logo') border-red-500 @enderror"
            >

            <p class="text-sm text-gray-500 mt-1">
                در صورت آپلود عکس جدید، عکس قبلی جایگزین می‌شود.
            </p>

            @error('logo')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

        </div>

        <button
            class="bg-slate-900 text-white px-5 py-3 rounded-lg w-40"
        >
            ذخیره تغییرات
        </button>

    </form>

</x-admin-layout>