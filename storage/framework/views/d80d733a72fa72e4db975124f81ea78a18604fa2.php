    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  <?php echo trans('contact::contact.name'); ?></a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#contact-contact-entry' data-href='<?php echo e(guard_url('contact/contact/create')); ?>'><i class="fa fa-plus-circle"></i> <?php echo e(trans('app.new')); ?></button>
                <?php if($contact->id ): ?>
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#contact-contact-entry' data-href='<?php echo e(guard_url('contact/contact')); ?>/<?php echo e($contact->getRouteKey()); ?>/edit'><i class="fa fa-pencil-square"></i> <?php echo e(trans('app.edit')); ?></button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#contact-contact-entry' data-datatable='#contact-contact-list' data-href='<?php echo e(guard_url('contact/contact')); ?>/<?php echo e($contact->getRouteKey()); ?>' >
                <i class="fa fa-times-circle"></i> <?php echo e(trans('app.delete')); ?>

                </button>
                <?php endif; ?>
            </div>
        </ul>
        <?php echo Form::vertical_open()
        ->id('contact-contact-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('contact/contact')); ?>

            <div class="tab-content clearfix">
                <div class="tab-pan-title"> <?php echo e(trans('app.view')); ?>   <?php echo trans('contact::contact.name'); ?>  [<?php echo $contact->name; ?>] </div>
                <div class="tab-pane active" id="details">
                    <?php echo $__env->make('contact::admin.contact.partial.entry', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        <?php echo Form::close(); ?>

    </div><?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/vendor/contact/admin/contact/show.blade.php ENDPATH**/ ?>