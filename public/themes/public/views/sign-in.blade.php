<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ Theme::getMetaTitle() }} - {{__('app.name')}}</title>
    <meta name="description" content="{{ Theme::getMetaDesctiption() }}">
    <meta name="keyword" content="{{ Theme::getMetaKeyword() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">
    <!-- Bootstrap CSS File -->
    <link href="/themes/public/assets/custom/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link rel="stylesheet" href="/themes/public/assets/maintheme/assets/vendors/liquid-icon/liquid-icon.min.css" />
    <link rel="stylesheet" href="/themes/public/assets/maintheme/assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/themes/public/assets/maintheme/assets/css/theme-vendors.min.css" />
    <link rel="stylesheet" href="/themes/public/assets/maintheme/assets/css/theme.min.css" />
    <link rel="stylesheet" href="/themes/public/assets/maintheme/assets/css/themes/creative.css" />

    <!-- Main Stylesheet File -->
    {{--        <link href="themes/public/assets/custom/css/style.css" rel="stylesheet">--}}
    {{--{!! Theme::asset()->styles() !!}--}}
    {{--{!! Theme::asset()->scripts() !!}--}}
    <script async src="/themes/public/assets/maintheme/assets/vendors/modernizr.min.js"></script>

</head>


<body>


<header class="main-header main-header-overlay" data-sticky-header="true" data-sticky-options='{ "stickyTrigger": "first-section" }'>

    <div class="mainbar-wrap">
        <div class="megamenu-hover-bg"></div><!-- /.megamenu-hover-bg -->
        <div class="container-fluid mainbar-container">
            <div class="mainbar">
                <div class="row mainbar-row align-items-lg-stretch px-4">

                    <div class="col-auto pr-5">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="index-creative.html" rel="home">
										<span class="navbar-brand-inner">
											<img class="logo-dark" src="themes/public/assets/maintheme/assets/img/logo/logo-1.svg" alt="Mentorship Platform">
											<img class="logo-sticky" src="themes/public/assets/maintheme/assets/img/logo/logo-1.svg" alt="Mentorship Platform">
											<img class="mobile-logo-default" src="themes/public/assets/maintheme/assets/img/logo/logo-1.svg" alt="Mentorship Platform">
											<img class="logo-default" src="themes/public/assets/maintheme/assets/img/logo/logo-1.svg" alt="Mentorship Platform">
										</span>
                            </a>
                            <button type="button" class="navbar-toggle collapsed nav-trigger style-mobile" data-toggle="collapse" data-target="#main-header-collapse" aria-expanded="false" data-changeclassnames='{ "html": "mobile-nav-activated overflow-hidden" }'>
                                <span class="sr-only">Toggle navigation</span>
                                <span class="bars">
											<span class="bar"></span>
											<span class="bar"></span>
											<span class="bar"></span>
										</span>
                            </button>
                        </div><!-- /.navbar-header -->
                    </div><!-- /.col -->

                    <div class="col">

                        <div class="collapse navbar-collapse" id="main-header-collapse">

                            <ul id="primary-nav" class="main-nav nav align-items-lg-stretch justify-content-lg-start" data-submenu-options='{ "toggleType":"fade", "handler":"mouse-in-out" }' data-localscroll="true">

                                <li>
                                    <a href="#head">
                                        <span class="link-icon"></span>
                                        <span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Home</span>
												</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#workshops">
                                        <span class="link-icon"></span>
                                        <span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Workshops</span>
												</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#partners">
                                        <span class="link-icon"></span>
                                        <span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Partners</span>
												</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#services">
                                        <span class="link-icon"></span>
                                        <span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Why become a mentor?</span>
												</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#about">
                                        <span class="link-icon"></span>
                                        <span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">About</span>
												</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#testimonials">
                                        <span class="link-icon"></span>
                                        <span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Testimonials</span>
												</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#faq">
                                        <span class="link-icon"></span>
                                        <span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">FAQ</span>
												</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#apply">
                                        <span class="link-icon"></span>
                                        <span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Apply</span>
												</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="link-icon"></span>
                                        <span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Sign In</span>
												</span>
                                    </a>
                                </li>

                            </ul><!-- /#primary-nav  -->

                        </div><!-- /#main-header-collapse -->

                    </div><!-- /.col -->


                </div><!-- /.mainbar-row -->
            </div><!-- /.mainbar -->
        </div><!-- /.mainbar-container -->
    </div><!-- /.mainbar-wrap -->

</header><!-- /.main-header -->
<div class="col-sm-12 content-center text-center" style="padding-top: 15% !important;padding-left: 20%;">
<section class="vc_row pt-50 pb-50">
    <div class="container">
        <div class="row">

            <div class="lqd-column col-md-4">

                <div class="ld-flipbox ld-flipbox-rl">

                    <div class="ld-flipbox-wrap">

                        <div class="ld-flipbox-face ld-flipbox-front bg-primary">

                            <span class="ld-flipbox-overlay"></span>

                            <div class="ld-flipbox-inner">

                                <div class="iconbox iconbox-md">
                                    <div class="iconbox-icon-wrap">
													<span class="iconbox-icon-container text-white">
														<i class="icon-basic_laptop"></i>
													</span>
                                    </div><!-- /.iconbox-icon-wrap -->
                                    <div class="contents">
                                        <h3 class="font-weight-bold">Sign In as Admin</h3>
                                    </div><!-- /.contents -->
                                </div><!-- /.iconbox -->

                            </div><!-- /.ld-flipbox-inner -->

                        </div><!-- /.ld-flipbox-front -->

                        <div class="ld-flipbox-face ld-flipbox-back">

                            <span class="ld-flipbox-overlay ld-overlay"></span>

                            <div class="ld-flipbox-inner">

                                <a href="admin/login" class="btn btn-solid font-size-12 lh-2 text-uppercase ltr-sp-175 btn-white">
												<span>
													<span class="btn-txt">Log In</span>
												</span>
                                </a>

                            </div><!-- /.ld-flipbox-inner -->

                        </div><!-- /.ld-flipbox-back -->

                    </div><!-- /.ld-flipbox-wrap -->

                </div><!-- /.ld-flipbox -->

            </div><!-- /.lqd-column col-md-4 -->


            <div class="lqd-column col-md-4">

                <div class="ld-flipbox ld-flipbox-rl">

                    <div class="ld-flipbox-wrap">

                        <div class="ld-flipbox-face ld-flipbox-front bg-primary">

                            <span class="ld-flipbox-overlay"></span>

                            <div class="ld-flipbox-inner">

                                <div class="iconbox iconbox-md">
                                    <div class="iconbox-icon-wrap">
													<span class="iconbox-icon-container text-white">
														<i class="icon-basic_laptop"></i>
													</span>
                                    </div><!-- /.iconbox-icon-wrap -->
                                    <div class="contents">
                                        <h3 class="font-weight-bold">Sign In as Mentor</h3>
                                    </div><!-- /.contents -->
                                </div><!-- /.iconbox -->

                            </div><!-- /.ld-flipbox-inner -->

                        </div><!-- /.ld-flipbox-front -->

                        <div class="ld-flipbox-face ld-flipbox-back">

                            <span class="ld-flipbox-overlay ld-overlay"></span>

                            <div class="ld-flipbox-inner">

                                <a href="client/login" class="btn btn-solid font-size-12 lh-2 text-uppercase ltr-sp-175 btn-white">
												<span>
													<span class="btn-txt">Log In</span>
												</span>
                                </a>

                            </div><!-- /.ld-flipbox-inner -->

                        </div><!-- /.ld-flipbox-back -->

                    </div><!-- /.ld-flipbox-wrap -->

                </div><!-- /.ld-flipbox -->

            </div><!-- /.lqd-column col-md-4 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
</div>

<!-- JavaScript Libraries -->
<script src="/themes/public/assets/maintheme/assets/vendors/jquery.min.js"></script>
<script src="/themes/public/assets/maintheme/assets/js/theme-vendors.js"></script>
<script src="/themes/public/assets/maintheme/assets/js/theme.min.js"></script>
<!-- Contact Form JavaScript File -->

</body>
</html>
