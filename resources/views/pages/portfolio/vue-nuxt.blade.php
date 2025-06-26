@extends('layouts.master')

@push('meta')
    <meta name="robots" content="index, nofollow">
@endpush

@push('css')
    <style>
        .feature-img {
            border-radius: 0.5rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
            border: 1px solid #f0f0f0;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease;
        }

        .feature-img:hover {
            transform: scale(1.03);
            box-shadow: 0 0.75rem 1.25rem rgba(0, 0, 0, 0.15);
        }

        .section-title {
            font-size: 1.25rem;
            border-bottom: 2px solid #ddd;
            padding-bottom: 0.5rem;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }

        .text-muted {
            font-size: 0.95rem;
        }

        @media (max-width: 768px) {
            .feature-img {
                margin-bottom: 1rem;
            }
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
    <!-- Start Vue-Nuxt 作品內容區塊 -->
    <!--==================================================-->
    <section class="py-5 bg-light">
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-10">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h2 class="h4 mb-4">
                            <i class="fas fa-cart-shopping me-2 text-primary"></i> 電商網站專案（Vue + Nuxt 2）
                        </h2>
                        <p class="text-muted">
                            本專案為一個基於 Vue 與 Nuxt 2 所開發的電商平台，涵蓋首頁展示、商品購物車與結帳流程。透過前端互動設計與插件整合，呈現出完整的使用者體驗。
                        </p>

                        <hr class="my-4">

                        <h4 class="section-title">
                            <i class="fas fa-home me-2 text-success"></i> 首頁設計
                        </h4>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">輪播圖區塊：展示主打活動與優惠訊息</li>
                            <li class="mb-2">服務說明區塊：簡述購物流程與服務特色</li>
                            <li class="mb-2">熱門分類區塊：引導使用者快速進入商品類別</li>
                            <li class="mb-2">精選商品區塊：推薦特定商品，提升轉換率</li>
                        </ul>

                        <div class="row g-3 mb-5">
                            <div class="col-md-6">
                                <img src="{{ asset('picture/vue-nuxt/carousel.png') }}" class="img-fluid feature-img"
                                    alt="輪播圖區塊畫面">
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('picture/vue-nuxt/featured-products.png') }}"
                                    class="img-fluid feature-img" alt="精選商品區塊畫面">
                            </div>
                        </div>

                        <h4 class="section-title">
                            <i class="fas fa-box-open me-2 text-warning"></i> 商品功能模組
                        </h4>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">商品列表頁：支援分類篩選、加入購物車、收藏功能</li>
                        </ul>

                        <div class="mb-4">
                            <img src="{{ asset('picture/vue-nuxt/product-list.png') }}" class="img-fluid feature-img"
                                alt="商品列表頁畫面">
                        </div>

                        <h4 class="section-title">
                            <i class="fas fa-credit-card me-2 text-danger"></i> 購物車與結帳流程
                        </h4>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">購物車：數量調整、刪除、小計與總計即時更新</li>
                            <li class="mb-2">結帳流程：包含資料填寫、訂單確認與模擬付款</li>
                        </ul>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <img src="{{ asset('picture/vue-nuxt/cart.png') }}" class="img-fluid feature-img"
                                    alt="購物車畫面">
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('picture/vue-nuxt/checkout.png') }}" class="img-fluid feature-img"
                                    alt="結帳流程畫面">
                            </div>
                        </div>

                        <h4 class="section-title">
                            <i class="fas fa-cogs me-2 text-info"></i> 技術細節
                        </h4>
                        <ul class="list-unstyled mb-4">
                            <li>Nuxt SSR 架構，提升首屏速度與 SEO</li>
                            <li>Vuex 狀態管理 + vuex-persist 資料持久化</li>
                            <li>Axios 串接 API</li>
                            <li>多語系支援（nuxt-i18n）</li>
                            <li>cookie-universal-nuxt 管理登入狀態</li>
                        </ul>

                        <h4 class="section-title">
                            <i class="fas fa-puzzle-piece me-2 text-secondary"></i> 插件整合與互動設計
                        </h4>
                        <div class="table-responsive mb-3">
                            <table class="table table-bordered table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>插件名稱</th>
                                        <th>功能說明</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>slick.js</td>
                                        <td>輪播與商品圖片滑動展示</td>
                                    </tr>
                                    <tr>
                                        <td>jquery.syotimer / countdown</td>
                                        <td>倒數計時功能</td>
                                    </tr>
                                    <tr>
                                        <td>wow.js</td>
                                        <td>元件進場動畫</td>
                                    </tr>
                                    <tr>
                                        <td>jquery-ui.js</td>
                                        <td>增強元件互動性</td>
                                    </tr>
                                    <tr>
                                        <td>select2.min.js</td>
                                        <td>強化下拉選單</td>
                                    </tr>
                                    <tr>
                                        <td>perfect-scrollbar.js</td>
                                        <td>自訂滾動條外觀</td>
                                    </tr>
                                    <tr>
                                        <td>magnific-popup.js</td>
                                        <td>圖片燈箱展示</td>
                                    </tr>
                                    <tr>
                                        <td>waypoints.js + counterup.js</td>
                                        <td>數字動畫顯示</td>
                                    </tr>
                                    <tr>
                                        <td>jquery.vticker-min.js</td>
                                        <td>垂直跑馬燈（最新消息）</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="text-center mt-4">
                            <a href="https://vue-ssr.learnandgrow.com.tw/zh-TW" target="_blank" class="btn btn-primary">
                                <i class="fas fa-external-link-alt me-1"></i> 前往作品
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End Vue-Nuxt 作品內容區塊 -->
    <!--==================================================-->
@endsection

@push('js')
@endpush
