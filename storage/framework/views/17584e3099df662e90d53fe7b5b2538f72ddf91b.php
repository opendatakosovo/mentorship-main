
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#user" data-toggle="tab"><?php echo trans('user::user.tab.name'); ?></a></li>
            <li><a href="#details" data-toggle="tab">Details</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#user-user-edit'  data-load-to='#user-user-entry' data-datatable='#user-user-list'><i class="fa fa-floppy-o"></i> Save</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#user-user-entry' data-href='<?php echo e(trans_url('admin/user/user')); ?>/<?php echo e($user->getRouteKey()); ?>'><i class="fa fa-times-circle"></i> <?php echo e(trans('app.cancel')); ?></button>
            </div>
        </ul>
        <?php echo Form::vertical_open()
        ->id('user-user-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(trans_url('admin/user/user/'. $user->getRouteKey())); ?>

        <div class="tab-content clearfix">
            <div class="tab-pane active" id="user">
                <div class="tab-pan-title">  <?php echo trans('app.edit'); ?>  <?php echo trans('user::user.name'); ?> [ <?php echo $user->name; ?> ] </div>
                <?php echo $__env->make('user::admin.user.partial.entry', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="tab-pane " id="details">
                <div class="row">
                    <div class='col-md-3 col-sm-4'>
                        <div class='col-md-12 col-sm-12'>
                            <?php echo Form::radios('sex')
                            -> radios(trans('user::user.options.sex'))
                            ->style('margin-left:-15px')
                            -> label(trans('user::user.label.sex'))
                            -> inline(); ?>

                        </div>
                        <div class='col-md-12 col-sm-12'>
                            <?php echo Form::select('reporting_to')
                            -> options(trans('user::user.options.reporting_to'))
                            -> label(trans('user::user.label.reporting_to'))
                            -> placeholder(trans('user::user.placeholder.reporting_to')); ?>

                        </div>
                        <div class='col-md-12 col-sm-12'>
                            <?php echo Form::select('department')
                            -> options(trans('user::user.options.department'))
                            -> label(trans('user::user.label.department'))
                            -> placeholder(trans('user::user.placeholder.department')); ?>

                        </div>
                        <div class='col-md-12 col-sm-12'>
                            <?php echo Form::text('dob')
                            -> label(trans('user::user.label.dob'))
                            -> placeholder(trans('user::user.placeholder.dob')); ?>

                        </div>
                        <div class='col-md-12 col-sm-12'>
                            <?php echo Form::tel('phone')
                            -> label(trans('user::user.label.phone'))
                            -> placeholder(trans('user::user.placeholder.phone')); ?>

                        </div>
                    </div>

                    <div class='col-md-3 col-sm-4'>
                        <div class='col-md-12 col-sm-12'>
                            <?php echo Form::text('address')
                            -> label(trans('user::user.label.address'))
                            -> placeholder(trans('user::user.placeholder.address')); ?>

                        </div>
                        <div class='col-md-12 col-sm-12'>
                            <?php echo Form::text('street')
                            -> label(trans('user::user.label.street'))
                            -> placeholder(trans('user::user.placeholder.street')); ?>

                        </div>
                        <div class='col-md-12 col-sm-12'>
                            <?php echo Form::text('city')
                            -> label(trans('user::user.label.city'))
                            -> placeholder(trans('user::user.placeholder.city')); ?>

                        </div>
                        <div class='col-md-12 col-sm-12'>
                            <?php echo Form::text('district')
                            -> label(trans('user::user.label.district'))
                            -> placeholder(trans('user::user.placeholder.district')); ?>

                        </div>
                        <div class='col-md-12 col-sm-12'>
                            <?php echo Form::text('state')
                            -> label(trans('user::user.label.state'))
                            -> placeholder(trans('user::user.placeholder.state')); ?>

                        </div>
                        <div class='col-md-12 col-sm-12'>
                            <?php echo Form::text('country')
                            -> label(trans('user::user.label.country'))
                            -> placeholder(trans('user::user.placeholder.country')); ?>

                        </div>
                        <div class='col-md-12 col-sm-12'>
                            <?php echo Form::url('web')
                            -> label(trans('user::user.label.web'))
                            -> placeholder(trans('user::user.placeholder.web')); ?>

                        </div>
                    </div>
                    <div class='col-md-3 col-sm-4'>
                            <label>Photo</label>
                        <div class='col-md-12 col-sm-12'>
                            <?php echo $user->files('photo')->url($user->getUploadUrl('photo'))->dropzone(); ?>

                            <?php echo $user->files('photo')->editor(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo Form::close(); ?>

    </div><?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/vendor/user/admin/user/edit.blade.php ENDPATH**/ ?>