
<div class="nav-tabs-custom">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs primary">
        <li class="active"><a href="#details" data-toggle="tab">Category</a></li>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-primary btn-sm" data-action='CREATE' data-form='#block-category-create'  data-load-to='#block-category-entry' data-datatable='#block-category-list'><i class="fa fa-floppy-o"></i> Save</button>
            <button type="button" class="btn btn-default btn-sm" data-action='CLOSE' data-load-to='#block-category-entry' data-href='<?php echo e(guard_url('block/category/0')); ?>'><i class="fa fa-times-circle"></i> <?php echo e(trans('app.close')); ?></button>
        </div>
    </ul>
    <?php echo Form::vertical_open()
    ->id('block-category-create')
    ->method('POST')
    ->files('true')
    ->action(guard_url('block/category')); ?>

    <div class="tab-content clearfix">
        <div class="tab-pane active" id="details">
            <div class="tab-pan-title"> <?php echo e(trans('app.create')); ?>  <?php echo trans('block::category.name'); ?> </div>
            <?php echo $__env->make('block::admin.category.partial.entry', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <?php echo Form::close(); ?>

</div><?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/vendor/block/admin/category/create.blade.php ENDPATH**/ ?>