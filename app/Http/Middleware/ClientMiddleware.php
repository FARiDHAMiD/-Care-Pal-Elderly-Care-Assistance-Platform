<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ClientMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->hasRole('client') || auth()->check() && auth()->user()->hasRole('caregiver')) {
            return $next($request);
        }

        return redirect('/login');
    }
}
