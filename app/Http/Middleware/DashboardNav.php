<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DashboardNav
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        \View::share('nav', config('navs.dashboard'));
        return $next($request);
    }
}
