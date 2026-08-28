<x-admin-layout>

   
<h1 class="text-xl font-bold mb-4">لیست خدمات ‌ها</h1>

<a href="{{ route('services.create') }}"
   class="bg-slate-900 text-white px-4 py-2 rounded mb-4 inline-block">
    + افزودن خدمات 
</a>

<table class="w-full bg-white shadow rounded">

    <thead class="bg-slate-100">
        <tr>
            <th class="p-3 text-right">عنوان</th>
            <th class="p-3 text-right">اسلاگ</th>
            <th class="p-3 text-right">عملیات</th>
        </tr>
    </thead>

    <tbody>

        @forelse($services as $service)

            <tr class="border-t">

                <td class="p-3">{{ $service->title }}</td>
                <td class="p-3">{{ $service->slug }}</td>

                <td class="p-3 flex gap-2">

                    <a href="{{ route('services.edit', $service) }}"
                       class="bg-blue-500 text-white px-3 py-1 rounded">
                        ویرایش
                    </a>

                    <form action="{{ route('services.destroy', $service) }}"
                          method="POST">
                        @csrf
                        @method('DELETE')

                        <button class="bg-red-500 text-white px-3 py-1 rounded">
                            حذف
                        </button>
                    </form>

                </td>

            </tr>

        @empty

            <tr>
                <td colspan="3" class="p-4 text-center text-gray-500">
                    هیچ خدماتی وجود ندارد
                </td>
            </tr>

        @endforelse

    </tbody>

</table>

</x-admin-layout>


