@extends('layouts.master')

@push('css')
    <link href="{{ asset('custom/css/about-custom.css') }}" rel="stylesheet">
@endpush

@section('content')
    <!--==================================================-->
    <!-- Start Prygo Breadcumb Area -->
    <!--==================================================-->
    <div class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <div class="breadcumb-title">
                            <h1>關於我</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- Start Prygo Breadcumb Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start zumla-about Section  -->
    <!--==================================================-->
    <div class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-thumb">
                        <img src="{{ asset('picture/about-study.png') }}" alt="">
                    </div>
                    <div class="about-shape bounce-animate">
                        <img src="{{ asset('picture/zumla-cont-shape.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <h5>持續精進學習</h5>
                        <h1>
                            鑽研新工具與框架，保持與時俱進。
                        </h1>
                    </div>
                    <div class="prossess-ber-plugin">
                        <span class="prosses-bar">javascript</span>
                        <div id="bar1" class="barfiller">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                            <span class="fill" data-percentage="90"></span>
                        </div>
                        <span class="prosses-bar">php</span>
                        <div id="bar2" class="barfiller">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                            <span class="fill my-class" data-percentage="95"></span>
                        </div>
                        <span class="prosses-bar">laravel</span>
                        <div id="bar3" class="barfiller">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                            <span class="fill my-class2" data-percentage="95"></span>
                        </div>
                        <span class="prosses-bar">vue</span>
                        <div id="bar4" class="barfiller">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                            <span class="fill my-class3" data-percentage="90"></span>
                        </div>
                        <span class="prosses-bar">linux</span>
                        <div id="bar5" class="barfiller">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                            <span class="fill my-class4" data-percentage="70"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row g-4">
                @foreach (config('about-me.about-style') as $style)
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm border-0 attitude-card bg-white text-dark">
                            <div class="card-body">
                                <div class="mb-3 text-warning fs-4">
                                    <i class="{{ $style['i-class'] }}"></i>
                                </div>
                                <h5 class="card-title fw-bold fs-5 text-dark">{{ $style['title'] }}</h5>
                                <p class="card-text">
                                    {{ $style['text'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--==================================================-->
    <!-- End zumla-about Section  -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start certificate Section  -->
    <!--==================================================-->

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <!-- 左側圖片 -->
                <div class="col-md-6 text-center">
                    <img src="{{ asset('picture/about-certificate.png') }}" alt=""
                        class="img-fluid rounded shadow mb-4" style="max-width: 100%; max-height: 400px;">
                </div>

                <!-- 右側標題與清單 -->
                <div class="col-md-6">
                    <!-- 空一行 -->
                    <div class="mb-4"></div>

                    <h3 class="fw-bold mb-4">
                        <i class="fas fa-certificate text-warning me-2"></i>
                        相關證照
                    </h3>

                    <!-- 再空一行 -->
                    <div class="mb-3"></div>

                    <ul class="list-unstyled">
                        @foreach (config('about-me.about-certificate') as $certificate)
                            <li class="d-flex align-items-start mb-3">
                                <i class="fas fa-check-circle text-success me-2 mt-1"></i>
                                <span class="fw-semibold">{{ $certificate['name'] }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--==================================================-->
    <!-- End certificate Section  -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start work-experience Section  -->
    <!--==================================================-->

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <!-- 左側標題與清單 - 調整為較小寬度 -->
                <div class="col-md-5 col-lg-4">
                    <!-- 空一行 -->
                    <div class="mb-4"></div>

                    <h3 class="fw-bold mb-4">
                        <i class="fas fa-briefcase text-primary me-2"></i>
                        工作經歷
                    </h3>

                    <!-- 再空一行 -->
                    <div class="mb-3"></div>

                    <ul class="list-unstyled">
                        @foreach (config('about-me.about-work-experience') as $work)
                            <li class="d-flex flex-column mb-3">
                                <h5 class="fw-semibold mb-1">{{ $work['company'] }}｜{{ $work['position'] }}</h5>
                                <p class="mb-0">{{ $work['description'] }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- 右側圖片 - 調整為較小寬度並增加左邊距 -->
                <div class="col-md-5 col-lg-6 text-center ps-md-4">
                    <img src="{{ asset('picture/about-work-experience.png') }}" alt=""
                        class="img-fluid rounded shadow mb-4" style="max-width: 100%; max-height: 400px;">
                </div>
            </div>
        </div>
    </section>

    <!--==================================================-->
    <!-- End work-experience Section  -->
    <!--==================================================-->
@endsection

@push('js')
@endpush
