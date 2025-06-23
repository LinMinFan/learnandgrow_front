<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="referrer" content="same-origin">
    <meta name="rating" content="general">
    <meta name="author" content="林旻汎">
    <meta name="_token" content="{{ csrf_token() }}">

    @if (!empty($pageSetting))
        <meta name="description" content="{{ $pageSetting['description'] ?? $configSetting['site-description']['text'] }} }}">
        <meta name="keywords" content="{{ $pageSetting['keywords'] ?? $configSetting['site-keywords']['text'] }}">
        <!-- OG Meta -->
        <meta property="og:title" content="{{ $pageSetting['og']['title'] ?? $configSetting['og-meta']['title'] }}">
        <meta property="og:description"
            content="{{ $pageSetting['og']['description'] ?? $configSetting['og-meta']['description'] }}">
        <meta property="og:image" content="{{ $mediaUrl . $pageSetting['og']['image'] ?? $mediaUrl . $configSetting['og-meta']['image'] }}">

        <!-- 頁面標題 -->
        <title>
            {{ $pageSetting['title'] ?? $configSetting['site-name']['text'] }}
        </title>
    @else
        <meta name="description" content="{{ $configSetting['site-description']['text'] }} }}">
        <meta name="keywords" content="{{ $configSetting['site-keywords']['text'] }}">
        <!-- OG Meta -->
        <meta property="og:title" content="{{ $configSetting['og-meta']['title'] }}">
        <meta property="og:description"
            content="{{ $configSetting['og-meta']['description'] }}">
        <meta property="og:image" content="{{ $mediaUrl . $configSetting['og-meta']['image'] }}">

        <!-- 頁面標題 -->
        <title>
            {{ $configSetting['site-name']['text'] }}
        </title>
    @endif

    @stack('meta')

    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicon -->
    @if (empty($configSetting['favicon']['url']))
        <link rel="icon" href="{{ asset('picture/icon.png') }}">
    @else
        <link rel="icon" href="{{ $mediaUrl . $configSetting['favicon']['url'] }}">
    @endif


    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <!-- bootstrap CSS -->
    <link href="{{ asset('vendor/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- carousel CSS -->
    <link href="{{ asset('vendor/css/owl.carousel.min.css') }}" rel="stylesheet">
    <!-- animate CSS -->
    <link href="{{ asset('vendor/css/animate.css') }}" rel="stylesheet">
    <!-- animated-text CSS -->
    <link href="{{ asset('vendor/css/animated-text.css') }}" rel="stylesheet">
    <!-- font-awesome CSS -->
    <link href="{{ asset('vendor/css/all.min.css') }}" rel="stylesheet">
    <!-- font-flaticon CSS -->
    <link href="{{ asset('vendor/css/flaticon.css') }}" rel="stylesheet">
    <!-- theme-default CSS -->
    <link href="{{ asset('vendor/css/theme-default.css') }}" rel="stylesheet">
    <!-- meanmenu CSS -->
    <link href="{{ asset('vendor/css/meanmenu.min.css') }}" rel="stylesheet">
    <!-- transitions CSS -->
    <link href="{{ asset('vendor/css/owl.transitions.css') }}" rel="stylesheet">
    <!-- venobox CSS -->
    <link href="{{ asset('vendor/css/venobox.css') }}" rel="stylesheet">
    <!-- bootstrap icons -->
    <link href="{{ asset('vendor/css/bootstrap-icons.css') }}" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="{{ asset('custom/css/style.css') }}" rel="stylesheet">
    <!-- responsive CSS -->
    <link href="{{ asset('custom/css/responsive.css') }}" rel="stylesheet">

    <script src="{{ asset('vendor/js/modernizr-3.5.0.min.js') }}"></script>
    <link href="{{ asset('vendor/css/clash-display.css') }}" rel="stylesheet">

    @stack('css')

    {{-- Google Analytics --}}

<body>
    <!-- loder -->
    <div class="loader-wrapper">
        <div class="loader"></div>
        <div class="loder-section left-section"></div>
        <div class="loder-section right-section"></div>
    </div>

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

    <script src="{{ asset('vendor/js/jquery-3.6.2.min.js') }}"></script>
    <script src="{{ asset('vendor/js/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendor/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('vendor/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('vendor/js/wow.js') }}"></script>
    <script src="{{ asset('vendor/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/js/venobox.js') }}"></script>
    <script src="{{ asset('vendor/js/animated-text.js') }}"></script>
    <script src="{{ asset('vendor/js/venobox.min.js') }}"></script>
    <script src="{{ asset('vendor/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('vendor/js/jquery.scrollUp.js') }}"></script>
    <script src="{{ asset('vendor/js/jquery.barfiller.js') }}"></script>
    <script src="{{ asset('custom/js/theme.js') }}"></script>

    @stack('js')
</body>

</html>
