
<?php if(Session::has('message')): ?>
    <?php if(session('code') < 200): ?>
        <div class="alert alert-info">
            <button type="button" aria-hidden="true" class="close"  data-dismiss="alert" aria-label="close">
                <i class="icon-close"></i>
            </button>
            <span>
                <b> Info - </b> <?php echo e(session('message')); ?></span>
        </div>
    <?php elseif(session('code') < 300): ?>
        <div class="alert alert-success">
            <button type="button" aria-hidden="true" class="close"  data-dismiss="alert" aria-label="close">
                <i class="icon-close"></i>
            </button>
            <span>
                <b> Success - </b> <?php echo e(session('message')); ?></span>
        </div>
    <?php elseif(session('code') < 400): ?>
        <div class="alert alert-warning">
            <button type="button" aria-hidden="true" class="close"  data-dismiss="alert" aria-label="close">
                <i class="icon-close"></i>
            </button>
            <span>
                <b> Warning - </b> <?php echo e(session('message')); ?></span>
        </div>
    <?php else: ?>
        <div class="alert alert-danger">
            <button type="button" aria-hidden="true" class="close"  data-dismiss="alert" aria-label="close">
                <i class="icon-close"></i>
            </button>
            <span>
                <b> Error - </b> <?php echo e(session('message')); ?></span>
        </div>
    <?php endif; ?>
<?php endif; ?>


<?php if(Session::has('errors')): ?>
        <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <b> Error </b>
            <ul>
              <?php $__currentLoopData = Session::get('errors')->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($message); ?> </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
<?php endif; ?>

<?php if(Session::has('success')): ?>
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <b> Success </b>
            <div><?php echo e(Session::get('success')); ?></div>
        </div>
<?php endif; ?>

<?php if(Session::has('success')): ?>
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <b> Success </b>
            <div><?php echo e(Session::get('success')); ?></div>
        </div>
<?php endif; ?>

<?php if(Session::has('status')): ?>
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <b> Info </b>
            <div><?php echo e(Session::get('status')); ?></div>
        </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\lavalite\website\public\themes/client/views/notifications.blade.php ENDPATH**/ ?>