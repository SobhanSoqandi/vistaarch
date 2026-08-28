<x-admin-layout>

    <h1 class="text-2xl font-bold mb-6">
        ویرایش سبک
    </h1>

    <form
        action="{{ route('styles.update',$style) }}"
        method="POST"
        class="bg-white p-6 rounded-xl shadow"
    >

        @csrf
        @method('PUT')

        <div class="mb-4">

            <label>
                عنوان
            </label>

            <input
                type="text"
                name="title"
                value="{{ $style->title }}"
                class="w-full border rounded p-2 mt-2"
            >

        </div>

        <div class="mb-4">

            <label>
                اسلاگ
            </label>

            <input
                type="text"
                name="slug"
                value="{{ $style->slug }}"
                class="w-full border rounded p-2 mt-2"
            >

        </div>

        <button
            class="bg-slate-900 text-white px-5 py-2 rounded"
        >
            ذخیره تغییرات
        </button>

    </form>

</x-admin-layout>