<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\ProjectType;

class ProjectController extends Controller
{
    public function show($id)
    {
        $project = Project::findOrFail($id);
        $projectImages = ProjectImage::where('id_project', $id)->get();
        $projectType = ProjectType::all();

        return view('projects.show', compact('project', 'projectImages', 'projectType'));
    }

    public function detail($id_project, $id_project_type)
    {
        $project = Project::findOrFail($id_project);
        $projectType = ProjectType::findOrFail($id_project_type);
        $projectImages = ProjectImage::where('id_project', $id_project)->get();

        return view('projects.detail', compact('project', 'projectType', 'projectImages'));
    }
}