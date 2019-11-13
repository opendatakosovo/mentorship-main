        <div class="card">
            <div class="card-block">
            <h2 class="title">Change password</h2>
            <?php echo $__env->make('notifications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo Form::vertical_open()
            ->id('contact')
            ->method('POST')
            ->class('change-password'); ?>


            <?php echo Form::password('old_password')
            -> label(trans('user::user.label.current_password'))
            -> placeholder(trans('user::user.placeholder.current_password')); ?>


            <?php echo Form::password('password')
            -> label(trans('user::user.label.new_password'))
            -> placeholder(trans('user::user.placeholder.new_password')); ?>



            <?php echo Form::password('password_confirmation')
            -> label(trans('user::user.label.new_password_confirmation'))
            -> placeholder(trans('user::user.placeholder.new_password_confirmation')); ?>


            <?php echo Form::submit(trans('auth.changepassword'))->class('btn btn-primary'); ?>

            <br>
            <br>

            <?php echo Form::close(); ?>

          </div>
      </div><?php /**PATH C:\xampp\htdocs\lavalite\website\public\themes/client/views/user/password.blade.php ENDPATH**/ ?>