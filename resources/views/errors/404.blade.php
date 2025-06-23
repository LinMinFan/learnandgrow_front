@extends('layouts.master')

@push('meta')
    <meta name="robots" content="noindex, nofollow">
@endpush

@push('css')
    <style>
        .vh-80 {
            height: 80vh;
        }
    </style>
@endpush

@section('content')
    <div class="container d-flex flex-column justify-content-center align-items-center text-center vh-80">
        <h1 class="display-1 text-danger fw-bold mb-3">404</h1>
        <p class="fs-4 mb-4">很抱歉，您造訪的頁面不存在。</p>
        <a href="{{ route('home') }}" class="btn btn-primary btn-lg">
            回到首頁
        </a>
    </div>
@endsection

@push('js')
@endpush
