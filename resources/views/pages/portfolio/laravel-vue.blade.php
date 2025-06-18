@extends('layouts.master')

@push('meta')
    <meta name="robots" content="index, nofollow">
@endpush

@push('css')
    <style>
        .section-title {
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid #0d6efd;
            display: inline-block;
        }

        ul.custom-list {
            list-style: none;
            padding-left: 0;
        }

        ul.custom-list li {
            position: relative;
            padding-left: 2rem;
            margin-bottom: 1rem;
            line-height: 1.6;
            font-size: 1rem;
            color: #333;
        }

        ul.custom-list li::before {
            content: '\f00c';
            /* FontAwesome check icon */
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 0.1rem;
            color: #0d6efd;
        }

        .card {
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
            border: none;
        }

        .card-body {
            padding: 2rem;
        }

        .section {
            padding-top: 3rem;
            padding-bottom: 3rem;
            background-color: #f8f9fa;
        }

        .btn-primary {
            border-radius: 50px;
            padding: 0.6rem 1.5rem;
        }
    </style>
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
    <!-- Start Laravel-Vue 作品內容區塊 -->
    <!--==================================================-->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="h4 mb-3">
                                <i class="fas fa-tools me-2 text-primary"></i> Laravel + Vue 3 + Inertia.js 後台管理系統
                            </h2>
                            <p class="mb-4">
                                本專案為一套基於 Laravel 10、Vue 3 與 Inertia.js 打造的 SPA
                                後台管理系統，具備模組化設計、權限控管、檔案管理、文章管理等功能，並整合多項現代化開發工具與 UI 元件。
                            </p>

                            <h5 class="section-title">
                                <i class="fas fa-server me-2 text-success"></i> 後端核心技術
                            </h5>
                            <ul class="custom-list">
                                <li><strong>Laravel 10：</strong> 穩定的路由、ORM、Middleware 與事件系統</li>
                                <li><strong>Inertia.js + Vue 3：</strong> SPA 架構與 Laravel 路由整合</li>
                                <li><strong>Sanctum：</strong> 提供 CSRF 防護與身份驗證</li>
                                <li><strong>Spatie MediaLibrary：</strong> 儲存與圖片處理</li>
                                <li><strong>Spatie Permission：</strong> 角色與權限控管</li>
                            </ul>

                            <h5 class="section-title">
                                <i class="fas fa-paint-brush me-2 text-warning"></i> 前端技術與 UI 套件
                            </h5>
                            <ul class="custom-list">
                                <li>Vue 3 + Composition API</li>
                                <li>Tailwind CSS</li>
                                <li>Vite 打包工具</li>
                                <li>Axios 處理 HTTP 請求</li>
                                <li>FontAwesome 圖示套件</li>
                                <li>Vue Multiselect、Draggable、Chart.js、Simple Datatables</li>
                                <li>Vue3 Notification 即時提示</li>
                                <li>Tiptap 編輯器：支援表格、程式碼、圖片等功能</li>
                            </ul>

                            <h5 class="section-title">
                                <i class="fas fa-sitemap me-2 text-info"></i> 系統功能與選單設計
                            </h5>
                            <p>選單設計結合 Spatie 權限設定，根據不同角色顯示對應功能模組：</p>

                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <img src="{{ asset('picture/laravel-vue/dashboard.png') }}" class="card-img-top" alt="儀錶板">
                                        <div class="card-body">
                                            <h6 class="fw-bold"><i class="fas fa-chart-pie me-1 text-muted"></i> 儀錶板</h6>
                                            <p class="mb-0">系統總覽與圖表統計，快速掌握系統運作狀況。</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <img src="{{ asset('picture/laravel-vue/media-library.png') }}" class="card-img-top"
                                            alt="媒體庫">
                                        <div class="card-body">
                                            <h6 class="fw-bold"><i class="fas fa-photo-video me-1 text-muted"></i> 媒體庫</h6>
                                            <p class="mb-0">多媒體檔案集中管理、分類與標籤。</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <img src="{{ asset('picture/laravel-vue/menu-management.png') }}" class="card-img-top" alt="選單管理">
                                        <div class="card-body">
                                            <h6 class="fw-bold"><i class="fas fa-cogs me-1 text-muted"></i> 選單管理</h6>
                                            <p class="mb-0">支援巢狀拖曳式選單設計，自訂前台導覽。</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <img src="{{ asset('picture/laravel-vue/permissions.png') }}" class="card-img-top"
                                            alt="權限設定">
                                        <div class="card-body">
                                            <h6 class="fw-bold"><i class="fas fa-users-cog me-1 text-muted"></i> 角色與權限</h6>
                                            <p class="mb-0">帳號角色分級授權，限制功能存取。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center mt-5">
                                <a href="https://admin.learnandgrow.com.tw/login" target="_blank" class="btn btn-primary">
                                    <i class="fas fa-external-link-alt me-1"></i> 前往作品
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End Laravel-Vue 作品內容區塊 -->
    <!--==================================================-->
@endsection

@push('js')
@endpush
