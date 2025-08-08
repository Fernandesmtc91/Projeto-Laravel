<?php

use App\Http\controllers\UserController;
use App\Http\Controllers\users;
use Illuminate\Support\Facades\Route;

Route::get(
    '/',
    function () {
        return view('Users.welcome');
    }
);
Route::get('/show', [UserController::class, 'show']);
Route::get('/users', [UserController::class, 'index']);
