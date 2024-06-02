<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Information;
use App\Models\Project;
use View;


class InformationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $information = Information::first();
            $projects = Project::all();
            $view->with(['information' => $information, 'projects' => $projects]);
        });
    }
}
