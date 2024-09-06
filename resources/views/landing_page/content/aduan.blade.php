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
            <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Aduan Siber</h2>
            <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <a href="index.html">Beranda</a><span><i class="fa-regular fa-angles-right mx-2"></i>Aduan Siber</span>
            </div>
        </div>
    </section>
    <!-- Page banner area end here -->

    <!-- Service area start here -->
    <section class="service-single-area pt-120 pb-120">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-12 order-2 order-lg-1">
                    <div class="service-single__left-item">
                        <h3 class="title mb-30">Layanan Badan Standardisasi Nasional CSIRT</h3>
                        <p class="mb-20">BSN-CSIRT akan membantu konstituen untuk melakukan penanggulangan dan pemulihan insiden keamanan siber dengan aspek-aspek manajemen insiden keamanan siber berikut :



                            5.1.1. Triase Insiden (Incident Triage)

                            a. Memastikan kebenaran insiden dan pelapor

                            b. Menilai dampak dan prioritas insiden



                            5.1.2. Koordinasi Insiden

                            a. Mengkoordinasikan insiden dengan konstituen

                            b. Memberikan rekomendasi penanggulangan berdasarkan panduan / SOP yang dimiliki BSN-CSIRT kepada konsitituen

                            c. Mengkoordinasikan insiden dengan CSIRT atau pihak lain yang terkait.



                            5.1.3. Resolusi Insiden

                            a. Melakukan investigasi dan analisis dampak insiden

                            b. Memberikan rekomendasi teknis untuk penanganan insiden.



                            Silahkan hubungi kami untuk melakukan aduan siber sesuai dengan prosedur pelaporan insiden.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service area end here -->
@endsection
