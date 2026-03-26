<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    /**
     * Locales supportées
     */
    protected $supported_locales = ['fr', 'en', 'es', 'de', 'zh'];

    /**
     * Gérer la requête
     */
    public function handle(Request $request, Closure $next)
    {
        // Lire depuis session, puis cookie, puis config par défaut
        // (on n'utilise PAS $request->route('locale') pour éviter les conflits)
        $locale = session('locale')
            ?? $request->cookie('locale')
            ?? config('app.locale');

        // Valider que la locale est supportée
        if (!in_array($locale, $this->supported_locales)) {
            $locale = config('app.locale');
        }

        // Définir la locale de l'application
        app()->setLocale($locale);

        return $next($request)->cookie(
            'locale',
            $locale,
            60 * 24 * 365, // 1 an
            '/',
            null,
            false,
            false
        );
    }
}
