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
   
<<<<<<< HEAD
     /*public function handle(Request $request, Closure $next, $role)
=======
     public function handle(Request $request, Closure $next)
>>>>>>> fae873e2763315ef27a76dcd0b0fe81226556ceb
     {
         if ($request->user()->role_id == 1) {
             return redirect()->route('admin.dashboard');
         }
     
         return redirect()->route('dashboard');
     }
     */
}
