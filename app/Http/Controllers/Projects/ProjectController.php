<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\Service;
use App\Models\Style;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with(['company', 'service', 'style', 'images'])
            ->latest()
            ->get();

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        $companies = Company::all();
        $services  = Service::all();
        $styles    = Style::all();

        return view('admin.projects.create', compact(
            'companies',
            'services',
            'styles'
        ));
    }


    public function store(Request $request)
{
    $validated = $request->validate([
        'title'        => 'required|string|max:255',
        'slug'         => 'required|string|max:255|unique:projects,slug',
        'style_id'     => 'required|exists:styles,id',
        'service_id'   => 'required|exists:services,id',
        'year'         => 'nullable|integer|min:1300|max:1500',
        'location'     => 'nullable|string|max:255',
        'area'         => 'nullable|numeric|min:0',
        'summary'      => 'nullable|string',
        'description'  => 'nullable|string',
        'images'       => 'required|array|min:1',
        'images.*'     => 'image|mimes:jpg,jpeg,png,webp|max:2048',
        'cover_index'  => 'nullable|integer|min:0',
    ]);

    $project = Project::create([
        'title'        => $validated['title'],
        'slug'         => $validated['slug'],
        'style_id'     => $validated['style_id'],
        'service_id'   => $validated['service_id'],
        'year'         => $validated['year'] ?? null,
        'location'     => $validated['location'] ?? null,
        'area'         => $validated['area'] ?? null,
        'summary'      => $validated['summary'] ?? null,
        'description'  => $validated['description'] ?? null,
        'cover_image'  => null,
        'is_published' => $request->boolean('is_published'),
    ]);

    $coverImage = null;

    foreach ($request->file('images') as $index => $image) {

        $path = $image->store('projects/gallery', 'public');

        ProjectImage::create([
            'project_id' => $project->id,
            'image_path' => $path,
            'sort_order' => $index,
        ]);

        // اگر کاربر این عکس را به عنوان کاور انتخاب کرده
        if ($request->filled('cover_index') && (int) $request->cover_index === $index) {
            $coverImage = $path;
        }

        // اگر هیچ کاوری انتخاب نشده باشد، اولین عکس کاور شود
        if ($coverImage === null && $index === 0) {
            $coverImage = $path;
        }
    }

    if ($coverImage) {
        $project->update(['cover_image' => $coverImage]);
    }

    return redirect()
        ->route('projects.index')
        ->with('success', 'پروژه با موفقیت ایجاد شد.');
}


    public function edit(Project $project)
    {
        $companies = Company::all();
        $services  = Service::all();
        $styles    = Style::all();

        $project->load('images');

        return view('admin.projects.edit', compact(
            'project',
            'companies',
            'services',
            'styles'
        ));
    }

public function update(Request $request, Project $project)
{
    $validated = $request->validate([
        'title'        => 'required|string|max:255',
        'slug'         => 'required|string|max:255|unique:projects,slug,' . $project->id,
        'style_id'     => 'required|exists:styles,id',
        'service_id'   => 'required|exists:services,id',
        'year'         => 'nullable|integer|min:1300|max:1500',
        'location'     => 'nullable|string|max:255',
        'area'         => 'nullable|numeric|min:0',
        'summary'      => 'nullable|string',
        'description'  => 'nullable|string',
        'images'          => 'nullable|array',
        'images.*'        => 'image|mimes:jpg,jpeg,png,webp|max:2048',
        'cover_selection' => 'nullable|string',
        // فرمت مجاز مقدار cover_selection: "existing:{id}" یا "new:{index}"
    ]);

    // کاور فعلی (پیش‌فرض: بدون تغییر)
    $coverImage = $project->cover_image;

    // تفکیک انتخاب کاور: existing:{id} یا new:{index}
    $coverType  = null;
    $coverValue = null;

    if ($request->filled('cover_selection')) {
        [$coverType, $coverValue] = array_pad(explode(':', $request->cover_selection, 2), 2, null);
    }

    // اگر کاربر یکی از تصاویر فعلیِ گالری را به عنوان کاور انتخاب کرده
    if ($coverType === 'existing') {
        $selectedImage = $project->images()->find((int) $coverValue);

        if ($selectedImage) {
            $coverImage = $selectedImage->image_path;
        }
    }

    // بروزرسانی اطلاعات پروژه
    $project->update([
        'title'        => $validated['title'],
        'slug'         => $validated['slug'],
        'style_id'     => $validated['style_id'],
        'service_id'   => $validated['service_id'],
        'year'         => $validated['year'] ?? null,
        'location'     => $validated['location'] ?? null,
        'area'         => $validated['area'] ?? null,
        'summary'      => $validated['summary'] ?? null,
        'description'  => $validated['description'] ?? null,
        'is_published' => $request->boolean('is_published'),
    ]);

    // اگر تصاویر جدید انتخاب شده باشند
    if ($request->hasFile('images')) {

        $sortOrder = $project->images()->max('sort_order') ?? -1;

        foreach ($request->file('images') as $index => $image) {

            $path = $image->store('projects/gallery', 'public');

            ProjectImage::create([
                'project_id' => $project->id,
                'image_path' => $path,
                'sort_order' => ++$sortOrder,
            ]);

            // اگر این عکس (از میان تصاویر تازه آپلودشده) به عنوان کاور انتخاب شده
            if ($coverType === 'new' && (int) $coverValue === $index) {
                $coverImage = $path;
            }
        }
    }

    // اگر کاور تغییر کرده باشد
    if ($coverImage !== $project->cover_image) {

        // حذف کاور قبلی (اگر همان یکی از عکس‌های گالری نبود)
        if (
            $project->cover_image &&
            !ProjectImage::where('image_path', $project->cover_image)->exists()
        ) {
            Storage::disk('public')->delete($project->cover_image);
        }

        $project->update([
            'cover_image' => $coverImage,
        ]);
    }

    return redirect()
        ->route('projects.index')
        ->with('success', 'پروژه با موفقیت بروزرسانی شد.');
}

    public function destroy(Project $project)
    {
        // 🧨 حذف cover image
        if ($project->cover_image) {
            Storage::disk('public')->delete($project->cover_image);
        }

        // 🧨 حذف گالری تصاویر
        foreach ($project->images as $image) {
            Storage::disk('public')->delete($image->image_path);
        }

        $project->delete();

        return redirect()
            ->route('projects.index')
            ->with('success', 'پروژه حذف شد');
    }


    public function destroyImage(ProjectImage $image)
    {
        $path = public_path('storage/' . $image->image_path);

        if (File::exists($path)) {
            File::delete($path);
        }

        $image->delete();

        return back()->with('success', 'تصویر با موفقیت حذف شد.');
    }
}
