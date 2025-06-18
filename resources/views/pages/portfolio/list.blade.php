@extends('layouts.master')

@push('meta')
    <meta name="robots" content="index, follow">
@endpush

@push('css')
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
                            <h1>作品集</h1>
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
    <!-- Start zumla-portfolio Section  -->
    <!--==================================================-->

    <div class="portfolio-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-title">
                        <h1>作品列表</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach (config('portfolio-list.list') as $portfolio)
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-single-box wow fadeInLeft animated">
                            <div class="portfolio-thumb">
                                <img src="{{ asset($portfolio['img']) }}" alt="">
                            </div>
                            <div class="portfolio-info">
                                <p>{{ $portfolio['info'] }}</p>
                            </div>
                            <div class="portfolio-icon">
                                <span>
                                    <i class="bi bi-heart"></i>
                                </span>
                            </div>
                            <div class="portfolio-content">
                                <h5>
                                    <a href="{{ route('portfolio-show', ['name' => $portfolio['name']]) }}">
                                        {{ $portfolio['content'] }}
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!--==================================================-->
    <!-- End zumla-portfolio Section  -->
    <!--==================================================-->
@endsection

@push('js')
@endpush
