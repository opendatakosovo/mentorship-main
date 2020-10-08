{{--<li class="dropdown messages-menu">--}}
                    {{--<a href="#" class="dropdown-toggle"
                        data-toggle="dropdown">--}}
                        {{--<i
                            class="fa fa-envelope-o"></i>--}}
                        {{--<span class="label label-success"> 12
                        </span>--}}
                        {{--</a>--}}
                    {{--<ul class="dropdown-menu notification">
                        --}}
                        {{--<li class="header"> You have 4 messages</li>
                        --}}
                        {{--<li>--}}
                            {{--
                            <!-- inner menu: contains the actual data -->--}}
                            {{--</li>--}}
                        {{--<li class="footer"><a href="#">View all</a></li>
                        --}}
                        {{--</ul>--}}
                    {{--</li>--}}
                <!-- Notifications: style can be found in dropdown.less -->
                {{--<li class="dropdown notifications-menu">
                    --}}
                    {{--<a href="#" class="dropdown-toggle"
                        data-toggle="dropdown">--}}
                        {{--<i class="fa fa-calendar"></i>--}}
                        {{--<span class="label label-danger"> 20
                        </span>--}}
                        {{--</a>--}}
                    {{--<ul class="dropdown-menu notification">
                        --}}
                        {{--<li class="header"> You have 5 events</li>
                        --}}
                        {{--<li>--}}
                            {{--
                            <!-- inner menu: contains the actual data -->--}}

                            {{--</li>--}}
                        {{--<li class="footer"><a href="#">View all</a></li>
                        --}}
                        {{--</ul>--}}
                    {{--</li>--}}
                <!-- Tasks: style can be found in dropdown.less -->
                {{--<li class="dropdown tasks-menu">--}}
                    {{--<a href="#" class="dropdown-toggle"
                        data-toggle="dropdown">--}}
                        {{--<i class="fa fa-flag-o"></i>--}}
                        {{--<span class="label label-danger">
                            5</span>--}}
                        {{--</a>--}}
                    {{--<ul class="dropdown-menu notification">
                        --}}
                        {{--<li class="header"> You have 4 Tasks</li>
                        --}}
                        {{--<li>--}}
                            {{--</li>--}}
                        {{--<li class="footer"><a href="#">View all</a></li>
                        --}}
                        {{--</ul>--}}
                    {{--</li>--}}
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="/themes/admin/assets/img/avatar/male.png" class="user-image" alt="User Image" />
                        <span class="hidden-xs">{!! user()->name !!}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="/themes/admin/assets/img/avatar/male.png" class="img-circle" alt="User Image" />
                            <p>
                                {!! user()->name !!} - {!! user()->designation !!}
                                <small>Member since {!! user()->joined !!}</small>
                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ guard_url('profile') }}" class="btn btn-theme">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ guard_url('logout') }}" class="btn btn-theme">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
