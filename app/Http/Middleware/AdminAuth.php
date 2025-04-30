<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::guard('admin')->check()) {
            if (!$request->is('login') && !$request->is('login/*')) {
                return redirect('/login')->withErrors([
                    'login' => 'Silakan login terlebih dahulu.'
                ]);
            }
        }
        return $next($request);
    }
}
