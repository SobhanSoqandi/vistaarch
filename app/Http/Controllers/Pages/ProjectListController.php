<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Service;
use App\Models\Style;
use Illuminate\Http\Request;

class ProjectListController extends Controller
{
    public function list(Request $request)
    {
        $query = Project::with([
            'service',
            'style',
            'company'
        ])
            ->where('is_published', 1);

        // Search
        if ($request->filled('search')) {

            $query->where(function ($q) use ($request) {

                $q->where('title', 'like', '%' . $request->search . '%')
                    ->orWhere('summary', 'like', '%' . $request->search . '%')
                    ->orWhere('location', 'like', '%' . $request->search . '%');
            });
        }

        // Style
        if ($request->filled('style')) {

            $query->where('style_id', $request->style);
        }

        // Service
        if ($request->filled('service')) {

            $query->where('service_id', $request->service);
        }

        // Year
        if ($request->filled('year')) {

            $query->where('year', $request->year);
        }

        $projects = $query
            ->latest()
            ->paginate(12)
            ->withQueryString();

        $styles = Style::orderBy('title')->get();

        $services = Service::orderBy('title')->get();

        $years = Project::whereNotNull('year')
            ->distinct()
            ->orderBy('year', 'desc')
            ->pluck('year');

        return view('pages.projects', compact(
            'projects',
            'styles',
            'services',
            'years'
        ));
    }






    // // single project : 
   public function show($locale, $slug)
{
    $project = Project::with([
        'service',
        'style',
        'company',
        'images'
    ])
    ->where('is_published', 1)
    ->where('slug', $slug)
    ->firstOrFail();

    $relatedProjects = Project::with(['service', 'style'])
        ->where('is_published', 1)
        ->where('id', '!=', $project->id)
        ->where(function ($query) use ($project) {
            $query->where('style_id', $project->style_id)
                  ->orWhere('service_id', $project->service_id);
        })
        ->limit(4)
        ->get();

    return view('pages.singleproject', compact(
        'project',
        'relatedProjects'
    ));
}

}
