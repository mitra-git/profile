<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\TestEmail;
use App\Models\Facility;
use App\Models\News;
use App\Models\Project;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        $information = Information::first();
        $news = News::all();
        $facility = Facility::all();
        $project = Project::all();
        $projects = Project::all()->map(function ($project) {
            $project->slug = Str::slug($project->id);
            return $project;
        });

        return view('index', compact('information', 'news', 'facility', 'project', 'projects'));
    }
}
