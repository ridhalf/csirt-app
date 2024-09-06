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
            <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Profil</h2>
            <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <a href="{{route('home')}}">Beranda</a><span><i class="fa-regular fa-angles-right mx-2"></i>
                        Profil</span>
            </div>
        </div>
    </section>
    <!-- Page banner area end here -->

    <!-- Team single area start here -->
    <section class="team-single pt-120 pb-120">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-4 col-md-6">
                    <div class="team-single__image">
                        <img src="assets/images/team/team-image1.jpg" alt="image">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="team-single__content">
                        <div class="title pb-20 mb-20 bor-bottom">
                            <h3>Profil</h3>
                            <span class="primary-color mt-1">CSIRT Badan Standardisasi Nasional</span>
                        </div>
                        <div class="team-single__info">
                            <p class="mb-20">Badan Standardisasi Nasional - Computer Security Incident Response Team (CSIRT) Pusdatin BSN, merupakan CSIRT sektor Pemerintah Indonesia yang ditetapkan oleh Kepala Badan Standardisasi Nasional  tentang Pembentukan Computer Security Incident Response Team Badan Standardisasi Nasional (BSN-CSIRT) melalui Surat Keputusan Kepala Badan Standardisasi Nasional Nomor 22/KEP/BSN/2/2020.
                                Kepala Pusat Data dan Sistem Informasi BSN bertanggung jawab sebagai ketua BSN-CSIRT.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-single-history mt-60">
            <div class="container">
                <div class="title pb-30 mb-30 bor-bottom">
                    <h3>Visi & Misi</h3>
                </div>
                <h4><span class="primary-color text-capitalize mb-3">Visi</span></h4>
                <ul>
                    <li class="mb-15"><i class="fa-solid fa-check"></i>Terciptanya sistem keamanan informasi yang handal di BSN.</li>
                    <li class="mb-15"><i class="fa-solid fa-check"></i>Menciptakan kesadaran keamanan siber pada Sumber Daya Manusia di lingkungan BSN.</li>
                </ul>
                <h4><span class="primary-color text-capitalize mb-3 mt-5">Misi</span></h4>
               <ul>
                   <li class="mb-15"><i class="fa-solid fa-check"></i>Mendorong kegiatan pengamanan informasi dan pencegahan insiden keamanan informasi,</li>
                   <li class="mb-15"><i class="fa-solid fa-check"></i>Membangun kesadaran keamanan siber pada sumber daya manusia di lingkungan BSN, dan </li>
                   <li class="mb-15"><i class="fa-solid fa-check"></i>Melakukan evaluasi berkala terhadap kehandalan keamanan teknologi informasi di lingkungan</li>
               </ul>
            </div>
        </div>
    </section>
    <!-- Team single area end here -->
@endsection
