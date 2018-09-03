<?php
namespace app\Http\Middleware;

use Closure;

class ProtocoloHttps {

    public function handle($request, Closure $next)
    {
        if (!$request->secure() && env('APP_ENV') === 'production') {
            return redirect()->secure($request->getRequestUri());
        }

        return $next($request); 
    }
}