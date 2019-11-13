            {{--<footer class="main-footer">--}}
                {{--<div class="container-fluid">--}}
                    {{--<div class="row logo">--}}
                        {{--<div class="col-md-12 text-center">--}}
                            {{--<img src="{{theme_asset('img/logo/footer.svg')}}" alt="">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row links">--}}
                        {{--<div class="col-sm-4 social-links">--}}
                            {{--{!!Menu::menu('social')!!}--}}
                        {{--</div>--}}
                        {{--<div class="col-sm-4 copyright">--}}
                            {{--<p>{!!__('app.rights')!!}</p>--}}
                        {{--</div>--}}
                        {{--<div class="col-sm-4 navs">--}}
                            {{--{!!Menu::menu('footer')!!}--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</footer>--}}



            <footer id="footer" class="section-bg">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                {!!Block::display('footerleft')!!}
                            </div>

                            <div class="col-lg-6">
                                {!!Block::display('footerform')!!}
                            </div>
                        </div>

                    </div>
                </div>

                <div class="container">
                    {!!Block::display('copyright')!!}
                    {!!Block::display('credits')!!}

                </div>
            </footer><!-- #footer -->