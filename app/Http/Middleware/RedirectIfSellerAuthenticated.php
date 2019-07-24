<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfSellerAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (Auth::guard()->check()) {
            return redirect('/home');
        }

        if (Auth::guard('seller')->check()){
            return redirect('seller/home');
        }

        return $next($request);
    }
}
