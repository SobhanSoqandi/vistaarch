<x-admin-layout>

    <h1 class="text-2xl font-bold mb-6">
        داشبورد
    </h1>

    <!-- Welcome -->
    <div class="bg-white p-6 rounded-xl shadow mb-6">
        <h2 class="text-xl font-bold text-slate-800">
            👋 خوش آمدی به پنل مدیریت
        </h2>

        <p class="text-slate-500 mt-2">
            از اینجا می‌تونی پروژه‌ها، شرکت‌ها، خدمات و سبک‌ها رو مدیریت کنی.
        </p>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">

        <div class="bg-blue-500 text-white p-5 rounded-xl shadow">
            <div class="text-sm">پروژه‌ها</div>
            <div class="text-2xl font-bold">{{ \App\Models\Project::count() }}</div>
        </div>

        <div class="bg-green-500 text-white p-5 rounded-xl shadow">
            <div class="text-sm">شرکت‌ها</div>
            <div class="text-2xl font-bold">{{ \App\Models\Company::count() }}</div>
        </div>

        <div class="bg-purple-500 text-white p-5 rounded-xl shadow">
            <div class="text-sm"> خدمات </div>
            <div class="text-2xl font-bold">{{ \App\Models\Service::count() }}</div>
        </div>

        <div class="bg-orange-500 text-white p-5 rounded-xl shadow">
            <div class="text-sm"> سبک ها </div>
            <div class="text-2xl font-bold">{{ \App\Models\Style::count() }}</div>
        </div>

    </div>

    <!-- Charts + Side Stats -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mb-6">

        <!-- Chart -->
        <div class="bg-white rounded-xl shadow p-5 lg:col-span-2">

            <h2 class="text-base font-bold mb-4 text-slate-700">
                وضعیت پروژه‌ها
            </h2>

            @php
                $published = \App\Models\Project::where('is_published', 1)->count();
                $draft = \App\Models\Project::where('is_published', 0)->count();
            @endphp

            <div class="max-w-[260px] mx-auto">
                <canvas id="projectChart"></canvas>
            </div>

        </div>

        <!-- Side stats -->
        <div class="bg-white rounded-xl shadow p-5">

            <h2 class="text-base font-bold mb-4 text-slate-700">
                آمار سریع
            </h2>

            <div class="space-y-4 text-sm">

                <div class="flex justify-between items-center">
                    <span class="text-slate-600">منتشر شده</span>
                    <span class="font-bold text-green-600">{{ $published }}</span>
                </div>

                <div class="flex justify-between items-center">
                    <span class="text-slate-600">پیش‌نویس</span>
                    <span class="font-bold text-yellow-600">{{ $draft }}</span>
                </div>

                <div class="flex justify-between items-center">
                    <span class="text-slate-600">آخرین پروژه</span>
                    <span class="font-bold text-slate-800 truncate max-w-[120px]">
                        {{ \App\Models\Project::latest()->first()?->title ?? '-' }}
                    </span>
                </div>

            </div>

        </div>

    </div>

    <!-- Latest Projects -->
    <div class="bg-white rounded-xl shadow p-6">

        <h2 class="text-lg font-bold mb-4">
            آخرین پروژه‌ها
        </h2>

        <div class="overflow-x-auto">
            <table class="w-full text-right text-sm">

                <thead class="bg-slate-100 text-slate-600">
                    <tr>
                        <th class="p-3">عنوان</th>
                        <th class="p-3"> خدمات </th>
                        <th class="p-3">سبک</th>
                        <th class="p-3">سال</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach(\App\Models\Project::with(['service','style'])->latest()->take(5)->get() as $project)

                        <tr class="border-t hover:bg-slate-50 transition">
                            <td class="p-3">{{ $project->title }}</td>
                            <td class="p-3 text-slate-600">{{ $project->service?->title }}</td>
                            <td class="p-3 text-slate-600">{{ $project->style?->title }}</td>
                            <td class="p-3 text-slate-600">{{ $project->year }}</td>
                        </tr>

                    @endforeach

                </tbody>

            </table>
        </div>

    </div>

    <!-- Chart JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('projectChart');

        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['منتشر شده', 'پیش‌نویس'],
                datasets: [{
                    data: [{{ $published }}, {{ $draft }}],
                    backgroundColor: ['#22c55e', '#f59e0b'],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                cutout: '70%',
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            boxWidth: 12,
                            font: {
                                size: 11
                            }
                        }
                    }
                }
            }
        });
    </script>

</x-admin-layout>