<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Information;

class CheckMaintenance
{
    public function handle(Request $request, Closure $next)
    {
        // Retrieve the first record from the Information table
        $information = Information::first();

        if ($information && $information->maintenance == 1) {
            return redirect()->route('maintenance');
        }

        return $next($request);
    }
}
