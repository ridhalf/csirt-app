<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSIRT - Badan Standardisasi Nasional</title>
    <!-- Favicon img -->
    <link rel="shortcut icon" href="{{'assets/images/favicon.png'}}">
    <!-- Bootstarp min css -->
    <link rel="stylesheet" href="{{'assets/css/bootstrap.min.css'}}">
    <!-- Mean menu css -->
    <link rel="stylesheet" href="{{'assets/css/meanmenu.css'}}">
    <!-- All min css -->
    <link rel="stylesheet" href="{{'assets/css/all.min.css'}}">
    <!-- Swiper bundle min css -->
    <link rel="stylesheet" href="{{'assets/css/swiper-bundle.min.css'}}">
    <!-- Magnigic popup css -->
    <link rel="stylesheet" href="{{'assets/css/magnific-popup.css'}}">
    <!-- Animate css -->
    <link rel="stylesheet" href="{{'assets/css/animate.css'}}">
    <!-- Nice select css -->
    <link rel="stylesheet" href="{{'assets/css/nice-select.css'}}">
    <!-- Style css -->
    <link rel="stylesheet" href="{{'assets/css/style.css'}}">
</head>

<body>

<!-- Preloader area start -->
{{--<div class="loading">--}}
{{--    <span class="text-capitalize">L</span>--}}
{{--    <span>o</span>--}}
{{--    <span>a</span>--}}
{{--    <span>d</span>--}}
{{--    <span>i</span>--}}
{{--    <span>n</span>--}}
{{--    <span>g</span>--}}
{{--</div>--}}
{{--<div id="preloader">--}}
{{--</div>--}}
<!-- Preloader area end -->

<!-- Mouse cursor area start here -->
<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>
<!-- Mouse cursor area end here -->

@include('landing_page.partials.header')


<!-- Sidebar area start here -->
{{--@include('landing_page.partials.sidebar')--}}
<!-- Sidebar area end here -->

<!-- Fullscreen search area start here -->
<div class="search-wrap">
    <div class="search-inner">
        <i class="fas fa-times search-close" id="search-close"></i>
        <div class="search-cell">
            <form method="get">
                <div class="search-field-holder">
                    <input type="search" class="main-search-input" placeholder="Search...">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Fullscreen search area end here -->

<main>
    @yield('content')
</main>

<!-- Footer area start here -->
<footer class="footer-area secondary-bg">
    <div class="footer__shape-regular-left wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
        <img src="assets/images/shape/footer-regular-left.png" alt="shape">
    </div>
    <div class="footer__shape-solid-left wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
        <img class="sway_Y__animation" src="assets/images/shape/footer-solid-left.png" alt="shape">
    </div>
    <div class="footer__shape-solid-right wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
        <img class="sway_Y__animation" src="assets/images/shape/footer-regular-right.png" alt="shape">
    </div>
    <div class="footer__shape-regular-right wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
        <img src="assets/images/shape/footer-solid-right.png" alt="shape">
    </div>
    <div class="footer__shadow-shape">
        <img src="assets/images/shape/footer-shadow-shape.png" alt="shodow">
    </div>
    <div class="container">
        <div class="footer__wrp pt-100 pb-100">
            <div class="footer__item item-big wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <a href="index.html" class="logo mb-30">
                    <img src="assets/images/logo/logo.svg" alt="image">
                </a>
                <p>Phasellus ultricies aliquam volutpat
                    ullamcorper laoreet neque, a lacinia
                    curabitur lacinia mollis</p>
                <div class="social-icon">
                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#0"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#0"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer__item item-sm wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <h3 class="footer-title">IT Solution</h3>
                <ul>
                    <li><a href="service-details.html"><i class="fa-regular fa-angles-right me-1"></i> IT
                            Management</a></li>
                    <li><a href="service-details.html"><i class="fa-regular fa-angles-right me-1"></i> SEO
                            Optimization</a>
                    </li>
                    <li><a href="service-details.html"><i class="fa-regular fa-angles-right me-1"></i> Web
                            Development</a>
                    </li>
                    <li><a href="service-details.html"><i class="fa-regular fa-angles-right me-1"></i> Cyber
                            Security</a></li>
                    <li><a href="service-details.html"><i class="fa-regular fa-angles-right me-1"></i> Data
                            Security</a></li>
                </ul>
            </div>
            <div class="footer__item item-sm wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <h3 class="footer-title">Quick Link</h3>
                <ul>
                    <li><a href="about.html"><i class="fa-regular fa-angles-right me-1"></i> About Gratech</a></li>
                    <li><a href="service.html"><i class="fa-regular fa-angles-right me-1"></i> Our Services</a>
                    </li>
                    <li><a href="pricing.html"><i class="fa-regular fa-angles-right me-1"></i> Pricing Plan</a>
                    </li>
                    <li><a href="case.html"><i class="fa-regular fa-angles-right me-1"></i> Our Projects</a></li>
                    <li><a href="team.html"><i class="fa-regular fa-angles-right me-1"></i> Our Team</a></li>
                </ul>
            </div>
            <div class="footer__item item-big wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <h3 class="footer-title">Contact Us</h3>
                <p class="mb-20">4517 Washington Ave. Manchester, Kentucky 39495</p>
                <ul class="footer-contact">
                    <li>
                        <i class="fa-regular fa-clock"></i>
                        <div class="info">
                            <h5>
                                Opening Hours:
                            </h5>
                            <p>Mon - Sat: 10.00 AM - 4.00 PM</p>
                        </div>
                    </li>
                    <li>
                        <i class="fa-duotone fa-phone"></i>
                        <div class="info">
                            <h5>
                                Phone Call:
                            </h5>
                            <p>208-6666-0112, 308-5555-0113</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer__copyright">
        <div class="container">
            <div
                class="d-flex gap-1 flex-wrap align-items-center justify-content-md-between justify-content-center">
                <p class="wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1500ms">&copy; All Copyright 2024
                    by <a href="#0">Gratech</a></p>
                <ul class="d-flex align-items-center gap-4 wow fadeInDown" data-wow-delay="200ms"
                    data-wow-duration="1500ms">
                    <li><a href="#0">Terms & Condition</a></li>
                    <li><a href="#0">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Footer area end here -->

<!-- Back to top area start here -->
<div class="scroll-up">
    <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
</div>
<!-- Back to top area end here -->

<!-- Jquery 3.7.0 Min Js -->
<script src="{{'assets/js/jquery-3.7.1.min.js'}}"></script>
<!-- Bootstrap min Js -->
<script src="{{'assets/js/bootstrap.min.js'}}"></script>
<!-- Mean menu Js -->
<script src="{{'assets/js/meanmenu.js'}}"></script>
<!-- Swiper bundle min Js -->
<script src="{{'assets/js/swiper-bundle.min.js'}}"></script>
<!-- Counterup min Js -->
<script src="{{'assets/js/jquery.counterup.min.js'}}"></script>
<!-- Wow min Js -->
<script src="{{'assets/js/wow.min.js'}}"></script>
<!-- Pace min Js -->
<script src="{{'assets/js/pace.min.js'}}"></script>
<!-- Magnific popup min Js -->
<script src="{{'assets/js/magnific-popup.min.js'}}"></script>
<!-- Nice select min Js -->
<script src="{{'assets/js/nice-select.min.js'}}"></script>
<!-- Isotope pkgd min Js -->
<script src="{{'assets/js/isotope.pkgd.min.js'}}"></script>
<!-- Waypoints Js -->
<script src="{{'assets/js/jquery.waypoints.js'}}"></script>
<!-- Script Js -->
<script src="{{'assets/js/script.js'}}"></script>
</body>

</html>
