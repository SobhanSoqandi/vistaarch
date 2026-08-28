<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $locale = $request->segment(1);

        if (! in_array($locale, ['fa', 'en', 'de'])) {
            $locale = 'fa';
        }

        App::setLocale($locale);

        return $next($request);
    }
}