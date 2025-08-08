<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Busca todos os usuários do banco
        return view('users.index', compact('users')); // Envia para a view
    }
    public function show()
    {
        return view('users.show');
    }
}
