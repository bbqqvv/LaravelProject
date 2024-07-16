<?php

use App\Http\Middleware\CanViewPostMiddleware;
use App\Http\Middleware\IsAdminMiddleware;
use App\Mail\PostCountMail;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias(['can-view-post' => CanViewPostMiddleware::class]);
        $middleware->alias(['is-admin' => IsAdminMiddleware::class]);
    })
    ->withSchedule(function (Schedule $schedule) {
        $schedule->call(function () {
            Mail::to('admin@example.com')->send(new PostCountMail());
        })->everyMinute();
    })
    ->withExceptions(function (Exceptions $exceptions) {

        //
    })->create();








     // $exceptions->render(function (Throwable $e, Request $request) {
        //     if ($e instanceof NotFoundHttpException) {
        //         return response()->view('errors.404');
        //     }
        //     return parent::render($e, $request);
        // });