@extends('layouts.master')

@push('meta')
    <meta name="robots" content="index, follow">
@endpush

@push('css')
    <style>
        .form-control:focus,
        textarea.form-control:focus {
            border-color: #0d6efd;
            /* Bootstrap 主色藍 */
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
            background-color: #fff;
            /* 焦點時改白背景 */
            color: #212529;
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
                            <h1>與我聯絡</h1>
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
    <!-- Start ContactForm 區塊 -->
    <!--==================================================-->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-lg rounded-4">
                        <div class="card-body p-4 p-md-5">
                            <div class="text-center mb-4">
                                <div class="mb-2">
                                    <i class="fas fa-envelope fa-2x text-primary"></i>
                                </div>
                                <h2 class="h4 fw-bold">與我聯絡</h2>
                                <p class="text-muted mb-0">如果您有任何問題或建議，請填寫下方表單，將儘速回覆您。</p>
                            </div>

                            {{-- 引入共用提示訊息 --}}
                            @include('partials.notification')

                            <form action="{{ route('create.contact') }}" method="POST" novalidate>
                                @csrf
                                <div class="mb-3">
                                    <label for="subject" class="form-label fw-semibold text-dark">
                                        <i class="fas fa-tag me-1 text-secondary"></i> 主題&nbsp;<span
                                            class="text-danger">*</span>
                                    </label>
                                    <select name="subject" id="subject"
                                        class="form-select rounded-3 bg-light text-dark border-secondary" required>
                                        <option value="" disabled {{ old('subject') ? '' : 'selected' }}>請選擇主題
                                        </option>
                                        @foreach ($subjects as $subject)
                                            <option value="{{ $subject }}"
                                                {{ old('subject') === $subject ? 'selected' : '' }}>
                                                {{ $subject }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="name" class="form-label fw-semibold text-dark">
                                        <i class="fas fa-user me-1 text-secondary"></i> 聯絡人名稱&nbsp;<span
                                            class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="name" id="name"
                                        class="form-control rounded-3 bg-light text-dark border-secondary"
                                        placeholder="您的姓名" value="{{ old('name') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label fw-semibold text-dark">
                                        <i class="fas fa-envelope-open me-1 text-secondary"></i> Email&nbsp;<span
                                            class="text-danger">*</span>
                                    </label>
                                    <input type="email" name="email" id="email"
                                        class="form-control rounded-3 bg-light text-dark border-secondary"
                                        placeholder="example@email.com" value="{{ old('email') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label fw-semibold text-dark">
                                        <i class="fas fa-phone me-1 text-secondary"></i> 電話
                                    </label>
                                    <input type="text" name="phone" id="phone"
                                        class="form-control rounded-3 bg-light text-dark border-secondary"
                                        placeholder="0912-345-678" value="{{ old('phone') }}">
                                </div>

                                <div class="mb-4">
                                    <label for="message" class="form-label fw-semibold text-dark">
                                        <i class="fas fa-comment-dots me-1 text-secondary"></i> 詳細內容&nbsp;<span
                                            class="text-danger">*</span>
                                    </label>
                                    <textarea name="message" id="message" rows="6"
                                        class="form-control rounded-3 bg-light text-dark border-secondary" placeholder="請輸入您想詢問的內容" required>{{ old('message') }}</textarea>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary px-4 py-2 rounded-pill shadow-sm">
                                        <i class="fas fa-paper-plane me-2"></i> 送出訊息
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End ContactForm 區塊 -->
    <!--==================================================-->
@endsection

@push('js')
@endpush
