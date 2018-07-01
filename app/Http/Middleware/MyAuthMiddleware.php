<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class MyAuthMiddleware
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
            dd("AUTHENTICATED");
        }else{
            dd("NOTAUTHENTICATED");
        }
        return $next($request);
    }
}
