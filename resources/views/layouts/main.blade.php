<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Week 02: @yield ('title')</title>
    
    </head>
    <body>
        <header>
            <h1>@yield('title')</h1>
            <nav>
                <a href="/home">Home</a>
                <a href="/friend">Friend</a>
                <a href="/teaching-schedule">Teaching Schedule</a>
                <a href="/about-me">About me</a>                    
            </nav>
        </header>
        <div>
            @yield('content')
        </div>

    </body>
    <footer>
        Created by nuttawud Boonma, Id 632110147.
    </footer>

</html>