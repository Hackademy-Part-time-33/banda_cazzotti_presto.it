<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\IsRevisor;
use App\Mail\BecomeRevisor;
use App\Mail\WorkWithUs;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'isRevisor' => IsRevisor::class
        ]);
    })
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'auth' => BecomeRevisor::class
        ]);
    })
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'auth' => WorkWithUs::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
