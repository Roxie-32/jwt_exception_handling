<?php

namespace App\Http\Middleware;
use JWTAuth;

use Closure;
use Illuminate\Http\Request;

class JWTMiddleWare
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

        $user = JWTAuth::parseToken()->authenticate();
        return $next($request);
    }
}
