<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Meta -->
    <meta name="description" content="Développeur Web fullstack et marketeur digital passionné !">
    <meta name="author" content="Tankoua Brecht">

    <link href="{{ asset('/frontend/favicon.png') }}" rel="icon">
    <link href="{{ asset('/frontend/favicon.png') }}" rel="apple-touch-icon">
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/odometer.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/animateText.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/styles.css') }}">

    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('/frontend/font/fonts.css') }}">

    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/icons/icomoon/style.css') }}">

</head>

<body>
    <!-- wrapper -->
    <div id="wrapper" class="counter-scroll bg_dark">

        <div class="body-overlay d-block">
            <div class="bg-shape"></div>
        </div>

        <header class="header header-fixed style-1">
            <div class="tf-container w-6">
                <div class="header-sidebar style-1">
                    <div class="box">
                        <div class="avatar">
                            <img src="{{ asset('/frontend/images/user/profile.webp') }}" width="68" height="68"
                                alt="avatar">
                        </div>
                        <div class="info">
                            <h6 class="font-4 mb_4">Brecht</h6>
                            <div class="text-label text-uppercase fw-6 text_primary-color font-3  letter-spacing-1">
                                Dev fullstack</div>
                        </div>
                    </div>
                    <ul class="nav-menu style-1 lg-hide">
                        <li class="text-menu text_white">
                            <a href="#about"
                                class="nav_link toggle splitting link link-no-action text-button font-3 fw-6">
                                <span class="text" data-splitting>A propos</span>
                                <span class="text" data-splitting>A propos</span>
                            </a>
                        </li>
                        <li class="text-menu text_white">
                            <a href="#resume"
                                class="nav_link toggle splitting link link-no-action text-button font-3 fw-6">
                                <span class="text" data-splitting>Education</span>
                                <span class="text" data-splitting>Education</span>
                            </a>
                        </li>
                        <li class="text-menu text_white">
                            <a href="#services"
                                class="nav_link toggle splitting link link-no-action text-button font-3 fw-6">
                                <span class="text" data-splitting>Services</span>
                                <span class="text" data-splitting>Services</span>
                            </a>
                        </li>
                        <li class="text-menu text_white">
                            <a href="#portfolio"
                                class="nav_link toggle splitting link link-no-action text-button font-3 fw-6">
                                <span class="text" data-splitting>Portfolio</span>
                                <span class="text" data-splitting>Portfolio</span>
                            </a>
                        </li>
                        <li class="text-menu text_white">
                            <a href="#pricing"
                                class="nav_link toggle splitting link link-no-action text-button font-3 fw-6">
                                <span class="text" data-splitting>Services</span>
                                <span class="text" data-splitting>Services</span>
                            </a>
                        </li>
                        <li class="text-menu text_white">
                            <a href="#contact"
                                class="nav_link toggle splitting link link-no-action text-button font-3 fw-6">
                                <span class="text" data-splitting>Contact</span>
                                <span class="text" data-splitting>Contact</span>
                            </a>
                        </li>
                    </ul>
                    <div class="d-flex gap_12 align-items-center">
                        <a target="_blank"
                            href="https://drive.google.com/file/d/1ZxPwlSlxf8VEejr83onpOeiRqc6jWygf/view?usp=sharing"
                            class="tf-btn style-1 animate-hover-btn">
                            <span>
                                CV
                            </span>
                        </a>
                        <a class="menu-button show-menu-mobile  d-lg-none link-no-action" data-target="#menu-1"
                            href="#"><i class="icon-CirclesFour"></i></a>
                    </div>
                </div>
            </div>
            <div class="popup-menu-mobile" id="menu-1">
                <ul class="nav-menu style-3 ">
                    <li class="text-menu text_white">
                        <a href="#about" class="nav_link toggle splitting link link-no-action text-button font-3 fw-6">
                            <span class="text" data-splitting>A propos</span>
                            <span class="text" data-splitting>A propos</span>
                        </a>
                    </li>
                    <li class="text-menu text_white">
                        <a href="#resume"
                            class="nav_link toggle splitting link link-no-action text-button font-3 fw-6">
                            <span class="text" data-splitting>Education</span>
                            <span class="text" data-splitting>Education</span>
                        </a>
                    </li>
                    <li class="text-menu text_white">
                        <a href="#services"
                            class="nav_link toggle splitting link link-no-action text-button font-3 fw-6">
                            <span class="text" data-splitting>Services</span>
                            <span class="text" data-splitting>Services</span>
                        </a>
                    </li>
                    <li class="text-menu text_white">
                        <a href="#portfolio"
                            class="nav_link toggle splitting link link-no-action text-button font-3 fw-6">
                            <span class="text" data-splitting>Portfolio</span>
                            <span class="text" data-splitting>Portfolio</span>
                        </a>
                    </li>
                    <li class="text-menu text_white">
                        <a href="#pricing"
                            class="nav_link toggle splitting link link-no-action text-button font-3 fw-6">
                            <span class="text" data-splitting>Services</span>
                            <span class="text" data-splitting>Services</span>
                        </a>
                    </li>
                    <li class="text-menu text_white">
                        <a href="#contact"
                            class="nav_link toggle splitting link link-no-action text-button font-3 fw-6">
                            <span class="text" data-splitting>Contact</span>
                            <span class="text" data-splitting>Contact</span>
                        </a>
                    </li>
                </ul>
            </div>
        </header>

        <header class="header">
            <div class="tf-container w-6">
                <div class="header-sidebar style-1">
                    <div class="box">
                        <div class="avatar">
                            <img src="{{ asset('/frontend/images/user/profile.webp') }}" width="68"
                                height="68" alt="avatar">
                        </div>
                        <div class="info">
                            <h6 class="font-4 mb_4">Brecht</h6>
                            <div class="text-label text-uppercase fw-6 text_primary-color font-3  letter-spacing-1">
                                Dev Web & IA</div>
                        </div>
                    </div>
                    <ul class="nav-menu style-1 lg-hide">
                        <li class="text-menu text_white">
                            <a href="#about"
                                class="nav_link toggle splitting link link-no-action text-button font-3 fw-6">
                                <span class="text" data-splitting>A propos</span>
                                <span class="text" data-splitting>A propos</span>
                            </a>
                        </li>
                        <li class="text-menu text_white">
                            <a href="#resume"
                                class="nav_link toggle splitting link link-no-action text-button font-3 fw-6">
                                <span class="text" data-splitting>Education</span>
                                <span class="text" data-splitting>Education</span>
                            </a>
                        </li>
                        <li class="text-menu text_white">
                            <a href="#portfolio"
                                class="nav_link toggle splitting link link-no-action text-button font-3 fw-6">
                                <span class="text" data-splitting>Projets</span>
                                <span class="text" data-splitting>Projets</span>
                            </a>
                        </li>

                        <li class="text-menu text_white">
                            <a href="#pricing"
                                class="nav_link toggle splitting link link-no-action text-button font-3 fw-6">
                                <span class="text" data-splitting>Services</span>
                                <span class="text" data-splitting>Services</span>
                            </a>
                        </li>
                        <li class="text-menu text_white">
                            <a href="#contact"
                                class="nav_link toggle splitting link link-no-action text-button font-3 fw-6">
                                <span class="text" data-splitting>Contact</span>
                                <span class="text" data-splitting>Contact</span>
                            </a>
                        </li>
                    </ul>
                    <div class="d-flex gap_12 align-items-center">
                        <a target="_blank"
                            href="https://drive.google.com/file/d/1ZxPwlSlxf8VEejr83onpOeiRqc6jWygf/view?usp=sharing"
                            class="tf-btn style-1 animate-hover-btn">
                            <span>
                                CV
                            </span>
                        </a>
                        <a class="menu-button show-menu-mobile  d-lg-none link-no-action" data-target="#menu-2"
                            href="#"><i class="icon-CirclesFour"></i></a>
                    </div>
                </div>
            </div>
            <div class="popup-menu-mobile" id="menu-2">
                <ul class="nav-menu style-3 ">
                    <li class="text-menu text_white">
                        <a href="#about"
                            class="nav_link toggle splitting link link-no-action text-button font-3 fw-6">
                            <span class="text" data-splitting>A propos</span>
                            <span class="text" data-splitting>A propos</span>
                        </a>
                    </li>
                    <li class="text-menu text_white">
                        <a href="#resume"
                            class="nav_link toggle splitting link link-no-action text-button font-3 fw-6">
                            <span class="text" data-splitting>CV</span>
                            <span class="text" data-splitting>CV</span>
                        </a>
                    </li>
                    <li class="text-menu text_white">
                        <a href="#portfolio"
                            class="nav_link toggle splitting link link-no-action text-button font-3 fw-6">
                            <span class="text" data-splitting>Projets</span>
                            <span class="text" data-splitting>Projets</span>
                        </a>
                    </li>

                    <li class="text-menu text_white">
                        <a href="#pricing"
                            class="nav_link toggle splitting link link-no-action text-button font-3 fw-6">
                            <span class="text" data-splitting>Services</span>
                            <span class="text" data-splitting>Services</span>
                        </a>
                    </li>
                    <li class="text-menu text_white">
                        <a href="#contact"
                            class="nav_link toggle splitting link link-no-action text-button font-3 fw-6">
                            <span class="text" data-splitting>Contact</span>
                            <span class="text" data-splitting>Contact</span>
                        </a>
                    </li>
                </ul>
            </div>
        </header>

        @yield('content')

    </div>
    <!-- /wrapper -->

    <div class="overlay-popup"></div>

    <!-- Start tf-setting-color -->
    @include('project.components.menu')
    <!-- End tf-setting-color -->

    <!-- Javascript -->
    <script src="{{ asset('/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/carousel.js') }}"></script>

    <script src="{{ asset('/frontend/js/SplitText.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/gsap.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/handleGsap.js') }}"></script>
    <script src="{{ asset('/frontend/js/splitting.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/odometer.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/counter.js') }}"></script>
    <script src="{{ asset('/frontend/js/textanimation.js') }}"></script>
    <script src="{{ asset('/frontend/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('/frontend/js/main.js') }}"></script>
    <!-- /Javascript -->



</body>

</html>
