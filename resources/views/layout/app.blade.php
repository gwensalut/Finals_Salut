<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <a href="{{route('home')}}">HOME PAGE</a>
            <a href="{{route('profile')}}">PROFILE PAGE</a>
            <a href="{{route('events')}}">EVENTS PAGE</a>
            <a href="{{route('login')}}">LOG IN PAGE</a>
            <a href="{{route('registration')}}">REGISTRATION PAGE</a>

            @if(auth()->check())
                <a href="{{ route('logout')}}">LOG OUT</a>
            @else
                <a href="{{ route('login')}}">LOG IN</a>
            @endif

        </nav>
    </header>

    @yield('content')
</body>
</html>