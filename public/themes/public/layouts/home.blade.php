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

        <!-- Bootstrap CSS File -->
        <link href="themes/public/assets/custom/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="themes/public/assets/custom/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="themes/public/assets/custom/lib/animate/animate.min.css" rel="stylesheet">
        <link href="themes/public/assets/custom/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="themes/public/assets/custom/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="themes/public/assets/custom/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="themes/public/assets/custom/css/style.css" rel="stylesheet">
        {{--{!! Theme::asset()->styles() !!}--}}
        {{--{!! Theme::asset()->scripts() !!}--}}
    </head>

    <body>

        {!! Theme::partial('login') !!}
        {!! Theme::partial('header') !!}
        {!! Theme::content() !!}
        {!! Theme::partial('footer') !!}
        {{--{!! Theme::asset()->container('footer')->scripts() !!}--}}
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        <!-- Uncomment below i you want to use a preloader -->
        <!-- <div id="preloader"></div> -->

        <!-- JavaScript Libraries -->
        <script src="themes/public/assets/custom/lib/jquery/jquery.min.js"></script>
        <script src="themes/public/assets/custom/lib/jquery/jquery-migrate.min.js"></script>
        <script src="themes/public/assets/custom/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="themes/public/assets/custom/lib/easing/easing.min.js"></script>
        <script src="themes/public/assets/custom/lib/mobile-nav/mobile-nav.js"></script>
        <script src="themes/public/assets/custom/lib/wow/wow.min.js"></script>
        <script src="themes/public/assets/custom/lib/waypoints/waypoints.min.js"></script>
        <script src="themes/public/assets/custom/lib/counterup/counterup.min.js"></script>
        <script src="themes/public/assets/custom/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="themes/public/assets/custom/lib/isotope/isotope.pkgd.min.js"></script>
        <script src="themes/public/assets/custom/lib/lightbox/js/lightbox.min.js"></script>
        <!-- Contact Form JavaScript File -->
        <script src="themes/public/assets/custom/contactform/contactform.js"></script>

        <!-- Template Main Javascript File -->
        <script src="themes/public/assets/custom/js/main.js"></script>
    </body>
</html>
