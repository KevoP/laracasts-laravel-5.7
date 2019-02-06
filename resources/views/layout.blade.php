<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'default')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
    </head>
    <body>
            
        <nav>
            <ul>
                <li><a href="/">home</a></li>
                <li><a href="/contact">contact</a></li>
                <li><a href="/about">about</a></li>
            </ul>
        </nav>

        @yield('content')
    </body>
</html>
