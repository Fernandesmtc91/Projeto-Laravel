<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Exibe a lista de usu�rios ou a p�gina de um usu�rio espec�fico
    public function index()
    {
        return view('users.index');

        // return 
        //         'id' => 1,
        //        'name' => 'Francisco'
        //     ]);
    }

    // Exibe um usu�rio espec�fico (usando Route Model Binding)
    public function show(User $user)
    {
        return $user;
    }
}
