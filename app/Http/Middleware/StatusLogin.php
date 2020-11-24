<?php

namespace App\Http\Middleware;

use Closure;

class StatusLogin
{
    public function handle($request, Closure $next)
    {
        $status_login = session('status_login');
        if (!$status_login) {
            return redirect()->route('login-dashboard');
        }
        return $next($request);
    }
}
