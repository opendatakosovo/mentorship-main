<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
{{--        <title>{{ Theme::getMetaTitle() }} - {{__('app.name')}}</title>--}}
        <meta name="description" content="{{ Theme::getMetaDesctiption() }}">
        <meta name="keyword" content="{{ Theme::getMetaKeyword() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="The Mentorship Youth platform provides the ultimate and easy experience for professionals aiming to empower the youth to become mentors and apply their skills in projects that benefit the society.">
        <meta name="keywords" content="Mentorship,Workshops,Partners,Why Become a Mentor">
        <meta name="author" content="Managed By: CSR and Developed By: Open Data Kosovo">

        <meta property="og:image" content="themes/public/assets/maintheme/assets/img/mentorship/meta-photo.png" />
        <meta property="og:url"content="https://mentorship4youth.net" />
        <link rel="icon"
              type="image/png"
              href="themes/public/assets/maintheme/assets/img/logo/small-logo.png">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">
        <!-- Bootstrap CSS File -->
{{--        <link href="themes/public/assets/custom/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">--}}

        <!-- Libraries CSS Files -->
        <link rel="stylesheet" href="themes/public/assets/maintheme/assets/vendors/liquid-icon/liquid-icon.min.css" />
        <link rel="stylesheet" href="themes/public/assets/maintheme/assets/vendors/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="themes/public/assets/maintheme/assets/css/theme-vendors.min.css" />
        <link rel="stylesheet" href="themes/public/assets/maintheme/assets/css/theme.min.css" />
        <link rel="stylesheet" href="themes/public/assets/maintheme/assets/css/themes/creative.css" />
        <link rel="stylesheet" href="themes/public/assets/maintheme/assets/css/custom_css.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.css" />



        <!-- Main Stylesheet File -->
{{--        <link href="themes/public/assets/custom/css/style.css" rel="stylesheet">--}}
        {{--{!! Theme::asset()->styles() !!}--}}
        {{--{!! Theme::asset()->scripts() !!}--}}
        <script async src="themes/public/assets/maintheme/assets/vendors/modernizr.min.js"></script>

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
        <script src="themes/public/assets/maintheme/assets/vendors/jquery.min.js"></script>
        <script src="themes/public/assets/maintheme/assets/js/theme-vendors.js"></script>
        <script src="themes/public/assets/maintheme/assets/js/theme.min.js"></script>
        <!-- Contact Form JavaScript File -->


    </body>
</html>
