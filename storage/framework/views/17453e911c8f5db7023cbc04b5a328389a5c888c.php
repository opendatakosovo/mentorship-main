<?php echo $__env->make('notifications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="login-box">
            <div class="logo">
                <a href="<?php echo guard_url('/'); ?>"><img src="<?php echo theme_asset('img/logo/logo.svg'); ?>" class="img-responsive center-block" alt="logo" title="Lavalite"></a>
            </div>
            <div class="body">
                <h2>Reset Password</h2>
                    <?php echo Form::vertical_open()
                                        ->id('reset')
                                        ->action(guard_url('password/email'))
                                        ->method('POST'); ?>

                    <div class="form-group has-feedback">
                        <?php echo Form::email('email')
                        ->required()
                        ->placeholder('Enter your email')
                        ->raw(); ?>

                        <span class="fa fa-user-circle form-control-feedback"></span>
                    </div>


                    <button type="submit" class="btn theme-btn btn-block mt-20">Send Password</button>
                        <br/>
                    <p class="text-center mb-0">Back to <a href="<?php echo e(guard_url("login")); ?>" class="mt-10">login</a></p>

                    <?php echo Form::close(); ?>

            </div>
        </div>
        <div class="stripes-wraper">
            <div class="stripes">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
<?php /**PATH C:\xampp\htdocs\lavalite\website\public\themes/admin/views/auth/passwords/email.blade.php ENDPATH**/ ?>