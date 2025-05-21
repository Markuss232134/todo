<!DOCTYPE html>
<html>
<head>
    <title>Todo Projekts</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
        <a href="/">Sākums</a>
        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Izrakstīties</button>
            </form>
        @endauth
        @guest
            <a href="{{ route('login') }}">Pieslēgties</a>
            <a href="{{ route('register') }}">Reģistrēties</a>
        @endguest
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
