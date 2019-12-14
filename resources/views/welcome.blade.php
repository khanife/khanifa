<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="{{ asset('favicon.ico') }}" rel="shortcut icon">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link rel="manifest" href="{{ asset('manifest.json') }}"/>
        <!-- Styles -->
        <style>
        /**
        * User: Roghib
        * Date: 12.14.2019
        * Time: 18:05
        */
        html {
        font-family: sans-serif;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
        }
        body {
        margin: 0;
        background-color: rgba(6, 7, 13, 1);
        color: rgba(255, 255, 255, 1);
        }
        h1 {
            display: flex;
            justify-content: center;
        }
        </style>
    </head>
    <body>

        <header>
            <nav class="navbar navbar-expand-md navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
    
                        </ul>
    
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <div id="hero-area" class="hero-area-bg">
                <div class="container">
                    <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="contents text-center">
                        
                        <div class="rog"><img alt="Khanifa" class="logo" src="{{ asset('img/elemen.png') }}"></div>
                        <h2 class="head-title wow fadeInUp">Build anything with Khanifa</h2>
                        <div class="header-button wow fadeInUp" data-wow-delay="0.3s">
                            <a href="/home" class="button">Explore</a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </main>
            
        <footer>
            <div class="foo">
                <span>&#169; Khanifa 2019</span>
            </div>
        </footer>
    </body>
</html>
