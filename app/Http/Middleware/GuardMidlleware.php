<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GuardMidlleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
       $guards= array_keys(config('auth.guards'));
       foreach($guards as $guard)
       {
        if(auth()->guard($guard)->check())
        {
            return $next($request);
        }

       }
       return redirect()->route('home');

    }
}
