
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">Menu</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#edit-menu' data-load-to='#menu-entry' data-href='<?php echo guard_url('menu/submenu'); ?>/<?php echo $menu->getRouteKey(); ?>' id="btn-save"><i class="fa fa-floppy-o"></i> <?php echo e(trans('app.save')); ?></button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#menu-entry' data-href='<?php echo guard_url('menu/submenu'); ?>/<?php echo $menu->getRouteKey(); ?>' id="btn-cancel"><i class="fa fa-times-circle"></i> <?php echo e(trans('app.cancel')); ?></button>
            </div>
        </ul>
        <?php echo Form::vertical_open()
        ->id('edit-menu')
        ->method('PUT')
        ->files('true')
        ->enctype('multipart/form-data')
        ->action(guard_url('menu/submenu/'. $menu->getRouteKey())); ?>

        <div class="tab-content">
            <?php echo $__env->make('menu::admin.partial.submenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <?php echo Form::close(); ?>

    </div>
<?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/vendor/menu/admin/sub/edit.blade.php ENDPATH**/ ?>