<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>@yield('titulo')</title>
        <meta charset="utf-8">
    </head>

    <body>
        @include('site.layouts.partials.topo')
        @yield('conteudo')
    </body>
</html>
