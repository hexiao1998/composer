<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
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
         //检查当前具有登录的session
        
        if($request->session()->has('user_id')){
            return $next($request);
        }else{
            //跳转到登录界面
            return redirect("/adminlogin");
        }
       
    }
}
