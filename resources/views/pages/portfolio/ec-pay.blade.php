@extends('layouts.master')

@push('meta')
    <meta name="robots" content="index, nofollow">
@endpush

@push('css')
    <style>
        .border-left-success {
            border-left: 5px solid #198754 !important;
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
    <!-- Start ECPay 說明內容區塊 -->
    <!--==================================================-->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-sm border-0 rounded border-left-success">
                        <div class="card-body p-4">
                            <h2 class="h4 fw-bold mb-3 text-success">綠界金流整合說明</h2>
                            <p class="lead text-muted">
                                本系統已整合 <strong>綠界科技 ECPay</strong> 金流服務，支援多種付款方式，包括：
                            </p>
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item">信用卡一次付清</li>
                                <li class="list-group-item">ATM 虛擬帳號轉帳</li>
                                <li class="list-group-item">超商代碼繳費</li>
                            </ul>
                            <p class="text-muted">
                                使用者付款成功後，系統將自動接收來自綠界的付款通知 (Server Notify)，進而更新訂單狀態。
                            </p>
                            <div class="mb-4">
                                <div class="d-flex align-items-start mb-3">
                                    <i class="fas fa-check-circle text-success fs-5 me-3 mt-1"></i>
                                    <div>使用 Laravel Service 套件封裝 ECPay SDK</div>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <i class="fas fa-check-circle text-success fs-5 me-3 mt-1"></i>
                                    <div>支援付款完成自動接收通知與導向結果頁面</div>
                                </div>
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-check-circle text-success fs-5 me-3 mt-1"></i>
                                    <div>可於環境設定檔中切換測試 / 正式模式</div>
                                </div>
                            </div>

                            <div class="text-end">
                                <a href="{{ route('ecpay.test') }}" class="btn btn-success btn-lg" target="_blank">
                                    <i class="fas fa-vial me-1"></i> 前往測試付款表單
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End ECPay 說明內容區塊 -->
    <!--==================================================-->
@endsection

@push('js')
@endpush
