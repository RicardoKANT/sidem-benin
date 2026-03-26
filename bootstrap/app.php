<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

$app = Application::configure(basePath: dirname(__DIR__));

// Support public_html pour les hébergements mutualisés (production)
if ($publicPath = getenv('APP_PUBLIC_PATH')) {
    $app->usePublicPath(dirname(__DIR__) . '/' . $publicPath);
}

return $app->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // SetLocale doit être dans le groupe 'web' pour avoir accès à la session
        $middleware->appendToGroup('web', \App\Http\Middleware\SetLocale::class);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
