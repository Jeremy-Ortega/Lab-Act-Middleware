<?php

use App\Http\Middleware\GlobalMiddleware;
use App\Http\Middleware\RouteMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // TODO
        // REGISTER YOUR MIDDLEWARES HERE
        // YOU CAN USE ALIAS, AND REMEMBER THE PRIORITIZATION OF APPLYING MIDDLEWARES
        $middleware->alias(['Global', GlobalMiddleware::class]);
        $middleware->alias(['RouteOnly',RouteMiddleware::class]);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
