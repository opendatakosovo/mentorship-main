                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-aqua-active">
                            <h3 class="widget-user-username">Masters</h3>
                            <h5 class="widget-user-desc">Main master records</h5>
                        </div>

                        <div class="box-footer">
                           <ul class="nav nav-stacked">
                            <?php $__currentLoopData = config('master.masters'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(guard_url('masters/master/'.$key)); ?>"><?php echo e(__('master::master.masters.'.$key)); ?> <span class="pull-right badge bg-blue">31</span></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div><?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/vendor/master/admin/master/partial/menu/master.blade.php ENDPATH**/ ?>