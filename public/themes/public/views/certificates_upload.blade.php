<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 11/13/2019
 * Time: 9:36 AM
 */
?>

{{--<form action="/user/application/store_certificates/upload" enctype="multipart/form-data" method="post">--}}
    {{--{{ csrf_field() }}--}}

    {{--<input type="hidden" name="mentor_id" value="{{$data['mentor_id']}}">--}}
    {{--<input multiple="multiple" name="files[]" type="file">--}}
    {{--<br><br>--}}
    {{--<input type="submit" value="Upload">--}}
{{--</form>--}}







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
											<img class="logo-default" src="/themes/public/assets/maintheme/assets/img/logo/logo-1.svg" alt="Mentorship Platform">
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
                                    <a href="#content">
                                        <span class="link-icon"></span>
                                        <span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Home</span>
												</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#works">
                                        <span class="link-icon"></span>
                                        <span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Workshops</span>
												</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#services">
                                        <span class="link-icon"></span>
                                        <span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Platform</span>
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
                                    <a href="#news">
                                        <span class="link-icon"></span>
                                        <span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Apply</span>
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
<section class="vc_row pt-50 pb-60" id="apply" style="margin-top: 10%">
    <div class="container">
        <div class="row">

            <div class="lqd-column col-md-10 col-md-offset-1 text-center ca-initvalues-applied lqd-animations-done" data-custom-animations="true" data-ca-options="{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;all-childs&quot;,&quot;duration&quot;:1200,&quot;delay&quot;:100,&quot;initValues&quot;:{&quot;translateY&quot;:80,&quot;opacity&quot;:0},&quot;animations&quot;:{&quot;translateY&quot;:0,&quot;opacity&quot;:1}}">

                <header class="fancy-title fancy-title-big mb-6">
                    <h2 data-split-text="true" data-split-options="{&quot;type&quot;:&quot;lines&quot;}" class="split-text-applied" style=""><div class="lqd-lines split-unit lqd-unit-animation-done" style="display: block; text-align: center; position: relative;"><span data-text=" Apply For Mentorship! " class="split-inner" style="transform: translateY(0px); opacity: 1;"><span class="split-txt"> Apply For Mentorship! </span></span></div></h2>
                </header><!-- /.fancy-title -->


                <div class="form lqd-unit-animation-done" style="transform: translateY(0px); opacity: 1;">

                    <form action="/user/application/store_certificates/upload" enctype="multipart/form-data" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="mentor_id" value="{{$data['mentor_id']}}">
                        <div class="form-group">

                            <input multiple="multiple" class="form-control valid" name="files[]" type="file">

                        </div>



                        <button type="submit" class="btn btn-solid text-uppercase circle btn-bordered border-thin font-size-14 font-weight-semibold" data-localscroll="true" data-localscroll-options="{&quot;scrollBelowSection&quot;:true}">
							<span>
								<span class="btn-txt">Apply</span>
							</span>
                        </button>

                    </form>
                </div>


            </div><!-- /.col-md-10 col-md-offset-1 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- JavaScript Libraries -->
<script src="/themes/public/assets/maintheme/assets/vendors/jquery.min.js"></script>
<script src="/themes/public/assets/maintheme/assets/js/theme-vendors.js"></script>
<script src="/themes/public/assets/maintheme/assets/js/theme.min.js"></script>
<!-- Contact Form JavaScript File -->

</body>
</html>
