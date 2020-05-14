{{
    app()->setLocale(session()->get('language', config('app.locale')))
}}

<!DOCTYPE HTML>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@lang('messages.title')</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"/>
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}"/>
    </noscript>
</head>
<body class="is-preload">

@include('components.menu')

<!-- Wrapper -->
<div id="wrapper">

    <section class="mobile-language-switcher">
        <span class="text-capitalize">@lang('messages.choose-language')</span>
        <div class="language-switcher">
            <a href="{{ route('language', 'en') }}" class="{{ app()->getLocale() === 'en' ? 'active' : '' }}">EN</a>
            <a href="{{ route('language', 'es') }}" class="{{ app()->getLocale() === 'es' ? 'active' : '' }}">ES</a>
            <a href="{{ route('language', 'ge') }}" class="{{ app()->getLocale() === 'ge' ? 'active' : '' }}">GE</a>
            <a href="{{ route('language', 'pt-br') }}" class="{{ app()->getLocale() === 'pt-br' ? 'active' : '' }}">PT</a>
        </div>
    </section>

    @yield('content')

</div>

<!-- Footer -->
<footer id="footer" class="wrapper style1-alt">
    <div class="inner">
        <ul class="menu">
            <li>&copy; Reclusion Days. All rights reserved.</li>
            <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </div>
</footer>

<!-- Scripts -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
<script src="{{ asset('assets/js/browser.min.js') }}"></script>
<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
<script src="{{ asset('assets/js/util.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
