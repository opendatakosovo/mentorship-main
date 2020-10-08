<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 10/11/2019
 * Time: 11:16 AM
 */
?>
<style>
    .main-header .logo .logo-lg img, .main-header .logo .logo-mini img {
        height: 100%;
    }
    .logo-lg img{
        width: 100%;
        margin-top: -85px;
    }
    @media screen and (max-width: 1199px){
       .nav-trigger {
            justify-content: flex-end !important;
        }
}
</style>
<header class="main-header">
    <!-- Logo -->
    <a href="{{ Trans::to('admin') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img src="/themes/admin/assets/img/logo/mentorship-logo.png" alt=""></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="/themes/admin/assets/img/logo/mentorship-logo.png" alt=""></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                {{--<li class="dropdown messages-menu">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                        {{--<i class="fa fa-envelope-o"></i>--}}
                        {{--<span class="label label-success"> 12 </span>--}}
                    {{--</a>--}}
                    {{--<ul class="dropdown-menu notification">--}}
                        {{--<li class="header">   You have 4 messages</li>--}}
                        {{--<li>--}}
                            {{--<!-- inner menu: contains the actual data -->--}}
                        {{--</li>--}}
                        {{--<li class="footer"><a href="#">View all</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                <!-- Notifications: style can be found in dropdown.less -->
                {{--<li class="dropdown notifications-menu">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                        {{--<i class="fa fa-calendar"></i>--}}
                        {{--<span class="label label-danger"> 20 </span>--}}
                    {{--</a>--}}
                    {{--<ul class="dropdown-menu notification">--}}
                        {{--<li class="header">   You have 5 events</li>--}}
                        {{--<li>--}}
                            {{--<!-- inner menu: contains the actual data -->--}}

                        {{--</li>--}}
                        {{--<li class="footer"><a href="#">View all</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                <!-- Tasks: style can be found in dropdown.less -->
                {{--<li class="dropdown tasks-menu">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                        {{--<i class="fa fa-flag-o"></i>--}}
                        {{--<span class="label label-danger">  5</span>--}}
                    {{--</a>--}}
                    {{--<ul class="dropdown-menu notification">--}}
                        {{--<li class="header">   You have 4 Tasks</li>--}}
                        {{--<li>--}}
                        {{--</li>--}}
                        {{--<li class="footer"><a href="#">View all</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="/themes/admin/assets/img/avatar/male.png" class="user-image" alt="User Image"/>
                        <span class="hidden-xs">{!!user()->name!!}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="/themes/admin/assets/img/avatar/male.png" class="img-circle" alt="User Image" />
                            <p>
                                {!!user()->name!!} - {!!user()->designation!!}
                                <small>Member since {!!user()->joined!!}</small>
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
