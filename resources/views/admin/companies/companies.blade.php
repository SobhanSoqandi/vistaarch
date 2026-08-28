<x-admin-layout>

    <div class="flex justify-between items-center mb-6">

        <h1 class="text-2xl font-bold">
            مدیریت شرکت ها
        </h1>

        <a
            href="{{ route('companies.create') }}"
            class="bg-slate-900 text-white px-4 py-2 rounded-lg"
        >
            افزودن شرکت
        </a>

    </div>

    @if(session('success'))

        <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-4">
            {{ session('success') }}
        </div>

    @endif

    <div class="bg-white rounded-xl shadow overflow-hidden">

        <table class="w-full">

            <thead class="bg-slate-100">

                <tr>

                    <th class="p-4 text-right">
                        لوگو
                    </th>

                    <th class="p-4 text-right">
                        نام شرکت
                    </th>

                    <th class="p-4 text-right">
                        آدرس
                    </th>

                    <th class="p-4 text-center">
                        عملیات
                    </th>

                </tr>

            </thead>

            <tbody>

                @forelse($companies as $company)

                    <tr class="border-b">

                        <td class="p-4">

                            @if($company->logo)

                                <img 
                                    src="{{ Storage::url($company->logo) }}" 
                                    alt="لوگو"
                                    class="w-20 object-cover rounded-full"
                                >

                            @else

                                <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center text-gray-500 text-xs">
                                    بدون
                                </div>

                            @endif

                        </td>

                        <td class="p-4">
                            {{ $company->name }}
                        </td>

                        <td class="p-4">
                            {{ $company->address }}
                        </td>

                        <td class="p-4">

                            <div class="flex justify-center gap-2">

                                <a
                                    href="{{ route('companies.edit', $company) }}"
                                    class="bg-yellow-500 text-white px-3 py-1 rounded"
                                >
                                    ویرایش
                                </a>

                                <form
                                    action="{{ route('companies.destroy', $company) }}"
                                    method="POST"
                                    onsubmit="return confirm('آیا از حذف این شرکت مطمئن هستید؟')"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="bg-red-500 text-white px-3 py-1 rounded"
                                    >
                                        حذف
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="4" class="p-6 text-center">

                            هیچ شرکتی ثبت نشده است

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</x-admin-layout>