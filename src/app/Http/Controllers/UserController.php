<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function index()
    {
        return [
               'id' => 1,
               'name' => 'john boy'
                ];
     }
    public function show($id)
    {
        dd('x', $id);
    }
}
