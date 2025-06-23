@extends('layouts.master')

@push('meta')
    <meta name="robots" content="noindex, nofollow">
@endpush

@push('css')
    <style>
        .error-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 80vh;
            text-align: center;
            color: #2c3e50;
        }

        .error-code {
            font-size: 10rem;
            font-weight: bold;
            color: #e74c3c;
        }

        .error-message {
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }

        .home-button {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .home-button:hover {
            background-color: #2980b9;
        }
    </style>
@endpush

@section('content')
    <div class="error-container">
        <div class="error-code">404</div>
        <div class="error-message">很抱歉，您造訪的頁面不存在。</div>
        <a href="{{ route('home') }}" class="home-button">回到首頁</a>
    </div>
@endsection

@push('js')
@endpush
