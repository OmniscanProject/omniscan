<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class LanguageMiddleware
{
    protected const ALLOWED_LOCALIZATIONS = ['en', 'fr'];

    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (str_contains($request->url(), 'api/')) {
            $localization = $request->header('Accept-Language');
            $localization = in_array($localization, self::ALLOWED_LOCALIZATIONS, true) ? $localization : session('language');
        } else {
            $localization = session('language');
        }
        // dd($localization);

        if(!$localization) {
            $localization = app()->getLocale();
        }

        app()->setLocale($localization);

        Log::info("Locale set to: " . $localization . " (Selected language: " . $localization . ")");

        return $next($request);
    }
}
