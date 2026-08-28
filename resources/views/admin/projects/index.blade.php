<x-admin-layout>

    <div class="flex justify-between items-center mb-6">

        <h1 class="text-2xl font-bold text-slate-800">
            مدیریت پروژه‌ها
        </h1>

        <a href="{{ route('projects.create') }}"
           class="bg-slate-900 hover:bg-slate-800 text-white px-4 py-2 rounded-lg">
            + افزودن پروژه
        </a>

    </div>

    <div class="bg-white rounded-2xl shadow overflow-hidden">

        <table class="w-full">

            <thead class="bg-slate-100 text-sm text-slate-700">

                <tr>

                    <th class="p-4 text-right">تصویر</th>
                    <th class="p-4 text-right">عنوان</th>
                    <th class="p-4 text-right">خدمات</th>
                    <th class="p-4 text-right">سبک</th>
                    <th class="p-4 text-right">سال</th>
                    <th class="p-4 text-right">عملیات</th>

                </tr>

            </thead>

            <tbody>

                @forelse($projects as $project)

                    <tr class="border-t hover:bg-slate-50 transition">

                        {{-- 🖼️ THUMBNAIL --}}
                        <td class="p-4">
                            @if($project->cover_image)
                                <img src="{{ asset('storage/'.$project->cover_image) }}"
                                     class="w-14 h-14 object-cover rounded-lg border">
                            @else
                                <div class="w-14 h-14 bg-slate-200 rounded-lg"></div>
                            @endif
                        </td>

                        <td class="p-4 font-semibold text-slate-800">
                            {{ $project->title }}
                        </td>

                        <td class="p-4 text-slate-600">
                            {{ $project->service?->title ?? '-' }}
                        </td>

                        <td class="p-4 text-slate-600">
                            {{ $project->style?->title ?? '-' }}
                        </td>

                        <td class="p-4 text-slate-600">
                            {{ $project->year ?? '-' }}
                        </td>

                        <td class="p-4 flex gap-2">

                            <a href="{{ route('projects.edit', $project) }}"
                               class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-lg text-sm">
                                ویرایش
                            </a>

                            <form action="{{ route('projects.destroy', $project) }}"
                                  method="POST">
                                @csrf
                                @method('DELETE')

                                <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-lg text-sm">
                                    حذف
                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="6" class="p-6 text-center text-slate-500">
                            هیچ پروژه‌ای ثبت نشده است
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</x-admin-layout>