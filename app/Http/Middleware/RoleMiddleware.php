<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
//use
class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //role middleware
          if (auth()->check() && auth()->user()->role == $role) {
                    return $next($request);
                }

                abort(403, 'Unauthorized');
//
//        return $next($request);
    }
}
