<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">

    <title>綠界科技金流測試</title>

    <!-- Favicon -->
    @if (empty($configSetting['favicon']['url']))
        <link rel="icon" href="{{ asset('picture/icon.png') }}">
    @else
        <link rel="icon" href="{{ $mediaUrl . $configSetting['favicon']['url'] }}">
    @endif

    <!-- Bootstrap -->
    <link href="{{ asset('vendor/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{ asset('vendor/css/all.min.css') }}" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .btn-custom {
            background-color: #198754;
            color: white;
        }

        .btn-custom:hover {
            background-color: #157347;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">

                {{-- 通知訊息 --}}
                @include('partials.notification')

                <div class="text-center mb-4">
                    <h2 class="fw-bold">綠界科技金流測試</h2>
                    <p class="text-muted">請輸入訂單資訊並提交付款測試</p>
                </div>

                {{-- 表單區塊 --}}
                <div class="card shadow rounded mb-4">
                    <div class="card-header bg-success text-white text-center fw-bold">
                        建立訂單
                    </div>
                    <div class="card-body p-4">
                        <form method="POST" action="{{ route('ecpay.create.order') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="amount" class="form-label">訂單金額</label>
                                <input type="number" class="form-control" name="amount" id="amount" value="100"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="item_name" class="form-label">商品名稱</label>
                                <input type="text" class="form-control" name="item_name" id="item_name"
                                    value="測試商品" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-custom btn-lg">建立訂單並前往付款</button>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- 測試卡號資訊 --}}
                <div class="card shadow rounded">
                    <div class="card-header bg-primary text-white fw-bold">
                        測試信用卡資訊
                    </div>
                    <div class="card-body p-4">
                        <ul class="list-unstyled">
                            <li class="mb-2"><strong>一般信用卡：</strong></li>
                            <ul>
                                <li>4311-9511-1111-1111（任意三碼安全碼）</li>
                                <li>4311-9522-2222-2222（任意三碼安全碼）</li>
                            </ul>

                            <li class="mt-3 mb-2"><strong>海外信用卡：</strong></li>
                            <ul>
                                <li>4000-2011-1111-1111（任意三碼安全碼）</li>
                            </ul>

                            <li class="mt-3 mb-2"><strong>美國運通卡（限閘道商）：</strong></li>
                            <ul>
                                <li>國內：3403-532780-80900</li>
                                <li>國外：3712-222222-22222</li>
                            </ul>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="{{ asset('vendor/js/jquery-3.6.2.min.js') }}"></script>
    <script src="{{ asset('vendor/js/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/js/bootstrap.min.js') }}"></script>
</body>

</html>
