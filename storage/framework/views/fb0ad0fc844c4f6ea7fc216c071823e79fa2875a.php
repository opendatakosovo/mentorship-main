<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> <?php echo trans('settings::setting.name'); ?> <small> <?php echo trans('app.manage'); ?> <?php echo trans('settings::setting.names'); ?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo guard_url('/'); ?>"><i class="fa fa-dashboard"></i> <?php echo trans('app.home'); ?> </a></li>
            <li class="active"><?php echo trans('settings::setting.names'); ?></li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">General</h3>
                    </div>
                      <ul class="nav nav-stacked">
                        <li><a  href='<?php echo e(guard_url('settings/main')); ?>' data-href="<?php echo e(guard_url('settings/main')); ?>" data-action='LOAD' data-load-to='#settings-setting-entry'>Main</a></li>

                        <li><a href='<?php echo e(guard_url('settings/main')); ?>' data-href="<?php echo e(guard_url('settings/company')); ?>" data-action='LOAD' data-load-to='#settings-setting-entry'>Company</a></li>

                        <li><a href='<?php echo e(guard_url('settings/theme')); ?>' data-href="<?php echo e(guard_url('settings/theme')); ?>" data-action='LOAD' data-load-to='#settings-setting-entry'>Theme</a></li>
                      </ul>
                    <div class="box-header with-border">
                      <h3 class="box-title">Subscription</h3>
                    </div>
                      <ul class="nav nav-stacked">
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Subscriptions</a></li>
                      </ul>

                    <div class="box-header with-border">
                      <h3 class="box-title">Integrations</h3>
                    </div>
                      <ul class="nav nav-stacked">
                        <li><a href="#">Social logins</a></li>
                        <li><a href="#">Payment</a></li>
                        <li><a href="#">Email</a></li>
                        <li><a href="#">SMS</a></li>
                        <li><a href="#">Chat</a></li>
                        <li><a href="#">Google</a></li>
                      </ul>

                      <div class="box-footer">
                      </div>
                </div>
          </div>
            <div class="col-md-9">
                <!-- Main content -->
                    <div class="nav-tabs-custom">
                    <!-- Nav tabs -->
                        <ul class="nav nav-tabs primary">
                            <li class="active"><a href="#main" data-toggle="tab">Settings</a></li>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-primary btn-sm" data-action='CREATE' data-form='#settings-setting-create'  data-load-to='#settings-setting-entry'><i class="fa fa-floppy-o"></i> <?php echo e(trans('app.save')); ?></button>
                                <button type="reset" class="btn btn-default btn-sm"><i class="fa fa-times-circle"></i> <?php echo e(trans('app.reset')); ?></button>
                            </div>
                        </ul>
                        <div class="tab-content clearfix">
                            <div class="tab-pane active" id="settings-setting-entry">
                                <?php echo Form::vertical_open()
                                ->id('settings-setting-create')
                                ->method('POST')
                                ->files('true')
                                ->action(URL::to('admin/settings/setting')); ?>

                                  <?php echo $__env->make('settings::admin.setting.partial.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php echo Form::close(); ?>

                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </section>
</div><?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/vendor/settings/admin/setting/index.blade.php ENDPATH**/ ?>