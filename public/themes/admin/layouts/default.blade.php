
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{!! Theme::getMetaTitle() !!} :: {{__('app.name')}}</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300'" rel='stylesheet' type='text/css'>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="/themes/admin/assets/css/custom_css.css">
        <link rel="icon"
              type="image/png"
              href="/themes/admin/assets/img/logo/small-logo.png">


        {!! Theme::asset()->styles() !!}

        {!! Theme::asset()->scripts() !!}

    </head>

    <body class="sidebar-mini  skin-{{setting('admin.color', 'red')}}" >
        <div class="wrapper">
            {!! Theme::partial('header') !!}
            {!! Theme::partial('aside') !!}
            {!! Theme::content() !!}
            {!! Theme::partial('right') !!}
            {!! Theme::partial('footer') !!}
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    </body>
    {!! Theme::asset()->container('footer')->scripts() !!}

</html>




