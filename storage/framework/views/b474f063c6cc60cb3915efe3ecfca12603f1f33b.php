    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#team" data-toggle="tab"><?php echo trans('user::team.tab.name'); ?></a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#teams-team-edit'  data-load-to='#teams-team-entry' data-datatable='#teams-team-list'><i class="fa fa-floppy-o"></i> <?php echo e(trans('app.save')); ?></button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#teams-team-entry' data-href='<?php echo e(guard_url('user/team')); ?>/<?php echo e($team->getRouteKey()); ?>'><i class="fa fa-times-circle"></i> <?php echo e(trans('app.cancel')); ?></button>

            </div>
        </ul>
        <?php echo Form::vertical_open()
        ->id('teams-team-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('user/team/'. $team->getRouteKey())); ?>

        <div class="tab-content clearfix">
            <div class="tab-pane active" id="team">
                <div class="tab-pan-title">  <?php echo e(trans('app.edit')); ?>  <?php echo trans('user::team.name'); ?> [<?php echo $team->name; ?>] </div>
                <?php echo $__env->make('user::admin.team.partial.entry', ['mode' => 'edit'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <?php echo Form::close(); ?>

    </div><?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/vendor/user/admin/team/edit.blade.php ENDPATH**/ ?>