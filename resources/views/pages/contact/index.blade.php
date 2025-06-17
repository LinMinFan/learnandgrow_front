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
    <!--start-blog-details-leave-area-->
    <!--==================================================-->

    <div class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-title">
                        <h3>Get In Touch</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-blog-box wow fadeInUp animated">
                        <div class="blog-leave-title">
                            <h3>Leave Comment</h3>
                        </div>
                        <form action="#" method="POST" id="dreamit-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-box">
                                        <input type="text" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-box">
                                        <input type="text" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-box">
                                        <input type="text" name="phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-box">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-box">
                                        <textarea name="#" id="#" cols="30" rows="10" placeholder="Your Massage"></textarea>
                                    </div>
                                </div>
                                <div class="form-button">
                                    <button type="submit" name="btn">
                                        Post Comment
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div id="status"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-single-box wow fadeInUp animated">
                        <div class="contact-sub-title">
                            <h4>Contact Info</h4>
                        </div>
                        <div class="contact-sub-content">
                            <ul>
                                <li><span><i class="fas fa-map-marker-alt"></i></span>
                                    <p>Chilmari Road,Ulipur,Kurigram</p>
                                </li>
                                <li><span><i class="far fa-envelope"></i></span><a href="">example@gmail.com</a></li>
                                <li><span><i class="fas fa-phone-alt"></i></span><a href="">1-88463903</a></li>
                            </ul>
                        </div>
                        <div class="contact-social">
                            <ul>
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="contact-map">
                        <iframe src="embed.html"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==================================================-->
    <!--end-blog-details leave area-->
    <!--==================================================-->
@endsection

@push('js')
@endpush
