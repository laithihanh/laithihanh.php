<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class AdminLoginMiddleware
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
         if(Auth::check()){
            $user = Auth::user();
            if($user->status == 0){
                return $next($request);
            }
            else{
                Auth::logout();
               return redirect()->route('getdangnhap'); 
            }
         }
          return redirect('/admin/login');
    }
}
