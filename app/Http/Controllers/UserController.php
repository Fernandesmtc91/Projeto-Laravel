<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function index()
    {
        return [
               'id' => 3,
               'name' => 'Francisco'
               ];
     }
    public function show($id)
    {
        return $id;
        
    }
}
