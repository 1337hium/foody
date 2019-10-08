<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>FoodY</title>
        <!-- Scripts -->
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <!--<script src="{{ asset('js/app.js') }}"></script>-->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!--<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">
 <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset('js/app.js') }}" defer></script><Paste>
-->
        <!-- 
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
Compiled and minified CSS -->
        <!--<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
  -->
        <!-- Compiled and minified CSS -->
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>

    <body>
        <style>
            :root {
                --main-color: #ff9633;
                --light-color: #ffbe33;
                --grey: #6B6E70;
                --main-bg: #222629;
                --light-bg: #31373b;
                --main-color1: #61892F;
                --light-color1: #86C232;
                --grey1: #6B6E70;
                --main-bg1: #222629;
                --light-bg1: #31373b;

            }

            .card {
                background-color: var(--main-bg) !important;
            }

            .card-header {
                background-color: var(--light-bg) !important;
            }

            nav {
                background-color: var(--main-bg) !important;
            }

            .form-control {
                background-color: var(--main-bg) !important;
                border: none;
            }

            h1 {
                color: var(--main-color);
            }

            body {
                background-color: var(--light-bg);
                color: var(--grey);
            }

            a {
                color: var(--main-color);
            }

            a:hover,
            a:focus {
                color: var(--light-color);
                text-decoration: none;
                -o-transition: all .3s;
                -moz-transition: all .3s;
                -webkit-transition: all .3s;
                -ms-transition: all .3s;
                transition: all .3s;
            }


            input.search-query {
                background-color: #f47443;
                color: white;
            }

            input[type="search"]:focus {
                /*  height: 56.8px !important; /* or height of nav */
                border-bottom: 1px solid #000;
                box-shadow: 0 1px 0 0 #000;
            }

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

            #topbarsearch .input-field .prefix {
                width: 0rem !important;
            }

            #topbarsearch nav ul li:hover,
            nav ul li.active {
                background-color: none !important;
            }

            .input-field .prefix~input,
            .input-field .prefix~textarea,
            .input-field .prefix~label,
            .input-field .prefix~.validate~label,
            .input-field .prefix~.autocomplete-content {
                margin-left: 1rem !important;
            }

            .resizedTextbox {
                width: 200px;
                height: 20px
            }

            input::placeholder {
                color: var(--main-color);
            }

            input {
                border-bottom: 2px solid var(--main-color) !important;
                color: var(--light-color) !important;
                box-shadow: var(--main-color) !important;
            }

            input.active {
                border-bottom: 2px solid var(--light-color) !important;
            }

            nav .brand-logo {
                color: var(--main-color);
            }

            nav ul li a {
                color: var(--main-color);
            }

            input.textblack {
                color: white;
            }

            .sidenav {
                background-color: var(--main-bg) !important;
                color: white !important;
            }

            .sidenav.a:hover,
            .sidenav.a:focus {
                color: var(--light-color);
                text-decoration: none;
                -o-transition: all .3s;
                -moz-transition: all .3s;
                -webkit-transition: all .3s;
                -ms-transition: all .3s;
                transition: all .3s;

            }

            .textwhite {
                color: var(--main-color) !important;
            }

            .btn {
                background-color: var(--light-color);
                border: none;
                color: var(--main-bg);
            }

            .btn:hover {
                background-color: var(--main-color);
                border: none;
                color: var(--main-bg);
            }

            .page-item.active .page-link {
                z-index: 1;
                color: #fff;
                background-color: var(--main-color);
                border-color: var(--main-color);
            }

            .page-item .page-link {
                z-index: 1;
                color: var(--main-bg);
                background-color: var(--light-color);
                border-color: var(--light-color);
            }

            .page-item:hover .page-link:hover {
                z-index: 1;
                color: var(--main-bg);
                background-color: var(--main-color);
                border-color: var(--main-color);
            }


            .page-item.disabled .page-link {
                z-index: 1;
                color: var(--main-bg);
                background-color: var(--light-color);
                border-color: var(--light-color);
            }

            .select-wrapper input.select-dropdown:focus {
                border-bottom: 1px solid var(--light-color);
            }

            .select-wrapper {
                position: relative;
                color: var(--light-color);
                border-color: var(--light-color);
            }

            .select-wrapper input.select-dropdown {
                position: relative;
                cursor: pointer;
                color: var(--light-color);
                background-color: transparent;
                border: none;
                border-bottom: 1px solid #9e9e9e;
                outline: none;
                height: 3rem;
                line-height: 3rem;
                width: 100%;
                font-size: 16px;
                margin: 0 0 8px 0;
                padding: 0;
                display: block;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                z-index: 1;
                border-color: var(--light-color);
            }

            .dropdown-content {
                background-color: var(--light-bg);
                color: var(--light-color);
                margin: 0;
                display: none;
                min-width: 100px;
                overflow-y: auto;
                opacity: 0;
                position: absolute;
                left: 0;
                top: 0;
                z-index: 9999;
                -webkit-transform-origin: 0 0;
                transform-origin: 0 0;
                border-color: var(--light-color);
                border: 2px;
            }

            .dropdown-content li>a,
            .dropdown-content li>span {
                font-size: 16px;
                color: var(--light-color);
                display: block;
                line-height: 22px;
                padding: 14px 16px;
            }


            .dropdown-content a:hover {
                color: var(--light-bg);
                background-color: var(--light-color);
            }




            table,
            th,
            td {
                border-color: var(--light-bg) !important;
            }

        </style>
        <nav class="no-print">
            <div class="nav-wrapper">
                <a href="{{ route('rezepts.index') }}" class="brand-logo">FoodY</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    @guest
                    <li>
                        <form action="/search" method="POST" role="search">
                            {{ csrf_field() }}
                            <input id="search" class="search-query" placeholder="{{ trans('sentence.search')}}"
                                type="search" name="q" required>
                        </form>
                    </li>
                    <li><a href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('rezepts.category') }}">{{ trans('sentence.rz')}}</a>
                    </li>
                    <!----------- -->
                    <ul id="dropdown_nav_rz" class="dropdown-content">
                        <li>
                            <a class="dropdown-item" href="{{ route('rezepts.all') }}">{{ trans('sentence.all')}}</a>
                        </li>
                        {{-- <li>
                            <a class="dropdown-item"
                                href="{{ route('rezepts.menue') }}">{{ trans('sentence.category3')}}</a>
                        </li> --}}
                    </ul>
                    <li><a class="dropdown-trigger" href="#!"
                            data-target="dropdown1">{{ Config::get('languages')[App::getLocale()] }}<i
                                class="material-icons right">arrow_drop_down</i></a>
                    </li>
                    <ul id="dropdown1" class="dropdown-content">
                        @foreach (Config::get('languages') as $lang => $language)
                        @if ($lang != App::getLocale())
                        <li>
                            <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                    @else
                    <li>
                        <form action="/search" method="POST" role="search">
                            {{ csrf_field() }}
                            <input id="search" class="search-query" placeholder="{{ trans('sentence.search')}}"
                                type="search" name="q" required>
                        </form>
                    </li>

                    <li>
                        <a class="dropdown-trigger" href="#!"
                            data-target="dropdown1">{{ Config::get('languages')[App::getLocale()] }}<i
                                class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('rezepts.category') }}">{{ trans('sentence.rz')}}</a>
                    </li>

                    <li>
                        <a class="dropdown-trigger" href="#!" data-target="dropdown_user">
                            @if (auth()->user()->image)
                            <img src="{{ asset(auth()->user()->image) }}"
                                style="width: 40px; height: 40px; border-radius: 50%;">
                            @endif
                            {{ Auth::user()->name }} <span class="caret"></span><i
                                class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                    <ul id="dropdown_user" class="dropdown-content">
                        <li>
                            <a href="{{ route('rezepts.create') }}">Add</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                    <ul id="dropdown1" class="dropdown-content">
                        @foreach (Config::get('languages') as $lang => $language)
                        @if ($lang != App::getLocale())
                        <li>
                            <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                        </li>
                        @endif
                        @endforeach
                    </ul>
            </div>
            @endguest

        </nav>
        <ul class="sidenav dark" id="mobile-demo">
            @guest
            <li>
                <form action="/search" method="POST" role="search">
                    @csrf
                    <input id="search" class="search-query textblack" placeholder="{{ trans('sentence.search')}}"
                        type="search" name="q" required>
                </form>
            </li>
            <li><a class="textwhite" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li><a class="dropdown-trigger textwhite" href="#!"
                    data-target="dropdown_m1">{{ Config::get('languages')[App::getLocale()] }}<i
                        class="material-icons right">arrow_drop_down</i></a>
            </li>
            <ul id="dropdown_m1" class="dropdown-content">
                @foreach (Config::get('languages') as $lang => $language)
                @if ($lang != App::getLocale())
                <li>
                    <a class="textwhite" class="dropdown-item"
                        href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                </li>
                @endif
                @endforeach
            </ul>
            @else
            <li>
                <form action="/search" method="POST" role="search">
                    {{ csrf_field() }}
                    <input id="search" class="search-query" placeholder="{{ trans('sentence.search')}}" type="search"
                        name="q" required>
                </form>
            </li>
            <li>
                <a class="dropdown-trigger textwhite" href="#!"
                    data-target="dropdown_m1">{{ Config::get('languages')[App::getLocale()] }}<i
                        class="material-icons right">arrow_drop_down</i>
                </a>
            </li>
            <li>
                <a class="textwhite" href="{{ route('rezepts.category') }}">{{ trans('sentence.rz')}}</a>
            </li>

            <li>
                <a class="dropdown-trigger textwhite" href="#!" data-target="dropdown_m_user">
                    @if (auth()->user()->image)
                    <img src="{{ asset(auth()->user()->image) }}"
                        style="width: 40px; height: 40px; border-radius: 50%;">
                    @endif
                    {{ Auth::user()->name }} <span class="caret"></span><i
                        class="material-icons right">arrow_drop_down</i>
                </a>
            </li>
            <ul id="dropdown_m_user" class="dropdown-content">
                <li>
                    <a href="{{ route('rezepts.create') }}">Add</a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
            <ul id="dropdown_m1" class="dropdown-content">
                @foreach (Config::get('languages') as $lang => $language)
                @if ($lang != App::getLocale())
                <li>
                    <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                </li>
                @endif
                @endforeach
                @endguest
                <li>
                    <a class="textwhite" href="{{ route('rezepts.category') }}">{{ trans('sentence.rz')}}</a>
                </li>

            </ul>
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
    $(document).ready(function () {
        $('select').formSelect();
    });
    $(".dropdown-button").dropdown();
    $(document).ready(function () {
        $('.sidenav').sidenav();
    });
    $(".dropdown-trigger").dropdown({
        hover: false,
        constrainWidth: false,
        alignment: 'right',
    });

</script>
