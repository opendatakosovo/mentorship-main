<div class="nav-tabs-custom">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs primary">
        <li class="active"><a href="#details" data-toggle="tab"><?php echo trans('block::block.tab.name'); ?></a></li>
        <li><a href="#images" data-toggle="tab">Images</a></li>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-primary btn-sm" data-action='CREATE' data-form='#block-block-create'  data-load-to='#block-block-entry' data-datatable='#block-block-list'><i class="fa fa-floppy-o"></i> Save</button>
            <button type="button" class="btn btn-default btn-sm" data-action='CLOSE' data-load-to='#block-block-entry' data-href='<?php echo e(guard_url('block/block/0')); ?>'><i class="fa fa-times-circle"></i> <?php echo e(trans('app.close')); ?></button>
        </div>
    </ul>
    <?php echo Form::vertical_open()
    ->id('block-block-create')
    ->method('POST')
    ->files('true')
    ->action(guard_url('block/block')); ?>

    <div class="tab-content clearfix">
        <div class="tab-pane active" id="details">
            <div class="tab-pan-title"> <?php echo e(trans('app.create')); ?>  <?php echo trans('block::block.name'); ?> </div>
            <?php echo $__env->make('block::admin.block.partial.entry', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="tab-pane" id="images">
            <div class="row">
                <div class="form-group">
                        <label for="images" class="control-label col-lg-12 col-sm-12 text-left">
                            <?php echo e(trans('block::block.label.images')); ?>

                        </label>
                        <div class='col-lg-6 col-sm-12'>
                            <?php echo $block->files('images')->url($block->getUploadUrl('images'))->dropzone(); ?>

                        </div>
                        <div class='col-lg-12 col-sm-12'>
                            <?php echo $block->files('images')->editor(); ?>

                        </div>
                    </div>
                </div>
             </div>
       </div>
    <?php echo Form::close(); ?>

</div><?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/vendor/block/admin/block/create.blade.php ENDPATH**/ ?>