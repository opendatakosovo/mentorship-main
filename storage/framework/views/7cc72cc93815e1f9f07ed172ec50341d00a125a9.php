<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 10/11/2019
 * Time: 11:18 AM
 */
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="http://localhost:8000/themes/admin/assets/img/avatar/male.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Administrator</p>
                <a href="http://localhost:8000/admin/profile"><i class="fa fa-user  text-success"></i> Profile</a>
                <a href="http://localhost:8000/admin/logout"><i class="fa fa-power-off text-warning"></i> Logout</a>
            </div>
        </div>
        <!-- search form -->


        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu tree" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="http://localhost:8000/admin/projects">
                    <i class="fa fa-tasks"></i>
                    <span>Projects</span>
                </a>
            </li>
            <li active="">
                <a href="http://localhost:8000/admin">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="http://localhost:8000/admin/page/page">
                    <i class="fa fa-book"></i>
                    <span>Pages</span>
                </a>
            </li>
            <li>
                <a href="http://localhost:8000/admin/menu/menu">
                    <i class="fa fa-bars"></i>
                    <span>Menu</span>
                </a>
            </li>
            <li>
                <a href="http://localhost:8000/admin/block/block">
                    <i class="fa fa-square"></i>
                    <span>Blocks</span>
                </a>
            </li>
            <li>
                <a href="http://localhost:8000/admin/roles/role">
                    <i class="fa fa-check-circle-o"></i>
                    <span>Roles &amp; Permissions</span>
                </a>
            </li>
            <li>
                <a href="http://localhost:8000/admin/contact/contact">
                    <i class="fa fa-newspaper-o"></i>
                    <span>Contact</span>
                </a>
            </li>
            <li class="treeview ">
                <a href="http://localhost:8000/admin/user/user">
                    <i class="fa fa-users"></i> <span>User</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="">
                        <a href="http://localhost:8000/admin/user/user">
                            <i class="fa fa-user"></i>
                            <span>Users</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="http://localhost:8000/admin/user/client">
                            <i class="fa fa-user"></i>
                            <span>Clients</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="http://localhost:8000/admin/user/team">
                            <i class="fa fa-users"></i>
                            <span>Teams</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="header">Masters</li>
            <li><a href="http://localhost:8000/admin/settings"><i class="fa fa-sliders text-red"></i> <span>Settings</span></a></li>
            <li><a href="http://localhost:8000/admin/masters"><i class="fa fa-circle-o text-yellow"></i> <span>Masters</span></a></li>
            <li><a href="http://localhost:8000/admin/reports"><i class="fa fa-bar-chart text-aqua"></i> <span>Reports</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/custom/partials/aside.blade.php ENDPATH**/ ?>