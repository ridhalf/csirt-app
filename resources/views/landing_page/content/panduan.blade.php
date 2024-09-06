@extends('landing_page.main.index')
@section('content')
    <!-- Page banner area start here -->
    <section class="banner__inner-page bg-image pt-180 pb-180 bg-image"
             data-background="assets/images/banner/banner-inner-page.jpg">
        <div class="shape2 wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
            <img src="assets/images/banner/inner-banner-shape2.png" alt="shape">
        </div>
        <div class="shape1 wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
            <img src="assets/images/banner/inner-banner-shape1.png" alt="shape">
        </div>
        <div class="shape3 wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
            <img class="sway__animationX" src="assets/images/banner/inner-banner-shape3.png" alt="shape">
        </div>
        <div class="container">
            <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Panduan / Pedoman</h2>
            <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <a href="{{route('home')}}">Beranda</a><span><i class="fa-regular fa-angles-right mx-2"></i>Panduan / Pedoman</span>
            </div>
        </div>
    </section>
    <!-- Page banner area end here -->

    <!-- Blog single area start here -->
    <section class="blog-single-area pt-120 pb-120">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-12 order-2 order-lg-1">
                    <div class="blog-single__right-item">
                        <div class="item sub-bg mb-30">
                            <h5 class="title">Panduan Teknis Penanganan Insiden Siber</h5>
                            <ul class="category">
                                <li><a href="#0">Database Security</a> <span>(02)</span></li>
                                <li><a href="#0">IT Consultancy</a> <span>(05)</span></li>
                                <li><a href="#0">App Development</a> <span>(07)</span></li>
                                <li><a href="#0">UI/UX Design</a> <span>(18)</span></li>
                                <li><a href="#0">Cyber Security</a> <span>(08)</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog single area end here -->
@endsection
