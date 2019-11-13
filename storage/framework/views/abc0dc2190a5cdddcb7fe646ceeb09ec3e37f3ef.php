

<div class="nav-tabs-custom">
    <ul class="nav nav-tabs primary">
        <li class="active"><a href="#details" data-toggle="tab">  <?php echo trans('block::category.name'); ?></a></li>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#block-category-entry' data-href='<?php echo e(guard_url('block/category/create')); ?>'><i class="fa fa-plus-circle"></i> New</button>
            <?php if($category->id ): ?>
            <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#block-category-entry' data-href='<?php echo e(guard_url('block/category')); ?>/<?php echo e($category->getRouteKey()); ?>/edit'><i class="fa fa-pencil-square"></i> Edit</button>
            <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#block-category-entry' data-datatable='#block-category-list' data-href='<?php echo e(guard_url('block/category')); ?>/<?php echo e($category->getRouteKey()); ?>' >
            <i class="fa fa-times-circle"></i> Delete
            </button>
            <?php endif; ?>

        </div>
    </ul>
    <?php echo Form::vertical_open()
    ->id('block-category-show')
    ->method('POST')
    ->files('true')
    ->action(guard_url('block/category')); ?>

        <div class="tab-content clearfix">
            <div class="tab-pane active" id="details">
                <div class="tab-pan-title">  <?php echo trans('app.view'); ?>  <?php echo trans('block::category.name'); ?> [ <?php echo $category->name; ?> ] </div>
                <?php echo $__env->make('block::admin.category.partial.entry', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    <?php echo Form::close(); ?>

</div><?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/vendor/block/admin/category/show.blade.php ENDPATH**/ ?>