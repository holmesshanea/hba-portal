<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is logged in and has the admin role
        if (Auth::check() && Auth::user()->isAdmin()) {
            return $next($request); // Allow access
        }

        // Redirect non-admin users to the dashboard
        return redirect()->route('dashboard'); // Change route if needed
    }
}
