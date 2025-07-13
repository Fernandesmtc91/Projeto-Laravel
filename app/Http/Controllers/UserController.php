<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Exibe a lista de usuários ou a página de um usuário específico
    public function index()
    {
        return view('users.index');

        // return 
        //         'id' => 1,
        //        'name' => 'Francisco'
        //     ]);
    }

    // Exibe um usuário específico (usando Route Model Binding)
    public function show(User $user)
    {
        return $user;
    }
}
