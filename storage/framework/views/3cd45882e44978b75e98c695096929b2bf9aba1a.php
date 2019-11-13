
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab"><?php echo trans('user::client.name', ['client' => $type]); ?></a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='CREATE' data-form='#user-client-create'  data-load-to='#user-client-entry' data-datatable='#user-client-list'><i class="fa fa-floppy-o"></i> <?php echo e(trans('app.save')); ?></button>
                <button type="button" class="btn btn-default btn-sm" data-action='CLOSE' data-load-to='#user-client-entry' data-href='<?php echo e(guard_url('user/' . $type . '/0')); ?>'><i class="fa fa-times-circle"></i> <?php echo e(trans('app.close')); ?></button>
            </div>
        </ul>
        <div class="tab-content clearfix">
            <?php echo Form::vertical_open()
            ->id('user-' . $type . '-create')
            ->method('POST')
            ->files('true')
            ->action(guard_url('user/' . $type)); ?>

            <div class="tab-pane active" id="details">
                <div class="tab-pan-title">  <?php echo e(trans('app.new')); ?>  [<?php echo trans('user::client.name', ['client' => $type]); ?>] </div>
                <?php echo $__env->make('user::default.partial.entry', ['mode' => 'create'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <?php echo Form::close(); ?>

        </div>
    </div><?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/vendor/user/admin/default/create.blade.php ENDPATH**/ ?>