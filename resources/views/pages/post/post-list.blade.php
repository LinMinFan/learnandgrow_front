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
    <!-- Start Article Category Page Content -->
    <!--==================================================-->
    <div class="container py-5">
        <div class="row">
            <!-- 類別選單 -->
            <aside class="col-md-3 mb-4">
                <div class="list-group">
                    @foreach ($categories as $main)
                        <div class="mb-3">
                            <strong class="d-block mb-1">{{ $main->name }}</strong>
                            @foreach ($main->children as $child)
                                <a href="{{ route('post.list', ['slug' => $child->slug]) }}"
                                    class="list-group-item list-group-item-action {{ $currentCategory->id === $child->id ? 'active' : '' }}">
                                    {{ $child->name }}
                                </a>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </aside>

            <!-- 文章列表 -->
            <section class="col-md-9">
                @forelse ($posts as $post)
                    <div class="mb-4 border-bottom pb-3">
                        <h4 class="mb-2">
                            <a href="{{ route('post.show', $post->id) }}" class="text-dark">
                                {{ $post->title }}
                            </a>
                        </h4>
                        @if ($post->excerpt)
                            <p class="text-muted mb-1">{{ $post->excerpt }}</p>
                        @endif
                        <small class="text-secondary">發布於
                            發布於 {{ $post->published_at->format('Y-m-d H:i') }}
                        </small>
                    </div>
                @empty
                    <div class="alert alert-info">此分類下尚無文章。</div>
                @endforelse

                <!-- 分頁 -->
                <div class="mt-4">
                    {{ $posts->links() }}
                </div>
            </section>
        </div>
    </div>
    <!--==================================================-->
    <!-- End Article Category Page Content -->
    <!--==================================================-->
@endsection

@push('js')
@endpush
