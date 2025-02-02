<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        $userRole = $request->user()->role;

        // Check if user has the required role
        if ($userRole !== $role) {
            // Redirect based on user's role
            if ($userRole === 'writer') {
                return redirect('/writer-dashboard');
            }
            return redirect('/user-dashboard');
        }

        return $next($request);
    }
}
