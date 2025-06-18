@extends('layouts.master')

@push('meta')
    <meta name="robots" content="index, follow">
@endpush

@push('css')
@endpush

@section('content')
    <!--==================================================-->
    <!-- Start Hero Section  -->
    <!--==================================================-->

    <div class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row hero-bg">
                <div class="col-lg-6">
                    <div class="hero-thumb">
                        <img src="{{ asset('picture/hero-bg.png') }}" alt="">
                    </div>
                    <div class="hero-all-shape">
                        <div class="hero-shape bounce-animate">
                            <img src="{{ asset('picture/home-shape1.png') }}" alt="">
                        </div>
                        <div class="hero-shape2 bounce-animate2">
                            <img src="{{ asset('picture/home-shape2.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-content wow fadeInRight animated">
                        <h5>HI !, My name is</h5>
                        <h1>Jack</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="hero-sub-content">
                                <a href="javascript:;">
                                    <h5>Laravel Development</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="hero-sub-content upper1">
                                <a href="javascript:;">
                                    <h5>WordPress Developer</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="hero-sub-content upper1">
                                <a href="javascript:;">
                                    <h5>Vue Developer</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==================================================-->
    <!-- End Hero Section  -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start brand Section  -->
    <!--==================================================-->


    <div class="brand-area">
        <div class="container">
            <div class="row brand-bg">
                <div class="brand-section owl-carousel">
                    <div class="col-lg-12">
                        <div class="brand-single-box wow fadeInRight animated">
                            <div class="brand-thumb">
                                <img src="{{ asset('picture/laravel.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="brand-single-box wow fadeInRight animated">
                            <div class="brand-thumb">
                                <img src="{{ asset('picture/vue.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="brand-single-box wow fadeInRight animated">
                            <div class="brand-thumb">
                                <img src="{{ asset('picture/html.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="brand-single-box wow fadeInRight animated">
                            <div class="brand-thumb">
                                <img src="{{ asset('picture/css.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="brand-single-box wow fadeInRight animated">
                            <div class="brand-thumb">
                                <img src="{{ asset('picture/javascript.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="brand-single-box wow fadeInRight animated">
                            <div class="brand-thumb">
                                <img src="{{ asset('picture/php.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="brand-single-box wow fadeInRight animated">
                            <div class="brand-thumb">
                                <img src="{{ asset('picture/linux.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="brand-single-box wow fadeInRight animated">
                            <div class="brand-thumb">
                                <img src="{{ asset('picture/docker.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--==================================================-->
    <!-- End brand Section  -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- start zumla-contact Section  -->
    <!--==================================================-->

    <div class="about-two-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInRight animated">
                    <div class="about-two-content">
                        <h5>我是後端工程師</h5>
                        <h1>
                            打造所需要的各種系統功能
                        </h1>
                        <p>
                            你好！我是專業的後端工程師，對技術開發充滿熱情並全心投入。
                            <br>
                            具備讓專案穩定、高效運作的實力與經驗。
                        </p>
                    </div>

                    <div class="about-two-info">
                        <p>
                            我熱愛整個系統開發的流程，
                            <br>
                            從需求分析到系統設計與實作，每一步都全力以赴。
                        </p>
                    </div>
                    <div class="about-two-button">
                        <a href="{{ route('contact') }}">
                            與我聯絡
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-two-thumb">
                        <img src="{{ asset('picture/cont-1.png') }}" alt="">
                    </div>
                    <div class="about-two-shape bounce-animate4">
                        <img src="{{ asset('picture/zumla-cont-shape.png') }}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--==================================================-->
    <!-- End zumla-contact Section  -->
    <!--==================================================-->

@endsection

@push('js')
@endpush
