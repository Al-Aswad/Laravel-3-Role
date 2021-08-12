<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsUser
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
        if (Auth::user() && Auth::user()->roles == 'USER' || Auth::user()->roles == 'CO') {
            return $next($request);
        } elseif (Auth::user() && Auth::user()->roles == 'ADMIN') {
            return redirect('/admin');
        } else {
            return redirect('login');
        }

        return redirect('login');
    }
}
