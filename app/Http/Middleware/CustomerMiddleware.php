<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CustomerMiddleware
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
//        $a = 1;
        if (Auth::guard('Customer')->user()->static ==1){
            return redirect()->route("application");
        }else{
            return redirect()->route("loan");

        }
        return $next($request);
    }
}
