<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','curso de laravel')</title>
    @vite('resources/css/app.css')
{{--  js,css,img  --}}
</head>
<body>
    @yield('content')
    @vite('resources/js/app.js')
</body>
</html>
<img> 