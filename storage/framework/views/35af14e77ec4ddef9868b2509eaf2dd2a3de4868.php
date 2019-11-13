
<div class="nav-tabs-custom">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs primary">
        <li class="active"><a href="#category" data-toggle="tab"><?php echo trans('block::category.tab.name'); ?></a></li>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#block-category-edit'  data-load-to='#block-category-entry' data-datatable='#block-category-list'><i class="fa fa-floppy-o"></i> Save</button>
            <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#block-category-entry' data-href='<?php echo e(guard_url('block/category')); ?>/<?php echo e($category->getRouteKey()); ?>'><i class="fa fa-times-circle"></i> <?php echo e(trans('app.cancel')); ?></button>
        </div>
    </ul>
    <?php echo Form::vertical_open()
    ->id('block-category-edit')
    ->method('PUT')
    ->enctype('multipart/form-data')
    ->action(guard_url('block/category/'. $category->getRouteKey())); ?>

    <div class="tab-content clearfix">
        <div class="tab-pane active" id="category">
            <div class="tab-pan-title">  <?php echo trans('app.edit'); ?>  <?php echo trans('block::category.name'); ?> [ <?php echo $category->name; ?> ] </div>
            <?php echo $__env->make('block::admin.category.partial.entry', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <?php echo Form::close(); ?>

</div><?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/vendor/block/admin/category/edit.blade.php ENDPATH**/ ?>