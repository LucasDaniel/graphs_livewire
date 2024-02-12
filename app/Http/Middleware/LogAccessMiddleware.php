<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\LogAccess;

class LogAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ip = "'".$request->server->get('REMOTE_ADDR')."'";
        $route = "'".$request->getRequestUri()."'";
        $logAccess = new LogAccess();
        $logAccess->id_level = session('id_level') ?? '0';
        $logAccess->id_user = session('id_user') ?? '0';
        $logAccess->ip = $ip;
        $logAccess->route = $route;
        $logAccess->save();
        return $next($request);
    }
}
