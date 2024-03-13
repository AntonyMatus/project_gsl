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
        $projects = Projects::orderBy('publish_date', 'desc')->get();
        return view('pages.projects', ['projects' => $projects]);
    }

    public function single_project($id)
    {
        $project = Projects::find($id);
        $related_project = Projects::select('*')->inRandomOrder()->take(1)->get();
        return view('pages.single_project', ['project' => $project, 'related_projects' => $related_project]);
    }
}
