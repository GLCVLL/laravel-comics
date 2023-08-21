<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <title>{{ env('APP_NAME') }} | Movies</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        <div class="container" id="navbar-header">
            <figure class="logo">
                <img src="{{ asset('images/dc-logo.png') }}" alt="logo">
            </figure>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('characters') }}">Characters</a></li>
                <li><a href="{{ route('comics') }}">Comics</a></li>
                <li><a href="{{ route('movies') }}">Movies</a></li>
                <li><a href="#">Tv</a></li>
                <li><a href="#">Games</a></li>
                <li><a href="#">Collectibles</a></li>
                <li><a href="#">Videos</a></li>
                <li><a href="#">Fans</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Shop</a></li>
            </ul>
        </div>
    </header>
</body>

</html>
