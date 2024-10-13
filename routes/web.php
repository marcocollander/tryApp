<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return '<h1>Hello, World!</h1>';
});

/*Route::get('/welcome', function () {
    return view('welcome');
});*/

Route::get('/welcome', [WelcomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);
