<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <header>

    <nav class="navbar navbar-expand-1g navbar-light">
        <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">eventos</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">criar eventos</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">entrar</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">cadastrar</a>
        </div>

        <ul class="navbar-nav">
            <li class="nav-item"></li>
            <a href="/" class="navlink"></a>

        </ul>

    </nav>


    </header>
    <body>

    @yield('content')


        <footer>
                <p>HDE events &copy; 2022</p>   
        </footer>
    </body>
</html>
