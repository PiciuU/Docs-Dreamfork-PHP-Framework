<?php

use Framework\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| WEB Routes
|--------------------------------------------------------------------------
|
| This section defines the WEB routes for the application. Any routes registered here will be loaded by the
| RouteServiceProvider and associated with the 'web' interface. These routes are responsible for handling web-based
| requests and defining the behavior of various web pages and views. Each route is defined using the Route class,
| allowing for the definition of routes with different HTTP methods, paths, and handlers, such as controller
| methods or closures.
|
*/

Route::get('/', function() {
    return view('welcome');
});

Route::get('/docs', function() {
    return view('v1/getting-started/installation');
});

Route::group('/docs/1.x', function() {
    Route::get('/', function() {
        return view('v1/getting-started/installation');
    });

    Route::get('/releases', function() {
        return view('v1/prologue/releases');
    });

    Route::get('/changelog', function() {
        return view('v1/prologue/changelog');
    });

    Route::get('/roadmap', function() {
        return view('v1/prologue/roadmap');
    });

    Route::get('/examples', function() {
        return view('v1/prologue/examples');
    });

    Route::get('/contributions', function() {
        return view('v1/prologue/contributions');
    });


    Route::get('/installation', function() {
        return view('v1/getting-started/installation');
    });

    Route::get('/configuration', function() {
        return view('v1/getting-started/configuration');
    });

    Route::get('/structure', function() {
        return view('v1/getting-started/structure');
    });

    Route::get('/frontend', function() {
        return view('v1/getting-started/frontend');
    });

    Route::get('/deployment', function() {
        return view('v1/getting-started/deployment');
    });

    Route::get('/lifecycle', function() {
        return view('v1/architecture-concepts/lifecycle');
    });

    Route::get('/container', function() {
        return view('v1/architecture-concepts/container');
    });

    Route::get('/facades', function() {
        return view('v1/architecture-concepts/facades');
    });

    Route::get('/routing', function() {
        return view('v1/the-basics/routing');
    });

    Route::get('/controllers', function() {
        return view('v1/the-basics/controllers');
    });

    Route::get('/requests', function() {
        return view('v1/the-basics/requests');
    });

    Route::get('/responses', function() {
        return view('v1/the-basics/responses');
    });

    Route::get('/caching', function() {
        return view('v1/the-basics/caching');
    });

    Route::get('/mail', function() {
        return view('v1/the-basics/mail');
    });

    Route::get('/collections', function() {
        return view('v1/the-basics/collections');
    });

    Route::get('/helpers', function() {
        return view('v1/the-basics/helpers');
    });

    Route::get('/views', function() {
        return view('v1/the-basics/views');
    });

    Route::get('/vision', function() {
        return view('v1/the-basics/vision');
    });

    Route::get('/url', function() {
        return view('v1/the-basics/url');
    });

    Route::get('/validation', function() {
        return view('v1/the-basics/validation');
    });

    Route::get('/filesystem', function() {
        return view('v1/the-basics/filesystem');
    });

    Route::get('/errors', function() {
        return view('v1/the-basics/errors');
    });

    Route::get('/authentication', function() {
        return view('v1/security/authentication');
    });

    Route::get('/tokenization', function() {
        return view('v1/security/tokenization');
    });

    Route::get('/hashing', function() {
        return view('v1/security/hashing');
    });

    Route::get('/queries', function() {
        return view('v1/database/queries');
    });

    Route::get('/orm', function() {
        return view('v1/database/orm');
    });
});