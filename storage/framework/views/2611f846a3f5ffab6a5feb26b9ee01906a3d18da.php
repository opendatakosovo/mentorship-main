        <div class="card">
          <div class="card-header">
            Update Profile
          </div>
            <div class="card-block">
            <?php echo $__env->make('notifications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo Form::vertical_open()
            ->id('form-update-profile')
            ->method('POST')
            ->class('update-profile'); ?>



                        <div class="row">
                            <div class="col-sm-7">
                                <div class="form-group label-floating">
                                    <label class="control-label" for="name">
                                        Name
                                    </label>
                                    <?php echo Form::text('name')
                                        -> label(trans('user::user.label.name'))
                                        -> raw(); ?>

                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label" for="datepicker">
                                        Date of Birth
                                    </label>
                                    <?php echo Form::text('dob')
                                        -> label(trans('user::user.label.dob'))
                                        -> id('datepicker')
                                        -> raw(); ?>

                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label" for="designation">
                                        Designation
                                    </label>
                                    <?php echo Form::text('designation')
                                        -> label(trans('user::user.label.designation'))
                                        -> raw(); ?>

                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label" for="sex">
                                        Gender
                                    </label>
                                    <?php echo Form::radio('sex')
                                        -> radios(trans('user::user.options.sex'))
                                        -> inline()
                                        -> raw(); ?>

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <?php echo $user->files('photo')
                                ->url($user
                                ->getUploadUrl('photo'))
                                ->cropper($user->picture); ?>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group label-floating">
                                    <label class="control-label" for="phone">
                                        Phone
                                    </label>
                                    <?php echo Form::number('phone')
                                        -> label(trans('user::user.label.phone'))
                                        -> raw(); ?>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group label-floating">
                                    <label class="control-label" for="mobile">
                                        Mobile
                                    </label>
                                    <?php echo Form::number('mobile')
                                        -> label(trans('user::user.label.mobile'))
                                        -> raw(); ?>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group label-floating">
                                    <label class="control-label" for="address">
                                        Address
                                    </label>
                                    <?php echo Form::text('address')
                                        -> label(trans('user::user.label.address'))
                                        -> raw(); ?>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group label-floating">
                                    <label class="control-label" for="street">
                                        Street
                                    </label>
                                    <?php echo Form::text('street')
                                        -> label(trans('user::user.label.street'))
                                        -> raw(); ?>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group label-floating">
                                    <label class="control-label" for="city">
                                        City
                                    </label>
                                    <?php echo Form::text('city')
                                        -> label(trans('user::user.label.city'))
                                        -> raw(); ?>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group label-floating">
                                    <label class="control-label" for="district">
                                        District
                                    </label>
                                    <?php echo Form::text('district')
                                        -> label(trans('user::user.label.district'))
                                        -> raw(); ?>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group label-floating">
                                    <label class="control-label" for="state">
                                        State
                                    </label>
                                    <?php echo Form::text('state')
                                        -> label(trans('user::user.label.state'))
                                        -> raw(); ?>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group label-floating">
                                    <label class="control-label" for="country">
                                        Country
                                    </label>
                                    <?php echo Form::text('country')
                                        -> label(trans('user::user.label.country'))
                                        -> raw(); ?>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group label-floating">
                                    <label class="control-label" for="web">
                                        Web
                                    </label>
                                    <?php echo Form::text('web')
                                        -> label(trans('user::user.label.web'))
                                        -> raw(); ?>

                                </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-sm-12">
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-success">Update Info</button>
                                    <button type="submit" class="btn btn-danger">Cancel</button>
                                </div>
                        </div>
                    </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
<?php /**PATH C:\xampp\htdocs\lavalite\website\public\themes/client/views/user/profile.blade.php ENDPATH**/ ?>