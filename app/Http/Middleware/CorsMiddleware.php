<?php

namespace App\Http\Middleware;

use Closure;

class CorsMiddleware
{
    public function handle($request, Closure $next)
    {
        $allowedOrigins = [
            '127.0.0.1:8000',
        ];

        $origin = $request->header('Host');

       if (!in_array($origin, $allowedOrigins)) {
            return response()->json(['error' => 'Access denied'], 403);
        }

        $response = $next($request);

        $response->header('Access-Control-Allow-Origin', $allowedOrigins);
        $response->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE');
        $response->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');

        return $response;
    }
}
