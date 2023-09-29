<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('dangnhap/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dangnhap/assets/css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('dangnhap/assets/css/icon.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/eye.css') }}">
    <title>Genz Store</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/3e4c630da3.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="app">
    <header>
<!-- LOGO -->
<div class="logo pr-55 d-inline-block">
    <a href="/">
    <img  width="200px"src="{{ asset('client/assets/img/logo/logoGENZ.png') }}" class="logo" alt="Genz Store Logo">
    </a> 

   </div>
			<nav>
                        @guest
                            @if (Route::has('login'))
                                <li >
                                    <a href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}">{{ __('Đăng ký') }}</a>
                                </li>
                            @endif
                        @else
                        @endguest
			</nav>
		</header>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
<script src="{{ asset('dangnhap/assets/js/main.js') }}"></script>