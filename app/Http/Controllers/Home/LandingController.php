<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Project;

class LandingController extends Controller
{
   public function index()
    {
        $latestProjects = Project::with([
            'service',
            'style'
        ])
        ->where('is_published', 1)
        ->latest()
        ->take(10)
        ->get();

        $randomProjects = Project::with([
            'service',
            'style'
        ])
        ->where('is_published', 1)
        ->inRandomOrder()
        ->take(10)
        ->get();

        $companies = Company::latest()->get();

        return view('home.index', compact(
            'latestProjects',
            'randomProjects',
            'companies'
        ));
    }
}
