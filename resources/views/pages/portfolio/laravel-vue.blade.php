@extends('layouts.master')

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
    <!-- Start Laravel-Vue 作品內容區塊 -->
    <!--==================================================-->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h2 class="h4 mb-3">
                                <i class="fas fa-tools me-2 text-primary"></i> Laravel + Vue 3 + Inertia.js 後台管理系統
                            </h2>
                            <p>本專案為一套基於 Laravel 10、Vue 3 及 Inertia.js 打造的 SPA
                                後台管理系統。具備模組化設計、權限控管、檔案管理、文章管理等常見功能，並整合多項現代化開發工具與 UI 元件。
                            </p>

                            <hr>

                            <h5>
                                <i class="fas fa-server me-2 text-success"></i> 後端核心技術
                            </h5>
                            <ul>
                                <li>
                                    <strong>Laravel 10：</strong> 提供穩定的路由、ORM、Middleware 與事件系統
                                </li>
                                <li>
                                    <strong>Inertia.js + Vue 3：</strong> SPA 架構與 Laravel 路由整合
                                </li>
                                <li>
                                    <strong>Sanctum：</strong> CSRF 防護與身份驗證
                                </li>
                                <li>
                                    <strong>Spatie MediaLibrary：</strong> 檔案上傳與圖片處理
                                </li>
                                <li>
                                    <strong>Spatie Permission：</strong> 角色權限控管
                                </li>
                            </ul>

                            <h5>
                                <i class="fas fa-paint-brush me-2 text-warning"></i> 前端技術與 UI 套件
                            </h5>
                            <ul>
                                <li>Vue 3 + Composition API</li>
                                <li>Tailwind CSS</li>
                                <li>Vite 打包</li>
                                <li>Axios 處理 HTTP 請求</li>
                                <li>FontAwesome icon 套件</li>
                                <li>Vue Multiselect、Vue Draggable、Chart.js、Simple Datatables</li>
                                <li>Vue3 Notification 即時提示</li>
                                <li>Tiptap 編輯器：支援表格、程式碼、圖片等進階功能</li>
                            </ul>

                            <h5>
                                <i class="fas fa-sitemap me-2 text-info"></i> 系統功能與選單設計
                            </h5>
                            <p>選單設計結合 Spatie 權限設定，根據不同角色顯示對應功能。</p>
                            <ul class="mb-0">
                                <li>
                                    <strong><i class="fas fa-chart-pie me-1 text-muted"></i> 儀錶板：</strong> 系統總覽與圖表統計
                                </li>
                                <li>
                                    <strong><i class="fas fa-photo-video me-1 text-muted"></i> 媒體庫：</strong> 上傳與檔案管理
                                </li>
                                <li>
                                    <strong><i class="fas fa-envelope-open-text me-1 text-muted"></i> 聯絡表單：</strong> 表單資料管理
                                </li>
                                <li>
                                    <strong><i class="fas fa-file-alt me-1 text-muted"></i> 頁面管理：</strong> 首頁與靜態頁設定
                                </li>
                                <li>
                                    <strong><i class="fas fa-newspaper me-1 text-muted"></i> 文章管理：</strong> 包含分類與內容
                                </li>
                                <li>
                                    <strong><i class="fas fa-cogs me-1 text-muted"></i> 網站管理：</strong> 網站與選單設定
                                </li>
                                <li>
                                    <strong><i class="fas fa-users-cog me-1 text-muted"></i> 角色與權限：</strong> 管理帳號與權限
                                </li>
                            </ul>

                            <div class="text-center mt-4">
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
