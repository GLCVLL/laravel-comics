<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <title>{{ env('APP_NAME') }} | Home</title>
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
    <footer>
        <div class="footer-top">
            <div class="nav-list container">
                <!-- prima list-->
                <div class="nav-list-left">
                    <ul>
                        <li>
                            <a href="#">
                                <h3>DC COMICS</h3>
                            </a>
                        </li>
                        <li>
                            <a href="#">Characters</a>
                        </li>
                        <li>
                            <a href="#">Comics</a>
                        </li>
                        <li>
                            <a href="#">Movies</a>
                        </li>
                        <li>
                            <a href="#">TV</a>
                        </li>
                        <li>
                            <a href="#">Games</a>
                        </li>
                        <li>
                            <a href="#">Videos</a>
                        </li>
                        <li>
                            <a href="#">News</a>
                        </li>
                        <!-- seconda lista-->
                        <ul>
                            <li>
                                <a href="#">
                                    <h3>SHOP</h3>
                                </a>
                            </li>
                            <li>
                                <a href="#">Shop DC</a>
                            </li>
                            <li>
                                <a href="#">Shop DC Collectibles</a>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class="nav-list-center">
                    <ul>
                        <li>
                            <a href="#">
                                <h3>DC</h3>
                            </a>
                        </li>
                        <li>
                            <a href="#">Characters</a>
                        </li>
                        <li>
                            <a href="#">Comics</a>
                        </li>
                        <li>
                            <a href="#">Movies</a>
                        </li>
                        <li>
                            <a href="#">TV</a>
                        </li>
                        <li>
                            <a href="#">Games</a>
                        </li>
                        <li>
                            <a href="#">Videos</a>
                        </li>
                        <li>
                            <a href="#">News</a>
                        </li>
                        <li>
                            <a href="#">TV</a>
                        </li>
                        <li>
                            <a href="#">Games</a>
                        </li>
                        <li>
                            <a href="#">Videos</a>
                        </li>
                        <li>
                            <a href="#">News</a>
                        </li>
                    </ul>
                </div>
                <div class="nav-list-right">
                    <ul>
                        <li>
                            <a href="#">
                                <h3>SITES</h3>
                            </a>
                        </li>
                        <li>
                            <a href="#">Comics</a>
                        </li>
                        <li>
                            <a href="#">Movies</a>
                        </li>
                        <li>
                            <a href="#">TV</a>
                        </li>
                        <li>
                            <a href="#">Games</a>
                        </li>
                        <li>
                            <a href="#">Videos</a>
                        </li>
                        <li>
                            <a href="#">News</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container social-info">
                <button>SIGN-UP NOW!</button>
                <ul>
                    <li>
                        <a href="#">
                            <h3>FOLLOW US</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('images/footer-facebook.png') }}" alt="fb">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('images/footer-twitter.png') }}" alt="twitter">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('images/footer-youtube.png') }}" alt="yt">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('images/footer-pinterest.png') }}" alt="pinterest">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('images/footer-periscope.png') }}" alt="periscope">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>
