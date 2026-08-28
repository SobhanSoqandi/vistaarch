<?php

namespace App\Http\Controllers\Styles;

use App\Http\Controllers\Controller;
use App\Models\Style;
use Illuminate\Http\Request;

class StyleController extends Controller
{
    public function index()
    {
        $styles = Style::latest()->get();

        return view('admin.styles.index', compact('styles'));
    }

    public function create()
    {
        return view('admin.styles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:styles',
        ], [
            'title.required' => 'عنوان الزامی است',
            'slug.required' => 'اسلاگ الزامی است',
            'slug.unique' => 'این اسلاگ قبلاً ثبت شده است',
        ]);

        Style::create([
            'title' => $request->title,
            'slug' => $request->slug,
        ]);

        return redirect()
            ->route('styles.index')
            ->with('success', 'سبک با موفقیت ایجاد شد');
    }

    public function edit(Style $style)
    {
        return view('admin.styles.edit', compact('style'));
    }

    public function update(Request $request, Style $style)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:styles,slug,' . $style->id,
        ]);

        $style->update([
            'title' => $request->title,
            'slug' => $request->slug,
        ]);

        return redirect()
            ->route('styles.index')
            ->with('success', 'ویرایش انجام شد');
    }

    public function destroy(Style $style)
    {
        $style->delete();

        return redirect()
            ->route('styles.index')
            ->with('success', 'حذف شد');
    }
}