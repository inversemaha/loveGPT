<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiAuth
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //return response(['Token mismatch'], 403);
      /*  if ($request['api_key'] != getApiKey()) {

            return response(
                [
                    'status_code' => 400,
                    'message' => "Token Mismatch",
                ]
            );
        }*/
        return $next($request);
    }
}
