<?php

namespace App\Http\Controllers\companies;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::latest()->get();

        return view('admin.companies.companies', compact('companies'));
    }

    public function create()
    {
        return view('admin.companies.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'nullable|max:255',
            'address' => 'nullable',
            'description' => 'nullable',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ], [
            'name.required' => 'نام شرکت الزامی است',
            'logo.image' => 'فایل باید تصویر باشد',
            'logo.mimes' => 'فرمت مجاز: JPEG، PNG، JPG، GIF، WebP',
            'logo.max' => 'حجم تصویر نباید بیشتر از 2 مگابایت باشد',
        ]);

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('companies/logos', 'public');
            $validated['logo'] = $logoPath;
        }

        Company::create($validated);

        return redirect()
            ->route('companies.index')
            ->with('success', 'شرکت با موفقیت ایجاد شد');
    }

    public function edit(Company $company)
    {
        return view('admin.companies.edit', compact('company'));
    }

    public function update(Request $request, Company $company)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'nullable|max:255',
            'address' => 'nullable',
            'description' => 'nullable',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ], [
            'name.required' => 'نام شرکت الزامی است',
            'logo.image' => 'فایل باید تصویر باشد',
            'logo.mimes' => 'فرمت مجاز: JPEG، PNG، JPG، GIF، WebP',
            'logo.max' => 'حجم تصویر نباید بیشتر از 2 مگابایت باشد',
        ]);

        if ($request->hasFile('logo')) {
            if ($company->logo && Storage::disk('public')->exists($company->logo)) {
                Storage::disk('public')->delete($company->logo);
            }
            
            $logoPath = $request->file('logo')->store('companies/logos', 'public');
            $validated['logo'] = $logoPath;
        }

        $company->update($validated);

        return redirect()
            ->route('companies.index')
            ->with('success', 'اطلاعات شرکت بروزرسانی شد');
    }

    public function destroy(Company $company)
    {
        if ($company->logo && Storage::disk('public')->exists($company->logo)) {
            Storage::disk('public')->delete($company->logo);
        }
        
        $company->delete();

        return redirect()
            ->route('companies.index')
            ->with('success', 'شرکت حذف شد');
    }
}