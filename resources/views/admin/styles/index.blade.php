<x-admin-layout>

    <div class="flex justify-between items-center mb-6">

        <h1 class="text-2xl font-bold">
            مدیریت سبک ها
        </h1>

        <a
            href="{{ route('styles.create') }}"
            class="bg-slate-900 text-white px-4 py-2 rounded-lg"
        >
            افزودن سبک
        </a>

    </div>

    @if(session('success'))

        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>

    @endif

    <div class="bg-white rounded-xl shadow overflow-hidden">

        <table class="w-full">

            <thead class="bg-slate-100">

                <tr>

                    <th class="p-4 text-right">
                        عنوان
                    </th>

                    <th class="p-4 text-right">
                        اسلاگ
                    </th>

                    <th class="p-4 text-right">
                        عملیات
                    </th>

                </tr>

            </thead>

            <tbody>

                @foreach($styles as $style)

                    <tr class="border-t">

                        <td class="p-4">
                            {{ $style->title }}
                        </td>

                        <td class="p-4">
                            {{ $style->slug }}
                        </td>

                        <td class="p-4 flex gap-2">

                            <a
                                href="{{ route('styles.edit',$style) }}"
                                class="bg-blue-500 text-white px-3 py-1 rounded"
                            >
                                ویرایش
                            </a>

                            <form
                                action="{{ route('styles.destroy',$style) }}"
                                method="POST"
                            >
                                @csrf
                                @method('DELETE')

                                <button
                                    class="bg-red-500 text-white px-3 py-1 rounded"
                                >
                                    حذف
                                </button>

                            </form>

                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</x-admin-layout>