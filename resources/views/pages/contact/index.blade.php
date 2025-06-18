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
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h2 class="h4 mb-4">
                                <i class="fas fa-envelope me-2 text-primary"></i> 聯絡表單
                            </h2>

                            {{-- 引入共用提示訊息 --}}
                            @include('partials.notification')

                            <form action="{{ route('create.contact') }}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label for="subject" class="form-label">
                                        主題 <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="subject" id="subject" class="form-control"
                                        value="{{ old('subject') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="name" class="form-label">
                                        聯絡人名稱 <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ old('name') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">
                                        Email <span class="text-danger">*</span>
                                    </label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        value="{{ old('email') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">
                                        電話
                                    </label>
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        value="{{ old('phone') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="message" class="form-label">
                                        詳細內容 <span class="text-danger">*</span>
                                    </label>
                                    <textarea name="message" id="message" rows="6" class="form-control" required>{{ old('message') }}</textarea>
                                </div>

                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-paper-plane me-1"></i> 送出
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
