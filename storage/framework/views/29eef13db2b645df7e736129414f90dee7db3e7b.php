    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#role" data-toggle="tab"><?php echo trans('roles::role.tab.name'); ?></a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#roles-role-edit'  data-load-to='#roles-role-entry' data-datatable='#roles-role-list'><i class="fa fa-floppy-o"></i> <?php echo e(trans('app.save')); ?></button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#roles-role-entry' data-href='<?php echo e(guard_url('roles/role')); ?>/<?php echo e($role->getRouteKey()); ?>'><i class="fa fa-times-circle"></i> <?php echo e(trans('app.cancel')); ?></button>

            </div>
        </ul>
        <?php echo Form::vertical_open()
        ->id('roles-role-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('roles/role/'. $role->getRouteKey())); ?>

        <div class="tab-content clearfix">
            <div class="tab-pane active" id="role">
                <div class="tab-pan-title">  <?php echo e(trans('app.edit')); ?>  <?php echo trans('roles::role.name'); ?> [<?php echo $role->name; ?>] </div>
                <?php echo $__env->make('roles::admin.role.partial.entry', ['mode' => 'edit'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <?php echo Form::close(); ?>

    </div><?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/vendor/roles/admin/role/edit.blade.php ENDPATH**/ ?>