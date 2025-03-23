<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('dashboard.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:projects',
            'phone' => 'required',
            'company' => 'required',
            'address' => 'required',
            'project_name' => 'required',
            'description' => 'required',
            'budget' => 'required|numeric',
        ]);

        Project::create($request->all());
        return redirect()->route('dashboard.projects.index')->with('success', 'Project added successfully.');
    }
}
