<?php

use App\http\controllers\UserController;
use App\Http\Controllers\users;
use Illuminate\Support\Facades\Route;

Route::get(
    '/',
    function () {
        return view('welcome');
    }
);
// routes/web.php

//Route::get('admin/usuarios',[UserController::class,'index']);
Route::get('admin/usuarios/index', [UserController::class, 'index']);
route::get('admin/usuarios/show', [UserController::class, 'show']);
route::get('admin/usuarios/PaginaPrincipal', [UserController::class, 'PaginaPrincipal']);
