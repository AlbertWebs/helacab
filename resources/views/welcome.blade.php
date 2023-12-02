<!DOCTYPE html><html lang="zxx"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--
        https://templates.envytheme.com/moovi/default/index.html
    --}}
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{asset('theme/css/meanmenu.css')}}">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{asset('theme/css/boxicons.min.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('theme/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/owl.theme.default.min.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('theme/css/magnific-popup.min.css')}}">
    <!-- Timeline CSS -->
    <link rel="stylesheet" href="{{asset('theme/css/timeline.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('theme/css/flaticon.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('theme/css/responsive.css')}}">


    <title>Hela Cab Show - ShemaQ Productions</title>

    <link rel="icon" type="image/png" href="images/favicon.png')}}">
</head>
<body>
    <!-- Preloader -->
    {{-- <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Preloader -->

    <!-- Start Navbar Area -->
    <div class="navbar-area fixed-top">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="index.html" class="logo">
                <img src="{{asset('theme/images/logo1.png')}}" alt="Logo">
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img width="150" src="{{asset('theme/images/logo1.png')}}" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#home" class="nav-link dropdown-toggle">Home </a>

                            </li>

                            <li class="nav-item">
                                <a href="#about-us" class="nav-link dropdown-toggle">About the Show</a>
                            </li>
                            <li class="nav-item">
                                <a href="#trailler" class="nav-link dropdown-toggle">Watch Trailer </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://shemaqproductions.com/the-company" class="nav-link dropdown-toggle">ShemaQ Productions </a>

                            </li>

                            <li class="nav-item">
                                <a href="https://shemaqproductions.com/contact-us" class="nav-link">Contact</a>
                            </li>
                        </ul>
                        <div class="side-nav">
                            <div class="nav-srh">
                                <div class="search-toggle">
                                    <button class="search-icon icon-search"><i class="bx bx-search-alt"></i></button>
                                    <button class="search-icon icon-close"><i class="bx bx-x"></i></button>
                                </div>
                                <div class="search-area">
                                    <form>
                                        <input type="text" class="src-input" id="search-terms" placeholder="Search here...">
                                        <button type="submit" name="submit" placeholder="Search Episode" value="Go" class="search-icon"><i class="bx bx-search-alt"></i></button>
                                    </form>
                                </div>
                            </div>
                            <button type="button" class="btn modal-btn" data-bs-toggle="modal" data-bs-target="#myModalRight">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->

    <!-- Sidebar Modal -->
    <div id="myModalRight" class="modal fade modal-right" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <h2>Meet ShemaQ Productions</h2>
                    <p>

                        At ShemaQ Productions, we champion the extraordinary and are proud of the creative excellence we represent. Our unparalleled creativity and authentic storytelling are focused on creating, producing and distributing captivating and highly engaging digital content, with a strong focus on family entertainment excellence, reality game-show production and other branded content.
                        <br>
                        It doesn’t matter how great the idea is; execution is always best. We connect the best talent on and off-screen, cultivating creative spaces and partnerships with creatives across genres, locations and cultures.

                    </p>

                    <div class="social-area">
                        <h3>Our Social Contact</h3>
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Modal -->

    <!-- Banner -->
    <div id="home" class="banner-wrap">
        <div class="banner-slider owl-theme owl-carousel">
            <div class="banner-area banner-img-one">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="banner-content">
                            <h1>Hela Cab Show</h1>
                            <p>Welcome to the world of entertainment innovation!
                                ShemaQ Productions is thrilled to introduce "The Hela
                                Cab Show”, a groundbreaking game show that
                                promises to captivate audiences and provide an
                                exceptional platform for brand exposure.</p>
                            <a class="banner-btn" href="#">Browse Episodes</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- Socials --}}
        {{-- <div class="banner-social">
            <span>Follow us on:</span>
            <ul>
                <li>
                    <a href="#" target="_blank">
                        <i class="bx bxl-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <i class="bx bxl-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <i class="bx bxl-pinterest-alt"></i>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <i class="bx bxl-instagram"></i>
                    </a>
                </li>
            </ul>
        </div> --}}
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Service -->
    <section class="service-area service-area-two pt-100 pb-70" id="about-us">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">About The Show</span>
                <h2>Hela Cab Show</h2>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-10" style="margin:0 auto; text-align:center">
                    <div class="service-item">
                        <div class="service-inner">
                            <p style="font-size:24px;">
                                At ShemaQ Productions, we champion the extraordinary and are proud of the creative excellence we represent. Our unparalleled creativity and authentic storytelling are focused on creating, producing and distributing captivating and highly engaging digital content, with a strong focus on family entertainment excellence, reality game-show production and other branded content.
                                <br>
                                It doesn’t matter how great the idea is; execution is always best. We connect the best talent on and off-screen, cultivating creative spaces and partnerships with creatives across genres, locations and cultures.
                                <br>
                                Over time we endeavour to provide exceptional services of the finest quality across our portfolio of services by creating magnetic, award-winning content. We like to hear your views and reactions to our work, welcoming your honest and productive feedback that’s instrumental to our continued success.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service -->

    <!-- Week -->
    <section class="week-area pt-100 pb-70" id="trailler">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">The Hela Cab Show</span>
                <h2>Watch Trailler <i class="bx bx-video"></i></h2>
            </div>
            <div class="outer">
                <div id="big" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="week-item">
                            <img src="{{asset('theme/assets/img/home-one/week1.jpg')}}" alt="Week">
                            <a href="https://www.youtube.com/watch?v=aqz-KE-bpKQ" class="popup-youtube">
                                <i class='bx bx-play'></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Week -->


    <!-- Footer -->
    <footer class="pt-100 pb-70">
        <div class="container">

        </div>
    </footer>
    <!-- End Footer -->

    <!-- Copyright -->
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-item">
                <p>Copyright @ {{date('Y')}} Hela Cab Show. Powered By <a href="https://designekta.com/" target="_blank">Designekta Studios</a></p>
            </div>
        </div>
    </div>
    <!-- End Copyright -->


    <!-- Essential JS -->
    <script data-cfasync="false" src="{{asset('theme/js/email-decode.min.js')}}"></script>
    <script src="{{asset('theme/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('theme/js/popper.min.js')}}"></script>
    <script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
    <!-- Form Validator JS -->
    <script src="{{asset('theme/js/form-validator.min.js')}}"></script>
    <!-- Contact JS -->
    <script src="{{asset('theme/js/contact-form-script.js')}}"></script>
    <!-- Meanmenu JS -->
    <script src="{{asset('theme/js/jquery.meanmenu.js')}}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{asset('theme/js/owl.carousel.min.js')}}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{asset('theme/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Timeline JS -->
    <script src="{{asset('theme/js/timeline.js')}}"></script>
    <!-- Thumb Slider JS -->
    <script src="{{asset('theme/js/thumb-slide.js')}}"></script>
    <!-- Custom JS -->
    <script src="{{asset('theme/js/custom.js')}}"></script>

</body></html>
