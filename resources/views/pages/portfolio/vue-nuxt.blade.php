@extends('layouts.master')

@push('meta')
    <meta name="robots" content="index, nofollow">
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
    <!-- Start Vue-Nuxt 作品內容區塊 -->
    <!--==================================================-->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h2 class="h4 mb-3">
                                <i class="fas fa-cart-shopping me-2 text-primary"></i> 電商網站專案（Vue 3 + Nuxt）
                            </h2>
                            <p>
                                本專案為一個基於 Vue 3 與 Nuxt 2 所開發的電商平台，實作完整購物流程，涵蓋常見電商前台功能，並著重於使用者體驗與前端互動設計。
                            </p>

                            <hr>

                            <h5>
                                <i class="fas fa-home me-2 text-success"></i> 首頁設計
                            </h5>
                            <ul>
                                <li>輪播圖區塊：展示主打活動與優惠訊息</li>
                                <li>服務說明區塊：簡述購物流程與服務特色</li>
                                <li>熱門分類區塊：引導使用者快速進入商品類別</li>
                                <li>精選商品區塊：推薦特定商品，提升轉換率</li>
                            </ul>

                            <h5>
                                <i class="fas fa-box-open me-2 text-warning"></i> 商品功能模組
                            </h5>
                            <ul>
                                <li><strong>商品列表頁：</strong> 支援分類篩選、加入購物車、收藏功能</li>
                                <li><strong>商品詳細頁：</strong> 包含圖片燈箱、倒數活動與即時庫存提示</li>
                            </ul>

                            <h5>
                                <i class="fas fa-credit-card me-2 text-danger"></i> 購物車與結帳流程
                            </h5>
                            <ul>
                                <li><strong>購物車：</strong> 數量調整、刪除、小計與總計即時更新</li>
                                <li><strong>結帳流程：</strong> 包含資料填寫、訂單確認與模擬付款</li>
                            </ul>

                            <h5>
                                <i class="fas fa-cogs me-2 text-info"></i> 技術細節
                            </h5>
                            <ul>
                                <li>Nuxt SSR 架構，提升首屏速度與 SEO</li>
                                <li>Vuex 狀態管理 + vuex-persist 資料持久化</li>
                                <li>Axios 串接 API</li>
                                <li>多語系支援（nuxt-i18n）</li>
                                <li>cookie-universal-nuxt 管理登入狀態</li>
                            </ul>

                            <h5>
                                <i class="fas fa-puzzle-piece me-2 text-secondary"></i> 插件整合與互動設計
                            </h5>
                            <div class="table-responsive mb-3">
                                <table class="table table-bordered table-striped">
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
        </div>
    </section>
    <!--==================================================-->
    <!-- End Vue-Nuxt 作品內容區塊 -->
    <!--==================================================-->
@endsection

@push('js')
@endpush
