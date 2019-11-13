<?php echo $__env->make('notifications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="box" style="min-width: 480px;">
            <div class="logo">
                <a href="<?php echo e(guard_url('/')); ?>"><img src="<?php echo e(theme_asset('img/logo/logo.svg')); ?>" class="img-responsive center-block" alt="logo" title="Lavalite"></a>
            </div>
            <div class="body">
                <h2>Reset Password</h2>
                    <form method="POST" action="<?php echo e(route('guard.password.update', ['guard' => 'client'])); ?>">
                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="token" value="<?php echo e($token); ?>">

                        <div class="form-group row">
                            <label for="email" class="col-md-5 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e($email ?? old('email')); ?>" required autofocus>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-5 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-5 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                            <div class="col-md-7">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Reset Password')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
            </div>
            <div class="text-center social-links">
                <h3><span class="login">social login</span></h3>
                    <a href="<?php echo guard_url('login/facebook'); ?>"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
                    <a href="<?php echo guard_url('login/twitter'); ?>"><i class="fab fa-twitter-square" aria-hidden="true"></i></a>
                    <a href="<?php echo guard_url('login/google'); ?>"><i class="fab fa-google-plus-square" aria-hidden="true"></i></a>
                    <a href="<?php echo guard_url('login/linkedin'); ?>"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
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
<?php /**PATH C:\xampp\htdocs\lavalite\website\public\themes/client/views/auth/passwords/reset.blade.php ENDPATH**/ ?>