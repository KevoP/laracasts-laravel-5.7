<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'default')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">

        <style>
            .is-complete{
                text-decoration: line-through;
            }
        </style>
    </head>
    <body>
        <div class="container">   

            <nav class="navbar" role="navigation" aria-label="main navigation">
              <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                  
                    <a href="/" class="navbar-item">
                        Home
                    </a>

                    <a href="/projects" class="navbar-item">
                        Projects
                    </a>

                    <a href="/contact" class="navbar-item">
                        Contact
                    </a>

                    <a href="/about" class="navbar-item">
                        About
                    </a>                    

                    <div class="navbar-end">
                        <div class="navbar-item">
                            <div class="buttons">
                                <a href="/register" class="button is-primary">
                                    <strong>Sign up</strong>
                                </a>
                                <a href="/home" class="button is-light">
                                    Log in
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
            </nav>
        </div>

        <main class="container">
            @yield('content')
        </main>

    </body>
</html>
