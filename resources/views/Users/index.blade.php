@extends('layouts.master')
@section('title','Listagem de usuarios')

@section('content')
    <img width='500' src="{{ asset('images/Dicipline.jpg') }}" alt="Logo" style="display: block; margin: 0 auto;">
    <h1>Ola, mundo direto do layout!!</h1>

    <h1>Lista de Usuarios</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
