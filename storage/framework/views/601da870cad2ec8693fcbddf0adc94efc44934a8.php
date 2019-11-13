    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  <?php echo trans('user::team.name'); ?></a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#teams-team-entry' data-href='<?php echo e(guard_url('user/team/create')); ?>'><i class="fa fa-plus-circle"></i> <?php echo e(trans('app.new')); ?></button>
                <?php if($team->id ): ?>
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#teams-team-entry' data-href='<?php echo e(guard_url('user/team')); ?>/<?php echo e($team->getRouteKey()); ?>/edit'><i class="fa fa-pencil-square"></i> <?php echo e(trans('app.edit')); ?></button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#teams-team-entry' data-datatable='#teams-team-list' data-href='<?php echo e(guard_url('user/team')); ?>/<?php echo e($team->getRouteKey()); ?>' >
                <i class="fa fa-times-circle"></i> <?php echo e(trans('app.delete')); ?>

                </button>
                <?php endif; ?>
            </div>
        </ul>
        <?php echo Form::vertical_open()
        ->id('teams-team-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('user/team')); ?>

            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> <?php echo e(trans('app.view')); ?>   <?php echo trans('user::team.name'); ?>  [<?php echo $team->name; ?>] </div>
                <div class="tab-pane active" id="details">
                    <?php echo $__env->make('user::admin.team.partial.entry', ['mode' => 'show'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        <?php echo Form::close(); ?>

    </div><?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/vendor/user/admin/team/show.blade.php ENDPATH**/ ?>