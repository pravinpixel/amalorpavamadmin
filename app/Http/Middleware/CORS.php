<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CORS
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        Header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
        Header('Access-Control-Allow-Origin:*');
        Header('Access-Control-Allow-Headers:X-Requested-With, X-Auth-Token, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding, X-Login-Origin, responseType');
        return $next($request);
    }
}
