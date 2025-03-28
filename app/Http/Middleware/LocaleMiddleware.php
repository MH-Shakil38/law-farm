<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocaleMiddleware
{
    public function handle($request, Closure $next)
    {
        $locale = Session::get('locale');
        if (Session::has('locale')) {
            app()->setLocale($locale);
        }

        return $next($request);
    }
}
