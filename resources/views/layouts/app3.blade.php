<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    オンライン展示会
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
                        <div>{{Auth::user()}}</div>
                        @auth('company_user')  
                            <li id=1 class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href='#'role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    
                                    {{ Auth::user()}}<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/company_user/{{Auth::user()}}/">企業ユーザーページ</a>
                                    </li>
    
                                    <li aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('company_user.logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('ログアウト') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('company_user.logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endauth

                        @auth('user')
                            <li id=1 class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href='#'role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->user_name}}<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('user.logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('ログアウト') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endauth


                        @guest
                            <li id=1>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.login') }}">{{ __('ログイン(一般ユーザー)') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('company_user.login') }}">{{ __('ログイン(企業ユーザー)') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('company_user.register') }}">{{ __('新規登録(企業ユーザー)') }}</a>
                            </li>
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