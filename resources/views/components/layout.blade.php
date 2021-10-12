<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1><a href="/accueil">Biblio-teckel</a></h1>
            <nav>
                <ul>
                    <li><a href="/accueil">Accueil</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/about">A propos</a></li>
                </ul>
            </nav>
        </header>

        {{ $slot }}
        
    </body>
</html>