<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (!auth()->check()) {
            // Belum login
            return redirect()->route('login')->with('error', 'Silakan login dulu!');
        }

        if (auth()->user()->role !== $role) {
            // Tidak punya role sesuai
            abort(403, 'Unauthorized.');
        }

        return $next($request);
    }
}
