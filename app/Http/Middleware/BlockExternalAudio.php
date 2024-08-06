<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BlockExternalAudio
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $content = $request->getContent();

        if (strpos($content, 'https://flag-gimn.ru/wp-content/uploads/2021/09/Ukraina.mp3') !== false) {
            return response('Blocked', 403);
        }

        return $next($request);
    }
}