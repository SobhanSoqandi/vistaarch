<x-admin-layout>

    <div class="max-w-4xl mx-auto">

        <h1 class="text-3xl font-bold mb-8 text-slate-800">
            ✏️ ویرایش پروژه
        </h1>

        <form action="{{ route('projects.update', $project) }}" method="POST" enctype="multipart/form-data"
              class="bg-white shadow-lg rounded-2xl p-6 space-y-6">

            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                <div>
                    <input type="text" name="title" value="{{ old('title', $project->title) }}" class="input">
                    @error('title')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <input type="text" name="slug" value="{{ old('slug', $project->slug) }}" class="input">
                    @error('slug')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <select name="service_id" class="input">
                        @foreach ($services as $service)
                            <option value="{{ $service->id }}" @selected(old('service_id', $project->service_id) == $service->id)>
                                {{ $service->title }}
                            </option>
                        @endforeach
                    </select>
                    @error('service_id')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <select name="style_id" class="input">
                        @foreach ($styles as $style)
                            <option value="{{ $style->id }}" @selected(old('style_id', $project->style_id) == $style->id)>
                                {{ $style->title }}
                            </option>
                        @endforeach
                    </select>
                    @error('style_id')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <input type="number" name="year" value="{{ old('year', $project->year) }}" class="input">
                    @error('year')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <input type="text" name="location" value="{{ old('location', $project->location) }}"
                           placeholder="کارفرما" class="input">
                    @error('location')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <input type="number" name="area" value="{{ old('area', $project->area) }}" class="input">
                    @error('area')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

            </div>

            <div>
                <textarea name="summary" class="input h-24">{{ old('summary', $project->summary) }}</textarea>
                @error('summary')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <textarea name="description" class="input h-32">{{ old('description', $project->description) }}</textarea>
                @error('description')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- NEW GALLERY --}}
            <div>
                <label class="font-semibold">افزودن تصاویر جدید</label>

                <input
                    type="file"
                    id="galleryInput"
                    name="images[]"
                    multiple
                    accept="image/*"
                    class="input">

                @error('images')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
                @error('images.*')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror

                <div id="galleryPreview" class="grid grid-cols-2 md:grid-cols-5 gap-4 mt-5"></div>
            </div>

            {{-- OLD GALLERY --}}
            @if ($project->images->count())
                <div>
                    <h3 class="font-bold text-lg mt-6 mb-4">تصاویر فعلی پروژه</h3>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        @foreach ($project->images as $img)
                            <div class="relative">

                                <img src="{{ asset('storage/' . $img->image_path) }}"
                                     class="rounded-lg border w-full h-40 object-cover">

                                <label class="absolute bottom-2 right-2 bg-white px-2 py-1 rounded text-xs shadow flex items-center gap-1 cursor-pointer">
                                    <input
                                        type="radio"
                                        name="cover_selection"
                                        value="existing:{{ $img->id }}"
                                        @checked($project->cover_image === $img->image_path)>
                                    کاور
                                </label>

                                {{-- دکمه به فرم حذف بیرون از فرم اصلی وصل می‌شه (فرم تو در تو مجاز نیست) --}}
                                <button type="submit"
                                        form="delete-image-form-{{ $img->id }}"
                                        onclick="return confirm('حذف شود؟')"
                                        class="absolute top-2 left-2 w-8 h-8 rounded-full bg-red-600 text-white">
                                    ✕
                                </button>

                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <label class="flex items-center gap-2 mt-6">
                <input type="checkbox" name="is_published" value="1"
                       @checked(old('is_published', $project->is_published))>
                انتشار پروژه
            </label>

            <button type="submit" class="bg-slate-900 hover:bg-slate-800 text-white px-6 py-3 rounded-xl">
                ذخیره تغییرات
            </button>

        </form>

        {{-- فرم‌های حذف تصویر، مستقل از فرم اصلی (چون nested form مجاز نیست) --}}
        @foreach ($project->images as $img)
            <form id="delete-image-form-{{ $img->id }}"
                  action="{{ route('projects.images.destroy', $img) }}"
                  method="POST" class="hidden">
                @csrf
                @method('DELETE')
            </form>
        @endforeach

    </div>

    <style>
        .input {
            width: 100%;
            padding: 12px;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
        }
        .input:focus {
            outline: none;
            border-color: #0f172a;
            box-shadow: 0 0 0 2px #0f172a20;
        }
    </style>

    <script>
        let selectedFiles = [];

        const input = document.getElementById('galleryInput');
        const preview = document.getElementById('galleryPreview');

        input.addEventListener('change', function (e) {
            selectedFiles = [...selectedFiles, ...Array.from(e.target.files)];
            renderGallery();
        });

        function renderGallery() {
            preview.innerHTML = '';

            const dt = new DataTransfer();

            selectedFiles.forEach((file, index) => {
                dt.items.add(file);

                const reader = new FileReader();

                reader.onload = function (event) {
                    const div = document.createElement('div');
                    div.className = 'relative';
                    div.innerHTML = `
                        <img
                            src="${event.target.result}"
                            class="w-full h-28 object-cover rounded-lg border">

                        <button
                            type="button"
                            onclick="removeImage(${index})"
                            class="absolute top-2 left-2 w-7 h-7 rounded-full bg-red-600 text-white">
                            ✕
                        </button>

                        <label class="absolute bottom-2 right-2 bg-white rounded px-2 py-1 text-xs shadow flex items-center gap-1 cursor-pointer">
                            <input
                                type="radio"
                                name="cover_selection"
                                value="new:${index}">
                            کاور
                        </label>
                    `;
                    preview.appendChild(div);
                };

                reader.readAsDataURL(file);
            });

            input.files = dt.files;
        }

        function removeImage(index) {
            selectedFiles.splice(index, 1);
            renderGallery();
        }
    </script>

</x-admin-layout>
