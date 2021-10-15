<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Styles -->
        <link rel="stylesheet" href="/css/style.css">
        @hasSection('css')
            <link rel="stylesheet" href="/css/@yield('css').css">
        @endif
    </head>
    <body>
        <header class="header_large">
            <div>
                <h1><a href="/accueil">Biblio-teckel</a></h1>
            </div>
            <nav>
                <ul>
                    <li><a href="/accueil">Accueil</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/about">A propos</a></li>
                    <li><a href="/books">Catalogue</a></li>
                    <li><a href="/books/create">Nouveau livre</a></li>
                </ul>
            </nav>
        </header>
        <div class="container">
            <div>
                <h1>@yield('title')</h1>
            </div>
            <main>
                @yield('content')
            </main>
        </div>
    </body>
</html>