<!--==================================================-->
<!-- start zumla-footer Section  -->
<!--==================================================-->

<div class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-content">
                    <h1>與我聯絡</h1>
                </div>
                <div class="footer-info">
                    <h5>{{ $configSetting['site-author']['text'] }}</h5>
                    <p>{{ $configSetting['contact-email']['text'] }}</p>
                    <span>({{ $configSetting['contact-phone']['text'] }})</span>
                </div>
                <div class="footer-thumb">
                    <img src="{{ asset('picture/footer-thumb.png') }}" alt="">
                </div>
                <div class="footer-shape bounce-animate5">
                    <img src="{{ asset('picture/footer-icon.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-copyright">
                    <p>{{ $configSetting['copyright']['text'] }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer-header-section">
    <div class="container">
        <div class="row align-items-center d-flex">
            <div class="col-lg-3">
                <div class="footer-logo">
                    <a href="{{ route('home') }}">
                        <img
                            src="{{ asset('storage/upload/' . $configSetting['site-logo']['url']) }}"
                            alt=""
                        >
                    </a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="footer-menu">
                    <ul>
                        <li><a href="service.html">關於我</a></li>
                        <li><a href="portfolio.html">作品集</a></li>
                        <li><a href="portfolio.html">文章</a></li>
                        <li><a href="#">與我聯絡</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==================================================-->
<!-- end zumla-footer Section  -->
<!--==================================================-->

<!--==================================================-->
<!-- Start scrollup section Section -->
<!--==================================================-->

<div class="prgoress_indicator active-progress">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 270.456;">
        </path>
    </svg>
</div>

<!--==================================================-->
<!-- Start scrollup section Section -->
<!--==================================================-->
