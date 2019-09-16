<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Rezept') }}</title>

    <!-- Scripts -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">
 <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset('js/app.js') }}" defer></script><Paste>
-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- Compiled and minified JavaScript -->
    <!--    <script src="{{ asset('js/app.js') }}" defer></script><Paste>
-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>

    <style>
    @page {
        size: auto;
        margin: 10;
    }

    @media print {

        .no-print,
        .no-print * {
            display: none !important;
        }
    }
    </style>
    <nav>
        <div id="app" class="nav-wrapper">
            <!--        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
 -->
            <div class="container" class="nav-wrapper">
                <a class="navbar-brand" href="{{ url('/rezepts') }}">
                    Rezept
                </a>
                <button class="navbar-toggler sidenav-trigger" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul id="nav-mobile" class="right hide-on-med-and-down">

                    <!--                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        -->

                        @guest
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rezepte
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('rezepts.menue') }}">Menüvorschläge</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('rezepts.menue') }}">Menüvorschläge</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('rezepts.create') }}">Add</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @if (auth()->user()->image)
                                <img src="{{ asset(auth()->user()->image) }}"
                                    style="width: 40px; height: 40px; border-radius: 50%;">
                                @endif
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>



                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                {{ Config::get('languages')[App::getLocale()] }}
                            </a>
                            <ul class="dropdown-menu">
                                @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                <li>
                                    <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                                </li>
                                @endif
                                @endforeach
                            </ul>

            </div>

            </li>







            @endguest
            </ul>
        </div>
        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
    </div>
</body>

</html>
<script>
$(document).ready(function() {
    $('select').formSelect();
});
$(".dropdown-button").dropdown();
$(".button-collapse").sideNav();
</script>