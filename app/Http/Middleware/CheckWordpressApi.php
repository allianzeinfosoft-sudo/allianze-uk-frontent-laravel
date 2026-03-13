<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Http;

class CheckWordpressApi
{
    public function handle($request, Closure $next)
    {
        try {

            $response = Http::timeout(3)->get(env('WORDPRESS_API_URL'));

            if (!$response->successful()) {
                return response()->view('errors.technical-issue');
            }

        } catch (\Exception $e) {
            return response()->view('errors.technical-issue');
        }

        return $next($request);
    }
}