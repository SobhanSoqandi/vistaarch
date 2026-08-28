<x-admin-layout>

  {{-- resources/views/admin/services/create.blade.php --}}

<h1 class="text-xl font-bold mb-4">افزودن خدمات</h1>

<form action="{{ route('services.store') }}" method="POST" class="space-y-4">

    @csrf

    <div>
        <label>عنوان</label>
        <input type="text"
               name="title"
               class="w-full border p-2 rounded">
    </div>

    <div>
        <label>اسلاگ</label>
        <input type="text"
               name="slug"
               class="w-full border p-2 rounded">
    </div>

    <button class="bg-slate-900 text-white px-4 py-2 rounded w-40">
        ذخیره
    </button>

</form>

</x-admin-layout>