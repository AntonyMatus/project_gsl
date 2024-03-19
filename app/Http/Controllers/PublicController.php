<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $projects = Projects::latest()->take(6)->get();
        return view('pages.index', ['projects' => $projects]);
    }

    public function projects()
    {
        $projects = Projects::orderBy('publish_date', 'desc')->paginate(2)->withQueryString();
        return view('pages.projects', compact('projects'));
    }

    public function single_project($slug)
    {
        $project = Projects::where('slug', $slug)->first(); 
        $related_project = Projects::select('*')->inRandomOrder()->take(2)->get();
        return view('pages.single_project', ['project' => $project, 'related_projects' => $related_project]);
    }
}
