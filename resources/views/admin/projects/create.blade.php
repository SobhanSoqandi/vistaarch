<x-admin-layout>

    <div class="max-w-4xl mx-auto">

        <h1 class="text-3xl font-bold mb-8 text-slate-800">
            ✨ افزودن پروژه جدید
        </h1>

        <form action="{{ route('projects.store') }}"
              method="POST"
              enctype="multipart/form-data"
              class="bg-white shadow-lg rounded-2xl p-6 space-y-6">

            @csrf

            {{-- GRID INPUTS --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                <div>
                    <input type="text" name="title" value="{{ old('title') }}"
                           placeholder="عنوان پروژه" class="input">
                    @error('title')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <input type="text" name="slug" value="{{ old('slug') }}"
                           placeholder="عنوان انگلیسی" class="input">
                    @error('slug')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <select name="service_id" class="input">
                        <option value="">خدمات</option>
                        @foreach($services as $service)
                            <option value="{{ $service->id }}" @selected(old('service_id') == $service->id)>
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
                        <option value="">سبک</option>
                        @foreach($styles as $style)
                            <option value="{{ $style->id }}" @selected(old('style_id') == $style->id)>
                                {{ $style->title }}
                            </option>
                        @endforeach
                    </select>
                    @error('style_id')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <input type="number" name="year" value="{{ old('year') }}"
                           placeholder="سال" class="input">
                    @error('year')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <input type="text" name="location" value="{{ old('location') }}"
                           placeholder="موقعیت" class="input">
                    @error('location')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <input type="text" name="area" value="{{ old('area') }}"
                           placeholder="کارفرما" class="input">
                    @error('area')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

            </div>

            <div>
                <textarea name="summary" placeholder="توضیحات انگلیسی"
                          class="input h-24">{{ old('summary') }}</textarea>
                @error('summary')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <textarea name="description" placeholder="توضیحات فارسی"
                          class="input h-32">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- GALLERY --}}
            <div>
                <label class="font-semibold">گالری تصاویر</label>

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

                <div
                    id="galleryPreview"
                    class="grid grid-cols-2 md:grid-cols-5 gap-4 mt-5">
                </div>
            </div>

            <label class="flex items-center gap-2">
                <input type="checkbox" name="is_published" value="1" @checked(old('is_published', true))>
                انتشار پروژه
            </label>

            <button type="submit"
                    class="bg-slate-900 hover:bg-teal-700 cursor-pointer text-white px-6 py-3 rounded-xl w-40">
                ذخیره پروژه
            </button>

        </form>
    </div>

    {{-- STYLE --}}
    <style>
        .input{
            width:100%;
            padding:12px;
            border:1px solid #e2e8f0;
            border-radius:12px;
            outline:none;
        }
        .input:focus{
            border-color:#0f172a;
            box-shadow:0 0 0 2px #0f172a20;
        }
    </style>

    {{-- JS PREVIEW --}}
    <script>
        let selectedFiles = [];

        const input = document.getElementById('galleryInput');
        const preview = document.getElementById('galleryPreview');

        input.addEventListener('change', function (e) {
            selectedFiles = [...selectedFiles, ...Array.from(e.target.files)];
            renderGallery();
        });

        function renderGallery(){
            preview.innerHTML = '';

            const dt = new DataTransfer();

            selectedFiles.forEach((file, index) => {
                dt.items.add(file);

                const reader = new FileReader();

                reader.onload = function(event){
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

                        <label class="absolute bottom-2 right-2 bg-white px-2 py-1 rounded text-xs shadow">
                            <input
                                type="radio"
                                name="cover_index"
                                value="${index}"
                                ${index === 0 ? 'checked' : ''}>
                            کاور
                        </label>
                    `;
                    preview.appendChild(div);
                };

                reader.readAsDataURL(file);
            });

            input.files = dt.files;
        }

        function removeImage(index){
            selectedFiles.splice(index, 1);
            renderGallery();
        }
    </script>

</x-admin-layout>