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
    <!-- Start consen service details Area -->
    <!--==================================================-->
    <div class="portfolio-detials-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="portfolio-details-content">
                        <div class="portfolio-details-main-title">
                            <h1>Design for Marketing Agency Startup</h1>
                        </div>
                        <div class="portfolio-details-text">
                            <p>Mauris pretium est quis condimentum rutrum. Nulla cursus varius nulla, quis venenatis dui.
                                Aenean iaculis pretium ex, quis dictum erat bibendum quis. Donec non ex in nunc tincidunt
                                imperdiet et molestie risus. Nunc tristique id justo quis efficitur. Nam eu tincidunt nibh,
                                sed rutrum eros. Maecenas turpis dui, euismod at iaculis ut, mattis id velit. Aenean
                                malesuada mollis sollicitudin</p>
                        </div>
                    </div>
                    <div class="portfolio-details-thumb">
                        <img src="static/picture/portfolio-details1.jpg" alt="">
                    </div>
                    <div class="portfolio-details-overview">
                        <div class="portfolio-details-overview-title">
                            <h2>Clients Overview</h2>
                        </div>
                        <div class="portfolio-details-overview-text">
                            <p>Praesent fringilla convallis ligula vel fermentum. Orci varius natoque penatibus et magnis
                                dis parturient montes, nascetur ridiculus mus. Ut a arcu est. Proin consectetur, nibh nec
                                ullamcorper dictum, nunc ligula elementum ipsum, vel convallis arcu eros eu ante. Vivamus
                                lobortis felis et orci scelerisque tincidunt. Cras semper ultricies tortor vitae hendrerit.
                            </p>
                        </div>
                        <div class="portfolio-details-overview-list">
                            <ul>
                                <li>Are you a small business or a large corporation? We don’t care. We can handle
                                    thiscarrection your shipping needs!</li>
                                <li>Timely delivery! without surprises! – Fast! Reliable! Delightful!</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="portfolio-details-thumb wow fadeInLeft animated">
                                <img src="static/picture/zumla-blog1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="portfolio-details-thumb wow fadeInUp animated">
                                <img src="static/picture/zumla-blog2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="portfolio-details-thumb wow fadeInRight animated">
                                <img src="static/picture/zumla-blog3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-details-overview">
                        <div class="portfolio-details-overview-title">
                            <h2>Why Get Our Design Service</h2>
                        </div>
                        <div class="portfolio-details-overview-text">
                            <p>Vestibulum felis sapien, aliquam vitae dolor ac, ornare eleifend elit. Nam pharetra nibh eu
                                erat gravida, eu aliquam arcu euismod. Mauris varius elit quis ex malesuada, non tristique
                                arcu iaculis. Suspendisse risus purus, ullamcorper pellentesque faucibus vel,</p>

                            <p>aliquet non purus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum
                                lacus augue, blandit aliquam laoreet at, sodales in dolor. Proin vulputate et justo sit amet
                                finibus. </p>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col-lg-4">
                            <div class="service-single-box wow fadeInLeft animated">
                                <div class="service-icon">
                                    <img src="static/picture/zumla-ser-icon1.png" alt="">
                                </div>
                                <div class="service-info">
                                    <h1>02</h1>
                                </div>
                                <div class="service-content">
                                    <h5>Social Media</h5>
                                    <p>Website ravida surna eveti semen the
                                        conse tusio anivite dianne one nivam
                                        acestion vue artin dictum.</p>
                                </div>
                                <div class="service-content2">
                                    <div class="service-text">
                                        <h5><a href="service.html">Service</a></h5>
                                    </div>
                                    <div class="service-sub-icon">
                                        <a href="#"><img src="static/picture/zumla-ser-icon.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-single-box wow fadeInUp animated">
                                <div class="service-icon">
                                    <img src="static/picture/zumla-ser-icon1.png" alt="">
                                </div>
                                <div class="service-info">
                                    <h1>01</h1>
                                </div>
                                <div class="service-content">
                                    <h5>Social Media</h5>
                                    <p>Website ravida surna eveti semen the
                                        conse tusio anivite dianne one nivam
                                        acestion vue artin dictum.</p>
                                </div>
                                <div class="service-content2">
                                    <div class="service-text">
                                        <h5><a href="service.html">Service</a></h5>
                                    </div>
                                    <div class="service-sub-icon">
                                        <a href="#"><img src="static/picture/zumla-ser-icon.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-single-box wow fadeInRight animated">
                                <div class="service-icon">
                                    <a href="#"><img src="static/picture/zumla-ser-icon2.png" alt=""></a>
                                </div>
                                <div class="service-info">
                                    <h1>03</h1>
                                </div>
                                <div class="service-content">
                                    <h5>Social Media</h5>
                                    <p>Website ravida surna eveti semen the
                                        conse tusio anivite dianne one nivam
                                        acestion vue artin dictum.</p>
                                </div>
                                <div class="service-content2">
                                    <div class="service-text">
                                        <h5><a href="service.html">Service</a></h5>
                                    </div>
                                    <div class="service-sub-icon">
                                        <a href="#"><img src="static/picture/zumla-ser-icon.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="portfolio-details-clients wow fadeInDown animated">
                            <div class="portfolio-details-clients-title">
                                <h2>Clients Goal</h2>
                            </div>
                            <div class="portfolio-details-overview-text">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                    architeto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                    sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                    voluptatem squi nesciunt. Neque porro quisquam est, qui dolorem</p>
                            </div>
                            <div class="portfolio-details-overview-list">
                                <ul>
                                    <li>Are you a small business or a large corporation? We don’t care. We can handle your
                                        shipping needs!</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==================================================-->
    <!-- End Consen service detials Area -->
    <!--==================================================-->
@endsection

@push('js')
@endpush
