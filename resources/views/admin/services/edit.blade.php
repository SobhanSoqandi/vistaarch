<x-admin-layout>

  {{-- resources/views/admin/services/edit.blade.php --}}

<h1 class="text-xl font-bold mb-4">ویرایش خدمات</h1>

<form action="{{ route('services.update', $service) }}"
      method="POST"
      class="space-y-4">

    @csrf
    @method('PUT')

    <div>
        <label>عنوان</label>
        <input type="text"
               name="title"
               value="{{ $service->title }}"
               class="w-full border p-2 rounded">
    </div>

    <div>
        <label>اسلاگ</label>
        <input type="text"
               name="slug"
               value="{{ $service->slug }}"
               class="w-full border p-2 rounded">
    </div>

    <button class="bg-slate-900 text-white px-4 py-2 rounded w-40">
        ویرایش
    </button>

</form>

</x-admin-layout>