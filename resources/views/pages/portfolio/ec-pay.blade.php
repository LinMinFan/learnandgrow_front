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
<!-- Start ECPay 說明內容區塊 -->
<!--==================================================-->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h2 class="h4 mb-4">綠界金流整合說明</h2>
                        <p class="mb-3">
                            本系統已整合 <strong>綠界科技 ECPay</strong> 金流服務，支援信用卡一次付清、ATM 虛擬帳號轉帳、超商代碼繳費等多種付款方式。
                            使用者可透過串接流程完成付款，我們在付款成功後會收到綠界的伺服器端通知，並進行訂單狀態更新。
                        </p>
                        <ul class="mb-4">
                            <li>✔️ 使用 Laravel Service 套件實作 ECPay SDK 封裝</li>
                            <li>✔️ 金流完成後可接收 Notify 並導向結果頁面</li>
                            <li>✔️ 可依環境切換至測試或正式模式</li>
                        </ul>
                        <a href="{{ route('ecpay.test') }}" class="btn btn-success">
                            前往測試付款表單
                        </a>
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