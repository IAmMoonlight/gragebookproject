<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
    @stack('head')
</head>
<body>
<header>
    <div class="wrapper">
        <div class="header">
            <a href="/">
                <div class="logo_name_wrapper">
                    <div class="header_logo">
                        <img src="{{ asset('img/logo.png') }}" alt="logo">
                    </div>
                    <div class="header_name">Журнал успеваемости</div>
                </div>
            </a>
            <menu>
                <li class="active"><a href="#">Главная</a></li>
                <li><a href="#">Преподаватели</a></li>
            </menu>


            <!-- Имя авторизованного пользователя с инициалами -->
            @if(\Illuminate\Support\Facades\Auth::check())
                <div class="login_wrapper">
                    <div class="login">
                        <div class="login_fullname">{{ \Illuminate\Support\Facades\Auth::user()->name }}</div>
                    </div>
                    <div class="login_circle">ИИ</div>
                    <ul class="login_submenu hide">
                        <li><a href="{{ route('account.index') }}">Личный кабинет</a></li>
                        <li><a href="{{ route('exit') }}">Выйти</a></li>
                    </ul>
                </div>
            @else

                <!-- Кнопка Войти - для неавторизованных (class hide - display: none) -->
                <div class="btn_auth_wrapper">
                    <a href="{{ route('login') }}" class="btn_auth">Войти</a>
                </div>
            @endif

        </div>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer>
    <div class="wrapper">
        <div class="footer">

            <div class="links_wrapper">
                <a href="/">
                    <div class="footer_logo_wrapper">
                        <div class="footer_logo">
                            <img src="{{ asset('img/logo.png') }}" alt="logo">
                        </div>
                        <div class="footer_name">Журнал успеваемости</div>
                    </div>
                </a>
                <div class="icons_wrapper">
                    <a href="#" class="icon_link">
                        <img src="{{ asset('img/vk.png') }}" alt="vk">
                    </a>
                    <a href="#" class="icon_link">
                        <img src="{{ asset('img/facebook.png') }}" alt="facebook">
                    </a>
                    <a href="#" class="icon_link">
                        <img src="{{ asset('img/twitter.png') }}" alt="twitter">
                    </a>
                </div>
            </div>

            <div class="copyright">&copy; 2021 Все права соблюдены</div>
        </div>
    </div>
</footer>

@stack('beforeScripts')
<script src="{{ asset('js/manifest.js') }}"></script>
<script src="{{ asset('js/vendor.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')

</body>
</html>