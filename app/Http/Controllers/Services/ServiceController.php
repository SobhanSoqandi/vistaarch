<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();

        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:services',
        ], [
            'title.required' => 'عنوان الزامی است',
            'slug.required' => 'اسلاگ الزامی است',
            'slug.unique' => 'این اسلاگ قبلاً ثبت شده است',
        ]);

        Service::create([
            'title' => $request->title,
            'slug' => $request->slug,
        ]);

        return redirect()
            ->route('services.index')
            ->with('success', 'خدمات با موفقیت ایجاد شد');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:services,slug,' . $service->id,
        ]);

        $service->update([
            'title' => $request->title,
            'slug' => $request->slug,
        ]);

        return redirect()
            ->route('services.index')
            ->with('success', 'ویرایش انجام شد');
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()
            ->route('services.index')
            ->with('success', 'حذف شد');
    }
}