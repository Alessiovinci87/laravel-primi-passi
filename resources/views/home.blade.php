<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Primi Passi</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
            background-color: lightcoral;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            }

            .hello-world {
            color: YELLOW;
            font-size: 36px;
            }
        </style>
    </head>
    <body>
        <div class="hello-world">
            HELLO WORLD
        </div>    
        {{-- <nav>
            <ul>
                <li><a href="/">Contact</a></li>
                <li><a href="/about">About</a></li>
            </ul>
        </nav> --}}
    </body>
</html>
