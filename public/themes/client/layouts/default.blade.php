<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ Theme::getMetaTitle() }} | {{__('app.name')}}</title>
        <meta name="description" content="{{ Theme::getMetaDesctiption() }}">
        <meta name="keyword" content="{{ Theme::getMetaKeyword() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="/themes/client/assets/css/custom_css.css">
        <link rel="icon"
              type="image/png"
              href="themes/admin/assets/img/logo/small-logo.png">
        {!! Theme::asset()->styles() !!}
        {!! Theme::asset()->scripts() !!}
    </head>

        {!! Theme::partial('header') !!}
        <section class="dashboard">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-3">
                        {!! Theme::partial('aside') !!}
                    </div>
                    <div class="col-sm-8 col-md-9">
                        {!! Theme::content() !!}
                    </div>
                </div>
            </div>
        </section>


            {!! Theme::partial('footer') !!}

        {!! Theme::asset()->container('footer')->scripts() !!}

    </body>
</html>
