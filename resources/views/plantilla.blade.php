<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','Sin definir')</title>
    <style>
        .active a {
            color: red;
            text-decoration: none;
        }
    </style>
</head>
<body>
    Pagina de mi proyecto personal
    <hr><br>
    @include('b/nav')
    @yield('content')
</body>
</html>