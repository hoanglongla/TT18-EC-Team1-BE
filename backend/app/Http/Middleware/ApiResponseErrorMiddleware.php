<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Laravel\Passport\Exceptions\MissingScopeException;

class ApiResponseErrorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, $next, ...$scopes)
    {
        if (! $request->user() || ! $request->user()->token()) {
            throw new AuthenticationException;
        }
        //dd($scopes);
        foreach ($scopes as $scope) {
            if ($request->user()->tokenCan($scope)) {
                return $next($request);
            }
        }

        // Custom error response
        return \ApiService::fail("permission_error", 13000, $scopes);

        // This line can be commented or deleted.
       // throw new MissingScopeException($scopes);
    }
}
