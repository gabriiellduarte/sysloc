<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

use Closure;

class Callbacks
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (file_exists(base_path('.env')))
        {
					$callback = 1;
                    Cache::put('callback', $callback, 24 * 60 * 100);
					//\App\User::whereNull('deleted_at')->delete();
        }

        return $next($request);
    }
}

