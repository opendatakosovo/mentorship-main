
<div class="row disabled">
  <div class='col-md-3 col-sm-3'>
        <div class='col-md-12 col-sm-12'>
            <?php echo Form::text('name')
            -> label(trans('user::user.label.name'))
            -> placeholder(trans('user::user.placeholder.name')); ?>

        </div>
        <div class='col-md-12 col-sm-12'>
            <?php echo Form::email('email')
            -> label(trans('user::user.label.email'))
            -> placeholder(trans('user::user.placeholder.email')); ?>

        </div>
        <div class='col-md-12 col-sm-12'>
            <?php echo Form::password('password')
            -> label(trans('user::user.label.password').' <a href="javascript:void(0)" class="pwdedit"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>')
            -> disabled(true)
            -> placeholder(trans('user::user.placeholder.password')); ?>

        </div>
        <div class='col-md-12 col-sm-12'>
            <?php echo Form::text('designation')
            -> label(trans('user::user.label.designation'))
            -> placeholder(trans('user::user.placeholder.designation')); ?>

        </div>
        <div class='col-md-12 col-sm-12'>
            <?php echo Form::tel('mobile')
            -> label(trans('user::user.label.mobile'))
            -> placeholder(trans('user::user.placeholder.mobile')); ?>

        </div>        
    </div>
    <div  class='col-md-5 col-sm-12'>
      <div class="row">
      <div class='col-md-12 col-sm-12'>
      <strong>Roles</strong><br/>
      <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div style="float:left">
              <div class="checkbox checkbox-danger" >
                <input name="roles[<?php echo e($role->id); ?>]" id="roles.<?php echo e($role->id); ?>" type="checkbox" <?php echo e(!($user->hasRole($role->slug)) ? :'checked'); ?> value='<?php echo e($role->id); ?>'>
                <label for="roles.<?php echo e($role->id); ?>"><?php echo e($role->name); ?></label>
              </div>
          </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>

      <div class='col-md-12 col-sm-12'>
        <br/> <strong>Permissions</strong><br/>
        <div class="treeview" style="height:300px;overflow:auto;">
            <ul style="margin-left:-40px;">
                <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package => $modules): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                    <input name="permissions[<?php echo e($package); ?>]" id="permissions_<?php echo e($package); ?>" type="checkbox" <?php echo e(@array_key_exists($package, $role->permissions) ? 'checked' : ''); ?> value='1'>
                    <label for="permissions_<?php echo e($package); ?>"><?php echo e(ucfirst($package)); ?></label>
                    <ul>
                    <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module => $permissions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                        <input name="permissions[<?php echo e($package); ?>.<?php echo e($module); ?>]" id="permissions_<?php echo e($package); ?>_<?php echo e($module); ?>" type="checkbox" <?php echo e(@array_key_exists($package. '.' . $module, $user->permissions) ? 'checked' : ''); ?> value='1'>
                        <label for="permissions_<?php echo e($package); ?>_<?php echo e($module); ?>"><?php echo e(ucfirst($module)); ?></label>
                            <ul class="clearfix">
                            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li style="float:left; margin-right: 10px;">
                                    <input name="permissions[]" id="permissions_<?php echo e($package); ?>_<?php echo e($module); ?>_<?php echo e($permission); ?>" type="checkbox" <?php echo e((!$user->hasPermission($package. '.' . $module . '.' . $permission)) ? : 'checked'); ?> value='<?php echo e($value); ?>'>
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
  </div>
  <div class='col-md-4 col-sm-12'>
        <br/> <strong>Team</strong><br/>
    <?php $__currentLoopData = $user->teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="member" data-team='<?php echo e($team->id); ?>'>
            <div class="item">
                <div class="inline-block name"><?php echo e($team->name); ?></div>
                <div class="inline-block role"><?php echo e($team->pivot->role); ?></div>
                <div class="inline-block pull-right">
                  <?php if($user->team_id == $team->id): ?>
                    Current
                  <?php else: ?>
                    <a title="Change" class="red switch">Switch</a>
                  <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>

<style type="text/css">
.item {
    border-bottom: #999 dashed 1px;
    padding: 0px 0px 5px 0px;
    margin: 5px 5px 0px 5px;
}
.item .red{
    color:red;
    cursor:pointer;
}
.inline-block {
    display: inline-block !important;
}
.name {
    width:40%;
}
.treeview {
  margin: 10px 0 0 0px;
}
.treeview ul { 
  list-style: none;
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
      $(".switch").click(function(e) {
        e.preventDefault();
        var formData = new FormData();
            formData.append('user_id', <?php echo e($user->id); ?>);
            formData.append('team_id', $(this).parents('.member').data('team'));

        var url  = '<?php echo e(guard_url('user/user/switch')); ?>';

        $.ajax( {
            url: url,
            type: 'POST',
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            dataType: 'json',
            async: false,
            success:function(data, textStatus, jqXHR)
            {
                app.load($('#user-user-entry'), data.url);
            }
        });
    });

    $(".pwdedit").click(function(){
      console.log('dsfdsf');
      $("#password").removeAttr('disabled');
    });

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
</script><?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/vendor/user/admin/user/partial/entry.blade.php ENDPATH**/ ?>