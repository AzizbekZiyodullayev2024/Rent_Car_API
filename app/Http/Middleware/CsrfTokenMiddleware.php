<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CsrfTokenMiddleware
{
    protected $except = [
        'posts', // yoki 'posts/*'
        'cities', // yoki 'posts/*'
    ];
    public function handle(Request $request, Closure $next)
    {
        // Check if the CSRF token is in the session
        $csrfToken = $request->header('X-CSRF-TOKEN') ?? $request->input('_token');
        
        if (!$csrfToken || $csrfToken !== Session::token()) {
            return response()->json(['error' => 'Invalid CSRF token'], 419);  // 419: Page Expired
        }

        return $next($request);
    }
}
