<?php

namespace App\Http\Middleware;

use Closure;
//use Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user()){
            if(auth()->user()->role == 0){
                return $next($request);
            }
            return redirect()->route('index');
        }
        return redirect()->route('user.auth.form');

    }
}
