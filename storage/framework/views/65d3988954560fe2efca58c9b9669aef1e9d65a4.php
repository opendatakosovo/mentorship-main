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
    <span class="logo-mini"><img src="<?php echo theme_asset('img/logo/logo-white.svg'); ?>" alt=""></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><img src="<?php echo theme_asset('img/logo/mentorship-logo.png'); ?>" alt=""></span>
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
                    <img src="<?php echo user()->picture; ?>" class="user-image" alt="User Image"/>
                    <span class="hidden-xs"><?php echo user()->name; ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?php echo user()->picture; ?>" class="img-circle" alt="User Image" />
                            <p>
                            <?php echo user()->name; ?> - <?php echo user()->designation; ?>

                            <small>Member since <?php echo user()->joined; ?></small>
                            </p>
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
                  
                    
                  
            </ul>
        </div>
    </nav>
</header><?php /**PATH C:\xampp\htdocs\lavalite\website\public\themes/admin/partials/header.blade.php ENDPATH**/ ?>