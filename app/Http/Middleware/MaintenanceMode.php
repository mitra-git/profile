<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Information;


class MaintenanceMode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $information = Information::first();

        if ($information && $information->maintenance == 1 && !$request->is('maintenance')) {
            return redirect()->route('maintenance.page');
        }

        return $next($request);
    }
}
