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
        // Using a view composer to share $information with all views
        View::composer('*', function ($view) {
            $information = Information::first(); // You can adjust this to fetch the appropriate information
            $projects = Project::all();
            $view->with(['information' => $information, 'projects' => $projects]);
        });
    }
}
