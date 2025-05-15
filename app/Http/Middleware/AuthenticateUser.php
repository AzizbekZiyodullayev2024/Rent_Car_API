<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateUser
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            // Optionally, you can return a custom response if not authenticated
            return response()->json(['error' => 'Unauthenticated'], 401);
        }

        // Continue to the next middleware or route
        return $next($request);
    }
}