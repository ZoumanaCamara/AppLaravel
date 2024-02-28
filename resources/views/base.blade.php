<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>

    <nav>
        @guest
            <ul>
                <li><a href="{{ route('register') }}">Inscription</a></li>
                <li><a href="{{ route('login') }}">Connexion</a></li>
            </ul>
        @else
            <ul>
                <li><a href="{{ route('posts.index') }}">Gestion des Article</a></li>
                <li><a href="{{ route('categories.index') }}">Gestion des categories</a></li>
                <li><a href="{{ route('logout') }}" id="logout">Deconnexion</a></li>
            </ul> 

        @endguest
    </nav>

    <header>
        @yield('header')
    </header>

    <main>
        @yield('main')
    </main>

    
</body>
</html>