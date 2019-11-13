            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       <?php echo Form::text('name')
                       -> required()
                       -> label(trans('roles::permission.label.name'))
                       -> placeholder(trans('roles::permission.placeholder.name')); ?>

                </div>

                <div class='col-md-4 col-sm-6'>
                       <?php echo Form::text('slug')
                       -> required()
                       -> label(trans('roles::permission.label.slug'))
                       -> placeholder(trans('roles::permission.placeholder.slug')); ?>

                </div>

                <div class='col-md-4 col-sm-6'>
                       <?php echo Form::text('description')
                       -> label(trans('roles::permission.label.description'))
                       -> placeholder(trans('roles::permission.placeholder.description')); ?>

                </div>
            </div><?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/vendor/roles/admin/permission/partial/entry.blade.php ENDPATH**/ ?>