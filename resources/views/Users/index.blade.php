<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello wordl</title>  <!-- t�tulo da p�gina -->
</head>
<body>
     @php
        $saudacoes = 'Hello world Sr.';
        $name = ' Francisco Neto';
    @endphp
    <h1>    
        {{$saudacoes}}       
        {{$name}}
        {{$user as user}}
    </h1>  
    @foreach($users as $user) 
        <div> {{ $user->name}} </div>
    @endforeach
</body>
</html>