              <?php echo Form::vertical_open()
              ->id('settings-setting-create')
              ->method('POST')
              ->files('true')
              ->action(URL::to('admin/settings/setting')); ?>

              <div class='row'>
                <div class='col-md-12 col-sm-12'>
                      <fieldset>
                        <legend><?php echo e(trans('settings::setting.label.theme.admin.name')); ?></legend>
                        <div class="row">
                          
                         <div class="col-md-4"> 
                           <?php echo Form::select('settings[admin.color]')
                           -> label(trans('settings::setting.label.theme.admin.color'))
                           -> options(__('settings::setting.options.theme'), setting('admin.color')); ?>

                          </div>
                         <div class="col-md-4"> 
                           <?php echo Form::file('upload[theme_admin_logo_logo][file]')
                           -> label(trans('settings::setting.label.theme.admin.logo.logo'))
                           -> placeholder(trans('settings::setting.placeholder.theme.admin.logo.logo')); ?>

                           <?php echo Form::hidden('upload[theme_admin_logo_logo][path]')
                           -> value(public_path('themes/admin/assets/img/logo/logo-olddd.svg')); ?>

                          </div>
                         <div class="col-md-4"> 
                           <?php echo Form::file('upload[theme_admin_logo_white][file]')
                           -> label(trans('settings::setting.label.theme.admin.logo.white'))
                           -> placeholder(trans('settings::setting.placeholder.theme.admin.logo.white')); ?>

                           <?php echo Form::hidden('upload[theme_admin_logo_white][path]')
                           -> value(public_path('themes/admin/assets/img/logo/logo-white.svg')); ?>

                         </div>
                        </div>
                      </fieldset>

                      <fieldset>
                        <legend><?php echo e(trans('settings::setting.label.theme.user.name')); ?></legend>
                        <div class="row">
                          
                         <div class="col-md-4"> 
                           <?php echo Form::select('settings[user.color]')
                           -> label(trans('settings::setting.label.theme.user.color'))
                           -> options(__('settings::setting.options.theme'), setting('user.color')); ?>

                          </div>
                         <div class="col-md-4"> 
                           <?php echo Form::file('upload[theme_user_logo_logo][file]')
                           -> label(trans('settings::setting.label.theme.user.logo.logo'))
                           -> placeholder(trans('settings::setting.placeholder.theme.user.logo.logo')); ?>

                           <?php echo Form::hidden('upload[theme_user_logo_logo][path]')
                           -> value(public_path('themes/user/assets/img/logo/logo-olddd.svg')); ?>

                          </div>
                         <div class="col-md-4"> 
                           <?php echo Form::file('upload[theme_user_logo_white][file]')
                           -> label(trans('settings::setting.label.theme.user.logo.white'))
                           -> placeholder(trans('settings::setting.placeholder.theme.user.logo.white')); ?>

                           <?php echo Form::hidden('upload[theme_user_logo_white][path]')
                           -> value(public_path('themes/user/assets/img/logo/logo-white.svg')); ?>

                         </div>
                        </div>
                      </fieldset>

                      <fieldset>
                        <legend><?php echo e(trans('settings::setting.label.theme.public.name')); ?></legend>
                        <div class="row">
                          
                         <div class="col-md-4"> 
                           <?php echo Form::select('settings[public.color]')
                           -> label(trans('settings::setting.label.theme.public.color'))
                           -> options(__('settings::setting.options.theme'), setting('public.color')); ?>

                          </div>
                         <div class="col-md-4"> 
                           <?php echo Form::file('upload[theme_public_logo_logo][file]')
                           -> label(trans('settings::setting.label.theme.public.logo.logo'))
                           -> placeholder(trans('settings::setting.placeholder.theme.public.logo.logo')); ?>

                           <?php echo Form::hidden('upload[theme_public_logo_logo][path]')
                           -> value(public_path('themes/public/assets/img/logo/logo-olddd.svg')); ?>

                          </div>
                         <div class="col-md-4"> 
                           <?php echo Form::file('upload[theme_public_logo_white][file]')
                           -> label(trans('settings::setting.label.theme.public.logo.white'))
                           -> placeholder(trans('settings::setting.placeholder.theme.public.logo.white')); ?>


                           <?php echo Form::hidden('upload[theme_public_logo_white][path]')
                           -> value(public_path('themes/public/assets/img/logo/logo-white.svg')); ?>

                         </div>
                        </div>
                      </fieldset>


                </div>
            </div>
            <?php echo Form::close(); ?>

            <?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/vendor/settings/admin/setting/partial/theme.blade.php ENDPATH**/ ?>