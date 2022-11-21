<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Config;

class Language
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

        if(session()->has('locale') && array_key_exists(session()->get('locale'),config('languages')))
        {
app()->setlocale(session()->get('locale'));
        }
        return $next($request);
    }
}
