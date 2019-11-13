<div class="content-wrapper" style="min-height: 1096px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        <i class="fa fa-user "></i> Profile
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo url('admin'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Profile</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="box box-warning">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="<?php echo user()->picture; ?>" alt="User profile picture">
                        <h3 class="profile-username text-center"><?php echo user()->name; ?></h3>
                        <p class="text-muted text-center"><?php echo user()->designation; ?> - Member Since <?php echo user()->joined; ?></p>
                        <a  class="btn btn-primary btn-block" href="<?php echo guard_url('profile'); ?>" ><b>Update Profile</b></a>
                        <a  class="btn btn-warning btn-block" href="<?php echo guard_url('password'); ?>"><b>Change Password</b></a>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- /.box -->
            </div>
            
            <div id="show-profile">
                <div class="col-md-9">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#profile" data-toggle="tab" aria-expanded="false">Change password</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="profile">
                                 <?php echo $__env->make('notifications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




<?php echo Form::vertical_open()
->id('form-change-password')
->action('admin/password')
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

<button type="submit" class="btn btn-primary" id="btn-update-profile"><?php echo e(__('save')); ?></button>
<button type="reset" class="btn btn-default btn-close"><?php echo e(__('close')); ?></button>

<?php echo Form::close(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<style type="text/css">
    .mh500{
        min-height: 500px;
    }
</style>


<?php /**PATH C:\xampp\htdocs\lavalite\website\public\themes/admin/views/user/password.blade.php ENDPATH**/ ?>