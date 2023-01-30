<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        {{-- Fonte do Google --}}

        {{-- CSS Bootstrap --}}

        {{-- CSS da aplicação --}}
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
    @yield('content')
    <footer>
        <p>HDC Events &copy; 2023</p>
    </footer>
    </body>
</html>