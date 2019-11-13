
<div class="row">
    <div class='col-md-3 col-sm-6'>
                       <?php echo Form::text('name')
                       -> label(trans('roles::role.label.name'))
                       -> required()
                       -> placeholder(trans('roles::role.placeholder.name')); ?>


                       <?php echo Form::text('slug')
                       -> label(trans('roles::role.label.slug'))
                       -> required()
                       -> placeholder(trans('roles::role.placeholder.slug')); ?>


                       <?php echo Form::text('description')
                       -> label(trans('roles::role.label.description'))
                       -> placeholder(trans('roles::role.placeholder.description')); ?>


                       <?php echo Form::numeric('level')
                       -> label(trans('roles::role.label.level'))
                       -> placeholder(trans('roles::role.placeholder.level')); ?>

    </div>
    <div class='col-md-9 col-sm-6'>
        <br/> <strong>Permissions</strong><br/>
        <div class="treeview"  style="height:250px;overflow:auto;">
            <ul >
                <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package => $modules): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                    <input name="main[<?php echo e($package); ?>]" id="permissions_<?php echo e($package); ?>" type="checkbox" <?php echo e(@array_key_exists($package, $role->permissions) ? 'checked' : ''); ?> value='1'>
                    <label for="permissions_<?php echo e($package); ?>"><?php echo e(ucfirst($package)); ?></label>
                    <ul>
                    <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module => $permissions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                        <input name="sub[<?php echo e($package); ?>.<?php echo e($module); ?>]" id="permissions_<?php echo e($package); ?>_<?php echo e($module); ?>" type="checkbox" <?php echo e(@array_key_exists($package. '.' . $module, $role->permissions) ? 'checked' : ''); ?> value='1'>
                        <label for="permissions_<?php echo e($package); ?>_<?php echo e($module); ?>"><?php echo e(ucfirst($module)); ?></label>
                            <ul class="clearfix">
                            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li style="float:left; margin-right: 10px;">
                                    <input name="permissions[]" id="permissions_<?php echo e($package); ?>_<?php echo e($module); ?>_<?php echo e($permission); ?>" type="checkbox" <?php echo e((!$role->hasPermission($package. '.' . $module . '.' . $permission)) ? : 'checked'); ?> value='<?php echo e($value); ?>'>
                                    <label for="permissions_<?php echo e($package); ?>_<?php echo e($module); ?>_<?php echo e($permission); ?>"><?php echo e(ucfirst($permission)); ?> </label>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <hr />
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</div>
<style type="text/css">

.treeview {
  margin: 10px 0 0 20px;
}
.treeview ul { 
  list-style: none;
  margin: 5px 10px;
}

.treeview li label {
    font-weight: 500;
    margin-bottom: 2px;
}
.treeview hr {
    margin-top: 2px;
}
.treeview>ul>li>label {
    font-weight: 700;
}
</style>

<script type="text/javascript">
$(function() {
    $('input[type="checkbox"]').change(function(e) {

      var checked = $(this).prop("checked"),
          container = $(this).parent(),
          siblings = container.siblings();

      container.find('input[type="checkbox"]').prop({
        indeterminate: false,
        checked: checked
      });

      function checkSiblings(el) {

        var parent = el.parent().parent(),
            all = true;

        el.siblings().each(function() {
          return all = ($(this).children('input[type="checkbox"]').prop("checked") === checked);
        });

        if (all && checked) {

          parent.children('input[type="checkbox"]').prop({
            indeterminate: false,
            checked: checked
          });

          checkSiblings(parent);

        } else if (all && !checked) {

          parent.children('input[type="checkbox"]').prop("checked", checked);
          parent.children('input[type="checkbox"]').prop("indeterminate", (parent.find('input[type="checkbox"]:checked').length > 0));
          checkSiblings(parent);

        } else {

          el.parents("li").children('input[type="checkbox"]').prop({
            indeterminate: true,
            checked: false
          });

        }
      }
      checkSiblings(container);
    });
});
</script><?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/vendor/roles/admin/role/partial/entry.blade.php ENDPATH**/ ?>