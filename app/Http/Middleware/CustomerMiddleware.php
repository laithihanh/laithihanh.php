<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CustomerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard ='cus')
    {
        if (Auth::guard($guard)->check()) {
            return $next($request);
            
        }

        return redirect()->route('home')->with('error','Bạn cần đăng nhập');
    }
}
