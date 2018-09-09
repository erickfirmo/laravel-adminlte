<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- SEO -->
    <meta name="description" content="@yield('description', config('app.description'))">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="@yield('author')">
    <meta name="robots" content="index, follow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Welcome to ' . config('app.name'))</title>

    <!-- Twitter -->
    <meta name="twitter:widgets:csp"  content="on"/>
    <meta name="twitter:card"         content="summary_large_image"/>
    <meta name="twitter:site"         content="@example"/>
    <meta name="twitter:title"        content="@yield('title', 'Welcome to ' . config('app.name'))"/>
    <meta name="twitter:description"  content="@yield('description', config('app.description'))"/>

    <!-- Facebook -->
    <meta property="og:site_name"     content="{{ config('app.name') }}">
    <meta property="og:url"           content="{{ Request::url() }}" />
    <meta property="og:type"          content="@yield('type', 'article')" />
    <meta property="og:locale"        content="{{ app()->getLocale() }}" />
    <meta property="og:title"         content="@yield('title', 'Welcome to ' . config('app.name'))" />
    <meta property="og:description"   content="@yield('description', config('app.description'))" />
    <meta property="og:image"         content="@yield('image', asset('images/logo.png'))" />
    <meta property="og:image:width"   content="@yield('image', '237')" />
    <meta property="og:image:height"  content="@yield('image', '66')" />

    <!-- Browser Customization -->
    <meta name="apple-mobile-web-app-title" content="{{ config('app.name') }}">
    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="theme-color" content="#3498db">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}">

    <!-- Libs -->
    <link href="{{ asset('libs/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/noUiSlider/css/nouislider.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/OwlCarousel2/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/OwlCarousel2/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/Select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/iCheck/skins/square/blue.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/template.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.theme.default.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Libs -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('libs/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('libs/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('libs/noUiSlider/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('libs/OwlCarousel2/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('libs/Select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('libs/bootbox.min.js') }}"></script>
    <script src="{{ asset('libs/fastclick.js') }}"></script>
    <script src="{{ asset('libs/iCheck/icheck.min.js') }}"></script>
    <script src="{{ asset('libs/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/libs.js') }}"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/utils.js') }}"></script>
    <script src="{{ asset('js/cep.js') }}"></script>
    <script src="{{ asset('js/cnpj.js') }}"></script>
</body>
</html>
