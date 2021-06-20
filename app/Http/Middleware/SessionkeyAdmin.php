<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class SessionkeyAdmin
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
        $us = $request->session()->put('users');
        if ($request->session()->has('name')&& $us="admin") {
            # code...
            return $next($request);
        }
        else {
            $request->session()->flash('msg', 'Invalid request');
        }
        
    }
}
