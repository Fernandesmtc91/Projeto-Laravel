<?php
use App\http\controllers\UserController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
// routes/web.php

//Route::get('admin/usuarios',[UserController::class,'index']);
Route::get('admin/usuarios/{id}',[UserController::class,'show']);
    



    





