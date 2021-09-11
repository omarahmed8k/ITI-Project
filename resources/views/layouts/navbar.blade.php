<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Instagram</title>

    <script src="{{ asset('js/all.min.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custome.css') }}" rel="stylesheet">
</head>


<body>
    <div id="app">

        <nav class="navbar navbar-expand navbar-light border">
            <div class="container">
                <div class="logo">
                    <a class="navbar-brand" href="{{ url('/home') }}"><img src="{{asset('img/instagram.png')}}" alt="instagram-logo" /></a>
                </div>
                <form class="form-inline d-none d-sm-block">
                    <input class="form-control" type="search" placeholder="Search" />
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/add') }}"><i class="fas fa-plus-circle fa-lg"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="{{ url('/home') }}"><i class="fas fa-home fa-lg"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-2" href="{{ url('/profile') }}"><img class="nav-img" src="{{asset('img/user.png')}}" alt="user-image" /></a>
                    </li>
                    <li class="nav-item">
                        <a onclick=" event.preventDefault();document.getElementById('logout-form').submit();" class="nav-link" href="{{ url('/logout') }}"><i class="fas fa-sign-out-alt fa-lg"></i></a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>