<!--==================================================-->
<!-- Start polytia Main Menu  -->
<!--==================================================-->

<div id="sticky-header" class="zumla_nav_manu">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="logo">
                    <a class="logo_img" href="{{ route('home') }}" title="home">
                        @if (empty($configSetting['site-logo']['url']))
                            <img src="{{ asset('picture/logo.png') }}" alt="logo">
                        @else
                            <img src="{{ $mediaUrl . $configSetting['site-logo']['url'] }}"
                                alt="logo">
                        @endif
                    </a>
                    <a class="main_sticky" href="{{ route('home') }}" title="home">
                        @if (empty($configSetting['site-logo']['url']))
                            <img src="{{ asset('picture/logo-white.png') }}" alt="logo">
                        @else
                            <img src="{{ $mediaUrl . $configSetting['site-logo']['url'] }}"
                                alt="logo">
                        @endif
                    </a>
                </div>
            </div>
            <div class="col-lg-9">
                <nav class="zumla_menu">
                    <ul class="nav_scroll">
                        <li>
                            <a href="{{ route('home') }}">首頁</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}">關於我</a>
                        </li>
                        <li>
                            <a href="{{ route('portfolio.list') }}">作品集</a>
                        </li>
                        <li>
                            <a href="{{ route('post.list', ['slug' => 'frontend']) }}">文章</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">與我聯絡</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- polytia Mobile Menu  -->
<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none ">
    <div class="mobile-menu">
        <nav class="zumla_menu">
            <ul class="nav_scroll">
                <li>
                    <a href="{{ route('home') }}">
                        首頁
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}">
                        關於我
                    </a>
                </li>
                <li>
                    <a href="{{ route('portfolio.list') }}">
                        作品集
                    </a>
                </li>
                <li>
                    <a href="{{ route('post.list') }}">
                        文章
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}">
                        與我聯絡
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<!--==================================================-->
<!-- End polytia Main Menu  -->
<!--==================================================-->
