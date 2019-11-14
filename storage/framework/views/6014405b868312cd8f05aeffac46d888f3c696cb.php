
        <header class="main-header header-desktop">
          <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img src="<?php echo e(theme_asset('img/logo/logo-olddd.svg')); ?>" title="<?php echo e(__('app.name')); ?>" alt="<?php echo e(__('app.name')); ?>"></a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                      <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" id="userdropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <img  class="profile-pic" src="<?php echo e(user()->picture); ?>">
                          <span><?php echo e(users('name')); ?></span>
                          <i class="fa fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="userdropdownMenu">
                          <div class="user-box">
                            <a href="<?php echo e(guard_url('/')); ?>">
                              <img src="<?php echo e(user()->picture); ?>">
                              <h4><?php echo e(users('name')); ?> <span><?php echo e(users('email')); ?></span></h4>
                            </a>
                          </div>
                          <div class="user-navs">
                            <a href="<?php echo e(guard_url('profile')); ?>" class="mr-10"><i class="far fa-user-circle"></i> <?php echo e(__('app.settings')); ?></a>
                            <a href="<?php echo e(guard_url('password')); ?>"><i class="fas fa-key"></i> <?php echo e(__('app.password')); ?></a>
                          </div>
                          <a href="<?php echo e(guard_url('logout')); ?>" class="logout-btn">Logout</a>
                        </div>
                      </li>
                    </ul>
                </div>
            </div>
        </nav>
</header>
<?php /**PATH C:\xampp\htdocs\lavalite\website\public\themes/client/partials/header.blade.php ENDPATH**/ ?>