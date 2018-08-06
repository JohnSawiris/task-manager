<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
	public function index()
	{
		$projects = Project::with('Tasks')->get();
		return $projects;
	}

	public function store(Request $request)
	{
		$validatedData = $request->validate([
			'name' => 'required',
			'description' => 'required',
		]);

		$project = Project::create([
			'name' => $validatedData['name'],
			'description' => $validatedData['description'],
		]);

		return response()->json('Project created!');
	}

	public function show($id)
	{
		$project = Project::with('Tasks')->find($id);

		return $project->toJson();
	}

	public function markAsCompleted(Project $project)
	{
		$project->is_completed = true;
		$project->update();

		return response()->json('Project updated!');
	}
}