<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Exibe a lista de usuários ou a página de um usuário específico
    public function index()
    {
        $users = User::all();
        return view('users.index', [
            'saudacoes' => 'hello world!!',   //comentario salvando como variáveis para ser impresso no codgo HTML
            'users2' => $users
        ]);            //Todos os usuarios do banco de dados
    }
    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user
        ]);
    }
}
