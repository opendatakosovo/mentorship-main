    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  <?php echo trans('roles::role.name'); ?></a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#roles-role-entry' data-href='<?php echo e(guard_url('roles/role/create')); ?>'><i class="fa fa-plus-circle"></i> <?php echo e(trans('app.new')); ?></button>
                <?php if($role->id ): ?>
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#roles-role-entry' data-href='<?php echo e(guard_url('roles/role')); ?>/<?php echo e($role->getRouteKey()); ?>/edit'><i class="fa fa-pencil-square"></i> <?php echo e(trans('app.edit')); ?></button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#roles-role-entry' data-datatable='#roles-role-list' data-href='<?php echo e(guard_url('roles/role')); ?>/<?php echo e($role->getRouteKey()); ?>' >
                <i class="fa fa-times-circle"></i> <?php echo e(trans('app.delete')); ?>

                </button>
                <?php endif; ?>
            </div>
        </ul>
        <?php echo Form::vertical_open()
        ->id('roles-role-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('roles/role')); ?>

            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> <?php echo e(trans('app.view')); ?>   <?php echo trans('roles::role.name'); ?>  [<?php echo $role->name; ?>] </div>
                <div class="tab-pane active" id="details">
                    <?php echo $__env->make('roles::admin.role.partial.entry', ['mode' => 'show'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        <?php echo Form::close(); ?>

    </div><?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/vendor/roles/admin/role/show.blade.php ENDPATH**/ ?>