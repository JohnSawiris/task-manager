<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    // Get All Projects and Tasks that are yet to be completed
    public function idnex()
    {
        $projects = Project::where('is_completed', false)
                            ->orderBy('created_at', 'desc')
                            ->withCount(['tasks' => function($query) {
                                $query->where('is_completed', false);
                            }])
                            ->get();
        return $projects->toJson();
    }

    // Store project
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $project = Project::create([
            'name' => $validateDate['name'],
            'description' => $validateDate['description']
        ]);

        return response()->json('Project created!');
    }
    
    // Fetch a Single Project
    public function show($id)
    {
        $project = Project::with(['tasks' => function($query) {
            $query->where('is_completed', false);
        }])->find($id);
        return $project->toJson;
    }

    // Update Project As Completed
    public function markAsCompleted(Projec $project)
    {
        $project->is_completed = true;
        $project->update();

        return response()->json('Project updated!');
    }
}
