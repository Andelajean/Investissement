<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use app\Http\Controllers\DashboardController;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   
    public function handle(Request $request, Closure $next, $role)
    {
        if ($request->user()->role_id == 1) {
           
            return $next($request);
        }
        abort(403, 'Accès non autorisé');
       
    }
}
