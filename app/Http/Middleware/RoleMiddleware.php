<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, string $role): \Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
    {
        if (!auth()->check() || auth()->user()->role !== $role) {
            return redirect('/')->with('error', 'Unauthorized access.');
        }
        else

        return $next($request);
    }
}
