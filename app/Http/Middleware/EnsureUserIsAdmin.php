<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class EnsureUserIsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && !Auth::user()->hasRole('admin')) {
            abort(403, 'Accès réservé aux administrateurs.');
        }

        return $next($request);
    }
}
