<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
            if (!$request->user()) {
            return redirect('/login');
        }
        
        foreach ($roles as $role) {
            if ($request->user()->role === $role) {
                return $next($request);
            }
        }

    
    Alert::warning('Error', 'Unauthorized');
        return redirect('/');
    }
}
