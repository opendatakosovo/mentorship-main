    {{--<header class="main-header">--}}
    {{--<nav class="navbar navbar-default">--}}
        {{--<div class="container-fluid">--}}
            {{--<div class="navbar-header">--}}
                {{--<button type="button" class="navbar-toggle collapsed" onclick="toggleNav()" id="nav_btn" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">--}}
                    {{--<span></span>--}}
                    {{--<span></span>--}}
                    {{--<span></span>--}}
                    {{--<span></span>--}}
                    {{--<span></span>--}}
                    {{--<span></span>--}}
                {{--</button>--}}
                {{--<a class="navbar-brand" href="{{trans_url('/')}}"><img src="{{theme_asset('img/logo/logo.svg')}}" alt=""></a>--}}
            {{--</div>--}}

            {{--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">--}}
                {{--<ul class="nav navbar-nav">--}}
                {{--{!!Menu::menu('main')!!}--}}
                {{--</ul>--}}
                {{--<ul class="nav navbar-nav navbar-right hidden-sm hidden-xs">--}}
                    {{--<li><a href="https://twitter.com/lavalitecms" target="_blank" class="social-icons"><i class="fab fa-twitter"></i></a></li>--}}
                    {{--<li><a href="https://www.facebook.com/lavalite" target="_blank" class="social-icons"><i class="fab fa-facebook"></i></a></li>--}}
                    {{--<li><a href="https://github.com/lavalite/cms" target="_blank" class="social-icons"><i class="fab fa-github"></i></a></li>--}}
            {{--@if(!auth('client.web')->check())--}}
                    {{--<li><a href="{{trans_url('client')}}" class="btn">Login</a></li>--}}
            {{--@else--}}
                    {{--<li><a href="{{trans_url('client')}}" class="btn">{{users('name', 'client.web')}}</a></li>--}}
                    {{--<li><a href="{{trans_url('client/logout')}}" class="btn">Logout</a></li>--}}
            {{--@endif--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</nav>--}}
    {{--@if(!auth('client.web')->check())--}}
    {{--<a href="{{trans_url('client/login')}}" class="login_btn btn hidden-md hidden-lg">Login</a>--}}
    {{--@else--}}
    {{--<a href="{{trans_url('client')}}" class="login_btn btn hidden-md hidden-lg">{{users('name', 'client.web')}}</a>--}}
    {{--@endif--}}
    {{--<a href="https://github.com/lavalite/cms" target="_blank" class="github_btn hidden-md hidden-lg"><i class="fab fa-github"></i></a>--}}
{{--</header>--}}


{{--    <header id="header">--}}

{{--        <div id="topbar">--}}
{{--            <div class="container">--}}
{{--                <div class="social-links">--}}
{{--                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>--}}
{{--                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>--}}
{{--                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>--}}
{{--                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="container">--}}

{{--            <div class="logo float-left">--}}
{{--                <!-- Uncomment below if you prefer to use an image logo -->--}}
{{--                <h1 class="text-light"><a href="#intro" class="scrollto"><span>Mentor</span></a></h1>--}}
{{--                <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->--}}
{{--            </div>--}}

{{--            <nav class="main-nav float-right d-none d-lg-block">--}}
{{--                <ul>--}}
{{--                    {!!Menu::menu('main')!!}--}}
{{--                </ul>--}}
{{--            </nav><!-- .main-nav -->--}}

{{--        </div>--}}
{{--    </header><!-- #header -->--}}


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
											<img class="logo-dark" src="./assets/img/logo/logo-1.svg" alt="Ave HTML Template">
											<img class="logo-sticky" src="./assets/img/logo/logo-1.svg" alt="Ave HTML Template">
											<img class="mobile-logo-default" src="./assets/img/logo/logo-1.svg" alt="Ave HTML Template">
											<img class="logo-default" src="./assets/img/logo/logo-1.svg" alt="Ave HTML Template">
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
													<span class="txt">Works</span>
												</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#services">
                                            <span class="link-icon"></span>
                                            <span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Services</span>
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
													<span class="txt">News</span>
												</span>
                                        </a>
                                    </li>

                                </ul><!-- /#primary-nav  -->

                            </div><!-- /#main-header-collapse -->

                        </div><!-- /.col -->

                        <div class="col text-right">

                            <div class="header-module">

                                <a href="#" target="_blank" class="btn btn-default text-uppercase circle btn-bordered border-thick font-size-12 font-weight-semibold btn-white">
									<span>
										<span class="btn-txt">Join to Download</span>
									</span>
                                </a>

                            </div><!-- /.header-module -->

                        </div><!-- /.col -->

                    </div><!-- /.mainbar-row -->
                </div><!-- /.mainbar -->
            </div><!-- /.mainbar-container -->
        </div><!-- /.mainbar-wrap -->

    </header><!-- /.main-header -->
