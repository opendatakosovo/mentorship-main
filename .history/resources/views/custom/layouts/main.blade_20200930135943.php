<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 10/11/2019
 * Time: 11:15 AM
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{!! Theme::getMetaTitle() !!} :: {{__('app.name')}}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300'" rel='stylesheet' type='text/css'>

    <link media="all" type="text/css" rel="stylesheet" href="/themes/admin/assets/css/app.css">
    <script src="/themes/admin/assets/js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet" > 
    {{--{!! Theme::asset()->styles() !!}--}}
    {{--{!! Theme::asset()->scripts() !!}--}}
</head>

<body class="sidebar-mini  skin-{{setting('admin.color', 'red')}}"  >
<div class="wrapper">
    @include('custom.partials.header')
    @include('custom.partials.aside')

    @yield('content')
    @include('custom.partials.footer')
    {{--{!! Theme::partial('header') !!}--}}
    {{--{!! Theme::partial('aside') !!}--}}
    {{--{!! Theme::content() !!}--}}
    {{--{!! Theme::partial('right') !!}--}}
    {{--    {!! Theme::partial('footer') !!}--}}
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
        $('.select3').select2();
    });
</script>
</body>
{{--{!! Theme::asset()->container('footer')->scripts() !!}--}}
</html>

