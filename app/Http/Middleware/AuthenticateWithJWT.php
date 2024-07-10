<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Closure;

class AuthenticateWithJWT
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->bearerToken() ?? $request->cookie('token');

        if (!$token) {
            return redirect('/login');
        }

        return $next($request);
    }
}
