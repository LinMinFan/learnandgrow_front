<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="referrer" content="same-origin">
    <meta name="rating" content="general">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index,follow">
    <meta name="_token" content="{{ csrf_token() }}">

    @stack('meta')

    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Title -->
    <title></title>

    <!-- Favicon -->
    <link rel="icon" href="">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('css')

    {{-- Google Analytics --}}

<body>
    <header>
        {{-- @include('site.partials.header') --}}
    </header>

    <section>
        @yield('content')
    </section>

    <footer class="footer-area">
        {{-- @include('site.partials.footer') --}}
    </footer>

    @stack('js')
</body>

</html>
