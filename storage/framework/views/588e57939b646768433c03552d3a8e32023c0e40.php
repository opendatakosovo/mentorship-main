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
        margin-top: -75px;
    }
</style>
<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo e(Trans::to('admin')); ?>" class="logo">
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
                
                    
                        
                        
                    
                    
                        
                        
                            
                        
                        
                    
                
                <!-- Notifications: style can be found in dropdown.less -->
                
                    
                        
                        
                    
                    
                        
                        
                            

                        
                        
                    
                
                <!-- Tasks: style can be found in dropdown.less -->
                
                    
                        
                        
                    
                    
                        
                        
                        
                        
                    
                
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        
                        
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            
                            
                                
                                
                            
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?php echo e(guard_url('profile')); ?>" class="btn btn-theme">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo e(guard_url('logout')); ?>" class="btn btn-theme">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/custom/partials/header.blade.php ENDPATH**/ ?>