<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Auth;
use Closure;
class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) { //Chua dang nhap
            return redirect()->route('getdangnhap');
        }
        $user = Auth::user(); //Lay thong tin khi da dang nhap
        //Kiem tra quyen nguoi dung
        $route = $request->route()->getName();
        // dd($route);
        if($user->cant($route)){
            return redirect()->route('admin.error',['code'=>403]);
        }
     
        return $next($request);
    }
}
