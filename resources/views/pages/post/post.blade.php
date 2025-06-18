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
                            <h1>{{ $name }}</h1>
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
    <!-- Start Article Content -->
    <!--==================================================-->
    <div class="blog-details-area pt-60 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <!-- 封面圖 -->
                    @if (!empty($post->cover_image))
                        <div class="mb-4 text-center">
                            <img src="{{ $mediaUrl . $post->cover_image }}" alt="{{ $post->title }}"
                                class="img-fluid rounded">
                        </div>
                    @else
                        <div class="mb-4 text-center">
                            <img src="{{ asset('picture/about-study.png') }}" alt="{{ $post->title }}"
                                class="img-fluid rounded">
                        </div>
                    @endif

                    <!-- 發布資訊 -->
                    <div class="mb-3 text-muted small">
                        類別：{{ $post->category->name }}
                        |　發布於 {{ $post->published_at->format('Y-m-d H:i') }}
                    </div>

                    <!-- 正文內容 -->
                    <div class="post-content">
                        {!! $post->content !!}
                    </div>

                    <!-- 返回分類列表按鈕 -->
                    <div class="mt-5 text-center">
                        <a href="{{ route('post.list', ['slug' => $post->category->slug]) }}" class="btn btn-primary">
                            ← 返回「{{ $post->category->name }}」文章列表
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End Article Content -->
    <!--==================================================-->
@endsection

@push('js')
@endpush
